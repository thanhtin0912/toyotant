<script type="text/javascript" src="<?=PATH_URL.'assets/js/admin/'?>jquery.slugit.js"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovaeditor.js'?>"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovamanager.js'?>"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#nameAdmincp").slugIt({
		events: 'keyup blur',
		output: '#slugAdmincp',
		space: '-'
	});
});
</script>
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
    <?php if($id==0){ ?>
        if($('#avatarAdmincp').val() == ''){
            $('#txt_error').html('Please choose image.');
            show_perm_denied();
            return false;
        }
    <?php } ?>

    if(form.nameAdmincp.value == '' 
		|| form.typeAdmincp.value == '' 
		|| form.productAdmincp.value == ''
	){
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
	if(responseText[0]=='error-name-exists'){
		$('#txt_error').html('Name already exists.');
		show_perm_denied();
		$('#nameAdmincp').focus();
		return false;
	}
	
	if(responseText[0]=='error-slug-exists'){
		$('#txt_error').html('Slug already exists.');
		show_perm_denied();
		$('#slugAdmincp').focus();
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
							<label class="control-label col-md-2">Status:</label>
							<div class="col-md-10">
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">T??n: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Danh m???c: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<select class="bs-select form-control" data-live-search="true" data-size="8" name="typeAdmincp" id="typeAdmincp">
									<option value="">None</option>
									<?php foreach ($cates as $key => $cate): ?>
										<?php  
											$select = '';
											if (isset($result->type)) {
												if($result->type == $cate->id){
													$select = 'selected="selected"';
												}
											}
										?>
										<option value="<?= $cate->id; ?>" <?= $select; ?> ><?= $cate->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<label class="control-label col-md-2">M???u xe: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<select class="select form-control" data-live-search="true" data-size="8" name="productAdmincp" id="productAdmincp">
									<option value="">None</option>
									<?php foreach ($products as $key => $p): ?>
										<?php  
											$select = '';
											if (isset($result->product)) {
												if($result->product == $p->id){
													$select = 'selected="selected"';
												}
											}
										?>
										<option value="<?= $p->id; ?>" <?= $select; ?> ><?= $p->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">H??nh ???nh: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->avatar)){ if($result->avatar!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 70%">
										<img src="<?=PATH_URL.DIR_UPLOAD_CAR_INFO.$result->avatar?>" />
									</div>
									<?php }} ?>
									<div class="input-group input-large">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Ch???n file </span>
										<span class="fileinput-exists">
										Thay ?????i </span>
										<input type="file" id="imageAdmincp" name="fileAdmincp[image]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										X??a </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">M?? t??? ng???n:</label>
							<div class="col-md-8">
								<input  name="descriptionAdmincp" class="form-control" value="<?php if(isset($result->description)) { print $result->description; }else{ print '';} ?>" ></input>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">M?? t??? chi ti???t:</label>
							<div class="col-md-8">
								<textarea rows="4" name="contentAdmincp" class="form-control"><?php if(isset($result->content)) { print $result->content; }else{ print '';} ?></textarea>
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