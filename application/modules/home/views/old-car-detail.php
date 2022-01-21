<link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/demo.css">
<style>
    .jssora05l, .jssora05r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 40px;
        cursor: pointer;
        overflow: hidden;
    }
    .jssora05l { background-position: -10px -40px; }
    .jssora05r { background-position: -70px -40px; }
    .jssora05l:hover { background-position: -130px -40px; }
    .jssora05r:hover { background-position: -190px -40px; }
    .jssora05l.jssora05ldn { background-position: -250px -40px; }
    .jssora05r.jssora05rdn { background-position: -310px -40px; }
    .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
    .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
    /* jssor slider thumbnail navigator skin 01 css */ /*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/
    .jssort01 .p {
        position: absolute;
        top: 0;
        left: 0;
        width: 72px;
        height: 72px;
    }
    .jssort01 .t {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    .jssort01 .w {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
    }
    .jssort01 .c {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 68px;
        height: 68px;
        border: #000 2px solid;
        box-sizing: content-box;
        _background: none;
    }
    .jssort01 .pav .c {
        top: 2px;
        _top: 0px;
        left: 2px;
        _left: 0px;
        width: 68px;
        height: 68px;
        border: #000 0px solid;
        _border: #fff 2px solid;
        background-position: 50% 50%;
    }
    .jssort01 .p:hover .c {
        top: 0px;
        left: 0px;
        width: 70px;
        height: 70px;
        border: #fff 1px solid;
        background-position: 50% 50%;
    }
    .jssort01 .p.pdn .c {
        background-position: 50% 50%;
        width: 68px;
        height: 68px;
        border: #000 2px solid;
    }
    .oc-title-h3{
        color: #121312;
        margin-bottom: 5px;
        letter-spacing: 0px;
        font-weight: bold;
        font-size: 22px;
        text-transform: none ! important;
    }

</style>
<div class="grid ">
    <div class="container-fluid m2-content pt-3">
        <div class="td-crumb-container">

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>">
                        <span itemprop="title">Trang Chủ</span>
                    </a>
                </span>
                <i class="fa fa-angle-double-right"></i>

                <span itemscope="">
                    <a title="Xe qua sử dụng" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>'xe-doi-tra'">
                        <span itemprop="title">Xe qua sử dụng</span>
                    </a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="Tin tức" class="entry-crumb" itemprop="url" href="#">
                        <span itemprop="title"><?=$detail[0]->name; ?></span>
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid m2-content connected-tech-enform-content pt-3">
    <div id="td-outer-wrap">
        <div class="td-transition-content-and-menu td-content-wrap">
            
            <article class="td-post-template-3 post-92741 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc tag-honor tag-huawei tag-note-8 tag-bvlq-huawei" itemscope="" itemtype="http://schema.org/Article">
                <div class="td-container">
                    <div class="td-pb-row">
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                            <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 700px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                    </div>
                                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 600px; overflow: hidden;">
                                        <?php $resultImages = unserialize($detail[0]->images)?>
                                        <?php foreach ($resultImages as $key => $v): ;?>
                                        <div data-p="144.50">
                                            <img data-u="image" src="<?= PATH_URL . DIR_UPLOAD_CAR_OLD . $v ?>" />
                                            <img data-u="thumb" src="<?= PATH_URL . DIR_UPLOAD_CAR_OLD . $v ?>" />
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <!-- Thumbnail Navigator -->
                                    <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:900px;height:100px;" data-autocenter="1">
                                        <!-- Thumbnail Item Skin Begin -->
                                        <div data-u="slides" style="cursor: default;">
                                            <div data-u="prototype" class="p">
                                                <div class="w">
                                                    <div data-u="thumbnailtemplate" class="t"></div>
                                                </div>
                                                <div class="c"></div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Item Skin End -->
                                    </div>
                                    <!-- Arrow Navigator -->
                                    <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                                    <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                                </div>
                                <script type="text/javascript">jssor_2_slider_init();</script>

   
                                <div class="clearfix"></div>
                              
                                <div class="td-post-content">
                                    <div class="modal-content" style="margin-top: 10px;">
                                        <div class="modal-header" style="background-image: linear-gradient(to top, #f3f3f3 1%, #f3f3f3); padding: 5px 15px ! important;">
                                            <h3  class="oc-title-h3"><?php echo($detail[0]->name); ?> - <?php echo($detail[0]->yearOf); ?></h3>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <label style="font-weight: bold;">Người bán:</label><span> <?php echo($detail[0]->saleTyle); ?> </span>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <label style="font-weight: bold;">Tình trạng:</label>
                                                    <span>
                                                    <?php
                                                    if ($detail[0]->tinhTrang == 1 || $detail[0]->tinhTrang === 1){
                                                        echo "Xe mới";
                                                    }
                                                    if ($detail[0]->tinhTrang == 0 || $detail[0]->tinhTrang === 0){
                                                        echo "Đã bán";
                                                    }
                                                    if ($detail[0]->tinhTrang == 2 || $detail[0]->tinhTrang === 2){
                                                        echo "Ưu đãi";
                                                    } 
                                                    ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body" style="padding:10px ! important; font-style: 120%">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-price">
                                                        <span style="padding-left: 23px;">Giá bán:</span>
                                                        <span class="PriceNow" style="font-weight: bold;">
                                                        <?php 
                                                            if ($detail[0]->price > 0) {
                                                                echo ($detail[0]->price); 
                                                            } else {
                                                                echo 'Liên hệ';
                                                            }
                                                        ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-yearof">
                                                        <span style="padding-left: 23px;">Năm SX:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->yearOf); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-kilomet">
                                                        <span style="padding-left: 23px;">Số KM:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->numberOfKilometers); ?> Km</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-maintence">
                                                        <span style="padding-left: 23px;">Bảo hành:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->maintence); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-cartype">
                                                        <span style="padding-left: 23px;">Kiểu xe:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->carType); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-color">
                                                        <span style="padding-left: 23px;">Màu sắc:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->color); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-companyreproduct">
                                                        <span style="padding-left: 23px;">Nơi SX:</span>
                                                        <span style="font-weight: bold;">
                                                            <?php echo($detail[0]->companyOf); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-fuel">
                                                        <span style="padding-left: 23px;">Nhiên liệu:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->fuel); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-gear">
                                                        <span style="padding-left: 23px;">Hộp số:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->gear); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 7px 0 ! important">
                                                    <div class="oc-engine">
                                                        <span style="padding-left: 23px;">Động cơ:</span>
                                                        <span style="font-weight: bold;"><?php echo($detail[0]->engine); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-content" style="margin-top: 10px;">
                                        <div class="modal-header" style="background-image: linear-gradient(to top, #f3f3f3 1%, #f3f3f3);padding: 10px ! important;">
                                            <h3  class="oc-title-h3">Thông tin chi tiết</h3>
                                        </div>
                                        <div class="modal-body" style="padding:10px 5px ! important;">
                                            <div class="tab-content">
                                                <div class="td-post-content">
                                                    <?= $detail[0]->content; ?>
                                                </div>
                                            </div><!-- /.tab-content -->
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>

                        <div class="td-pb-span4 td-main-sidebar" >
                            <div class="td-ss-main-sidebar" style="width: auto; position: static; top: auto; bottom: auto; z-index: 1;">
                            <div class="clearfix"></div>
                                <div class="td_block_wrap td_block_9 td_block_widget td_uid_11_579ff45b00bf4_rand td_with_ajax_pagination td-pb-border-top" style="margin-bottom: 10px;">
                                    <h4 class="td-related-title">
                                        <a id="td_uid_8_579ff45aed7fa" class="td-related-left td-cur-simple-item" >Tin tức toyota</a>
                                    </h4>
                                    <div  class="td_block_inner" id="divReview">
                                        <?php foreach ($tenNewsLate as $key => $v): ?>
                                        <div class="td-block-span12">
                                            <div class="td_module_8 td_module_wrap td-animation-stack" style="margin-bottom: 0px ! important; padding-top: 10px ! important;">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="td-module-thumb">
                                                            <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" rel="bookmark">
                                                                <img class="entry-thumb" src="<?=PATH_URL.DIR_UPLOAD_NEWS.$v->image;?>" width="100%">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                                        <div class="item-details" style="padding-left:5px ! important;">
                                                            <h4 class="entry-title td-module-title">
                                                                <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" rel="bookmark" title="<?= $v->title ?>"><?= $v->title ?></a>
                                                            </h4>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- ./td-block-span12 -->
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            
                                <div class="td_block_wrap td_block_9 td_block_widget td_uid_11_579ff45b00bf4_rand td_with_ajax_pagination td-pb-border-top">
                                    <h4 class="td-related-title">
                                        <a id="td_uid_8_579ff45aed7fa" class="td-related-left td-cur-simple-item" >Sản phẩm khác</a>
                                    </h4>
                                    <div  class="td_block_inner">
                                        <?php foreach ($oldProductOther as $key => $v): ?>
                                        <div class="td-block-span12">
                                            <div class="td_module_8 td_module_wrap td-animation-stack" style="margin-bottom: 0px ! important; padding-top: 10px ! important;">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="td-module-thumb">
                                                            <a href="<?= PATH_URL ?>olds/<?= $v->slug ?>" rel="bookmark"><img class="entry-thumb" src="<?= PATH_URL . DIR_UPLOAD_CAR_OLD . $v->avatar ?>" width="100%"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                                        <div class="item-details" style="padding-left:10px ! important;">
                                                            <h4 class="entry-title td-module-title">
                                                                <a href="<?= PATH_URL ?>olds/<?= $v->slug ?>" rel="bookmark" title=""><?= $v->name; ?> - <?= $v->yearOf; ?></a>
                                                            </h4>
                                                            <div class="td-module-meta-info">
                                                                <div class="td-post-date"><span style="font-size: 130%; color: red;"><?php echo number_format($v->price, 0); ?> VNĐ</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- ./td-block-span12 -->
                                        <?php endforeach ?>
                                    </div>
                                </div> <!-- ./block -->
                            </div>
                        </div> <!-- /.td-pb-row -->
                    </div>
                </div> <!-- /.td-container -->
            </article> <!-- /.post -->
        </div><!--close content div-->
    </div>
</div>

