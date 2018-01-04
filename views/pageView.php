<?php  include_once ROOT.'/views/header.php';?>

		<div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title'];?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white aboutsection">
			<div class="inner">
				<div class="container">
<?php include_once ROOT.'/views/breadcrumbs.php';?>
					<div class="row">
						<div class="col-sm-5 clearfix">
							<img src="/template/images/about-us.png" alt="about us" class="img-responsive">
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-7">
                                                    <?php echo $data['text'];?>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
<? if($data['text2']):?>
		<div class="section medium blue transparent text-center" style="background-image: url('/template/images/background05.jpg');">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h1 class="large-heading">+7 (812) 98-649-68</h1>
							<h3>Нужен ремонт квартры или офиса, хотите составить сметы на ремонт - звоните!</h3>
							<div class="button-row">
								<a href="/услуги" class="outline-button">Виды ремонта</a>
								<a href="/контакты" class="outline-button">Связаться с нами</a>
							</div> <!-- end .button-row -->
						</div> <!-- end .col-sm-8 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white no-padding-bottom">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
                                                    <?php echo $data['text2']?>
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4">
							<img src="/template/images/man.png" alt="man" class="img-responsive">
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
<? endif; ?>
		<div class="section dark small">
<?php include_once ROOT.'/views/partners.php'; ?>
                </div> <!-- end .section -->

<?php /*include_once ROOT.'/views/team.php';*/ ?>

<?php include_once ROOT.'/views/footer.php'; ?>