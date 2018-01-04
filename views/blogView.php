<?php include_once ROOT.'/views/header.php';?>
		<div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title'];?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="section white">
			<div class="inner">
				<div class="container">
<?php include_once ROOT.'/views/breadcrumbs.php';?>
					<div class="row">
                                            <?php foreach($data['blogsList'] as $rw):?>
						<div class="col-sm-4">
							<div class="blog-post">
                                                            <a href=""><img src="/template/images/blog-post01.png" alt="<?php echo $rw['title']; ?>" class="img-responsive center-block"></a>
								<div class="content">
									<div class="blog-icon"><i class="icon-picture"></i></div>
									<div class="blog-post-header">
										<h6><a href="<?php echo $rw['link']; ?>"><?php echo $rw['title']; ?></a></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i><?php echo $rw['date_format']; ?></li>
<!--											<li><i class="icon-speech"></i>10 Comments</li> -->
										</ul>
									</div> <!-- end .blog-post-header -->
									<p><?php echo $rw['short_text']; ?></p>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-4 -->
                                            <?php endforeach; ?>
					</div> <!-- end .row -->
<!--					<div class="blog-load-more">
						<a href="" class="button">Load More</a>
					</div> --><!-- end .blog-load-more -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php'; ?>