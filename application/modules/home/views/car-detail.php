  <script type="text/javascript">
    $(document).ready(function () {
      var arrayListInfos = <?php echo json_encode($listInfos) ?>;
      let x = 2;
      
      $.each(arrayListInfos, function (i, elem) {
        $('.listInfos-'+elem.id+' .column-data').hide()
        $('.listInfos-'+elem.id+' .column-data:lt('+x+')').show();
      });
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
    function loadMore(id) {
      $('.listInfos-'+id+' .column-data:lt(20)').show();
      $('#loadMore-'+id).hide()
    }
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
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/demo.css">
  <style>
      /*jssor slider loading skin spin css*/
      .jssorl-009-spin img {
          animation-name: jssorl-009-spin;
          animation-duration: 1.6s;
          animation-iteration-count: infinite;
          animation-timing-function: linear;
      }

      @keyframes jssorl-009-spin {
          from { transform: rotate(0deg); }
          to { transform: rotate(360deg); }
      }

      /*jssor slider arrow skin 106 css*/
      .jssora106 {display:block;position:absolute;cursor:pointer;}
      .jssora106 .c {fill:#fff;opacity:.3;}
      .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
      .jssora106:hover .c {opacity:.5;}
      .jssora106:hover .a {opacity:.8;}
      .jssora106.jssora106dn .c {opacity:.2;}
      .jssora106.jssora106dn .a {opacity:1;}
      .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

      /*jssor slider thumbnail skin 101 css*/
      .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
      .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
      .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
      .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
      .jssort101 .p:hover{padding:2px;}
      .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
      .jssort101 .p:hover.pdn{padding:0;}
      .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
      .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
      .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
      .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
      .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
      .explore-item-content {
        padding: 15px 10px;
        height: 190px;
      }
      .info-item {
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        display: -webkit-box;
        text-overflow: ellipsis;
        line-height: 22px;
      }
      .color-item {
        padding: 6px 6px;
        margin: 18px 7px;
        cursor: pointer;
      }
      .color-item span{
        display: block;
        border: 1px solid #cccccc;
        border-radius: 50%;
        border-width: 25px;
        border-style: solid;
        height: 0px;
        width: 0px;
      }
  </style>
  <script>
        window.jssor_3_slider_init = function() {
        var jssor_1_SlideoTransitions = [
          [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
          [{b:0,d:2000,y:30,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
          [{b:500,d:1500,o:1}],
          [{b:0,d:1000,y:380,e:{y:6}}],
          [{b:300,d:1000,x:80,e:{x:6}}],
          [{b:300,d:1000,x:330,e:{x:6}}],
          [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
          [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
          [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
          [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
        ];
        var jssor_1_options = {
          $AutoPlay: 1,
          $LazyLoading: 1,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 20,
            $SpacingY: 20
          }
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        var MAX_WIDTH = 1600;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
  </script>
  <div class="wrapper">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:640px;overflow:hidden;visibility:hidden;">
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:640px;overflow:hidden;">
          <div>
            <a href="#"><img data-u="image" data-src="<?= PATH_URL . DIR_UPLOAD_CAR . $detail[0]->banner ?>" src="<?= PATH_URL . DIR_UPLOAD_CAR . $detail[0]->banner ?>" /></a>
          </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">jssor_3_slider_init();</script>
  <!-- Thông tin cơ bản -->
  
  <div class="container-fluid m2-content connected-tech-enform-content pt-4">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="m2-text-tile" style="text-align: center ! important;">
					<img class="img-responsive hvr-float-shadow" src="<?= PATH_URL . DIR_UPLOAD_CAR . $detail[0]->avatar ?>" alt="">				
				</div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="enform-on-us" style="margin-bottom: 1em;">
          <div class="m2-text-tile  section-header">
            <h2><?= $detail[0]->name ?></h2>
            <p><?= $detail[0]->description ?></p>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th style="width:20%; border-top: 0px ! important;"><i class="fa">
                  <img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc01.png" alt=""></i>
                </th>
                <th style="width:40%;font-weight: bold; border-top: 0px ! important;">Giá bán :</th>
                <th style="border-top: 0px ! important;"><span style="color: red; font-weight:bold"><?= number_format($detail[0]->price, 0) ?></span></th>
              </tr>
              <tr>
                  <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc11.png" alt=""></i></th>
                  <th style="width:40%;font-weight: bold;">Số chỗ ngồi :</th>
                  <th><?= $detail[0]->seats ?></th>
              </tr>
              <tr>
                  <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc05.png" alt=""></i></th>
                  <th style="width:40%;font-weight: bold;">Kiểu dáng :</th>
                  <th><?= $detail[0]->bodyname ?></th>
              </tr>
              <tr>
                  <th><i class="fa"><img class="img-reponsive" src="<?= PATH_URL ?>assets/images/icon/icon_oc07.png" alt=""></i></th>
                  <th style="width:40%;font-weight: bold;">Xuất xứ :</th>
                  <th><?= $detail[0]->origin ?></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper" style="background-color: black;">
    <div class="container-fluid m2-content connected-tech-enform-content" style="padding-top: 2em;">
      <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          <?php $images = unserialize($detail[0]->images); ?>
          <?php foreach ($images as $key => $v) : ?>
            <div>
                <img data-u="image" src="<?= PATH_URL . DIR_UPLOAD_CAR . $v ?>" />
                <img data-u="thumb" src="<?= PATH_URL . DIR_UPLOAD_CAR . $v ?>" />
            </div>
          <?php endforeach ?>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">jssor_2_slider_init();</script>
  <div class="container-fluid m2-content connected-tech-enform-content">
    <div class="container">
      <div class="modal-header" >
          <div class="m2-text-tile section-header">
          <h2>Màu sắc</h2>
        </div>
      </div>
    </div>
    <div class="container">
			<div class="tabbable tabs-below" style="padding: 20px 0;">
        <ul class=" tag-child-color nav nav-tabs  col-xs-12 col-sm-3 col-md-3">
          <?php foreach ($colors as $key => $v): ?>
          <li>
            <a data-toggle="tab" href="#<?= $v->id; ?>">
              <div class="color-item">
                <?php if ($v->content == null) { ?>
                  <span style="border-right-color: <?= $v->description; ?>; border-bottom-color: <?= $v->description; ?>; border-top-color: <?= $v->description; ?>; border-left-color: <?= $v->description; ?>;"></span>
                <?php } else { ?>
                  <span style="border-right-color: <?= $v->description; ?>; border-bottom-color: <?= $v->description; ?>; border-top-color: <?= $v->content; ?>; border-left-color: <?= $v->content; ?>;"></span>
                <?php } ?>
                
              </div>                    
            </a>
          </li>
          <?php endforeach ?>     
				</ul>							
        <div class="tab-content ">	
          <?php foreach ($colors as $key => $v): ?>
          <div  class="tab-pane <?php  if ($key==0){echo "active";} ?>" id="<?= $v->id; ?>">
            <div class="col-xs-12 col-sm-9 col-md-9">
              <img style="padding-top: 20px" class="img-responsive entry-thumb" src="<?=PATH_URL.DIR_UPLOAD_CAR_COLOR.$v->avatar ?>">
              <div class="item-content text-center" style="text-align: center;">
                <h3 class="page-header" style="font-size: 17px;"><?= $v->name;?></h3>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
  <?php foreach ($listInfos as $key => $v) : ?>
  <?php if ($v->total > 0) { ?> 
  <div class="container-fluid m2-content connected-tech-enform-content">
    <div class="container">
      <div class="modal-header" >
          <div class="m2-text-tile section-header">
          <h2><?=$v->name?></h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row listInfos-<?= $v->id;?>">
        <?php foreach ($infos as $item => $i) : ?>
        <?php if ($i->type == $v->id) { ?>
          <div class="col-sm-6 col-md-6 column-data">
            <div class="explore-item-option" style="margin: 10px ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38);">
              <picture lazyload="true" class="tcom-picture">
                <img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_CAR_INFO.$i->avatar,600,300)?>" class="explore-item-img">
              </picture>
              <div class="explore-item-content">
                <h3 class="page-header" style="font-size: 20px;"><?= $i->name;?></h3>
                <p class="info-item"><?= $i->content;?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php endforeach ?>
      </div>
      <div class="row">
        <div class="form-group col-xs-12 col-sm-12 col-md-12" style="padding: 0 10px;text-align: center;">
          <a class="m2-cta-tile cta-button" id="loadMore-<?= $v->id;?>" onclick="loadMore(<?= $v->id;?>)">Xem thêm</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php endforeach ?>

  <div class="container-fluid m2-content connected-tech-enform-content">
    <div class="container">
      <div class="modal-header" >
        <div class="m2-text-tile section-header">
          <h2>Thông số kỹ thuật</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="overflow: scroll; height: 400px;">
          <div class="body-table" >		
            <?php foreach ($tskt as $key => $v): ?>
              <table class="table-compares table-compares-mobile table table-nonborder" style="margin-bottom: 3px ! important;">
                <tbody>
                  <tr>
                    <th data-toggle="collapse" data-target="#class<?= $v->id?>, #class<?= $v->id?> .warpper-collapse" colspan="100%" ><?= $v->name?></th>
                  </tr>
                </tbody>
                <tbody id="class<?= $v->id?>" class="row--8 panel-collapse collapse">
                  <?php $num = 0 ?>
                  <?php $str = '' ?>
                  <?php foreach ($specProducts as $key => $i): ?>
                  <?php if($i->type === $v->id) { ?>
                  <?php $num++ ?>
                  <tr style="background-color:<?php if ($num%2==0){echo "#f7f7f7 ! important";}else{echo "#ffffff ! important";}?>;">
                    <th colspan="100%" class="group-title"><div class="warpper-collapse collapse"><?= $i->name; ?></div></th>
                  </tr>
                  <tr style="background:<?php if ($num%2==0){echo "#f7f7f7";}else{echo "#ffffff";}?>;">
                    <td data-model="mg-column-0"><div class="warpper-collapse collapse"><?php if($str != $i->name) { echo $i->name; }; ?></div></td>
                    <td data-model="mg-column-1"><div class="warpper-collapse collapse"><?= $i->value; ?></div></td>
                    <td data-model="mg-column-2"><div class="warpper-collapse collapse"><?= $i->description; ?></div></td> 
                  </tr>
                  <?php $str = $i->name ?>
                  <?php } ?>
                  <?php endforeach ?>
                </tbody>
              </table>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid m2-content connected-tech-enform-content">
    <div class="container">
      <div class="modal-header" >
        <div class="m2-text-tile section-header">
          <h2>Dự đoán tài chính</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="rows">
        <div class="col-sm-3 col-md-3">
          <div class="td-big-grid-wrapper">
            <div class="td-big-grid-scroll" >
              <div class="td_module_mx6 td-animation-stack td-big-grid-post td-small-thumb grid-match-height grid-item first-row" data-idx="1" style="margin-bottom: 2em;">
                <div class="m2-text-tile" style="text-align: center ! important;">
                  <img class="img-responsive hvr-float-shadow" id ="imgCarSelected" src="<?= PATH_URL . DIR_UPLOAD_CAR . $detail[0]->avatar ?>"  alt="">
                  <h3 style="letter-spacing: 0px ! important;"><span class="PriceNow" id="txtPriceCarLate"><?=number_format($detail[0]->price) ?></span> Tr</h3>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <select class="select-compare"  id="txtCarType">
                  <?php foreach ($products as $key => $p): ?>
                  <?php 
                    $select = '';
                    if ($detail[0]->id == $p->id) {
                      $select = 'selected="selected"';
                    }  
                  ?>
                  <option value="<?=$p->id ?>" $select ><?=$p->name ?></option>
                  <?php endforeach ?>
                </select>
              </div> 
            </div>
        </div>
			</div>
      <div class="col-md-1" >
      </div>

      <div class="col-sm-9 col-md-8" >
        <div class="rows">
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
              
            <div class="m2-text-tile  section-header"> 
              <h3 style="padding-bottom: 15px;">II. CHI PHÍ ĐĂNG KÝ (VNĐ)</h3>   
            </div> 
            <div class="box-body">
              <!-- //dong 1 -->
              <div class="form-group col-xs-8 col-sm-8 col-md-8">
                <label>Phí trước bạ : </label>
              </div>
              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label style="font-weight: bold;font-size: 120%;" >
                  <span id="spPhitruocba"><?= number_format($detail[0]->phitruocba* $detail[0]->price) ?></span>
                </label>
              </div>
              <!-- //dong 3 -->
              <div class="form-group col-xs-8 col-sm-8 col-md-8">
                <label>Phí đăng ký : </label>
              </div>
              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label style="font-weight: bold;font-size: 120%;"><span id="spPhidangky"><?=number_format($detail[0]->phidangky) ?></span></label>
                
              </div>
              <!-- //dong 2 -->
              <div class="form-group col-xs-8 col-sm-8 col-md-8">
                <label>Phí Kiểm định : </label>
              </div>
              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label style="font-weight: bold;font-size: 120%;"><span id="spPhidangkiem"><?=number_format($detail[0]->phidangkiem) ?></span></label>
                
              </div>
              <!-- //dong 2 -->
              <div class="form-group col-xs-8 col-sm-8 col-md-8">
                <label>BHTN dân sự : </label>
              </div>
              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label style="font-weight: bold;font-size: 120%;"><span id="spPhiBHDSdansu"><?=number_format($detail[0]->phibaohiem) ?></span></label>
                
              </div>
              <!-- //dong 2 -->
              <div class="form-group col-xs-8 col-sm-8 col-md-8">
                <label>BH thân vỏ xe : </label>
              </div>
              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label style="font-weight: bold;font-size: 120%;"><span id="spPhiBHDSthanxe"><?=number_format($detail[0]->phithanvo * $detail[0]->price) ?></span></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if ($listLikeCata && count($listLikeCata) > 0) { ?>
  <div class="container-fluid m2-content connected-tech-enform-content" style="margin-bottom: 0px ! important ; ">
    <div class="td-container" >
      <div class="modal-header" >
          <div class="m2-text-tile  section-header">
          <h2>Các mẫu xe <?=$detail[0]->nametype; ?></h2>
        </div>
      </div>
          <div class="vc_row wpb_row td-pb-row hightline-product">
            <div class="wpb_column vc_column_container td-pb-span12">
              <div class="wpb_wrapper">
                  <div class="td_block_wrap td_block_big_grid_1 td_uid_7_5731941f6334b_rand td-grid-style-1 td-hover-1 td-pb-border-top">
                      <div id="td_uid_7_5731941f6334b" class="td_block_inner">
                          <div class="td-big-grid-wrapper">
                              <div class="td-big-grid-scroll" id="khamphacacdongxe">
                              <?php foreach ($listLikeCata as $key => $v) : ?>
                                <div class="td_module_mx6 td-animation-stack col-sm-2 col-md-2-20 td-big-grid-post td-small-thumb grid-match-height grid-item first-row">
                                  <div class="m2-text-tile ">
                                    <a href="<?= PATH_URL . 'items/'. $v->slug ?>" class="navModel" data-model="<?= $v->name ?>" data-label="Sedans" style="height: 240px ! important">
                                      <div class="categoryImg">
                                        <img src="<?= PATH_URL . DIR_UPLOAD_CAR . $v->avatar ?>" alt="<?= $v->name ?>" width="76%">
                                      </div>
                                      <h3 class="title-line" style="padding-left:15px !important ;"> <strong><?= $v->name ?></strong> </h3>
                                      <ul class="model-specs">
                                        <li><span style="letter-spacing: 0px ! important;font-weight: bold; font-size: 14px;"><?=number_format($v->price) ?></span> </li>
                                      </ul>
                                      <?php if ($v->highlights == 1) { ?>
                                        <div class='rgba-banner1' style='background: #cf1b27;'><?= $v->uudai ?></div>
                                      <?php } ?>
                                      <?php if ($v->highlights == 2) { ?>
                                        <div class='rgba-banner1' style='background: #00b6f2;'><?= $v->uudai ?></div>
                                      <?php } ?>
                                    </a>
                                  </div>
                                </div>
                              <?php endforeach ?>
                              </div> 
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div> <!-- ./block -->
              </div>
            </div>
          </div>
      </div>
  </div>
  <?php } ?>