<?php include_once ROOT.'/views/header.php';?>

		<div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title']." ".$data['price']; ?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
<?php include_once ROOT.'/views/breadcrumbs.php';?>
							<div class="services-details" itemscope itemtype="http://schema.org/Product">
                                                            <meta itemprop="name" content="<?php echo $data['title'];?>">
                                                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                <meta itemprop="price" content="<?php echo $data['price_schema'];?>">
                                                                <meta itemprop="priceCurrency" content="RUB">
                                                                <link itemprop="availability" href="http://schema.org/InStock">
                                                            </div>
                                                            <div itemprop="description">
                                                            <?php echo $data['text']; ?>
                                                            </div>
							</div> <!-- end .services-details -->
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4">
                                                    <aside>
							<div class="services-sidebar-widget">
								<h4><?php echo $data['childs_title']; ?></h4>
								<div class="quick-links">
                                                                    <?php foreach($data['childs'] as $rw): ?>
                                                                    <a href="<?php echo $rw['link'];?>"<?php if($data['id']==$rw['id']) { echo "class='active'";}?>><i class="constructor-wrench-gear"></i><?php echo $rw['title']; ?></a>
                                                                    <?php endforeach; ?>
								</div> <!-- end .quick-links -->
							</div> <!-- end .services-sidebar-widget -->
							<div class="services-sidebar-widget">
								<div class="box blue transparent"  style="background-image: url('images/background03.png');">
									<div class="inner">
										<h4>Консультация</h4>
										<h3 class="number-primary"> 8 (812) 98-649-68</h3>
										<h3 class="number-secondary">78129864968@yandex.ru</h3>
										<p>Если у Вас возникли вопросы по вопросу ремонта помещений, то Вы можете смело обращаться к нам. Поможем, подскажем, предложим оптимальный вариант.</p>
										<a href="/контакты" class="outline-button">Наши контакты</a>
									</div> <!-- end .inner -->
								</div> <!-- end .box -->
							</div> <!-- end .services-sidebar-widget -->
							<div class="services-sidebar-widget">
								<div class="box">
									<div class="inner">
										<h4><?php echo $data['title'].": цены"; ?></h4>
                                                                                <p>Точная стоимость ремонта определяется после замеров и составления сметы. Мы впредлагаем <b><span class='text-danger'>бесплатный замер и составление сметы</span></b>. Достаточно только позвонить нам и подобрать удобный день для выезда специалиста.</p>
                                                                                <p>Если Вас интересует цены на ремонт, действующие в нашей компании, то предлагаем Вам ознакомиться с прайслистом на ремонтные работы.</p>
										<a href="/прайс" class="outline-button dark">Прайслист</a>                                                                                
									</div> <!-- end .inner -->
								</div> <!-- end .box -->
							</div> <!-- end .services-sidebar-widget -->
                                                    </aside>
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php';?>
