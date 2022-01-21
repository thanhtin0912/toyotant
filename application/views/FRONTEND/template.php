<!DOCTYPE html>
<html class="">
<head>
  <title><?= $title ?></title>
  <meta name="description" content="<?=$meta_description?>">
  <meta name="keywords" content="<?=$meta_keywords?>">  
  <meta name="url" content="<?=$meta_url?>">  

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="big-deal">
  <meta property="og:image" content="<?=$meta_image?>">
  <meta property="og:image:width" content="700">
  <meta property="og:image:height" content="500">
  
  <meta property="og:description" content="<?=$meta_description?>">
  <meta property="fb:app_id" content="281639632256185" />
  <meta property="fb:admins" content="100000686899395">
  
  <link href="<?= PATH_URL; ?>assets/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/main.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/home.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/product.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/connected.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/hover.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/news.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/bootstrap.css"> 
  <!-- <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/bootstrap-theme.min.css"> -->
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/css_xemoi/style.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/font-awesome.min.css">
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/ionicons.min.css"  type="text/css" />
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/css/main.css" >
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/header-v5.css" >
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/tabs.css" >
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/menu-right.css" >
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/datepiker/style.css" >
  <link rel="stylesheet" href="<?= PATH_URL; ?>assets/css/frontend/select/style.css" > 
  <!-- Ionicons -->
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jquery.min.js"></script>
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/index.js"></script>
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/accordion1.js"></script>
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/easyResponsiveTabs.js"></script>
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/jssor.slider-28.1.0.min.js"></script>
  <!-- tab -->
  <script type="text/javascript" src="<?= PATH_URL; ?>assets/js/frontend/marquee.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      var $tabs = $('.horizontalTab');
      $tabs.responsiveTabs({
          rotate: false,
          startCollapsed: 'accordion',
          collapsible: 'accordion',
          setHash: true,
          disabled: [90,90],
          activate: function(e, tab) {
              $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
          },
          activateState: function(e, state) {
              //console.log(state);
              $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
          }
      });

      $('#start-rotation').on('click', function() {
          $tabs.responsiveTabs('startRotation', 1000);
      });
      $('#stop-rotation').on('click', function() {
          $tabs.responsiveTabs('stopRotation');
      });
      $('#start-rotation').on('click', function() {
          $tabs.responsiveTabs('active');
      });
      $('#enable-tab').on('click', function() {
          $tabs.responsiveTabs('enable', 3);
      });
      $('#disable-tab').on('click', function() {
          $tabs.responsiveTabs('disable', 3);
      });
      $('.select-tab').on('click', function() {
          $tabs.responsiveTabs('activate', $(this).val());
      });

      $('.parentHorizontalTab1').easyResponsiveTabs({
          type: 'default',
          width: 'auto',
          fit: true,
          tabidentify: 'hor_1',
          activate: function(event) {
              var $tab = $(this);
              var $info = $('#nested-tabInfo');
              var $name = $('span', $info);
              $name.text($tab.text());
              $info.show();
          }
      });
    });
    window.jssor_1_slider_init = function() {
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
        var MAX_WIDTH = 1920;

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
    window.jssor_2_slider_init = function() {
        var jssor_2_SlideshowTransitions = [
          {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
          {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        var jssor_2_options = {
          $AutoPlay: 1,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_2_SlideshowTransitions,
            $TransitionsOrder: 1
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $SpacingX: 5,
            $SpacingY: 5
          }
        };

        var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_2_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                jssor_2_slider.$ScaleWidth(expectedWidth);
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
  <script>
    $(function (){
        $('.simple-marquee-container').SimpleMarquee(); 
    });
  </script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108077760-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108077760-1');
  </script>
  <div id="fb-root"></div>
  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>
  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "492706284115467");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v11.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
<body  id="home">
<input type="hidden" value="<?=$this->security->get_csrf_hash()?>" id="csrf_token" />
<div id="wrapper">
  <div id="content">
    <div id="top-bar">
      <div class="container clearfix">
          <div class="top-links">
            <div class="contact">
              <ul class="sf-js-enabled clearfix" style="touch-action: pan-y;">
                <li><span class="name-hotline">CSKH: </span> <span class="cta-phone-roadside"><?= $info[0]->phone_cskh; ?></span></li>
                <li><span class="name-hotline">Cứu hộ: </span> <span class="cta-phone-roadside"><?= $info[0]->phone_ch;?></span></li>
                <li><span class="name-hotline">Đặt hẹn DV: </span> <span class="cta-phone-roadside"><?= $info[0]->phone_dv;?></span></li>
                <li><span class="name-hotline">Tư vấn BH: </span> <span class="cta-phone-roadside"><?= $info[0]->phone_bh;?></span></li>
              </ul>
            </div>
            <div class="social">
              <ul class="sf-js-enabled clearfix" style="touch-action: pan-y;">
                <li><a href="https://www.facebook.com/toyotanhatrang" target="_blank"><i class="fa fa-facebook-square icon-top-fa mt-1"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCkYQ6rQ4RnCvSA8FIeAnBPg" target="_blank"><i class="fa fa-youtube-play icon-top-yt mt-1"></i></a></li>
              </ul>
            </div>
          </div>
      </div>
	  </div>
    <div class="header-v5 header-static">
			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?=PATH_URL?>">
							<img id="logo-header" src="<?=PATH_URL?>assets/img/logo.png" alt="Logo">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Nav Menu -->
						<ul class="nav navbar-nav">
              <!-- Home -->
							<li><a href="<?=PATH_URL?>">Trang chủ</a></li>
							<!-- End Home -->
              <!-- products -->
							<li class="dropdown mega-menu-fullwidth">
								<a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" aria-expanded="false">
									Sản phẩm
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="container">
												<div class="row">
                          <div class="parentHorizontalTab1">
                              <ul class="resp-tabs-list hor_1" style="text-align:center;">
                                  <?php foreach ($body as $key => $v): ;?>
                                    <li><a href="#<?=$v->name ?>"><?=$v->name ?><br><img src="<?=PATH_URL.DIR_UPLOAD_CATE.$v->image ?>"></a></li>
                                  <?php endforeach ?>
                              </ul>
                              <div class="resp-tabs-container hor_1">
                                <?php foreach ($body as $key => $v): ;?>
                                <div  style="min-height :0px ! important;">
                                  <div class="wpb_column vc_column_container td-pb-span12">
                                    <div class="wpb_wrapper">
                                      <div class="td_block_wrap td_block_big_grid_1 td_uid_7_5731941f6334b_rand td-grid-style-1 td-hover-1 td-pb-border-top">
                                        <div class="td_block_inner">
                                          <div class="td-big-grid-wrapper">
                                            <div class="td-big-grid-scroll">
                                              <?php foreach ($cates as $key => $c): ?>

                                                <?php if($c->type == $v->id) {?>
                                                <?php $router = '#' ?>
                                                <?php foreach ($slugs as $key => $s): 
                                                  if($c->id == $s->type) {
                                                    $router = PATH_URL.'items/'.$s->slug;
                                                  }
                                                endforeach ?>
                                                  <div class="td_module_mx6 td-animation-stack col-sm-2 col-md-2-20 td-big-grid-post td-small-thumb grid-match-height grid-item first-row">
                                                    <div class="m2-text-tile ">
                                                      <a href="<?= $router?>" class="navModel" data-model="<?=$c->name?>" data-label="Sedans" style="height: 240px ! important">
                                                        <div class="categoryImg">
                                                          <img src="<?=PATH_URL.DIR_UPLOAD_CATE.$c->avatar?>" alt="<?=$c->name?>" width="76%">
                                                        </div>
                                                        <h3 class="title-line" style="padding-left:15px !important ;"> <strong><?=$c->name?></strong> </h3>
                                                        <ul class="model-specs">
                                                          <li><span style="letter-spacing: 0px ! important;font-weight: bold; font-size: 14px;"><?=$c->description?></span> </li>
                                                        </ul>
                                                        <?php if ($c->highlights == 1) { ?>
                                                          <div class='rgba-banner1' style='background: #cf1b27;'><?= $c->content ?></div>
                                                        <?php } ?>
                                                        <?php if ($c->highlights == 2) { ?>
                                                          <div class='rgba-banner1' style='background: #00b6f2;'><?= $c->content ?></div>
                                                        <?php } ?>
                                                      </a>
                                                    </div>
                                                  </div>
                                                <?php } ?>
                                              <?php endforeach ?>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="compare-container"></div>
                                  
                                </div>
                                <?php endforeach ?>
                              </div>
                          </div>
                        </div><!--/end row-->
											</div><!--/end container-->
										</div><!--/end mega menu content-->
									</li>
								</ul><!--/end dropdown-menu-->
							</li>
							<!-- End products -->
              <!-- Tech -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Công nghệ
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?= PATH_URL ?>cong-nghe-hibrid">Hybrid</a></li>
									<li><a href="<?= PATH_URL ?>cong-nghe-tss">TSS</a></li>
									<li><a href="<?= PATH_URL ?>cong-nghe-tnga">TNGA</a></li>
								</ul>
							</li>
							<!-- End Tech -->
							<!-- Service -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                  Dịch vụ
								</a>
								<ul class="dropdown-menu">
                  <li><a href="<?=PATH_URL?>dich-vu-bao-duong">Dịch vụ</a></li>
									<li><a href="<?=PATH_URL?>tin-dung">Tài chính & tín dụng</a></li>
                  <li><a href="<?=PATH_URL?>bao-hiem">Bảo hiểm</a></li>
                  <li><a href="<?=PATH_URL?>xe-doi-tra">Xe qua sử dụng</a></li>
								</ul>
							</li>
							<!-- End Service -->
              <!-- News -->
							<li><a href="<?=PATH_URL?>tin-tuc">Tin tức</a></li>
							<!-- End News -->
              <!-- News -->
							<li><a href="<?=PATH_URL?>lien-he">Liên hệ</a></li>
							<!-- End News -->
              <!-- Search Block -->
              <li>
                <i class="search fa fa-search search-btn"></i>
                <div class="search-open">
                  <div class="input-group animated fadeInDown" style="display: none;">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn-u" type="button">Go</button>
                    </span>
                  </div>
                </div>
              </li>
              <!-- End Search Block -->
						</ul>
						<!-- End Nav Menu -->
					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
        <!-- menu cho mobile -->


    <script src="<?= PATH_URL; ?>assets/js/frontend/global-nav.js"></script>

    <?= $content ?>

    <!-- FOOTER -->
    <footer>
   <!-- menu footer for mobile -->
   <div class="footer small">
      <!-- row 1st -->
      <h5 class="section-heading ">
         <span>Liên hệ nhanh</span>
         <span class="status-indicator"></span>
      </h5>
      <ul class="secondary-links-footer " data-category="newcars">
        <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone?>"><strong>Hotline: <?= $info[0]->phone?></strong></a></li>
        <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_cskh?>"><strong>CSKH: <?= $info[0]->phone_cskh?></strong></a></li>
        <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_ch?>"><strong>Cứu hộ: <?= $info[0]->phone_ch?></strong></a></li>
        <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_dv?>"><strong>Đặt hẹn DV: <?= $info[0]->phone_dv?></strong></a></li>
        <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_bh?>"><strong>Tư vấn BH: <?= $info[0]->phone_bh?></strong></a></li>
      </ul>
      <!-- row 2rd -->
      <h5 class="section-heading ">
         <span>DANH MỤC KHÁC</span>
         <span class="status-indicator"></span>
      </h5>
      <ul class="secondary-links-footer " data-category="service">
         <li class="small medium large">
            <a href="<?= PATH_URL; ?>gioi-thieu" data-label="TỔNG QUAN">GIỚI THIỆU</a>
         </li>
         <li class="small medium large">
            <a href="<?= PATH_URL; ?>tin-tuc" data-label="BẢO HÀNH">TIN TỨC</a>
         </li>
         <li class="small medium large"><a href="<?= PATH_URL; ?>dieu-khoan-chinh-sach" data-label="Newsletter Signup">CHÍNH SÁCH &amp; ĐIỀU KHOẢN</a></li>
         <li class="small medium large"><a href="<?= PATH_URL; ?>chinh-sach-bat-mat-thong-tin" data-label="Newsletter Signup">CHÍNH SÁCH BẢO MẬT THÔNG TIN CÁ NHÂN</a></li>
      </ul>
      <!-- row 3th -->
      <ul class="secondary-links-footer " data-category="contact">
         <li class="small medium large">
            <a href="<?= PATH_URL; ?>lien-he"> Km5 đường 23/10 - Vĩnh Hiệp - Nha Trang - Khánh Hòa<span class="external-site"> </span></a>
         </li>
      </ul>
      <h5 class="section-heading ">
         <span>THEO DÕI CHÚNG TÔI</span>
         <span class="status-indicator"></span>
      </h5>
      <ul class="secondary-links-footer " data-category="contact">
         <li class="small medium large">
            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/toyotanhatrang/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftoyotanhatrang%2F%3Ffref%3Dts&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 0px;"><iframe name="f17fd1cc0d62b88" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v11.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2b53e6c8a24438%26domain%3Dtoyotanhatrang.com.vn%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Ftoyotanhatrang.com.vn%252Ffa6f8c25f9b4dc%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftoyotanhatrang%2F%3Ffref%3Dts&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" class="" style="border: none; visibility: visible; width: 340px; height: 0px;"></iframe></span></div>
         </li>
      </ul>
   </div>
   <div class="footer large">
      <div class="footer-wrapper">
         <div class="primary-links">
            <ul class="high-level-links">
               <li class="small medium large"><a href="<?= PATH_URL; ?>lienhe">Tìm đường đi</a></li>
               <li class="small medium large"><a href="#">Công ty cổ phần TOYOTA Nha Trang</a></li>
               <li class="small medium large"><a href="#">Giấy CNĐKDN: 4201302897  Ngày cấp: 06/07/2011</a></li>
               <li class="small medium large"><a href="#">Cơ quan cấp: sở kế hoạch và đầu tư tỉnh Khánh Hòa</a></li>
               <li class="small medium large"><a href="#">Địa chỉ: đường 23/10, Xã Vĩnh Hiệp, Thành phố Nha Trang, Tỉnh Khánh Hòa, Việt Nam</a></li>
               <a title="cta-phone-roadside" href="http://www.online.gov.vn/CustomWebsiteDisplay.aspx?DocId=15650" target="_blank"><img class="img-responsive" width="70%" src="http://online.gov.vn/PublicImages/2015/08/27/11/20150827110756-dathongbao.png"></a>
            </ul>
         </div>
         <ul class="secondary-links">
            <li class="link-container">
               <h5 class="section-heading">Liên hệ nhanh</h5>
               <ul data-category="newcars">
                  <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone?>"><strong>Hotline: <?= $info[0]->phone?></strong></a></li>
                  <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_cskh?>"><strong>CSKH: <?= $info[0]->phone_cskh?></strong></a></li>
                  <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_ch?>"><strong>Cứu hộ: <?= $info[0]->phone_ch?></strong></a></li>
                  <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_dv?>"><strong>Đặt hẹn DV: <?= $info[0]->phone_dv?></strong></a></li>
                  <li class="small medium large"><a class="cta-phone-roadside" href="tel:<?= $info[0]->phone_bh?>"><strong>Tư vấn BH: <?= $info[0]->phone_bh?></strong></a></li>
               </ul>
            </li>
            <li class="link-container">
               <h5 class="section-heading ">
                  DANH MỤC KHÁC
               </h5>
               <ul class="secondary-links-footer ">
                  <li class="small medium large">
                     <a href="<?= PATH_URL; ?>gioi-thieu" data-label="GIỚI THIỆU">GIỚI THIỆU</a>
                  </li>
                  <li class="small medium large">
                     <a href="<?= PATH_URL; ?>tin-tuc" data-label="TIN TỨC">TIN TỨC</a>
                  </li>
                  <li class="small medium large">
                     <a href="<?= PATH_URL; ?>dich-vu-bao-duong" data-label="BẢO HÀNH">DỊCH VỤ & BẢO DƯỠNG</a>
                  </li>
                  <li class="small medium large">
                     <a href="<?= PATH_URL; ?>tin-dung" data-label="BẢO HÀNH">TÍN DỤNG</a>
                  </li>
                  <li class="small medium large">
                     <a href="<?= PATH_URL; ?>bao-hiem" data-label="BẢO HÀNH">BẢO HIỂM</a>
                  </li>
                  <!-- <li class="small medium large"><a href="" data-label="Newsletter Signup" >CÂU HỎI THƯỜNG GẶP</a></li> -->
                  <li class="small medium large"><a href="<?= PATH_URL; ?>dieu-khoan-chinh-sach" data-label="Newsletter Signup">CHÍNH SÁCH &amp; ĐIỀU KHOẢN</a></li>
                  <li class="small medium large"><a href="<?= PATH_URL; ?>chinh-sach-bao-mat-thong-tin" data-label="Newsletter Signup">CHÍNH SÁCH BẢO MẬT THÔNG TIN CÁ NHÂN</a></li>
               </ul>
            </li>
            <li class="link-container">
               <h5 class="section-heading">Theo dõi chúng tôi</h5>
               <ul data-category="newcars">
                  <li class="small medium large">
                     <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/toyotanhatrang/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=187&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftoyotanhatrang%2F%3Ffref%3Dts&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 187px; height: 130px;"><iframe name="f1ed4254f93875c" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v11.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2ee0e6a49c05fc%26domain%3Dtoyotanhatrang.com.vn%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Ftoyotanhatrang.com.vn%252Ffa6f8c25f9b4dc%26relation%3Dparent.parent&amp;container_width=187&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftoyotanhatrang%2F%3Ffref%3Dts&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 187px; height: 130px;" class=""></iframe></span></div>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</footer>
    <div class="footer-disclaimer-container">
      <div class="footer-disclaimer">
        <a href="dieu-khoan-chinh-sach">CHÍNH SÁCH & ĐIỀU KHOẢN - </a>
        <a href="chinh-sach-bat-mat-thong-tin">BẢO MẬT THÔNG TIN CÁ NHÂN - </a>
        <a href="" target="_blank">Trang web thuộc bản quyền của TOYOTA Nha Trang</a><br>
        <p>Km5 đường 23/10 - Vĩnh Hiệp - Nha Trang - Khánh Hòa</p>
      </div>
    </div>
  </div>
</div>
<div class="tool">
  <ul class="tool-list-contain show">
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="<?= PATH_URL ?>du-toan-tai-chinh">
                <span class="item-image">
                    <span class="bg-icon_calculate"></span>
                </span>
                <span class="item-title">Dự toán chi phí</span>
            </a>
        </div>
    </li>
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="<?= PATH_URL ?>dang-ky-lai-thu">
                <span class="item-image">
                    <span class="bg-icon_drive"></span>
                </span>
                <span class="item-title">Đăng ký lái thử</span>
            </a>
        </div>
    </li>
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="<?= PATH_URL ?>dat-lich-dich-vu">
                <span class="item-image">
                    <span class="bg-icon_service"></span>
                </span>
                <span class="item-title">Đặt hẹn dịch vụ</span>
            </a>
        </div>
    </li>
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="https://www.toyota.com.vn/media/gzzdzvuj/b%E1%BA%A3ng-gi%C3%A1-xe.pdf" download target="_blank">
                <span class="item-image">
                    <span class="bg-icon_price"></span>
                </span>
                <span class="item-title"> Bảng giá</span>
            </a>
        </div>
    </li>
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="https://www.facebook.com/toyotanhatrang" target="_blank">
                <span class="item-image">
                    <span class="bg-icon_facebook"></span>
                </span>
                <span class="item-title"> Facebook TNT</span>
            </a>
        </div>
    </li>
    <li class="tool-list-item">
        <div class="item-contain">
            <a href="https://www.youtube.com/channel/UCkYQ6rQ4RnCvSA8FIeAnBPg" target="_blank">
                <span class="item-image">
                    <span class="bg-icon_youtube"></span>
                </span>
                <span class="item-title"> Youtube TNT</span>
            </a>
        </div>
    </li>
  </ul>
</div>
<div class="tool-mobile">
  <a href="<?= PATH_URL ?>du-toan-tai-chinh" class="tool-item">
      <span class="bg-icon_calculate"></span>
  </a>
  <a href="<?= PATH_URL ?>dang-ky-lai-thu" class="tool-item">
      <span class="bg-icon_drive"></span>
  </a>
  <a href="<?= PATH_URL ?>dat-lich-dich-vu" class="tool-item">
      <span class="bg-icon_service"></span>
  </a>
  <a href="https://www.toyota.com.vn/media/gzzdzvuj/b%E1%BA%A3ng-gi%C3%A1-xe.pdf" download class="tool-item" target="_blank">
      <span class="bg-icon_price"></span>
  </a>
  <a href="https://www.facebook.com/toyotanhatrang" class="tool-item">
      <span class="bg-icon_facebook"></span>
  </a> 
  <a href="https://www.youtube.com/channel/UCkYQ6rQ4RnCvSA8FIeAnBPg" class="tool-item">
      <span class="bg-icon_youtube"></span>
  </a> 
</div>
<div class="hotline">
    <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
      <div class="phonering-alo-ph-circle"></div>
      <div class="phonering-alo-ph-circle-fill"></div>
      <div class="phonering-alo-ph-img-circle">
        <a class="pps-btn-img" title="Liên hệ" href="tel:0912909032"> 
          <img src="<?= PATH_URL; ?>assets/img/hotline.png" alt="Liên hệ" class="img-responsive" width="50"></a>
      </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
      $('#timeline').mixItUp();
  });
</script>
<style type="text/css">
    #timeline .mix{
        display: none;
    };
