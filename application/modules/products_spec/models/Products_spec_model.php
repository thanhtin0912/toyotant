<?php
class Products_spec_model extends CI_Model {
	private $module = 'products_spec';
	private $table = 'sle_spec';
	private $table_pro = 'sle_products';
	private $table_cata = 'tbl_categories';

	function getsearchContent($limit,$page){
		$this->db->select('*');
		$this->db->limit($limit,$page);
		$this->db->order_by('delete','ASC');
		$this->db->order_by($this->input->post('func_order_by'),$this->input->post('order_by'));
		if($this->input->post('title')!=''){
			$this->db->like('name', $this->input->post('title'));
		}
		if($this->input->post('url')!=''){
			$this->db->like('name', $this->input->post('url'));
		}
		if($this->input->post('status')!= 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}

		$this->db->from(PREFIX.$this->table_pro);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getTotalsearchContent(){
		$this->db->select('*');
		if($this->input->post('title')!=''){
			$this->db->like('name', $this->input->post('title'));
		}
		if($this->input->post('url')!=''){
			$this->db->like('name', $this->input->post('url'));
		}
		if($this->input->post('status')!= 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table_pro);
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
		$query = $this->db->get(PREFIX.$this->table_pro);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function saveManagement(){
		if($this->input->post('id')==0){
			$data = array(
				'sort'=> trim($this->input->post('sort', true)),
				'name'=> trim($this->input->post('name', true)),
				'value'=> trim($this->input->post('value', true)),
				'description'=> trim($this->input->post('description', true)),
				'type'=> $this->input->post('type'),
				'product'=> $this->input->post('product'),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			if($this->db->insert(PREFIX.$this->table,$data)){
				modules::run('admincp/saveLog',$this->module,$this->db->insert_id(),'Add new','Add new');
				return true;
			}
		}else{
			$result = $this->getDetailManagement($this->input->post('id'));
			//Xử lý xóa hình khi update thay đổi hình
			$data = array(
				'sort'=> trim($this->input->post('sort', true)),
				'name'=> trim($this->input->post('name', true)),
				'value'=> trim($this->input->post('value', true)),
				'description'=> trim($this->input->post('description', true)),
				'type'=> $this->input->post('type'),
				'product'=> $this->input->post('product'),
				'updated'=> date('Y-m-d H:i:s',time()),
			);
			modules::run('admincp/saveLog',$this->module,$this->input->post('id'),'','Update',$result,$data);
			$this->db->where('id',$this->input->post('id'));
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
		$this->db->order_by('created','ASC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListDataSpec($product){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->where('product',$product);
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