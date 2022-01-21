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
function save1(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };
	$('#frmManagement').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var id = '<?= $id; ?>';
	var form = jqForm[0];

    if(form.nameAdmincp.value == ''  
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

	if(responseText[0]=='permission-denied'){
		$('#txt_error').html('Permission denied.');
		show_perm_denied();
		return false;
	}
}

function saveSpec(id,type, product){
	var module_url = '<?=PATH_URL_ADMIN.$module?>';
	var sort = 0
	var name = ''
	var value = ''
	var description = ''
	if (id != 0 || id > 0) {
		sort = $('#inputSort'+id).val();
		name    = $('#inputName'+id).val();
		value = $('#inputValue'+id).val();
		description = $('#inputDescription'+id).val();
	} else {
		sort = $('#inputSort'+type).val();
		name    = $('#inputName'+type).val();
		value = $('#inputValue'+type).val();
		description = $('#inputDescription'+type).val();
	}
	
	$.post(module_url+'/saveSpec/',{
		id 		     : id,
		sort 		 : sort,
		product      : product,
		name         : name,
		value        : value,
		description  : description,
		type         : type,
		csrf_token: token_value
	},function(data){
		console.log(data);
		data = data.split(".");
		if(data[0]=='success'){
			show_perm_success();
		}
		if (id === 0) {
			$('#inputSort'+type).val('');
			$('#inputName'+type).val('');
			$('#inputValue'+type).val('');
			$('#inputDescription'+type).val('');
		}
	});
}
function deleteSpec(id){
	var module_url = '<?=PATH_URL_ADMIN.$module?>';
	
	$.post(module_url+'/deleteSpec/',{
		id 		     : id,
		csrf_token: token_value
	},function(data){
		data = data.split(".");
		if(data[0]=='success'){
			$('#txt_error').html('You have deleted this row.');
			show_perm_denied();
			return false;
		}
	});
}
</script>
<style>
	.panel-title {
		padding-bottom: 5px;
		font-weight: bold;
		border-bottom: 2px solid #e7ecf1;
	}
	.form-group  {
		padding: 12px 0;
	}
</style>
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
			
			<div class="portlet-body ">
				<div class="form-body notification" style="display:none">
					<div class="alert alert-success" style="display:none">
						<strong>Success!</strong> The page has been saved.
					</div>
					
					<div class="alert alert-danger" style="display:none">
						<strong>Success!</strong> <span id="txt_error"></span>
					</div>
				</div>
				<div class="panel-group accordion" id="accordion1">
					<?php foreach ($cates as $key => $c): ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?= $c->id; ?>" href="#collapse_<?= $c->id; ?>" aria-expanded="true"> <?= $c->name; ?> </a>
							</h4>
						</div>
						<div id="collapse_<?= $c->id; ?>" class="panel-collapse collapse" aria-expanded="true" style="">
							<div class="panel-body">
								<?php foreach ($listsSpec as $key => $s): ?>
									<?php if ($s->type === $c->id) { ?>
										<div class="form-group has-warning">
											<div class="col-md-1">
												<input type="text" class="form-control" value="<?= $s->sort; ?>" id="inputSort<?= $s->id; ?>">
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control" value="<?= $s->name; ?>"  id="inputName<?= $s->id; ?>">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" value="<?= $s->value; ?>"  id="inputValue<?= $s->id; ?>">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" value="<?= $s->description; ?>"  id="inputDescription<?= $s->id; ?>"> 
											</div>
											<div class="col-md-1">
												<button type="submit" class="btn success" onclick="saveSpec(<?= $s->id; ?>, <?= $c->id; ?>, <?= $id; ?>)"><i class="fa fa-edit"></i></button>
												<button type="submit" class="btn red" onclick="deleteSpec(<?= $s->id; ?>)"><i class="fa fa-trash"></i></button>
											</div>
										</div>
									<?php } ?>
								<?php endforeach; ?>
								<div class="form-group has-warning">
									<div class="col-md-1">
										<input type="text" class="form-control" id="inputSort<?= $c->id; ?>">
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputName<?= $c->id; ?>">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="inputValue<?= $c->id; ?>">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="inputDescription<?= $c->id; ?>"> 
									</div>
									<div class="col-md-1">
										<button type="submit" class="btn green" onclick="saveSpec(0, <?= $c->id; ?>, <?= $id; ?>)"><i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->