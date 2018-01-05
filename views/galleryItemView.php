<?php include_once ROOT.'/views/header.php';?>

		<div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title']; ?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">

				<div class="container">
<?php include_once ROOT.'/views/breadcrumbs.php';?>
                                 <p><?php echo $data['short_text'];?></p>
					<div id="portfolio-details" class="portfolio-details">
						<div class="portfolio-sizer"></div>   
                                                <?php foreach($data['photos'] as  $url):?>
						<div class="item">
							<div class="image">
                                                            <img src="<?php echo $url['small']; ?>" alt="<?php $data['title']; ?>" class="img-responsive">
								<div class="overlay">
									<div class="inner">
										<a href="<?php echo $url['orig']; ?>" class="link"><i class="fa fa-link"></i></a>
										<a href="<?php echo $url['orig']; ?>" class="zoom popupzoom"><i class="fa fa-search"></i></a>
									</div> <!-- end .inner -->
								</div> <!-- end .overlay -->
							</div> <!-- end .image -->
							<div class="details">
								<h6><?php echo $data['title']; ?></h6>
							</div> <!-- end .details -->
						</div> <!-- end .item -->
                                                <?php endforeach;?>
					</div> <!-- end .portfolio-details -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php';?>