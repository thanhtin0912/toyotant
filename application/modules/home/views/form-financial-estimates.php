<style>
    .container-test-driver {
        background-color: #fff !important;
        padding: 0 !important;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
      $("#txtCarType").bind("change",function() {
        var products = <?php echo json_encode($products) ?>;
        var selected = $("#txtCarType").val();
        var url = "<?= PATH_URL.DIR_UPLOAD_CAR; ?>";
        $.each(products, function (i, item) {
          if (selected == item.id) {
            $("#imgCarSelected").attr("src", url+item.avatar);
            $("#txtPriceCarLate").html(item.price).number( true,0 );
            $("#spPhitruocba").html(item.phitruocba * item.price).number( true,0 );
            $("#spPhidangky").html(item.phidangky).number( true,0 );
            $("#spPhidangkiem").html(item.phidangkiem).number( true,0 );
            $("#spPhiBHDSdansu").html(item.phibaohiem).number( true,0 );
            $("#spPhiBHDSthanxe").html(item.phithanvo * item.price).number( true,0 );
          }
        })
      });
    });

    function dutoan(){
        //gia ban
        var products = <?php echo json_encode($products) ?>;
        var giaban         = 0;
        var selected = $("#txtCarType").val();
        $.each(products, function (i, item) {
          if (selected == item.id) {
            giaban = item.price
          }
        })
        //tien tra truoc tinh theo %
        var sotientratruoc =$('#sotientratruoc').val();
        //lai suat theo ngan hang
        var laisuat        = $('#laisuattindung').val();
        //so thang tra lai 
        var thangtralai    = $('#thangtindung').val();
        $("#Sothang").html(thangtralai);
        
        var tienno = giaban - ((sotientratruoc/100)*giaban);
        var percent = laisuat/100;
        var lainam = tienno * (percent/12) * thangtralai;
        var laichenhlech = (tienno/thangtralai )* (percent/12);
        var khoantindung = tienno + lainam - (laichenhlech *thangtralai*(thangtralai-1))/2;
        var tindungtheothang = (tienno / thangtralai) +(tienno * (percent/12));

        $('#tindungthangdau').html(tindungtheothang).number( true,0 );

        $('#Tiengocvalai').html(khoantindung).number( true,0 );  
    }
  </script>
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
                    <a title="Dự toán tài chính" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Dự toán tài chính</span></a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="grid pt-4" style="background-color: rgba(0, 0, 0, 0.6) !important;">
    <div class="container-fluid m2-content connected-tech-enform-content container-test-driver">    
        <div class="container">
            <div class="modal-header" >
                <div class="m2-text-tile section-header text-center">
                    <h2>Dự đoán tài chính</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="td-big-grid-wrapper">
                        <div class="td-big-grid-scroll" >
                            <div class="td_module_mx6 td-animation-stack td-big-grid-post td-small-thumb grid-match-height grid-item first-row" data-idx="1" style="margin-bottom: 2em;">
                                <div class="m2-text-tile" style="text-align: center ! important;">
                                <img class="img-responsive hvr-float-shadow" id ="imgCarSelected" src="<?= PATH_URL . DIR_UPLOAD_CAR . $products[0]->avatar ?>"  alt="">
                                <h3 style="letter-spacing: 0px ! important;"><span class="PriceNow" id="txtPriceCarLate"><?=number_format($products[0]->price) ?></span> Tr</h3>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <select class="select-compare"  id="txtCarType">
                                <?php foreach ($products as $key => $p): ?>
                                <option value="<?=$p->id ?>"><?=$p->name ?></option>
                                <?php endforeach ?>
                                </select>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-1" >
                </div>

                <div class="col-sm-9 col-md-8" >
                    <div class="row">
                        <div class="m2-text-tile  section-header pr-margin-top-20">
                            <h3 style="padding-bottom: 15px;">I. CHI PHÍ MUA XE</h3>
                        </div>
                        <div class="box-body">
                            <div class="rows">
                            <div class="form-group col-xs-6 col-sm-6 col-md-3" style="padding: 0 10px;">
                                <label class="lbl-dutoan">Thời gian vay:</label>
                                <select class="select-compare"  id="thangtindung">
                                <option value="">---Chọn---</option>
                                <option value="12">1 năm (12 tháng)</option>
                                <option value="24">2 năm (24 tháng)</option>
                                <option value="36">3 năm (36 tháng)</option>
                                <option value="48">4 năm (48 tháng)</option>
                                <option value="60">5 năm (60 tháng)</option>
                                <option value="72">6 năm (72 tháng)</option>
                                <option value="84">7 năm (84 tháng)</option>
                                <option value="96">8 năm (96 tháng)</option>
                                </select>
                            </div><!-- /.form group -->
                            <div class="form-group col-xs-6 col-sm-6 col-md-3" style="padding: 0 10px;">
                                <label class="lbl-dutoan">Trả trước:</label>
                                <select class="select-compare"  id="sotientratruoc">
                                <option value="">---Chọn---</option>
                                <option value="30">30%</option>
                                <option value="40">40%</option>
                                <option value="50">50%</option>
                                <option value="60">60%</option>
                                <option value="70">70%</option>
                                <option value="80">80%</option>
                                <option value="90">90%</option>
                                </select>
                            </div><!-- /.form group -->
                            <div class="form-group col-xs-6 col-sm-6 col-md-3" style="padding: 0 10px;">
                                <label class="lbl-dutoan">LS 12 tháng đầu</label>
                                <select class="select-compare"  id="laisuattindung">
                                <option value="">---Chọn---</option>
                                <option value="5">5%</option>
                                <option value="6">6%</option>
                                <option value="7">7%</option>
                                <option value="8">8%</option>
                                <option value="9">9%</option>
                                <option value="10">10%</option>
                                <option value="11">11%</option>
                                <option value="12">12%</option>
                                <option value="13">13%</option>
                                <option value="14">14%</option>
                                <option value="15">15%</option>
                                <option value="16">16%</option>
                                <option value="17">17%</option>
                                <option value="18">18%</option>
                                <option value="19">19%</option>
                                <option value="20">20%</option>
                                </select>
                            </div><!-- /.form group -->
                            <div class="form-group col-xs-6 col-sm-6 col-md-3" style="padding: 0 10px;">
                                <label class="lbl-dutoan">LS sau 12 tháng</label>
                                <select class="select-compare"  id="laisuattindungthang13">
                                <option value="">---Chọn---</option>
                                <option value="5">5%</option>
                                <option value="6">6%</option>
                                <option value="7">7%</option>
                                <option value="8">8%</option>
                                <option value="9">9%</option>
                                <option value="10">10%</option>
                                <option value="11">11%</option>
                                <option value="12">12%</option>
                                <option value="13">13%</option>
                                <option value="14">14%</option>
                                <option value="15">15%</option>
                                <option value="16">16%</option>
                                <option value="17">17%</option>
                                <option value="18">18%</option>
                                <option value="19">19%</option>
                                <option value="20">20%</option>
                                </select>
                            </div><!-- /.form group -->
                            </div>
                            <div class="rows">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12" style="padding: 0 10px;text-align: center ! important">
                                <button  class="btn btn-danger" style="height: 35px; background: red" onclick="dutoan();">Tính chi phí</button>
                                </div>
                            </div>
                        </div>
                         <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                    <td style="background-color: #ccc;width:15%; text-align: center;"><h2><b><span id="Sothang">Số</span><br><small>Tháng</small></b></h2></td>
                                    <td style="width:35%; text-align: center;">Tổng tiền gốc và lãi còn lại<br><b><span style="color: red;" id="Tiengocvalai"></span></b></td>
                                    <td style="width:35%;text-align: center;">Tín dụng tháng đầu<br><b><span style="color: red;" id="tindungthangdau"></span></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="m2-text-tile  section-header pb-1"> 
                            <h3>II. CHI PHÍ ĐĂNG KÝ (VNĐ)</h3>   
                        </div> 
                        <div class="box-body">
                             <!-- //dong 1 -->
                            <div class="form-group ">
                                <div class="row">
                                    <label class="col-xs-6 col-sm-6 col-md-6">Phí trước bạ : </label>
                                    <label class="col-xs-6 col-sm-6 col-md-6" style="font-weight: bold;font-size: 120%;" >
                                        <span id="spPhitruocba"></span>
                                    </label>
                                </div>
                            </div>
                             <!-- //dong 1 -->
                             <div class="form-group ">
                                <div class="row">
                                    <label class="col-xs-6 col-sm-6 col-md-6">Phí đăng ký : </label>
                                    <label class="col-xs-6 col-sm-6 col-md-6" style="font-weight: bold;font-size: 120%;" >
                                        <span id="spPhidangky"></span>
                                    </label>
                                </div>
                            </div>
                             <!-- //dong 1 -->
                             <div class="form-group ">
                                <div class="row">
                                    <label class="col-xs-6 col-sm-6 col-md-6">Phí Kiểm định : </label>
                                    <label class="col-xs-6 col-sm-6 col-md-6" style="font-weight: bold;font-size: 120%;" >
                                        <span id="spPhidangkiem"></span>
                                    </label>
                                </div>
                            </div>
                             <!-- //dong 1 -->
                             <div class="form-group ">
                                <div class="row">
                                    <label class="col-xs-6 col-sm-6 col-md-6">BHTN dân sự : </label>
                                    <label class="col-xs-6 col-sm-6 col-md-6" style="font-weight: bold;font-size: 120%;" >
                                        <span id="spPhiBHDSdansu"></span>
                                    </label>
                                </div>
                            </div>
                             <!-- //dong 1 -->
                             <div class="form-group ">
                                <div class="row">
                                    <label class="col-xs-6 col-sm-6 col-md-6">BH thân vỏ xe : </label>
                                    <label class="col-xs-6 col-sm-6 col-md-6" style="font-weight: bold;font-size: 120%;" >
                                        <span id="spPhiBHDSthanxe"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>