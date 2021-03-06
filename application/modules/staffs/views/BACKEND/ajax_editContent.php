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

	$('#contentAdmincp').liveEdit({
		height: 350,
		css: ['<?=PATH_URL?>assets/editor/bootstrap/css/bootstrap.min.css', '<?=PATH_URL?>assets/editor/bootstrap/bootstrap_extend.css','<?=PATH_URL?>assets/css/styles.css'] /* Apply bootstrap css into the editing area */,
		fileBrowser: '<?=PATH_URL?>assets/editor/assetmanager/asset.php',
		returnKeyMode: 3,
		groups: [
				["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
				["group2", "", ["Bullets", "Numbering", "Indent", "Outdent", "JustifyLeft", "JustifyCenter", "JustifyRight"]],
				["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
				["group4", "", ["LinkDialog", "ImageDialog", "TableDialog"]],
				["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]],
				["group6", "", ["Left", "Center", "Right"]]
				] /* Toolbar configuration */
	});
	$('#contentAdmincp').data('liveEdit').startedit();
});

function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };
	$('#contentAdmincp').val($('#contentAdmincp').data('liveEdit').getXHTMLBody());
	$('#frmManagement').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var form = jqForm[0];

	<?php if($id==0){ ?>
        if($('#imageAdmincp').val() == ''){
            $('#txt_error').html('Please choose image.');
            show_perm_denied();
            return false;
        }
    <?php } ?>
	
	if(form.nameAdmincp.value == '' || form.cateAdmincp.value == '' || form.descriptionAdmincp.value == '' 
	|| $('#contentAdmincp').val() == '<br>' || $('#contentAdmincp').val() == '' 
	|| ($('#contentAdmincp').val().charCodeAt(0)==10 && isNaN($('#contentAdmincp').val().charCodeAt(1)))){
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
	
	if(responseText[0]=='error-title-exists'){
		$('#txt_error').html('Title already exists.');
		show_perm_denied();
		return false;
	}

	if(responseText[0]=='error-slug-exists'){
		$('#txt_error').html('Slug already exists.');
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
							<label class="control-label col-md-2">Status:</label>
							<div class="col-md-8">
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Ph??ng ban: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<select class="bs-select form-control" data-live-search="true" data-size="8" name="cateAdmincp" id="cateAdmincp">
									<option value="">None</option>
									<?php foreach ($cates as $key => $cate): ?>
										<?php  
											$select = '';
											if($result->departmentId == $cate->id){
												$select = 'selected="selected"';
											}
										?>
										<option value="<?= $cate->id; ?>" <?= $select; ?> ><?= $cate->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<label class="control-label col-md-2">Ch???c v???: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->position)) { print $result->position; }else{ print '';} ?>" type="text" name="positionAdmincp" id="positionAdmincp" class="form-control"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">T??n nh??n vi??n: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Slug (kh??ng quan t??m): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->slug)) { print $result->slug; }else{ print '';} ?>" type="text" name="slugAdmincp" id="slugAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">S??? ??i???n tho???i: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->phone)) { print $result->phone; }else{ print '';} ?>" type="text" name="phoneAdmincp" id="phoneAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Email: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->email)) { print $result->email; }else{ print '';} ?>" type="text" name="emailAdmincp" id="emailAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">S??? CMND: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->pid)) { print $result->pid; }else{ print '';} ?>" type="text" name="pidAdmincp" id="pidAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Facebook (ID): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->facebook)) { print $result->facebook; }else{ print '';} ?>" type="text" name="facebookAdmincp" id="facebookAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">B???t ?????u l??m vi???c: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3"><input value="<?php if(isset($result->start)) { print $result->start; }else{ print '';} ?>" type="text" name="startAdmincp" id="startAdmincp" class="form-control"/></div>
						</div>
						<?php if(isset($result->slug)) { ?>
						<?php $link = 'http://toyotanhatrang.com.vn/staffs/'.$result->slug.'-'.$result->id; ?>
						<div class="form-group">
							<label class="control-label col-md-2">Link tao barcode: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><a target="_blank" href="<?=$link ?>" style="font-size: 18px; font-weight: bold;"><?=$link ?></a></div></div>
						</div>
						<?php } ?>
						<div class="form-group">
							<label class="control-label col-md-2">???nh ch??n dung (400X720): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->image)){ if($result->image!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
										<img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_STAFF.$result->image,150, 150)?>" />
									</div>
									<?php }} ?>
									<div class="input-group input-large">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Select file </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" id="imageAdmincp" name="fileAdmincp[image]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">S?? l?????t: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><textarea name="descriptionAdmincp" id="descriptionAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description)) { print $result->description; }else{ print '';} ?></textarea></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">M?? t??? chi ti???t: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><textarea name="contentAdmincp" id="contentAdmincp" cols="" rows="8"><?php if(isset($result->content)) { print $result->content; }else{ print '';} ?></textarea></div>
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