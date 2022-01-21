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
                    <a title="Tin tức" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Tin tức</span></a>
                </span>
            </div>
        </div>
    </div>
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
              <div class="explore-item-content">
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