</style>


<script src="<?= PATH_URL; ?>assets/js/frontend/js/bootstrap.min.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/js/jquery.prettyPhoto.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/js/jquery.isotope.min.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/js/main.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/js/wow.min.js"></script>
 
<script src="<?= PATH_URL; ?>assets/js/frontend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/jquery.form.js"></script> 
<script src="<?= PATH_URL; ?>assets/js/frontend/owl.carousel.js" type="text/javascript"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/dist/js/app.min.js" type="text/javascript"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/wow.js"></script> 
<script src="<?= PATH_URL; ?>assets/js/frontend/responsive-tag.js"></script> 
<script src="<?= PATH_URL; ?>assets/js/frontend/main.js" type="text/javascript"></script> 
<script src="<?= PATH_URL; ?>assets/js/frontend/jquery.number.js" type="text/javascript"></script> 
<script src="<?= PATH_URL; ?>assets/js/frontend/salvattore.js"></script> 
<script src='<?= PATH_URL; ?>assets/js/frontend/datepiker/jquery.dateFormat.js'></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/datepiker/index.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/bootstrap-notify.min.js"></script>
<script src="<?= PATH_URL; ?>assets/js/frontend/jquery.mixitup.js"></script>
<script type="text/javascript">
  var root = '<?=PATH_URL?>';
  var csrf_token;
  function notify(ms,type){
    $.notify({
      message: ms 
    },{
      type: type
    });
  }
</script>
</body>
</html>

