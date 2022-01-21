  <style>
    .viewmore-employee-product {
      padding-bottom: 20px;
    }
    .link-viewmore {
      width: 100%;
      height: 1px;
      background-color: #ccc;
      position: relative;
      display: inline-block;
    }
    .link-viewmore:before {
      right: 0;
      background: linear-gradient(to left, white, rgba(255, 255, 255, 0));
      position: absolute;
      top: 0;
      height: 100%;
      display: inline-block;
      z-index: 1;
      width: 30%;
      content: '';
    }

    .link-viewmore:after {
      left: 0;
      background: -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
      position: absolute;
      top: 0;
      height: 100%;
      display: inline-block;
      z-index: 1;
      width: 30%;
      content: '';
    }
    .cta-box img{
      width: 100px;
      height: 100%;
    }
  </style>
  <div class="wrapper">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        <?php foreach ($banner as $key => $banner) :; ?>
          <div>
            <a href="<?= $banner->url ?>"><img data-u="image" data-src="<?= PATH_URL . DIR_UPLOAD_BANNER . $banner->image ?>" src="<?= PATH_URL . DIR_UPLOAD_BANNER . $banner->image ?>" /></a>
          </div>
        <?php endforeach ?>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
          </svg>
        </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
          <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    jssor_1_slider_init();
  </script>
  <div class="container-fluid m2-content connected-tech-enform-content" style="margin-top: 1em;">
    <div id="enform-on-us" class="enform-on-us content-section">
      <div class="m2-text-tile  section-header">
        <h2>KHÁM PHÁ CÁC DÒNG XE</h2>

      </div>
    </div>
    <div class="td-container">
      <div class="vc_row wpb_row td-pb-row">
        <div class="wpb_column vc_column_container td-pb-span12">
          <div class="wpb_wrapper">
            <div class="td_block_wrap td_block_big_grid_1 td_uid_7_5731941f6334b_rand td-grid-style-1 td-hover-1 td-pb-border-top">
              <div class="td_block_inner">
                <div class="td-big-grid-wrapper">
                  <div class="td-big-grid-scroll">
                    <?php foreach ($cates as $key => $v) : ?>
                      <?php $router = '#';
                      foreach ($slugs as $key => $s): 
                        if($v->id == $s->type) {
                          $router = PATH_URL.'items/'.$s->slug;
                        }
                      endforeach 
                      ?>
                      <div class="td_module_mx6 td-animation-stack col-sm-2 col-md-2-20 td-big-grid-post td-small-thumb grid-match-height grid-item first-row">
                        <div class="m2-text-tile ">
                          <a href="<?= $router?>" class="navModel" data-model="<?= $v->name ?>" data-label="Sedans" style="height: 240px ! important">
                            <div class="categoryImg">
                              <img src="<?= PATH_URL . DIR_UPLOAD_CATE . $v->avatar ?>" alt="<?= $v->name ?>" width="76%">
                            </div>
                            <h3 class="title-line" style="padding-left:15px !important ;"> <strong><?= $v->name ?></strong> </h3>
                            <ul class="model-specs">
                              <li><span style="letter-spacing: 0px ! important;font-weight: bold; font-size: 14px;"><?= $v->description ?></span> </li>
                            </ul>
                            <?php if ($v->highlights == 1) { ?>
                              <div class='rgba-banner1' style='background: #cf1b27;'><?= $v->content ?></div>
                            <?php } ?>
                            <?php if ($v->highlights == 2) { ?>
                              <div class='rgba-banner1' style='background: #00b6f2;'><?= $v->content ?></div>
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
  <div class="container-fluid m2-content connected-tech-enform-content">
    <p class="viewmore-employee-product">
      <a class="link-viewmore"></a>
    </p>
    <div class="container-fluid column-grid">
      <div class="grid-row grid-match-height cta-box">
        <!-- so sanh -->
        <div class="col-xs-12 col-sm-4 col-md-4 grid-match-height grid-item">
          <div class="m2-text-tile " style="text-align: center ! important">
            <a href="<?= PATH_URL ?>dang-ky-lai-thu" style="cursor: pointer ! important;">
            <img class="img-responsive hvr-float-shadow test-driver" src="<?= PATH_URL ?>assets/img/laithu.jpg" alt="">
              <div class="m2-accordion faq-accordion ">
                <h3>Đăng ký lái thử</h3>
              </div>
            </a>
          </div>
        </div>

        <!-- Tai chinh -->
        <div class="col-xs-12 col-sm-4 col-md-4 grid-match-height grid-item">
          <div class="m2-text-tile " style="text-align: center ! important">
            <a href="<?= PATH_URL ?>du-toan-tai-chinh" style="cursor: pointer ! important;">
            <img class="img-responsive hvr-float-shadow finance" src="<?= PATH_URL ?>assets/img/taichinh.jpg" alt="">
              <div class="m2-accordion faq-accordion ">
                <h3>Dự toán tài chính</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 grid-match-height grid-item">
          <div class="m2-text-tile " style="text-align: center ! important">
            <a href="<?= PATH_URL ?>dat-lich-dich-vu" style="cursor: pointer ! important;">
            <img class="img-responsive hvr-float-shadow arrow calendar" src="<?= PATH_URL ?>assets/img/lich.jpg" alt="">
              <div class="m2-accordion faq-accordion ">
                <h3>Đặt lịch dịch vụ</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <p class="viewmore-employee-product">
      <a class="link-viewmore"></a>
    </p>
  </div>
  
  <div class="container-fluid m2-content connected-tech-enform-content news-content pt-4">
    <div class="enform-on-us content-section">
      <div class="m2-text-tile  section-header">
        <h2>Tin tức</h2>
      </div>
    </div>
    <ul class="portfolio-filter text-center list-news-icon text-center">
      <li style="margin: 0 7px;">
        <a class="filter action" data-filter="all" title="Tất cả">
          <p class="news-type" style="font-weight:bold; color: #94be4e;">TẤT CẢ</p>
        </a>
      </li>
      <?php foreach ($news_cates as $key => $c) :; ?>
        <li style="margin: 0 7px;">
          <a class="filter action" data-filter=".filter-<?= $c->id ?>" title="<?= $c->name ?>">
            <p class="news-type" style="font-weight:bold; color: <?= $c->description ?>;"><?= $c->name ?></p>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
    <!--/#portfolio-filter-->
    <div id="timeline" data-columns>
      <?php foreach ($news as $key => $v) : ?>
        <div class="mix filter-<?= $v->type ?> explore-item-f1  data-explore-standard scroll-active" style="padding-left : 5px; padding-right:5px; margin-bottom: 20px;opacity: 1;    vertical-align: top;position: none ! important; top: none ! important; transform:none ! important; vertical-align:none ! important;">
          <div class="explore-item-wrapper" style="box-shadow: 0 2px 3px rgba(0, 0, 0, .38);border-radius: 6px;">
            <div class="explore-item-option">
              <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" data-image-hover="" class="explore-item-thumb-link explore-image-overlay">
                <picture lazyload="true" class="tcom-picture">
                  <img style="border-top-left-radius: 10px;border-top-right-radius: 10px;" width="" src="<?= PATH_URL . DIR_UPLOAD_NEWS . $v->image ?>" class="explore-item-img">
                </picture>
              </a>
              <div class="section-intro" style="color: <?= $v->color ?>;">
                <span><?= $v->newstype ?></span>
                <span style="float: right;"><i class="fa fa-eye"></i>&nbsp;<?= $v->countView ?></span>
              </div>
              <div class="explore-item-content" style="padding-left: 10px;padding-right: 10px;">
                <span class="explore-item-category"></span>
                <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" class="explore-item-heading"><?= $v->title ?></a>
                <div></div>
                <p class="explore-item-copy">&nbsp; &nbsp; &nbsp; <?= $v->description; ?></p>
                <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" class="explore-item-link"></a>
              </div>
              <div class="section-intro" style="height: 5px;">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
