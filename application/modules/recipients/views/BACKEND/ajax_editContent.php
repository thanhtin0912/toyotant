<script type="text/javascript">
function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };
	$('#frmManagement').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var id = '<?= $id; ?>';
	var form = jqForm[0];

    if(form.nameAdmincp.value == ''|| form.mailAdmincp.value == ''){
        $('#txt_error').html('Please enter information.');
        show_perm_denied();
        return false;
    }
}

function showResponse(responseText, statusText, xhr, $form) {
	var module_url = '<?=PATH_URL_ADMIN.$module?>';
	responseText = responseText.split(".");
	token_value  = responseText[1];
	$('#csrf_token').val(token_value);
	if(responseText[0]=='success'){
		show_perm_success();
	}

	if(responseText[0]=='redirect'){
		window.location = module_url;
	}

	if(responseText[0]=='error-image-upload'){
		$('#txt_error').html('Only upload image.');
		show_perm_denied();
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
							<label class="control-label col-md-3">Status:</label>
							<div class="col-md-7">
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">HighLight:</label>
							<div class="col-md-8">
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Tên: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" class="form-control"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Mail: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->mail)) { print $result->mail; }else{ print '';} ?>" type="text" name="mailAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Dịch vụ:</label>
							<div class="col-md-7">
								<label class="radio-inline"><input type="radio" name="typeServiceAdmincp" value="0" <?= isset($result->typeService) ? $result->typeService == 0 ? 'checked' : '' : '' ?> > Không</label>
								<label class="radio-inline"><input type="radio" name="typeServiceAdmincp" value="1" <?= isset($result->typeService) ? $result->typeService == 1 ? 'checked' : '' : 'checked' ?> > Có</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Lái thử :</label>
							<div class="col-md-7">
								<label class="radio-inline"><input type="radio" name="typeTestDriverAdmincp" value="0" <?= isset($result->typeTestDriver) ? $result->typeTestDriver == 0 ? 'checked' : '' : '' ?> > Không</label>
								<label class="radio-inline"><input type="radio" name="typeTestDriverAdmincp" value="1" <?= isset($result->typeTestDriver) ? $result->typeTestDriver == 1 ? 'checked' : '' : 'checked' ?> > Có</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Event lái thử:</label>
							<div class="col-md-7">
								<label class="radio-inline"><input type="radio" name="typeEventDriverAdmincp" value="0" <?= isset($result->typeEventDriver) ? $result->typeEventDriver == 0 ? 'checked' : '' : '' ?> > Không</label>
								<label class="radio-inline"><input type="radio" name="typeEventDriverAdmincp" value="1" <?= isset($result->typeEventDriver) ? $result->typeEventDriver == 1 ? 'checked' : '' : 'checked' ?> > Có</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Trang liên hệ:</label>
							<div class="col-md-7">
								<label class="radio-inline"><input type="radio" name="typeContactAdmincp" value="0" <?= isset($result->typeContact) ? $result->typeContact == 0 ? 'checked' : '' : '' ?> > Không</label>
								<label class="radio-inline"><input type="radio" name="typeContactAdmincp" value="1" <?= isset($result->typeContact) ? $result->typeContact == 1 ? 'checked' : '' : 'checked' ?> > Có</label>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-9">
								<button onclick="save()" type="button" class="btn green"><i class="fa fa-pencil"></i> Save</button>
								<a href="<?=PATH_URL_ADMIN.$module.'/#/back'?>"><button type="button" class="btn default">Cancel</button></a>
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