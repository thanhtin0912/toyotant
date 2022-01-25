<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('language');
		$this->lang->load('general');
		

		$this->load->model('home/Home_model','home');
		$this->load->model('categories/Categories_model','categories');
		$this->load->model('products_catalog/products_catalog_model','catalog');
	}
	
	/*------------------------------------ FRONTEND ------------------------------------*/
	public function index(){
		$data['body'] = $this->categories->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		// //
		$data['banner'] = $this->home->getListBanners();
		$data['news_cates'] = $this->categories->getDataCommonCode('NEWS');
		$data['news'] = $this->home->getListNews(12);
		
		$this->template->write('title',$data["info"][0]->seo_title);
		$this->template->write('meta_keywords',$data["info"][0]->seo_keywords);
		$this->template->write('meta_description',$data["info"][0]->seo_description);
		$this->template->write('meta_url', PATH_URL);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_BANNER . $data["banner"][0]->image);
		$this->template->write_view('content','index', $data);
		$this->template->render();
	}

	public function cates($link){
		//teamplate
		$data['cate'] = $this->home->getListCategories();
		$data['info'] = $this->home->getInfoSite();
        // 
        $data['detailcate'] = $this->home->getDetailCategories($link);
        $data['listproduct'] = $this->home->getListProductofCategories($link);
        $detailcate= $data['detailcate'];

		$this->template->write('title','Toyota '.$detailcate[0]->name.'');
		$this->template->write_view('content','categories',$data);
		$this->template->render();
	}

	public function items($link){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
        $data['detail'] = $this->home->getDetailProduct($link);
		$data['infos'] = $this->home->getDetailInfoProduct($data['detail'][0]->id);
		$data['listInfos'] = $this->home->getDataListInfosProduct($data['detail'][0]->id);
		$data['colors'] = $this->home->getDataColorProduct($data['detail'][0]->id);
		$data['tskt'] = $this->home->getDataCommonCode('TSKTCAR');
		$data['specProducts'] = $this->home->getDataSpecProduct($data['detail'][0]->id);
		$data['products'] = $this->home->getListProducts();
		$data['listLikeCata'] = $this->home->getListProductLike($link, $data['detail'][0]->type);
        //
		$this->template->write('title', $data["detail"][0]->seo_title);
		$this->template->write('meta_keywords', $data["detail"][0]->seo_keywords);
		$this->template->write('meta_description', $data["detail"][0]->seo_description);
		$this->template->write('meta_url', PATH_URL. "items/".$data["detail"][0]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_CAR . $data["detail"][0]->banner);
		$this->template->write_view('content','car-detail',$data);
		$this->template->render();
	}

	public function news(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['news_cates'] = $this->categories->getDataCommonCode('NEWS');
		$data['news'] = $this->home->getListNews(50);
		$data['page'] = $this->home->getInfoSeoPage('tin-tuc');
		//
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','news',$data);
		$this->template->render();
	}
	public function news_detail($link){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();

        // 
        $data['detail'] = $this->home->getDetailNews($link);
		$this->home->updateCountNews($data['detail'][0]->countView, $data['detail'][0]->id);
		
		$data['threeNewsLikeCata'] = $this->home->getListNewsLike($data['detail'][0]->id, $data['detail'][0]->type);
		$data['tenNewsLate'] = $this->home->getListNewsLate($data['detail'][0]->id);
        //
		$this->template->write('title',$data['detail'][0]->title);
		$this->template->write('meta_keywords', $data['detail'][0]->seo_keywords);
		$this->template->write('meta_description', $data['detail'][0]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data['detail'][0]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_NEWS . $data['detail'][0]->image);
		$this->template->write_view('content','news-detail',$data);
		$this->template->render();
	}
	
	public function old_product(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
        $data['products'] = $this->home->getListOldProducts();
		$data['page'] = $this->home->getInfoSeoPage('xe-qua-su-dung');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','old-car',$data);
		$this->template->render();
	}
	

	public function old_product_detail($link){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
        $data['detail'] = $this->home->getDetailOldProduct($link);
		$data['tenNewsLate'] = $this->home->getListNewsLate();
		$data['oldProductOther'] = $this->home->getListOldProductOther($link);
        //
		$this->template->write('title',$data['detail'][0]->name);
		$this->template->write('meta_keywords', $data['detail'][0]->slug);
		$this->template->write('meta_description', $data['detail'][0]->description);
		$this->template->write('meta_url', PATH_URL."olds/".$data['detail'][0]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_CAR_OLD . $data['detail'][0]->avatar);
		$this->template->write_view('content','old-car-detail',$data);
		$this->template->render();
	}

	public function about(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
		$data['page'] = $this->home->getInfoSeoPage('xe-qua-su-dung');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','about',$data);
		$this->template->render();
	}

	public function contact(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
		$data['page'] = $this->home->getInfoSeoPage('lien-he');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','contact',$data);
		$this->template->render();
	}

	public function service_bd(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		// 
		$data['page'] = $this->home->getInfoSeoPage('dich-vu-bao-duong');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','service-bd',$data);
		$this->template->render();
	}

	public function finance(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
		$data['page'] = $this->home->getInfoSeoPage('tin-dung');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','finance',$data);
		$this->template->render();
	}
	public function insurrance(){
		//teamplate
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
        // 
		$data['page'] = $this->home->getInfoSeoPage('bao-hiem');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','insurrance',$data);
		$this->template->render();
	}

	public function chinh_sach_bao_mat(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('chinh-sach-bao-mat-thong-tin');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','chinh-sach-bao-mat',$data);
		$this->template->render();
	}

	public function dieu_khoan_chinh_sach(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('dieu-khoan-chinh-sach');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','dieu-khoan-chinh-sach',$data);
		$this->template->render();
	}

	public function cong_nghe_hibrid(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('cong-nghe-hibrid');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','cong-nghe-hibrid',$data);
		$this->template->render();
	}

	public function cong_nghe_tss(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('cong-nghe-tss');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','cong-nghe-tss',$data);
		$this->template->render();
	}
	public function cong_nghe_tnga(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('cong-nghe-tnga');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','cong-nghe-tnga',$data);
		$this->template->render();
	}

	public function staff_detail($link){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['detail'] = $this->home->getDetailStaff($link);
		//
		$this->template->write('title',$data['detail'][0]->name);
		$this->template->write('meta_keywords',$data['detail'][0]->slug);
		$this->template->write('meta_description', $data['detail'][0]->name.' - Công ty CP Toyota Nha Trang');
		$this->template->write('meta_url', PATH_URL."staffs/".$data['detail'][0]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_STAFF . $data['detail'][0]->image);
		$this->template->write_view('content','staff-detail',$data);
		$this->template->render();
	}
	public function test_driver(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['products'] = $this->home->getListProducts();
		$data['page'] = $this->home->getInfoSeoPage('dang-ky-lai-thu');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','form-test-driver',$data);
		$this->template->render();
	}

	public function booking_service(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['page'] = $this->home->getInfoSeoPage('dat-lich-dich-vu');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','form-booking-service',$data);
		$this->template->render();
	}

	public function financial_estimates(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['products'] = $this->home->getListProducts();
		$data['page'] = $this->home->getInfoSeoPage('du-toan-tai-chinh');
        //
		$this->template->write('title', $data["page"]->seo_title);
		$this->template->write('meta_keywords', $data["page"]->seo_keywords);
		$this->template->write('meta_description', $data["page"]->seo_description);
		$this->template->write('meta_url', PATH_URL.$data["page"]->slug);
		$this->template->write('meta_image', PATH_URL . DIR_UPLOAD_SEOS . $data["page"]->image);
		$this->template->write_view('content','form-financial-estimates',$data);
		$this->template->render();
	}

	public function spec(){
		//template
		$data['body'] = $this->home->getDataCommonCode('BODYTYPE');
		$data['info'] = $this->home->getInfoSite('NHATRANG');
		$data['cates'] = $this->catalog->getData();
		$data['slugs'] = $this->home->getListProductSlugs();
		//
		$data['tskt'] = $this->home->getDataCommonCode('TSKTCAR');
		$data['products'] = $this->home->getListProducts();
        //
		$this->template->write('title', "Nhập thông số kỹ thuật");
		$this->template->write('meta_keywords', "Nhập thông số kỹ thuật");
		$this->template->write('meta_description', "Nhập thông số kỹ thuật");
		$this->template->write('meta_url', "Nhập thông số kỹ thuật");
		$this->template->write('meta_image', "");
		$this->template->write_view('content','form-input-spec',$data);
		$this->template->render();
	}

	public function registerTestDriver(){
		if ($this->home->saveRegisterTestDriver()) {
			print 'success.'.$this->security->get_csrf_hash();
			exit;
		}
	}
	public function bookingService(){
		if ($this->home->saveBookingService()) {
			print 'success.'.$this->security->get_csrf_hash();
			exit;
		}
	}
	

	public function formInfoContact(){
		if ($this->home->saveInfoContact()) {
			print 'success.'.$this->security->get_csrf_hash();
			exit;
		}
	}

	
	public function insertTSKT(){
		if ($this->home->saveListTSKT()) {
			print 'success.'.$this->security->get_csrf_hash();
			exit;
		} else {
			print 'error.'.$this->security->get_csrf_hash();
			exit;
		}
	}
	
	public function content_snippets(){
		$this->load->view("snippets");
	}

	public function content_builder(){
		$this->load->model('Static_pages/Static_pages_model');
		$data['result'] = $this->Static_pages_model->getData('content-builder');
		$this->template->write_view('content','content_builder', $data);
		$this->template->render();
	}
	/*------------------------------------ End FRONTEND --------------------------------*/
}