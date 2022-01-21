<?php
class Products_model extends CI_Model {
	private $module = 'products';
	private $table = 'sle_products';
	private $table_cata = 'sle_catalog';
	private $table_comm = 'tbl_commons';

	function getsearchContent($limit,$page){
		$this->db->select('n.*, c.name as cate_name');
		$this->db->limit($limit,$page);
		$this->db->order_by('n.delete','ASC');
		$this->db->order_by('n.'.$this->input->post('func_order_by'),$this->input->post('order_by'));
		if($this->input->post('title')!=''){
			$this->db->where('(n.`name` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('cate_name')!=''){
			$this->db->where('(c.`name` LIKE "%'.$this->input->post('cate_name').'%")');
		}
		if($this->input->post('status') != 2){
			$this->db->where('n.status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('n.delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table." n");
		$this->db->join(PREFIX.$this->table_cata." c", 'n.type = c.id', "left");
		$this->db->join(PREFIX.$this->table_comm." a", 'n.bodytype = a.id', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getTotalsearchContent(){
		$this->db->select('n.*, c.name as cate_name');
		if($this->input->post('title')!=''){
			$this->db->where('(n.`name` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('cate_name')!=''){
			$this->db->where('(c.`name` LIKE "%'.$this->input->post('cate_name').'%")');
		}
		if($this->input->post('status') != 2){
			$this->db->where('n.status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('n.delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table." n");
		$this->db->join(PREFIX.$this->table_cata." c", 'n.type = c.id', "left");
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
			$checkData = $this->checkData($this->input->post('nameAdmincp'));
			if($checkData){
				print 'error-title-exists.'.$this->security->get_csrf_hash();
				exit;
			}

			$checkSlug = $this->checkSlug($this->input->post('slugAdmincp'));
			if($checkSlug){
				print 'error-slug-exists.'.$this->security->get_csrf_hash();
				exit;
			}
			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'type'=> trim($this->input->post('typeAdmincp', true)),
				'price'=> trim($this->input->post('priceAdmincp', true)),
				'avatar'=> trim($fileName['avatar']),
				'banner'=> trim($fileName['banner']),
				'images'=> serialize($imagesName),
				'video'=> trim($fileName['video']),
				'seats'=> trim($this->input->post('seatsAdmincp', true)),
				'motor'=> trim($this->input->post('motorAdmincp', true)),
				'origin'=> trim($this->input->post('originAdmincp', true)),
				'description'=> nl2br($this->input->post('shortinfoAdmincp', true)),
				'bodytype'=> trim($this->input->post('bodytypeAdmincp', true)),
				'phitruocba'=> number_format($this->input->post('phitruocbaAdmincp', true)),
				'phidangky'=> trim($this->input->post('phidangkyAdmincp', true)),
				'phidangkiem'=> trim($this->input->post('phidangkiemAdmincp', true)),
				'phithanvo'=> number_format($this->input->post('phithanvoAdmincp', true)),
				'phibaohiem'=> trim($this->input->post('phibaohiemAdmincp', true)),
				'highlights'=> trim($this->input->post('highlightsAdmincp', true)),
				'uudai'=> trim($this->input->post('uudaiAdmincp', true)),
				'status'=> $this->input->post('statusAdmincp'),
				'seo_title'=> trim($this->input->post('seo_titleAdmincp', true)),
				'seo_keywords'=> trim($this->input->post('seo_keywordsAdmincp', true)),
				'seo_description'=> trim($this->input->post('seo_descriptionAdmincp', true)),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			if($this->db->insert(PREFIX.$this->table,$data)){
				modules::run('admincp/saveLog',$this->module,$this->db->insert_id(),'Add new','Add new');
				// return $this->db->insert_id(); // cai nay sẽ tra ra id sau khi insert
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
					@unlink(BASEFOLDER.DIR_UPLOAD_CAR.$delimages[$key]);
				}
			}

			if($fileName['avatar']==''){
				$fileName['avatar'] = $result[0]->avatar;
			}else{
				@unlink(BASEFOLDER.DIR_UPLOAD_CAR.$result[0]->avatar);
			}

			if($fileName['banner']==''){
				$fileName['banner'] = $result[0]->banner;
			}else{
				@unlink(BASEFOLDER.DIR_UPLOAD_CAR.$result[0]->banner);
			}


			if($fileName['video']==''){
				$fileName['video'] = $result[0]->video;
			}else{
				@unlink(BASEFOLDER.DIR_UPLOAD_CAR.$result[0]->video);
			}

			$data = array(
				'name'=> trim($this->input->post('nameAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'type'=> trim($this->input->post('typeAdmincp', true)),
				'price'=> trim($this->input->post('priceAdmincp', true)),
				'avatar'=> trim($fileName['avatar']),
				'banner'=> trim($fileName['banner']),
				'images'=> serialize($imagesName),
				'video'=> trim($fileName['video']),
				'seats'=> trim($this->input->post('seatsAdmincp', true)),
				'motor'=> trim($this->input->post('motorAdmincp', true)),
				'origin'=> trim($this->input->post('originAdmincp', true)),
				'description'=> nl2br($this->input->post('shortinfoAdmincp', true)),
				'bodytype'=> trim($this->input->post('bodytypeAdmincp', true)),
				'phitruocba'=> number_format($this->input->post('phitruocbaAdmincp', true)),
				'phidangky'=> trim($this->input->post('phidangkyAdmincp', true)),
				'phidangkiem'=> trim($this->input->post('phidangkiemAdmincp', true)),
				'phithanvo'=> number_format($this->input->post('phithanvoAdmincp', true)),
				'phibaohiem'=> trim($this->input->post('phibaohiemAdmincp', true)),
				'highlights'=> trim($this->input->post('highlightsAdmincp', true)),
				'uudai'=> trim($this->input->post('uudaiAdmincp', true)),
				'status'=> $this->input->post('statusAdmincp'),
				'seo_title'=> trim($this->input->post('seo_titleAdmincp', true)),
				'seo_keywords'=> trim($this->input->post('seo_keywordsAdmincp', true)),
				'seo_description'=> trim($this->input->post('seo_descriptionAdmincp', true)),
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
	function getAllCatagoriesLV2($parent){

		$res = "";
        try {
            $err = "";
            $this->db->select('*');
			$this->db->where('parent',$parent);
			$query = $this->db->get(PREFIX.$this->table_cata2);
            $return=$query->result(); 
            $res = array("Return"=>"1","Msg"=>$err,"Value"=>$return);
        } catch (Exception $e) {
            //$error = 1;
            $res = array("Return"=>"0","Msg"=>$err,"Value"=>"") ;
            //$res = null;
        }
        return $res;
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
		$query = $this->db->get(PREFIX.$this->table_catagory);

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

	function getCommonTinhTrang(){
		$this->db->select('*');
		$this->db->where('commontype','TINHTRANG');
		$query = $this->db->get(PREFIX.$this->table_comm);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getCommonBodyType(){
		$this->db->select('*');
		$this->db->where('commontype','BODYTYPE');
		$query = $this->db->get(PREFIX.$this->table_comm);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	/*--------------------END FRONTEND--------------------*/
}