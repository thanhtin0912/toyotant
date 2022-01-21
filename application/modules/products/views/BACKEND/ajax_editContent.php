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

function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };
	$('#frmManagement').ajaxSubmit(options);
}
function showRequest(formData, jqForm, options) {
	var form = jqForm[0];
    <?php if($id==0){ ?>
        if($('#avatarAdmincp').val() == ''){
            $('#txt_error').html('Please choose image.');
            show_perm_denied();
            return false;
        }
    <?php } ?>
	if(form.nameAdmincp.value == ''  
		|| form.shortinfoAdmincp.value == ''  
		|| form.priceAdmincp.value == ''
		|| form.seatsAdmincp.value == ''
		|| form.motorAdmincp.value == ''
		|| form.bodytypeAdmincp.value == ''
		|| form.typeAdmincp.value == ''
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
							<div class="col-md-8">
								<input value="<?php if(isset($result->name)) { print $result->name; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Slug: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><input value="<?php if(isset($result->slug)) { print $result->slug; }else{ print '';} ?>" type="text" name="slugAdmincp" id="slugAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Danh mục: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-6">
								<select class="bs-select form-control" data-live-search="true" data-size="8" name="typeAdmincp" id="typeAdmincp">
									<option value="">None</option>
									<?php foreach ($cates as $key => $cate): ?>
										<?php  
											$select = '';
											if($result->type == $cate->id){
												$select = 'selected="selected"';
											}
										?>
										<option value="<?= $cate->id; ?>" <?= $select; ?> ><?= $cate->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Description: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-8"><textarea name="shortinfoAdmincp" id="shortinfoAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description)) { print $result->description; }else{ print '';} ?></textarea></div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-2">Giá bán: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->price)) { print $result->price; }else{ print '';} ?>" type="text" name="priceAdmincp" id="priceAdmincp" class="form-control"/>
							</div>
							<!--  -->
							<label class="control-label col-md-2">Phí trước bạ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->phitruocba)) { print $result->phitruocba; }else{ print '';} ?>" type="text" name="phitruocbaAdmincp" id="phitruocbaAdmincp" class="form-control number"/>
							</div>
						</div>
						<div class="form-group">
							<!--  -->
							<label class="control-label col-md-2">Phí đăng ký: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->phidangky)) { print $result->phidangky; }else{ print '';} ?>" type="text" name="phidangkyAdmincp" id="phidangkyAdmincp" class="form-control number"/>
							</div>
							<label class="control-label col-md-2">Phí đăng kiểm: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->phidangkiem)) { print $result->phidangkiem; }else{ print '';} ?>" type="text" name="phidangkiemAdmincp" id="phidangkiemAdmincp" class="form-control number"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">BH thân vỏ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->phithanvo)) { print $result->phithanvo; }else{ print '';} ?>" type="text" name="phithanvoAdmincp" id="phithanvoAdmincp" class="form-control number"/>
							</div>
							<label class="control-label col-md-2">BHTN dân sự: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->phibaohiem)) { print $result->phibaohiem; }else{ print '';} ?>" type="text" name="phibaohiemAdmincp" id="phibaohiemAdmincp" class="form-control"/>
							</div>
							<!--  -->
						</div>

						<div class="form-group">
							
							<label class="control-label col-md-2">Trạng thái: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<select class="select form-control" data-live-search="true" data-size="8" name="highlightsAdmincp" id="highlightsAdmincp">
									<option value="0">None</option>
									<option value="1" <?= isset($result->highlights) ? $result->highlights == 1 ? 'selected="selected"' : '' : '' ?>>Màu nền đỏ</option>
									<option value="2" <?= isset($result->highlights) ? $result->highlights == 2 ? 'selected="selected"' : '' : '' ?>>Màu xanh</option>
								</select>
							</div>
							<!--  -->
							<label class="control-label col-md-2">Ưu đãi: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->uudai)) { print $result->uudai; }else{ print '';} ?>" type="text" name="uudaiAdmincp" id="uudaiAdmincp" class="form-control number"/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Kiểu dáng: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<select class="bs-select form-control" data-live-search="true" data-size="8" name="bodytypeAdmincp" id="bodytypeAdmincp">
									<option value="">None</option>
									<?php foreach ($bodytype as $key => $b): ?>
										<?php  
											$select = '';
											if($result->bodytype == $b->id){
												$select = 'selected="selected"';
											}
										?>
										<option value="<?= $b->id; ?>" <?= $select; ?> ><?= $b->name; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<label class="control-label col-md-2">Số chỗ ngồi: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->seats)) { print $result->seats; }else{ print '';} ?>" type="text" name="seatsAdmincp" id="seatsAdmincp" class="form-control"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Động cơ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->motor)) { print $result->motor; }else{ print '';} ?>" type="text" name="motorAdmincp" id="motorAdmincp" class="form-control"/>
							</div>
							<label class="control-label col-md-2">Xuất xứ: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<input value="<?php if(isset($result->origin)) { print $result->origin; }else{ print '';} ?>" type="text" name="originAdmincp" id="originAdmincp" class="form-control"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Hình đại diện(400x180): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->avatar)){ if($result->avatar!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 70%;">
										<img src="<?=PATH_URL.DIR_UPLOAD_CAR.$result->avatar?>" />
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
										Đổi </span>
										<input type="file" id="avatarAdmincp" name="fileAdmincp[avatar]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Xóa </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Banner: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->banner)){ if($result->banner!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 70%;">
										<img src="<?=PATH_URL.DIR_UPLOAD_CAR.$result->banner?>" />
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
										Đổi </span>
										<input type="file" id="bannerAdmincp" name="fileAdmincp[banner]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Xóa </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Hình ảnh mô tả(500x500): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->images)){ if($result->images!=''){ ?>
									<?php $resultImages = unserialize($result->images)?>
									<?php foreach ($resultImages as $key => $v): ;?>
                                        <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
											<img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_CAR.$v,150, 150)?>" />
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
										Chọn image </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" id="imagesAdmincp" name="images[]" multiple>
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<!--  -->
							<label class="control-label col-md-2">Video: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->video)){ if($result->video!=''){ ?>
										<video width="240" height="180" controls="">                             
											<source src="<?=PATH_URL.DIR_UPLOAD_CAR.$result->video;?>" type="video/mp4">                           
										</video>
									<?php }} ?>
									<div class="input-group input-large fallback">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Chọn video </span>
										<span class="fileinput-exists">
										Đổi </span>
										<input type="file" name="fileAdmincp[video]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Xóa </a>
									</div>
								</div>
							</div>
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
