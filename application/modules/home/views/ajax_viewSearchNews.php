

        <div class="wrap-post" >
            <?php  if($result!=''){
            foreach ($result as $key => $v): ?>
			<article class="post post_mod-c clearfix">
				<div class="entry-media">
					<img class="img-responsive" src="<?=PATH_URL.DIR_UPLOAD_NEWS.$v->image ?>" width="370" height="250" alt="Foto"/>
					<div class="post-hover"></div>
				</div>

				<div class="entry-main entry-main_mod-a">
					<div class="entry-main__inner">
						<h3 class="entry-title"><a href="<?=PATH_URL?>news/<?=$v->slug?>"><?=$v->title?></a></h3>
						<div class="entry-meta">
							<span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);">admin</a></span>
							<span class="entry-meta__item">:: <a class="entry-meta__link" href="javascript:void(0);"><?=$v->newstype?></a></span>
						</div>
					</div>
					<div class="decor-1"></div>
					<div class="entry-date">
						<span class="entry-date__inner">
							<span class="entry-date__number"><?php $date = $v->created ;echo date("d", strtotime($date)); ?></span><br><?php $date = $v->created ;echo date("m", strtotime($date)); ?></span>
					</div>
					<div class="entry-content">
						<p><?= cutText($v->description, 150); ?></p>
					</div>
					<a class="post-link" href="<?=PATH_URL?>news/<?=$v->slug?>">Xem thêm</a>
				</div>
			</article>
            <?php endforeach ?>
            <?php }else{ echo "Không có bài viết mới"; ?>

            <?php } ?>
           
        </div>
        <?php if($result){ ?>
        <div class="row">
            <div class="col-md-12 col-sm-12" style="display: none;">
                <?php if(($start+$per_page)<$total){ ?>
                <div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$start+$per_page?> of <?=$total?> entries</div>
                <?php }else{ ?>
                <div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$total?> of <?=$total?> entries</div>
                <?php } ?>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="dataTables_paginate paging_bootstrap_full_number" style="margin-top:3px">
                    <ul class="pagination" style="visibility: visible;">
                        <?=$this->adminpagination->create_links();?>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>

