<style>
	.box-content {
		font-weight: bold;
		font-size: 16px;
		padding-bottom: 1em;
		line-height: 1.6em;
	}
</style>
<div class="grid pt-3">
    <div class="container-fluid m2-content">
        <div class="td-crumb-container" >

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb"  href="<?=PATH_URL?>"><span itemprop="title">Trang Chủ</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>

                <span itemscope="">
                    <a title="Tin tức" class="entry-crumb"  href="<?=PATH_URL?>tin-tuc"><span itemprop="title">Tin tức</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="<?=$detail[0]->title; ?>" class="entry-crumb" ><span ><?=$detail[0]->title; ?></span></a>
                </span>
            </div>
        </div>  
   </div> 
</div>

<div class="container-fluid m2-content connected-tech-enform-content pt-4">
    <div id="td-outer-wrap">
        <div class="td-transition-content-and-menu td-content-wrap">
            <article id="post-92741" class="td-post-template-3 post-92741 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc tag-honor tag-huawei tag-note-8 tag-bvlq-huawei" itemscope="" itemtype="http://schema.org/Article">
                <div class="td-container">
                    <div class="td-pb-row">
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content td-post-header">
                                <div class="td-post-header-holder td-image-gradient">
                                    <div class="td-post-featured-image">
                                        <a href="" data-caption="" class="td-modal-image">
                                            <img  class="entry-thumb" src="<?= PATH_URL . DIR_UPLOAD_NEWS . $detail[0]->image ?>" alt="" title="<?=$detail[0]->title; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="section-header" style="margin-bottom: 15px ! important; ">
                                    <h2 style="font-weight: bold; font-size: 20px ! important;letter-spacing : 0px ! important;line-height: 30px ! important; text-transform: none ! important;"><?=$detail[0]->title; ?></h2>
                                </div>
                                
                                <div class="clearfix"></div>
                                <div class="section-header" >
                                    <div class="col-xs-3 col-md-3 col-sm-3" style="margin-bottom: 25px ! important; ">
										<div class="fb-share-button" data-href="<?= PATH_URL ?>news/<?= $detail[0]->slug ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftoyotanhatrang.com.vn%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-6 col-sm-6" style="margin-bottom: 25px ! important; ">
                                        <span class="td-post-views"><i class="fa fa-calendar" style="color: #354c8c"></i>&nbsp; &nbsp;<?= date("d/m/Y", strtotime($detail[0]->created )); ?></span>
                                    </div>   
                                    <div class="col-xs-3 col-md-3 col-sm-3" style="margin-bottom: 25px ! important; ">
                                        <span class="td-post-views"><i class="fa fa-eye" style="color: #354c8c"></i>&nbsp; &nbsp;<?=$detail[0]->countView; ?></span>
                                    </div>  
                                </div>
                                <div class="clearfix"></div>
								<div class="box-content">
									<?=$detail[0]->description; ?>
								</div>
                                <div class="td-post-content">
                                    <?= $detail[0]->content; ?>
                                </div>
								<div class="td_block_wrap td_block_related_posts td_uid_7_579ff45aeb48c_rand td_with_ajax_pagination td-pb-border-top">
                                    <h4 class="td-related-title">
                                        <a id="td_uid_8_579ff45aed7fa" class="td-related-left td-cur-simple-item" >BÀI VIẾT LIÊN QUAN</a>
                                    </h4>
                                    <div id="td_uid_7_579ff45aeb48c" class="td_block_inner">
                                    	<div class="td-related-row">
                                            <?php foreach ($threeNewsLikeCata as $key => $v): ?>
                                        	<div class="td-related-span4">
                                                <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                                    <div class="td-module-image">
                                                        <div class="td-module-thumb">
                                                            <a href="<?= PATH_URL ?>news/<?= $v->slug ?>" rel="bookmark" title="<?= $v->title ?>">
                                                                <img  class="entry-thumb img-responsive" src="<?=resizeImage(PATH_URL.DIR_UPLOAD_NEWS.$v->image,500, 250)?>" alt="" title="<?= $v->title ?>">
                                                            </a>
                                                        </div>                
                                                    </div>
                                                    <div class="item-details" >
                                                        <h4 class=" td-module-title" style="font-size: 15px ! important; font-weight: bold ! important; line-height: 25px ! important;">
                                                            <a href="<?= PATH_URL ?>news/<?= $v->slug ?>"  title="<?= $v->title ?>"><?= $v->title ?></a>
                                                        </h4>
                                                    </div>
                                                </div>
    	                                    </div> <!-- ./td-related-span4 -->
                                        	<?php endforeach ?>
                                            <!-- ./td-block-span12 -->
                                        </div><!--./row-fluid-->
                                    </div>
                                    <div class="td-next-prev-wrap"></div>
                                </div> <!-- ./block -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
						<div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar" style="width: auto; position: static; top: auto; bottom: auto; z-index: 1;">
                                <div class="td_block_wrap td_block_9 td_block_widget td_uid_11_579ff45b00bf4_rand td_with_ajax_pagination td-pb-border-top">
									<h4 class="td-related-title">
                                        <a id="td_uid_8_579ff45aed7fa" class="td-related-left td-cur-simple-item" >TIN TỨC NỔI BẬT</a>
                                    </h4>
                                    <div id="td_uid_11_579ff45b00bf4" class="td_block_inner">
                                        <?php foreach ($tenNewsLate as $key => $v): ?>
                                    	<div class="td-block-span12">
                                            <div class="td_module_8 td_module_wrap" style="margin-bottom: 0 ! important;">
                                                <div class="item-details">
                                                    <h4 class="entry-title td-module-title">
														<a href="<?= PATH_URL ?>news/<?= $v->slug ?>"  title="<?= $v->title ?>"><?= $v->title ?></a>
                                                    </h4>
                                                    <div class="td-module-meta-info">
                                                        <div class="td-post-date">
                                                        <?= date("d/m/Y", strtotime($v->created)); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                    	</div> <!-- ./td-block-span12 -->
                                        <?php endforeach ?>
    	                           </div>
                                </div> <!-- ./block -->                       
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> 
                </div>
            <!-- /.td-container -->
            </article> <!-- /.post -->
        </div><!--close content div-->
    </div>
</div>

