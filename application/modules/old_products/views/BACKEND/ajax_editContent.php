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

    <?php if($id==0){ ?>
        if($('#avatarAdmincp').val() == ''){
            $('#txt_error').html('Please choose image.');
            show_perm_denied();
            return false;
        }
    <?php } ?>
	
	if(form.nameAdmincp.value == ''  || form.descriptionAdmincp.value == ''  || form.priceAdmincp.value == ''){
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
		$('#txt_error').html('Name Product already exists.');
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
							<div class="col-md-10">
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">HighLight:</label>
							<div class="col-md-10">
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>

						<div class="form-group">
							<!--  -->
							<label class="control-label col-md-2">Tên xe: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10">
								<input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Slug: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><input value="<?php if(isset($result->slug)) { print $result->slug; }else{ print '';} ?>" type="text" name="slugAdmincp" id="slugAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Description: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><textarea name="descriptionAdmincp" id="descriptionAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description)) { print $result->description; }else{ print '';} ?></textarea></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Giá bán: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->price)) { print $result->price; }else{ print '';} ?>" type="text" name="priceAdmincp" id="priceAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">KM đã sử dụng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->numberOfKilometers)) { print $result->numberOfKilometers; }else{ print '';} ?>" type="text" name="NumberOfKilometersAdmincp" id="NumberOfKilometersAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Năm SX: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->yearOf)) { print $result->yearOf; }else{ print '';} ?>" type="text" name="YearOfAdmincp" id="YearOfAdmincp" class="form-control"/></div>
							</div>
						<div class="form-group">
							<label class="control-label col-md-2">Nơi SX: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->since)) { print $result->since; }else{ print '';} ?>" type="text" name="SinceAdmincp" id="SinceAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Tình trạng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->current)) { print $result->current; }else{ print '';} ?>" type="text" name="CurrentAdmincp" id="CurrentAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Màu sắc: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->color)) { print $result->color; }else{ print '';} ?>" type="text" name="ColorAdmincp" id="ColorAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Bản hành: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->maintence)) { print $result->maintence; }else{ print '';} ?>" type="text" name="MaintenceAdmincp" id="MaintenceAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Kiểu dáng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->carType)) { print $result->carType; }else{ print '';} ?>" type="text" name="CarTypeAdmincp" id="CarTypeAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Hộp số: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->gear)) { print $result->gear; }else{ print '';} ?>" type="text" name="GearAdmincp" id="GearAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Nhiên liệu sử dụng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->fuel)) { print $result->fuel; }else{ print '';} ?>" type="text" name="FuelAdmincp" id="FuelAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Động cơ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->engine)) { print $result->engine; }else{ print '';} ?>" type="text" name="EngineAdmincp" id="EngineAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Trạng thái xe: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2">
								<select class="form-control" name="TinhTrangAdmincp" id="TinhTrangAdmincp">
									<option value="">Vui lòng chọn</option>
									<option value="0" <?php if(isset($result->tinhTrang) && $result->tinhTrang == 0) { print "selected"; } ?>>Đã bán</option>
									<option value="1" <?php if(isset($result->tinhTrang) && $result->tinhTrang == 1) { print "selected"; } ?>>Xe mới về</option>
									<option value="2" <?php if(isset($result->tinhTrang) && $result->tinhTrang == 2) { print "selected"; } ?>>Giá ưu đãi</option>
                                </select>
							</div>
						
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Hãng sản xuất: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->companyOf)) { print $result->companyOf; }else{ print '';} ?>" type="text" name="CompanyOfAdmincp" id="CompanyOfAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Trạng thái xe: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2">
								<select class="form-control" name="SaleTyleAdmincp" id="SaleTyleAdmincp">
									<option value="">Vui lòng chọn</option>
									<option value="Đại lý" <?php if(isset($result->saleTyle) && $result->saleTyle == 'Đại lý') { print "selected"; } ?>>Đại lý</option>
									<option value="Cá nhân" <?php if(isset($result->saleTyle) && $result->saleTyle == 'Cá nhân') { print "selected"; } ?>>Cá nhân</option>
									<option value="Ký gởi" <?php if(isset($result->saleTyle) && $result->saleTyle == 'Ký gởi') { print "selected"; } ?>>Ký gởi</option>
                                </select>
							</div>
							<label class="control-label col-md-2">Liên hệ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-2"><input value="<?php if(isset($result->contact)) { print $result->contact; }else{ print '';} ?>" type="text" name="ContactAdmincp" id="ContactAdmincp" class="form-control"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Hình đại diện(400x180): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->avatar)){ if($result->avatar!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
										<img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_CAR_OLD.$result->avatar,150, 150)?>" />
									</div>
									<?php }} ?>
									<div class="input-group input-large fallback">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Chọn image </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" id="avatarAdmincp" name="fileAdmincp[avatar]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										xóa </a>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Hình ảnh chi tiết: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->images)){ if($result->images!=''){ ?>

									<?php $resultImages = unserialize($result->images)?>
									<?php foreach ($resultImages as $key => $v): ;?>
                                        <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
											<img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_CAR_OLD.$v,150, 150)?>" />
										</div>
                                    <?php endforeach ?>
									<?php }} ?>
									<div class="input-group input-large fallback">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Chọn images </span>
										<span class="fileinput-exists">
										Thay đổi </span>
										<input type="file" id="imageAdmincp" name="images[]" multiple>
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Xóa </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Mô ta chi tiết: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><textarea name="contentAdmincp" id="contentAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->content)) { print $result->content; }else{ print '';} ?></textarea></div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-9">
								<button onclick="save()" type="button" class="btn green" id="btnsave"><i class="fa fa-pencil"></i> Save</button>
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
