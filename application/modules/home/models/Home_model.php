<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	private $module = 'home';
	private $table_banner 	= 'banners';
	private $table_cata 	= 'tbl_categories';
	private $table_comm 	= 'tbl_commons';
	private $table_pro 		= 'sle_products';
	private $table_cata_pro = 'sle_catalog';
	private $table_info_pro = 'sle_info';
	private $table_color_pro = 'sle_color';
	private $table_spec_pro 	= 'sle_spec';
	private $table_news 	= 'news';
	private $table_site 	= 'infos';
	private $table_old_product = 'oldproduct';
	private $table_staffs 	= 'staffs';
	private $table_contact 	= 'mil_contact';
	private $table_recipients = 'mil_recipients';
	private $table_static_pages = 'static_pages';

	function getInfoSite($code){
		$this->db->select('*');
		$this->db->select('code', $code);
		$query = $this->db->get(PREFIX.$this->table_site);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListBanners(){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table_banner);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListCategories(){
		$this->db->select('c.*, COUNT(p.type) total');
		$this->db->group_by('c.id');
		$this->db->where('c.status',1);
		$this->db->from(PREFIX.$this->table_cata." c");
		$this->db->join(PREFIX.$this->table_pro." p", 'c.id = p.type', "left");

		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListProducts(){
		$this->db->select('p.*,b.name as bodyname, c.name as nametype');
		$this->db->where('p.status',1);
		$this->db->where('p.delete',0);
		$this->db->order_by('p.price','ASC');
		$this->db->from(PREFIX.$this->table_pro." p");
		$this->db->join(PREFIX.$this->table_cata_pro." c", 'p.type = c.id', "left");
		$this->db->join(PREFIX.$this->table_cata." b", 'p.bodytype = b.id', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListProductSlugs(){
		$this->db->select('id, slug, type');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->order_by('price','ASC');
		$this->db->from(PREFIX.$this->table_pro);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListNews($limit){
		$this->db->select('n.*,c.name as newstype, c.description as color');
		$this->db->where('n.status',1);
		$this->db->order_by('n.created','DESC');
		$this->db->limit($limit);
		$this->db->from(PREFIX.$this->table_cata." c");
		$this->db->join(PREFIX.$this->table_news." n", 'c.id = n.type', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDetailCategories($link){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('slug',$link);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table_cata);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getListProductofCategories($link){
		$this->db->select('p.*, c.name as namecate, h.name as bodyname');
		$this->db->where('p.status',1);
		$this->db->where('c.slug',$link);
		$this->db->from(PREFIX.$this->table_cata." c");
		$this->db->join(PREFIX.$this->table_pro." p", 'c.id = p.type', "left");
		$this->db->join(PREFIX.$this->table_comm." h", 'p.bodytype = h.id', "left");

		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getDetailProduct($link){
		$this->db->select('p.*,b.name as bodyname, c.name as nametype');
		$this->db->where('p.slug',$link);
		$this->db->where('p.status',1);
		$this->db->where('p.delete',0);
		$this->db->order_by('p.name','ASC');
		$this->db->from(PREFIX.$this->table_pro." p");
		$this->db->join(PREFIX.$this->table_cata_pro." c", 'p.type = c.id', "left");
		$this->db->join(PREFIX.$this->table_cata." b", 'p.bodytype = b.id', "left");

		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListProductLike($link,$type){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('type',$type);
		$this->db->where('slug !=',$link);
		$this->db->order_by('price','ASC');
		$query = $this->db->get(PREFIX.$this->table_pro);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}	
	}

	function getDataCommonCode($type){
		$this->db->select('n.*');
		$this->db->where('c.code',$type);
		$this->db->where('n.status',1);
		$this->db->where('n.delete',0);
		$this->db->order_by('n.sort','ASC');
		$this->db->from(PREFIX.$this->table_cata." n");
		$this->db->join(PREFIX.$this->table_comm." c", 'c.id = n.commonId', "left");
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataListInfosProduct($id){
		$this->db->select('n.*, COUNT(i.type) total');
		$this->db->group_by('n.id');
		$this->db->where('c.code','INFOCAR');
		$this->db->where('i.product', $id);
		$this->db->where('n.status',1);
		$this->db->where('n.delete',0);
		$this->db->order_by('n.sort','ASC');
		$this->db->from(PREFIX.$this->table_cata." n");
		$this->db->join(PREFIX.$this->table_comm." c", 'c.id = n.commonId', "left");
		$this->db->join(PREFIX.$this->table_info_pro." i", 'i.type = n.id', "left");
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getDetailInfoProduct($id){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->where('product',$id);
		$query = $this->db->get(PREFIX.$this->table_info_pro);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}	
	}

	function getDataSpecProduct($id) {
		$this->db->select('id, name ,value, description, type');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->where('product',$id);
		$query = $this->db->get(PREFIX.$this->table_spec_pro);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}	
	}
	
	function getDataColorProduct($id){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('delete',0);
		$this->db->where('product',$id);
		$query = $this->db->get(PREFIX.$this->table_color_pro);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}


	function getDetailNews($link){
		$this->db->select('n.*,c.name as newstype, c.description as color');
		$this->db->where('n.status',1);
		$this->db->where('n.slug',$link);
		$this->db->from(PREFIX.$this->table_cata." c");
		$this->db->join(PREFIX.$this->table_news." n", 'c.id = n.type', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListNewsLike($id, $type){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('type',$type);
		$this->db->where('id !=',$id);	
		$this->db->order_by('created','DESC');
		$this->db->limit('3');
		$query = $this->db->get(PREFIX.$this->table_news);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}	
	}
	function getListNewsLate($id = null){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('id !=',$id);	
		$this->db->order_by('created','DESC');
		$this->db->limit('6');
		$query = $this->db->get(PREFIX.$this->table_news);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}	
	}
	function updateCountNews ($nowView, $id) {
		$newView = $nowView + 1;
		$data = array(
			'countView'=> $newView
		);
		$this->db->where('id',$id);
		if($this->db->update(PREFIX.$this->table_news, $data)){
			return true;
		}
	}
	function getListOldProducts() {
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('delete',0);	
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table_old_product);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
		
	}

	function getDetailOldProduct($link){
		$this->db->select('*');
		$this->db->where('slug',$link);
		$this->db->from(PREFIX.$this->table_old_product);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getListOldProductOther($link){
		$this->db->select('*');
		$this->db->where('slug !=',$link);
		$this->db->from(PREFIX.$this->table_old_product);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getListBccMailTypeTestDriver(){
		$this->db->select('mail');
		$this->db->where('typeTestDriver', 1);
		$this->db->from(PREFIX.$this->table_recipients);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getListBccMailTypeBookingService(){
		$this->db->select('mail');
		$this->db->where('typeService', 1);
		$this->db->from(PREFIX.$this->table_recipients);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getListBccMailTypeContact(){
		$this->db->select('mail');
		$this->db->where('typeContact', 1);
		$this->db->from(PREFIX.$this->table_recipients);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	

	function getInfoSeoPage($slug){
		$this->db->select('*');
		$this->db->where('slug', $slug);
		$this->db->from(PREFIX.$this->table_static_pages);
		$query = $this->db->get();
		if($query->result()){
			$res = $query->result();
			return $res[0];
		}else{
			return false;
		}
	}

	function getDetailStaff($link){
		$arr = explode("-", $link);
		$n= count($arr) - 1;
		$id = $arr[$n];

		$this->db->select('s.*, c.name as department');
		$this->db->where('s.id',$id);
		$this->db->from(PREFIX.$this->table_staffs." s");
		$this->db->join(PREFIX.$this->table_cata." c", 'c.id = s.departmentId', "left");
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	public function updateBodyContact($id, $body){
		$this->db->where('id',$id);
		$data=array(
			"content"=> $body
		);
		$this->db->update(PREFIX.$this->table_contact, $data);  
		return true;
	}

	public function saveRegisterTestDriver(){
		$listDataMail = $this->getListBccMailTypeTestDriver();
		$listMail = '';
		foreach ($listDataMail as $key => $v) {
			if (count($listDataMail) == $key+1) {
				$listMail .=$v->mail;
			} else {
				$listMail .=$v->mail.',';
			}
		}

		$data = array(
			'name'		=> $_POST["fullname"],
			'phone'		=> $_POST["phone"],
			'email'		=> $_POST["mail"],
			'bcc'		=> $listMail,
			'product'	=> $_POST["car"],
			'date'		=> $_POST["date"],
			'subject'	=> 'Đăng ký lái thử',
			'status'	=> 1,
			'created'	=> date('Y-m-d H:i:s',time()),
		);

		if($this->db->insert(PREFIX.$this->table_contact,$data)){
			$id = $this->db->insert_id();
			
			$this->load->helper('language');
			$this->lang->load('general');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smtp_user' => 'server.k2office@gmail.com',
				'smtp_pass' => 'erishczexsgvsbru'//Nhớ đánh đúng user và pass nhé
			);
			$this->load->library('Email',$config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			$this->email->from('server.k2office@gmail.com','Toyota Nha Trang');
			$this->email->to($_POST["mail"]);
			if ($listMail != '') {
				$this->email->bcc($listMail);
			} else {
				$this->email->bcc('thanhtin0912@gmail.com');
			}
			$this->email->subject('Toyota Nha Trang - Đăng ký lái thử.');
			$body=$this->load->view('mail-test-driver', $data, true);
			$this->email->message($body);
			$this->email->send();
			if($this->updateBodyContact($id, $body)){
				return true;
			}
		} else {
			return false;
		}
	}

	public function saveBookingService(){
		$listDataMail = $this->getListBccMailTypeBookingService();
		$listMail = '';
		foreach ($listDataMail as $key => $v) {
			if (count($listDataMail) == $key+1) {
				$listMail .=$v->mail;
			} else {
				$listMail .=$v->mail.',';
			}
		}

		$data = array(
			'name'		=> $_POST["fullname"],
			'phone'		=> $_POST["phone"],
			'email'		=> $_POST["mail"],
			'bcc'		=> $listMail,
			'product'	=> $_POST["car"],
			'date'		=> $_POST["date"],
			'subject'	=> 'Đặt lịch dịch vụ',
			'status'	=> 1,
			'created'	=> date('Y-m-d H:i:s',time()),
		);

		if($this->db->insert(PREFIX.$this->table_contact,$data)){
			$id = $this->db->insert_id();
			
			$this->load->helper('language');
			$this->lang->load('general');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smtp_user' => 'server.k2office@gmail.com',
				'smtp_pass' => 'erishczexsgvsbru'//Nhớ đánh đúng user và pass nhé
			);
			$this->load->library('Email',$config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			$this->email->from('server.k2office@gmail.com','Toyota Nha Trang');
			$this->email->to($_POST["mail"]);
			if ($listMail != '') {
				$this->email->bcc($listMail);
			} else {
				$this->email->bcc('thanhtin0912@gmail.com');
			}
			$this->email->subject('Toyota Nha Trang - Đặt lịch dịch vụ.');
			$body=$this->load->view('mail-booking-service', $data, true);
			$this->email->message($body);
			$this->email->send();
			if($this->updateBodyContact($id, $body)){
				return true;
			}
		} else {
			return false;
		}
	}

	public function saveInfoContact(){
		$listDataMail = $this->getListBccMailTypeContact();
		$listMail = '';
		foreach ($listDataMail as $key => $v) {
			if (count($listDataMail) == $key+1) {
				$listMail .=$v->mail;
			} else {
				$listMail .=$v->mail.',';
			}
		}
		$data = array(
			'name'		=> $_POST["fullname"],
			'phone'		=> $_POST["phone"],
			'email'		=> $_POST["mail"],
			'bcc'		=> $listMail,
			'description'	=> $_POST["description"],
			'subject'	=> 'Thông tin hỗ trợ khách hàng.',
			'status'	=> 1,
			'created'	=> date('Y-m-d H:i:s',time()),
		);


		if($this->db->insert(PREFIX.$this->table_contact,$data)){
			$id = $this->db->insert_id();
			
			$this->load->helper('language');
			$this->lang->load('general');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smtp_user' => 'server.k2office@gmail.com',
				'smtp_pass' => 'erishczexsgvsbru'//Nhớ đánh đúng user và pass nhé
			);
			$this->load->library('Email',$config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			$this->email->from('server.k2office@gmail.com','Toyota Nha Trang');
			$this->email->to($_POST["mail"]);
			if ($listMail != '') {
				$this->email->bcc($listMail);
			} else {
				$this->email->bcc('thanhtin0912@gmail.com');
			}
			$this->email->subject('Toyota Nha Trang - Thông tin hỗ trợ khách hàng');
			$body=$this->load->view('mail-contact', $data, true);
			$this->email->message($body);
			$this->email->send();
			if($this->updateBodyContact($id, $body)){
				return true;
			}
		} else {
			return false;
		}
	}

	public function saveListTSKT(){ 
		// var_dump($_POST["car"]);
		$curdata = json_decode($_POST["arr"]);
		$count = 1;
		foreach ($curdata as $key => $v) {
			foreach ($v->groupDetail as $key => $g) {
				$data = array(
					'sort'=> $count,
					'name'=> $v->groupName,
					'value'=> $g->name,
					'description'=> $g->value,
					'type'=> $_POST["tskt"],
					'product'=> $_POST["car"],
					'created'=> date('Y-m-d H:i:s',time()),
				);
				if($this->db->insert(PREFIX.$this->table_spec_pro,$data)){
					$count++;
				} else {
					return false;
				}
			}
		}
		return true;
	}

}
?>