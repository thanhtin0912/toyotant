<?php
class Old_products_model extends CI_Model {
	private $module = 'old_products';
	private $table = 'oldproduct';

	function getsearchContent($limit,$page){
		$this->db->select('*');
		$this->db->limit($limit,$page);
		$this->db->order_by('delete','ASC');
		$this->db->order_by($this->input->post('func_order_by'),$this->input->post('order_by'));
		if($this->input->post('title')!=''){
			$this->db->where('(`name` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('status') != 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table);
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
			$this->db->where('(`name` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('status') != 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table);
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

	function getDetailManagementBySlug($slug){
		$this->db->select('*');
		$this->db->where('slug',$slug);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	
	function saveManagement($imagesName='',$fileName=''){
		if($this->input->post('hiddenIdAdmincp')==0){
			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'avatar'=> trim($fileName['avatar']),
				'images'=> serialize($imagesName),

				'description'=> nl2br($this->input->post('descriptionAdmincp', true)),
				'price'=> trim($this->input->post('priceAdmincp', true)),
				'numberOfKilometers'=> trim($this->input->post('NumberOfKilometersAdmincp', true)),
				'yearOf'=> trim($this->input->post('YearOfAdmincp', true)),

				'current'=> trim($this->input->post('CurrentAdmincp', true)),
				'maintence'=> trim($this->input->post('MaintenceAdmincp', true)),
				'companyOf'=> trim($this->input->post('CompanyOfAdmincp', true)),
				'color'=> trim($this->input->post('ColorAdmincp', true)),
				'carType'=> trim($this->input->post('CarTypeAdmincp', true)),
				'gear'=> trim($this->input->post('GearAdmincp', true)),
				'fuel'=> trim($this->input->post('FuelAdmincp', true)),
				'engine'=> trim($this->input->post('EngineAdmincp', true)),

				'tinhTrang'=> trim($this->input->post('TinhTrangAdmincp', true)),
				'saleTyle'=> trim($this->input->post('SaleTyleAdmincp', true)),
				'contact'=> trim($this->input->post('ContactAdmincp', true)),
				'content'=> trim($this->input->post('ContentAdmincp', true)),
				'status'=> $this->input->post('statusAdmincp'),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			if($this->db->insert(PREFIX.$this->table,$data)){
				modules::run('admincp/saveLog',$this->module,$this->db->insert_id(),'Add new','Add new');
				return true;
			}
		}else{
			$result = $this->getDetailManagement($this->input->post('hiddenIdAdmincp'));
			//Xử lý xóa hình khi update thay đổi hình
			if(empty($imagesName)){
				$imagesName = unserialize($result[0]->images);
			}else{
				$delimages = unserialize($result[0]->images);
				foreach ($delimages as $key => $value) {
					@unlink(BASEFOLDER.DIR_UPLOAD_CAR_OLD.$delimages[$key]);
				}
			}

			if($fileName['avatar']==''){
				$fileName['avatar'] = $result[0]->avatar;
			}else{
				@unlink(BASEFOLDER.DIR_UPLOAD_CAR_OLD.$result[0]->avatar);
			}

			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'avatar'=> trim($fileName['avatar']),
				'images'=> serialize($imagesName),

				'description'=> nl2br($this->input->post('descriptionAdmincp', true)),
				'price'=> trim($this->input->post('priceAdmincp', true)),
				'NumberOfKilometers'=> trim($this->input->post('NumberOfKilometersAdmincp', true)),
				'YearOf'=> trim($this->input->post('YearOfAdmincp', true)),

				'Current'=> trim($this->input->post('CurrentAdmincp', true)),
				'Maintence'=> trim($this->input->post('MaintenceAdmincp', true)),
				'CompanyOf'=> trim($this->input->post('CompanyOfAdmincp', true)),
				'Color'=> trim($this->input->post('ColorAdmincp', true)),
				'CarType'=> trim($this->input->post('CarTypeAdmincp', true)),
				'Gear'=> trim($this->input->post('GearAdmincp', true)),
				'Fuel'=> trim($this->input->post('FuelAdmincp', true)),
				'Engine'=> trim($this->input->post('EngineAdmincp', true)),

				'TinhTrang'=> trim($this->input->post('TinhTrangAdmincp', true)),
				'SaleTyle'=> trim($this->input->post('SaleTyleAdmincp', true)),
				'Contact'=> trim($this->input->post('ContactAdmincp', true)),
				'content'=> trim($this->input->post('contentAdmincp', true)),
				'status'=> $this->input->post('statusAdmincp'),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			modules::run('admincp/saveLog',$this->module,$this->input->post('hiddenIdAdmincp'),'','Update',$result,$data);
			$this->db->where('id',$this->input->post('hiddenIdAdmincp'));
			if($this->db->update(PREFIX.$this->table,$data)){
				return true;
			}
		}
		return false;
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
	
	function checkData($title,$id=0){
		$this->db->select('id');
		$this->db->where('name',$title);
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
	/*----------------------FRONTEND----------------------*/
	function getData(){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataHighlight($amount){
		$this->db->select('*');
		$this->db->limit($amount);
		$this->db->where('status',1);
		$this->db->where('highlight',1);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataHighlightDetail($id, $amount){
		$this->db->select('*');
		$this->db->limit($amount);
		$this->db->where('status',1);
		$this->db->where('highlight',1);
		$this->db->where_not_in('id',array($id));
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getCateDel(){
		$this->db->select('id');
		$this->db->where('delete', 1);
		$query = $this->db->get(PREFIX.$this->table_category);

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

	/*--------------------END FRONTEND--------------------*/
}