		<div class="split-section portfoliosection">
			<div class="container">
				<div class="inner">
					<div class="portfoliofilter ">
						<div class="inner clearfix">
							<div id="portfolio-thirds-filters" class="portfolio-filters-box">
								<h2>Ремонт квартир и офисов - наши работы</h2>
								<button class="active" data-filter="*">Все</button>
                                                                <?php foreach ($data['gallery']['sections'] as $rw):?>
                                                                <button data-filter=".class<?php echo $rw['id']; ?>"><?php echo $rw['title'];?></button>
                                                                <?php endforeach; ?>
							</div> <!-- end .portfolio-filters-box -->
						</div> <!-- end .inner -->
					</div> <!-- end .split-section-section -->
					<div class="portfolioimages">
						<div class="inner">
							<div id="portfolio-thirds" class="portfolio-thirds">
								<div class="portfolio-sizer"></div>

                                                                <?php foreach($data['gallery']['alboms'] as $rw):?>
                                                                <?php $path='/template/images/gallery/portfolio/'.$rw['id'].'.jpg';
                                                                if(!file_exists(ROOT.$path))
                                                                        $path='/template/images/portfolio01.png';
                                                                ?>
								<div class="item class<?php echo $rw['section'];?> cmo-portfolio-featured-image-bg" style="background-image: url('<?php echo $path; ?>');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
                                                                                    <a href="<?php echo $path; ?>" title="<?php echo $rw['title']; ?>" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="<?php echo $rw['link']; ?>"><?php echo $rw['title']; ?></a></h3>
											<div>
												<?php echo $rw['short_text']; ?>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->
                                                                <?php endforeach;?>

							</div> <!-- end .portfolio-thirds -->
						</div> <!-- end .inner -->
					</div> <!-- end .split-section-section -->
				</div> <!-- end .inner -->
				<div class="small no-padding-bottom white text-center">
					<div class="inner">
						<div class="container">
							<a href="/фото_ремонта" class="button mt40">Смотреть все наши работы</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .section -->
			</div>


		</div> <!-- end .split-section -->
