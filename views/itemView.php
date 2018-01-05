<?php include_once ROOT.'/views/header.php';?>

		<div class="page-title mb80" style="background-image: url('images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title']; ?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white no-padding-top">
			<div class="inner">
				<div class="container">
					<ul class="nav nav-tabs" role="tablist">
                                            <?php foreach ($data['items'] as $i=>$rw):?>
                                            <?php if($rw['is_main']):?>
                                            <li role="presentation"<?php if($i==0): ?> class="active"<?php endif;?>><a href="#class<?php echo $rw['id'];?>" aria-controls="class<?php echo $rw['id'];?>" role="tab" data-toggle="tab">
							<div class="inner"><i class="constructor-wrench-box"></i><?php echo $rw['title'];?></div>
						</a></li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
					</ul>
					<div class="tab-content">
                                            <?php foreach ($data['items'] as $i=>$rw):?>
                                            <?php if($rw['is_main']):?>
						<div role="tabpanel" class="tab-pane fade in<?php if($i==0): ?> active<?php endif;?>" id="class<?php echo $rw['id'];?>">
							<div class="row">
								<div class="col-sm-6">
                                                                        <?php echo $rw['short_text2'];?>
									<a href="<?php echo $rw['link'];?>" class="button">Подробнее</a>
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6 clearfix">
									<img src="<?php echo (file_exists(ROOT.'/template/images/items/475x477/'.$rw['id'].'.jpg')?'/template/images/items/475x477/'.$rw['id'].'.jpg':'/template/images/image.png'); ?>" alt="<?php echo $rw['title'];?>" class="img-responsive pull-right">
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .tab-pane -->
                                                <?php endif; ?>
                                            <?php endforeach; ?>
					</div> <!-- end .tab-content -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section no-padding">
			<div class="inner">
				<div class="service-boxes">
                                        <?php foreach ($data['items'] as $i=>$rw):?>
                                        <?php if(!$rw['is_main']):?>                                    
					<div class="service-box" style="background-image: url('<?php echo (file_exists(ROOT.'/template/images/items/482x350/'.$rw['id'].'.jpg')?'/template/images/items/482x350/'.$rw['id'].'.jpg':'/template/images/service1.png'); ?>');">
						<div class="overlay">
							<div class="inner">
                                                            <a href="<?php echo $rw['link'];?>" class="button"><?php echo $rw['title'];?></a>
								<p><?php echo $rw['short_text']; ?></p>
							</div> <!-- end .inner -->
						</div> <!-- end .overlay -->
					</div> <!-- end .service-box -->
                                        <?php endif; ?>
                                        <?php endforeach; ?>
				</div> <!-- end .service-boxes -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="section white no-padding-bottom">
			<div class="inner">
				<div class="container">
					<div class="row aligned-cols">
						<div class="col-sm-8">
                                                    <?php echo $data['text2']; ?>
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4 aligned-bottom">
							<img src="/template/images/man.png" alt="man" class="img-responsive">
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/portfolio.php'?>                


<?php include_once ROOT.'/views/footer.php';?>
