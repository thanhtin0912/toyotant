<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovaeditor.js'?>"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovamanager.js'?>"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/js/admin/'?>jquery.slugit.js"></script>
<script type="text/javascript">
$(document).ready( function() {

});

function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };

	$('#frmManagement').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var form = jqForm[0];
	if (form.nameAdmincp.value == '' || form.codeAdmincp.value == '' || form.phoneAdmincp.value == '' || form.phoneAdmincp.value == ''){
        $('#txt_error').html('Please enter information.');
        show_perm_denied();
        return false;
    }
}

function showResponse(responseText, statusText, xhr, $form) {
	responseText = responseText.split(".");
	token_value  = responseText[1];
	$('#csrf_token').val(token_value);
	if(responseText[0]=='success'){
		show_perm_success();
	}
	
	if(responseText[0]=='error-title-exists'){
		$('#txt_error').html('Title already exists.');
		show_perm_denied();
		$('#titleAdmincp').focus();
		return false;
	}
	
	if(responseText[0]=='error-slug-exists'){
		$('#txt_error').html('Slug already exists.');
		show_perm_denied();
		$('#slugAdmincp').focus();
		return false;
	}

	if(responseText[0]=='permission-denied'){
		$('#txt_error').html('Permission denied.');
		show_perm_denied();
		return false;
	}
}
</script>
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title"><?=$this->session->userdata('Name_Module')?></h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li><i class="fa fa-home"></i><a href="<?=PATH_URL_ADMIN?>">Home</a><i class="fa fa-angle-right"></i></li>
		<li><a href="<?=PATH_URL_ADMIN.$module?>"><?=$this->session->userdata('Name_Module')?></a><i class="fa fa-angle-right"></i></li>
		<li><?php ($this->uri->segment(4)=='') ? print 'Add new' : print 'Edit' ?></li>
	</ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
                    <i class="icon-paper-plane font-green-haze"></i>
                    <span class="caption-subject bold font-green-haze uppercase">Form Input</span>
                </div>
			</div>
			
			<div class="portlet-body form">
				<div class="form-body notification" style="display:none">
					<div class="alert alert-success" style="display:none">
						<strong>Success!</strong> The page has been saved.
					</div>
					
					<div class="alert alert-danger" style="display:none">
						<strong>Error!</strong> <span id="txt_error"></span>
					</div>
				</div>
				
				<!-- BEGIN FORM-->
				<form id="frmManagement" action="<?=PATH_URL_ADMIN.$module.'/save/'?>" method="post" enctype="multipart/form-data" class="form-horizontal form-row-seperated">
					<input type="hidden" value="<?=$this->security->get_csrf_hash()?>" id="csrf_token" name="csrf_token" />
					<input type="hidden" value="<?=$id?>" name="hiddenIdAdmincp" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-2">Company Name: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Mã đại lý: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->code)) { print $result->code; }else{ print '';} ?>" type="text" name="codeAdmincp" id="codeAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Hotline: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone)) { print $result->phone; }else{ print '';} ?>" type="text" name="phoneAdmincp" id="phoneAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Phone CSKH: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone_cskh)) { print $result->phone_cskh; }else{ print '';} ?>" type="text" name="phone_cskhAdmincp" id="phone_cskhAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Phone dịch vụ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone_dv)) { print $result->phone_dv; }else{ print '';} ?>" type="text" name="phone_dvAdmincp" id="phone_dvAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Phone cứu hộ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone_ch)) { print $result->phone_ch; }else{ print '';} ?>" type="text" name="phone_chAdmincp" id="phone_chAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Phone Bán hàng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone_bh)) { print $result->phone_bh; }else{ print '';} ?>" type="text" name="phone_bhAdmincp" id="phone_bhAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Email: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->mail)) { print $result->mail; }else{ print '';} ?>" type="text" name="mailAdmincp" id="mailAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Link Social: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->facebook)) { print $result->facebook; }else{ print '';} ?>" type="text" name="facebookAdmincp" id="facebookAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Address: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->address)) { print $result->address; }else{ print '';} ?>" type="text" name="addressAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Description: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><textarea name="descriptionAdmincp" id="descriptionAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description)) { print $result->description; }else{ print '';} ?></textarea></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Domain: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->domain)) { print $result->domain; }else{ print '';} ?>" type="text" name="domainAdmincp" id="domainAdmincp" class="form-control"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">SEO title: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->seo_title)) { print $result->seo_title; }else{ print '';} ?>" type="text" name="seo_titleAdmincp" id="seo_titleAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">SEO keywords: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->seo_keywords)) { print $result->seo_keywords; }else{ print '';} ?>" type="text" name="seo_keywordsAdmincp" id="seo_keywordsAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">SEO description: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->seo_description)) { print $result->seo_description; }else{ print '';} ?>" type="text" name="seo_descriptionAdmincp" id="seo_descriptionAdmincp" class="form-control"/></div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<button onclick="save()" type="button" class="btn green"><i class="fa fa-pencil"></i> Save</button>
								<a href="<?=PATH_URL_ADMIN.$module.'/#/back'?>" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->