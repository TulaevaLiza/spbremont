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
					<div class="row">
						<div class="col-sm-8">
							<div class="blog-post">
								<img src="<?php echo (file_exists(ROOT.'/template/images/blogs/830x416/'.$data['id'].'.jpg')?'/template/images/blogs/830x416/'.$data['id'].'.jpg':'/template/images/blog-post10.png'); ?>" alt="alt text" class="img-responsive center-block">
								<div class="content"  itemscope itemtype="http://schema.org/BlogPosting">
									<div class="blog-icon"><i class="icon-picture"></i></div>
									<div class="blog-post-header">
										<h6 itemprop="name"><?php echo $data['title']?></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i><?php echo $data['date_format']; ?></li>
										</ul>
									</div> <!-- end .blog-post-header -->
                                                                        <div style="display: none;" itemprop="description"><?php echo $data['short_text'];?></div>
                                                                        <?php echo $data['text']; ?>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4">
							<div class="sidebar-widget">
								<h4>Новые записи в блоге</h4>
                                                                <?php foreach($data['otherPosts'] as $rw):?>
								<div class="recent-post clearfix">
									<a href=""><img src="<?php echo (file_exists(ROOT.'/template/images/blogs/59x59/'.$rw['id'].'.jpg')?'/template/images/blogs/59x59/'.$rw['id'].'.jpg':'/template/images/blog-post1.png'); ?>" alt="alt"></a>
									<div class="content">
                                                                            <h6><a href="<?php echo $rw['link'];?>"><?php echo $rw['title']?></a></h6>
										<span class="date"><?php echo $rw['date_format'];?></span>
									</div> <!-- end .content -->                                                                        
								</div> <!-- end .recent-post -->
                                                                <?php endforeach;?>
							</div> <!-- end .sidebar-widget -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php'; ?>