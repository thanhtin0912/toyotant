<?php
class Products_catalog_model extends CI_Model {
	private $module = 'products_catalog';
	private $table = 'sle_catalog';
	private $table_cata = 'tbl_categories';

	function getsearchContent($limit,$page){
		$this->db->select('n.*, c.name as type');
		$this->db->limit($limit,$page);
		$this->db->order_by('n.delete','ASC');
		$this->db->order_by($this->input->post('func_order_by'),$this->input->post('order_by'));
		if($this->input->post('title')!=''){
			$this->db->like('n.name', $this->input->post('title'));
		}
		if($this->input->post('url')!=''){
			$this->db->like('c.name', $this->input->post('url'));
		}
		if($this->input->post('status')!= 2){
			$this->db->where('n.status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('n.delete', $this->input->post('showData'));
		}
		
		$this->db->from(PREFIX.$this->table." n");
		$this->db->join(PREFIX.$this->table_cata." c", 'c.id = n.type', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getTotalsearchContent(){
		$this->db->select('n.*, c.name as type');
		if($this->input->post('title')!=''){
			$this->db->like('n.name', $this->input->post('title'));
		}
		if($this->input->post('url')!=''){
			$this->db->like('c.name', $this->input->post('url'));
		}
		if($this->input->post('status')!= 2){
			$this->db->where('n.status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('n.delete', $this->input->post('showData'));
		}
		
		$this->db->from(PREFIX.$this->table." n");
		$this->db->join(PREFIX.$this->table_cata." c", 'c.id = n.type', "left");
		$query = $this->db->count_all_results();

		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}
	
	function getDetailManagement($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get(PREFIX.$this->table);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function saveManagement($fileName=''){
		if($this->input->post('hiddenIdAdmincp')==0){

			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'content'=> trim($this->input->post('contentAdmincp', true)),
				'sort'=> trim($this->input->post('orderAdmincp', true)),
				'avatar'=> trim($fileName['image']),
				'description'=> trim($this->input->post('descriptionAdmincp', true)),
				'type'=> $this->input->post('typeAdmincp'),
				'highlights'=> $this->input->post('highlightsAdmincp'),
				'status'=> $this->input->post('statusAdmincp'),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			if($this->db->insert(PREFIX.$this->table,$data)){
				modules::run('admincp/saveLog',$this->module,$this->db->insert_id(),'Add new','Add new');
				return true;
			}
		}else{
			$result = $this->getDetailManagement($this->input->post('hiddenIdAdmincp'));
			//X??? l?? x??a h??nh khi update thay ?????i h??nh
			if($fileName['image']==''){
				$fileName['image'] = $result[0]->avatar;
			}else{
				@unlink($result[0]->avatar);
			}
			
			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'content'=> trim($this->input->post('contentAdmincp', true)),
				'sort'=> trim($this->input->post('orderAdmincp', true)),
				'avatar'=> trim($fileName['image']),
				'description'=> trim($this->input->post('descriptionAdmincp', true)),
				'type'=> $this->input->post('typeAdmincp'),
				'highlights'=> $this->input->post('highlightsAdmincp'),
				'status'=> $this->input->post('statusAdmincp'),
				'updated'=> date('Y-m-d H:i:s',time()),
			);
			modules::run('admincp/saveLog',$this->module,$this->input->post('hiddenIdAdmincp'),'','Update',$result,$data);
			$this->db->where('id',$this->input->post('hiddenIdAdmincp'));
			if($this->db->update(PREFIX.$this->table,$data)){
				return true;
			}
		}
		return false;
	}
	
	/*----------------------FRONTEND----------------------*/
	function getData(){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->order_by('sort','ASC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}


	function getDataToSelect(){
		$this->db->select('*');
		$this->db->where('status',1);
		$query = $this->db->get(PREFIX.$this->table);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataAll(){
		$this->db->select('1');
		$query = $this->db->count_all_results(PREFIX.$this->table);
		if($query>0){
			return $query;
		}
		else{
			return 0;
		}
	}
	function getDataPublish(){
		$this->db->select('1');
		$this->db->where('delete',0);
		$query = $this->db->count_all_results(PREFIX.$this->table);

		if($query>0){
			return $query;
		}
		else{
			return 0;
		}
	}

	function checkName($name,$id=0){
		$this->db->select('id');
		$this->db->where('name',$name);
		if($id!=0){
			$this->db->where_not_in('id',array($id));
		}
		$this->db->limit(1);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return true;
		}else{
			return false;
		}
	}
	
	function checkSlug($slug,$id=0){
		$this->db->select('id');
		$this->db->where('slug',$slug);
		
		if($id!=0){
			$this->db->where_not_in('id',array($id));
		}
		$this->db->limit(1);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return true;
		}else{
			return false;
		}
	}
	
	/*--------------------END FRONTEND--------------------*/
}