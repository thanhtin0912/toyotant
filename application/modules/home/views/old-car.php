<link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/adminlate.css">
<style>
.nice-select {
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    border-radius: 5px;
    border: solid 2px #e8e8e8;
    box-sizing: border-box;
    clear: both;
    cursor: pointer;
    display: block;
    float: left;
    font-family: inherit;
    font-size: 16px;
    font-weight: normal;
    height: 36px;
    line-height: 100%;
    outline: none;
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
    position: relative;
    text-align: left !important;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
}
</style>
<div class="grid ">
    <div class="container-fluid m2-content pt-3">
        <div class="td-crumb-container">

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>"><span itemprop="title">Trang
                            Chủ</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>

                <span itemscope="">
                    <a title="Tin tức" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Xe qua sử
                            dụng</span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<?php $currentYear = date("Y"); ?>
<div class="container-fluid m2-content connected-tech-enform-content">
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 pr-2" id="oc-search">
			<div class="modal-content" style="margin-top: 10px;">
	        	<div class="modal-header" style="background:#fff;padding: 10px! important; border-top: 2px solid #dedfe2;">
				    <h3  style="color:#121312"><b>Tìm kiếm</b></h3>
				</div>
		      	<div class="modal-body" style="font-size: 80% ! important;">
		      		<div class="row" >
		      			<div class="form-group col-md-12">
					    	<label style="font-weight: bold;">Hãng sản xuất:</label>
					        <select class="nice-select"  id="selCompanyOfProduct" style="margin-top:10px;">
					          	<option value="">Vui lòng chọn</option>
					          	<?php foreach ($slugs as $key => $v): ?>
					          	<option value="<?= $v->id ?>" ><?= $v->name ?></option>
					          	<?php endforeach ?>
					        </select>
					  	</div><!-- /.form group -->
					  	<div class="form-group  col-md-12">
						  	<div class="box-group" style="padding:5px 0 ! important;">
			                    <!-- // năm sản xuất -->
			                    <div class="" style="margin: 0px ! important;">
				                    <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
				                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        	<h4 class="box-title" style="font-weight: bold;">
			                          		<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="">Năm sản xuất</a>
			                        	</h4>
				                    </div>
			                      	<div id="collapseOne" class="panel-collapse collapse " aria-expanded="false">
			                        	<div class="box-body" style="padding:5px 0 ! important;">
			                           		<div class="form-group" style="margin-bottom: 5px ! important;">
			                           			<div class="row">
			                           				<div class="col-xs-4 col-sm-4 col-md-4">
				                           				<label style="margin-top: 10px;">Năm từ</label>
				                           			</div>
				                           			<div class="col-xs-8 col-sm-8 col-md-8">
				                           				<select class="nice-select">
										                	<option value="">Nhỏ nhất</option>
										                	<?php for ($i= 2000; $i <= $currentYear ; $i++) { ?>
                                                            <option value="<?=$i?>"><?=$i?></option>
                                                            <?php } ?>
										                </select>
				                           			</div>
			                           			</div>
								            </div>
								            <div class="form-group" style="margin-bottom: 5px ! important;">
								            	<div class="row">
								            		<div class="col-xs-4 col-sm-4 col-md-4">
				                           				<label style="margin-top: 10px;">Đến</label>
				                           			</div>
				                           			<div class="col-xs-8 col-sm-8 col-md-8">
				                           				<select class="nice-select" >
										                	<option value="">Lớn nhất</option>
                                                            <?php for ($i= 2000; $i <= $currentYear ; $i++) { ?>
                                                            <option value="<?=$i?>"><?=$i?></option>
                                                            <?php } ?>
										                	
										                </select>
				                           			</div>
								            	</div>
			                           			
								            </div>
			                        	</div>
			                      	</div>
			                    </div>
			                    <!-- Giá bán -->
			                   	<div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="">
			                            Giá bán
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseTwo" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          	<div class="form-group" style="margin-bottom: 5px ! important;">
			                          		<div class="row">
			                          			<div class="col-xs-4 col-sm-4 col-md-4">
			                           				<label style="margin-top: 10px;">Giá từ</label>
			                           			</div>
			                           			<div class="col-xs-8 col-sm-8 col-md-8">
			                           				<select class="nice-select" id="selPriceFrom">
									                	<option value="">Thấp nhất</option>
									                    <option value="50000000">50 Triệu</option>
									                    <option value="100000000">100 Triệu</option>
									                    <option value="150000000">150 Triệu</option>
									                    <option value="200000000">200 Triệu</option>
									                    <option value="250000000">250 Triệu</option>
									                    <option value="300000000">300 Triệu</option>
									                    <option value="450000000">450 Triệu</option>
									                    <option value="500000000">500 Triệu</option>
									                    <option value="600000000">600 Triệu</option>
									                    <option value="700000000">700 Triệu</option>
									                    <option value="800000000">800 Triệu</option>
									                    <option value="900000000">900 Triệu</option>
									                    <option value="1000000000">1.0 Tỷ</option>
									                    <option value="1200000000">1.2 Tỷ</option>
									                    <option value="1500000000">1.5 Tỷ</option>
									                    <option value="2000000000">2.0 Tỷ</option>
									                    <option value="2500000000">2.5 Tỷ</option>
									                    <option value="3000000000">3.0 Tỷ</option>
									                    <option value="4000000000">4.0 Tỷ</option>
									                    <option value="5000000000">5.0 Tỷ</option>
									                    <option value="7000000000">7.0 Tỷ</option>
									                    <option value="10000000000">10 Tỷ</option>
									                </select>
			                           			</div>
			                          		</div>
							            </div>

							            <div class="form-group" style="margin-bottom: 5px ! important;">
			                          		<div class="row">
			                          			<div class="col-xs-4 col-sm-4 col-md-4">
			                           				<label style="margin-top: 10px;">Đến</label>
			                           			</div>
			                           			<div class="col-xs-8 col-sm-8 col-md-8">
			                           				<select class="nice-select" id="selPriceTo">
									                	<option value="">Lớn nhất</option>
									                    <option value="50000000">50 Triệu</option>
									                    <option value="100000000">100 Triệu</option>
									                    <option value="150000000">150 Triệu</option>
									                    <option value="200000000">200 Triệu</option>
									                    <option value="250000000">250 Triệu</option>
									                    <option value="300000000">300 Triệu</option>
									                    <option value="450000000">450 Triệu</option>
									                    <option value="500000000">500 Triệu</option>
									                    <option value="600000000">600 Triệu</option>
									                    <option value="700000000">700 Triệu</option>
									                    <option value="800000000">800 Triệu</option>
									                    <option value="900000000">900 Triệu</option>
									                    <option value="1000000000">1.0 Tỷ</option>
									                    <option value="1200000000">1.2 Tỷ</option>
									                    <option value="1500000000">1.5 Tỷ</option>
									                    <option value="2000000000">2.0 Tỷ</option>
									                    <option value="2500000000">2.5 Tỷ</option>
									                    <option value="3000000000">3.0 Tỷ</option>
									                    <option value="4000000000">4.0 Tỷ</option>
									                    <option value="5000000000">5.0 Tỷ</option>
									                    <option value="7000000000">7.0 Tỷ</option>
									                    <option value="10000000000">10 Tỷ</option>
									                </select>
			                           			</div>
			                          		</div>
							            </div>
			                        </div>
			                      </div>
			                    </div>
			                    <!-- Hộp số -->
			                    <div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" class="">
			                            Hộp số
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseThree" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          	<div class="form-group" style="margin-bottom: 5px ! important;" >
                                            <div class="form-group" style="margin-bottom: 5px ! important;">
                                                <ul style="margin-top:10px;">
                                                    <li class="getGear" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
                                                        <div class="checkbox">
                                                            <label class="hidecheck" style="font-size: 1.3em">
                                                                <input type="checkbox" value="Số tay">
                                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Số tay												            </label>
                                                        </div>
                                                    </li>
                                                    <li class="getGear" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
                                                        <div class="checkbox">
                                                            <label class="hidecheck" style="font-size: 1.3em">
                                                                <input type="checkbox" value="Số tự động">
                                                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Số tự động												            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
										</div>
			                        </div>
			                      </div>
			                    </div>
			                    <!-- Nhiên liệu tiêu thụ  -->
			                    <div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" class="">
			                           Nhiên liệu tiêu thụ
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseFour" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          	<div class="form-group" style="margin-bottom: 5px ! important;">
                                            <ul style="margin-top:10px;">
									    		<li class="getFuel" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
													<div class="checkbox">
											            <label class="hidecheck" style="font-size: 1.3em">
											                <input type="checkbox" value="Điện">
											                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Điện											            </label>
											        </div>
												</li>
												<li class="getFuel" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
													<div class="checkbox">
											            <label class="hidecheck" style="font-size: 1.3em">
											                <input type="checkbox" value="Hybrid">
											                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Hybrid											            </label>
											        </div>
												</li>
												<li class="getFuel" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
													<div class="checkbox">
											            <label class="hidecheck" style="font-size: 1.3em">
											                <input type="checkbox" value="Máy dầu">
											                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Máy dầu											            </label>
											        </div>
												</li>
												<li class="getFuel" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
													<div class="checkbox">
											            <label class="hidecheck" style="font-size: 1.3em">
											                <input type="checkbox" value="Máy xăng">
											                <span class="cr"><i class="cr-icon fa fa-check"></i></span>Máy xăng											            </label>
											        </div>
												</li>
											</ul>
									  	</div> 
			                        </div>
			                      </div>
			                    </div>
			                    <!-- Loại xe "body" -->
			                    <div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" class="">
			                           Loại xe
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseFive" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          	<div class="form-group" style="margin-bottom: 5px ! important;" >
									    	<ul style="margin-top:10px;">
									    		<?php foreach ($body as $key => $v): ?>
												<li class='getCartype'  style='font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;'>
													<div class="checkbox">
											            <label class="hidecheck" style="font-size: 1.3em">
											                <input type="checkbox" value="<?= $v->id; ?>" >
											                <span class="cr"><i class="cr-icon fa fa-check"></i></span><?= $v->name; ?>
											            </label>
											        </div>
												</li>
												<?php endforeach ?>
											</ul>
									  	</div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      <span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" class="">
			                           Động cơ
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseSix" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          <div class="form-group" style="margin-bottom: 5px ! important;">
								    	
                                        <ul style="margin-top:10px;">
								    		<li class="getEngine" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
												<div class="checkbox">
										            <label class="hidecheck" style="font-size: 1.3em">
										                <input type="checkbox" value="0L-1L">
										                <span class="cr"><i class="cr-icon fa fa-check"></i></span>0L-1L										            </label>
										        </div>
											</li>
											<li class="getEngine" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
												<div class="checkbox">
										            <label class="hidecheck" style="font-size: 1.3em">
										                <input type="checkbox" value="1L-2L">
										                <span class="cr"><i class="cr-icon fa fa-check"></i></span>1L-2L										            </label>
										        </div>
											</li>
											<li class="getEngine" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
												<div class="checkbox">
										            <label class="hidecheck" style="font-size: 1.3em">
										                <input type="checkbox" value="2L-3L">
										                <span class="cr"><i class="cr-icon fa fa-check"></i></span>2L-3L										            </label>
										        </div>
											</li>
											<li class="getEngine" style="font-size: 10px;margin-top:10px; cursor: pointer;color: #333;font-weight: bold;">
												<div class="checkbox">
										            <label class="hidecheck" style="font-size: 1.3em">
										                <input type="checkbox" value="3L+">
										                <span class="cr"><i class="cr-icon fa fa-check"></i></span>3L+										            </label>
										        </div>
											</li>
										</ul>
								  	</div> 
			                        </div>
			                      </div>
			                    </div>
			                    <div class="" style="margin: 0px ! important;">
			                      <div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
			                      <span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
			                        <h4 class="box-title" style="font-weight: bold;">
			                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" class="">
			                           Số km đã sử dụng
			                          </a>
			                        </h4>
			                      </div>
			                      <div id="collapseSeven" class="panel-collapse collapse " aria-expanded="false">
			                        <div class="box-body" style="padding:5px 0 ! important;">
			                          	<div class="form-group" style="margin-bottom: 5px ! important;">
			                          		<div class="row">
			                          			<div class="col-xs-4 col-sm-4 col-md-4">
			                           				<label style="margin-top: 10px;">Số KM từ</label>
			                           			</div>
			                           			<div class="col-xs-8 col-sm-8 col-md-8">
			                           				<select class="nice-select" id="selKMFrom">
									                	<option value="">Nhỏ nhất</option>
									                	<option value="0">0</option>
									                    <option value="1000">>1000</option>
									                    <option value="2000">2.000</option>
									                    <option value="3000">3.000</option>
									                    <option value="5000">5.000</option>
									                    <option value="7000">7.000</option>
									                    <option value="10000">10.000</option>
									                    <option value="15000">15.000</option>
									                    <option value="20000">20.000</option>
									                    <option value="25000">25.000</option>
									                    <option value="30000">30.000</option>
									                    <option value="40000">40.000</option>
									                    <option value="50000">50.000</option>
									                    <option value="70000">70.000</option>
									                    <option value="100000">100.000</option>
									                    <option value="150000">150.000</option>
									                    <option value="200000">200.000</option>
									                </select>
			                           			</div>
			                          		</div>
							            </div>
								        <div class="form-group" style="margin-bottom: 5px ! important;">
			                          		<div class="row">
			                          			<div class="col-xs-4 col-sm-4 col-md-4">
			                           				<label style="margin-top: 10px;">Đến</label>
			                           			</div>
			                           			<div class="col-xs-8 col-sm-8 col-md-8">
			                           				<select class="nice-select" id="selKMTo">
									                	<option value="">Lớn nhất</option>
									                    <option value="1000">>1000</option>
									                    <option value="2000">2.000</option>
									                    <option value="3000">3.000</option>
									                    <option value="5000">5.000</option>
									                    <option value="7000">7.000</option>
									                    <option value="10000">10.000</option>
									                    <option value="15000">15.000</option>
									                    <option value="20000">20.000</option>
									                    <option value="25000">25.000</option>
									                    <option value="30000">30.000</option>
									                    <option value="40000">40.000</option>
									                    <option value="50000">50.000</option>
									                    <option value="70000">70.000</option>
									                    <option value="100000">100.000</option>
									                    <option value="150000">150.000</option>
									                    <option value="200000">200.000</option>
									                </select>
			                           			</div>
			                          		</div>
							            </div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="" style="margin: 0px ! important;">
			                      	<div class="box-header with-border" style="padding-left: 0px ! important;border-bottom: 1px solid #d1cfcf ! important;">
				                      	<span style="float: right; color: #8a8f91;"><i class="fa  fa-caret-down"></i></span>
				                        <h4 class="box-title" style="font-weight: bold;">
				                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" class="">
				                           Màu sắc
				                          </a>
				                        </h4>
			                      	</div>
			                      	<div id="collapseEight" class="panel-collapse collapse " aria-expanded="false">
				                        <div class="box-body" style="padding:5px 0 ! important;">
				                            <div class="btn-group" data-toggle="buttons">
				                            	<label class="btn btn-info" title="Trắng" style="background: #ffffff; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Trắng</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Đen" style="background: #000000; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Đen</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Đỏ" style="background: #d63c32; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Đỏ</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Xám" style="background: #888888; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Xám</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Bạc" style="background: #e9eaed; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Bạc</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Nâu" style="background: #93654a; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Nâu</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
																								<label class="btn btn-info" title="Xanh" style="background: #397637; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Xanh</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Bóc đô" style="background: #800000; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Bóc đô</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Cam" style="background: #ff6600; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Cam</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Hồng" style="background: #dd6699; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Hồng</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Vàng" style="background: #ffdc58; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Vàng</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Tím" style="background: #69699f; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Tím</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Xanh dương" style="background: #2370b9; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Xanh dương</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
												<label class="btn btn-info" title="Đồng" style="background: #b66d1d; margin: 5px; border-color: none ! important;border-color: rgba(40, 164, 201, 0.04) ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38)"><span style="display: none;">Đồng</span>
													<input type="radio" name="options" id="option2" autocomplete="off">
													<span class="glyphicon glyphicon-ok"></span>
												</label>
																								
											</div>
				                      	</div>
			                    	</div>
			                    </div>
                                <div class="clearfix"></div>
			                    <div class="form-group text-center pt-3">
			                    	<a   class="m2-cta-tile cta-button">Tìm kiếm</a>
			                    </div>
			                </div>
		                </div>
		      		</div>

		      	</div>
			</div>
		</div>
        
        <div class="col-xs-9 col-sm-9 col-md-9 ">
            <?php foreach ($products as $key => $v) : ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="modal-content" style="margin-top: 10px; margin-bottom: 20px ! important;">
                        <div class="modal-body" style="padding: 10px ! important; border-top: 2px solid #e1e2e4;">
                            <div class="row">
                                <a href="<?= PATH_URL . 'olds/'. $v->slug;?>">
                                    <p class="explore-item-heading"
                                        style="color: #121312 ! important; margin:5px 0 ! important; font-size: 23px ! important">
                                        <?= $v->name;?> - <?= $v->yearOf;?>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 col-md-4" style="margin: 5px 0 ! important;">
                                    <label style="letter-spacing: 0px;"><span style="font-weight:bold;">Người bán :
                                        </span><?= $v->saleTyle;?></label>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4" style="margin: 5px 0 ! important;">
                                    <label style='letter-spacing: 0px;'><span style='font-weight:bold;'>Trạng thái :</span>
                                    <?php  
                                    if ($v->tinhTrang == 1 || $v->tinhTrang === 1){
                                        echo "Xe mới";
                                    }
                                    if ($v->tinhTrang == 0 || $v->tinhTrang === 0){
                                        echo "Đã bán";
                                    }
                                    if ($v->tinhTrang == 2 || $v->tinhTrang === 2){
                                        echo "Ưu đãi";
                                    } 
                                    ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 5px ! important;">
                                    <div class=" form-group">
                                        <picture lazyload="true" class="tcom-picture">
                                            <a href="<?= PATH_URL . 'olds/'. $v->slug;?>">
                                                <img src="<?= PATH_URL . DIR_UPLOAD_CAR_OLD . $v->avatar ?>" style="width:100%">
                                            </a>
                                        </picture>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 5px ! important;">
                                    <div class=" table-responsive">
                                        <table class="table">
                                            <tbody style="font-size: 80% ! important;">
                                                <tr>
                                                    <th style=" width:20%; border-top: 0px ! important;">
                                                        <i class="fa">
                                                            <img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc01.png">
                                                        </i>
                                                    </th>
                                                    <th style="width:40%;font-weight: bold; border-top: 0px ! important;">Giá
                                                        bán :</th>
                                                    <?php if ($v->price != 0) { ?>
                                                    <th style="border-top: 0px ! important; color: red;"><b><?= number_format(($v->price)/1000000, 0)?> Triệu</b>
                                                        <p>(Chưa phụ phí.)</p>
                                                    </th>
                                                    <?php } else { ?>
                                                    <th style="border-top: 0px ! important; color: red;"><b>Liên hệ</b></th>
                                                    <?php } ?>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc03.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Số KM đã đi :</th>
                                                    <th class="format-number"><?= $v->numberOfKilometers;?></th>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc05.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Kiểu dáng :</th>
                                                    <th><?= $v->carType;?></th>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc06.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Màu sắc :</th>
                                                    <th><?= $v->color;?></th>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc10.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Động cơ :</th>
                                                    <th><?= $v->engine;?></th>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc09.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Hộp số :</th>
                                                    <th><?= $v->gear;?></th>
                                                </tr>

                                                <tr>
                                                    <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc08.png"></i></th>
                                                    <th style="width:40%;font-weight: bold;">Nhiên liệu :</th>
                                                    <th><?= $v->fuel;?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-6 col-sm-offset-6 col-xs-6 col-sm-3 col-md-3"
                                    style="margin-top:5px ! important; padding: 0 20px ! important">
                                    <div class="form-group text-center">
                                        <a href="<?= PATH_URL . 'olds/'. $v->slug;?>" class="m2-cta-tile cta-button" >Chi tiết</a>
                                    </div>
                                </div>
                                <div class="col-md-offset-6 col-sm-offset-6 col-xs-6 col-sm-3 col-md-3"
                                    style="margin-top:5px ! important; padding: 0 20px ! important">
                                    <div class="form-group text-center">
                                        <a href="#"  class="m2-cta-tile cta-button" >Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        
    </div>
    
</div>