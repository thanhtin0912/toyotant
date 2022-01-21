				<div class="block-title">
					<div class="block-title__inner section-bg section-bg_second">
						<div class="bg-inner">
							<h1 class="ui-title-page">Toyota <?=$detailcate[0]->name ?></h1>
							<div class="decor-1 center-block"></div>
							<ol class="breadcrumb">
								<li><a href="<?=PATH_URL?>home">Trang chủ</a></li>
								<li class="active">Xe mới</li>
							</ol>
						</div><!-- end bg-inner -->
					</div><!-- end block-title__inner -->
				</div><!-- end block-title -->
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<main class="main-content">

								<?php if ($listproduct!='') { ?>
				                  	<?php foreach ($listproduct as $key => $listproduct): ;?>
				                  	<article class="card clearfix">
										<div class="card__img">
											<a href="<?=PATH_URL?>home/items/<?=$listproduct->slug ?>"><img class="img-responsive" src="<?=PATH_URL.DIR_UPLOAD_PRO_FILES.$listproduct->avata ?>" alt="foto"></a>


										</div>
										<div class="card__inner">
											<h2 class="card__title ui-title-inner"><a href="<?=PATH_URL?>home/items/<?=$listproduct->slug ?>"><?=$listproduct->name ?></a></h2>
											<div class="decor-1"></div>
											<div class="card__description">
												<p><?= cutText($listproduct->description, 200); ?>...</p>
											</div>
											<ul class="card__list list-unstyled">
												<li class="card-list__row">
													<span class="card-list__title">Kiểu dáng:</span>
													<span class="card-list__info"><?=$listproduct->bodyname ?></span>
												</li>
												<li class="card-list__row">
													<span class="card-list__title">Động cơ:</span>
													<span class="card-list__info"><?=$listproduct->dongco ?></span>
												</li>
												<li class="card-list__row">
													<span class="card-list__title">Năm SX:</span>
													<span class="card-list__info"><?=date('Y')?></span>
												</li>
												<li class="card-list__row">
													<span class="card-list__title">Màu sắc:</span>
													<span class="card-list__info"><?=$listproduct->color ?></span>
												</li>

											</ul>
											<div class="card__price">Giá bán:<span class="card__price-number"><?=number_format(($listproduct->price)/1000000);?> Triệu</span></div>
										</div>
									</article>
				                  	<?php endforeach ?>
				                 <?php }else{ ?>
								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="<?=PATH_URL?>assets/media/cards/2.jpg" height="196" width="235" alt="foto">
										<span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">MBENTLEY CONTINENTAL Supersports</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$29,415</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="<?=PATH_URL?>assets/media/cards/3.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">2015 Ferrari FXX</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$14,495</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="<?=PATH_URL?>assets/media/cards/4.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">DODGE VIPER 2015</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$17,890</span></div>
									</div>
								</article>
				              	<?php } ?>




								<!-- <ul class="pagination">
									<li><a href="javascript:void(0);">PREV</a></li>
									<li class="active"><a href="javascript:void(0);">1</a></li>
									<li><a href="javascript:void(0);">2</a></li>
									<li><a href="javascript:void(0);">3</a></li>
									<li><a href="javascript:void(0);">4</a></li>
									<li><a href="javascript:void(0);">5</a></li>
									<li><a href="javascript:void(0);">NEXT</a></li>
								</ul> -->

							</main><!-- end main-content -->
						</div><!-- end col -->


						<div class="col-md-3">
							<aside class="sidebar">
								<section class="widget widget_mod-a">
									<h3 class="widget-title">Mẫu xe khác</h3>
									<div class="decor-1"></div>
									<div class="widget-content">
										<ul class="list-categories list-unstyled">
											 <?php foreach ($cate as $key => $cate): ;?>
											 	<li class="list-categories__item">
													<a class="list-categories__link" href="<?=PATH_URL?>cates/<?=$cate->slug?>"><?=$cate->name ?></a>
												</li>
					                        <?php endforeach ?>
										</ul>
									</div>
								</section>

							</aside>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>