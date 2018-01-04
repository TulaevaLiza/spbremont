<?php  include_once ROOT.'/views/header.php';?>

		<div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1><?php echo $data['title'];?></h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white pricesection">
			<div class="inner">
				<div class="container">
<?php include_once ROOT.'/views/breadcrumbs.php';?>
					<div class="row">
						<div class="col-sm-12">
                                                    <div><?php echo $data['text'];?></div>                                                    
						</div> <!-- end .col-sm-12 -->
					</div> <!-- end .row -->
                                        <?php foreach($data['priceList'] as $rw):?>
                                        <h2><?php echo $rw['title'];?></h2>
                                        <table class='table table-hover table-responsive'>
					<tr>
                                            <th>Вид работ</th>
                                            <th>Ед. изм.</th>
                                            <th>Цена</th>
                                        </tr>
                                        <?php foreach($rw['child'] as $rw2):?>
					<tr>
                                            <td><?php echo $rw2['name'];?></td>
                                            <td><?php echo $rw2['val'];?></td>
                                            <td><?php echo $rw2['price'];?></td>
                                        </tr>                                        
                                        <?php endforeach;?>
                                        </table>
                                        <div style='padding:0 0 20px 0;'><a class='outline-button dark' href='<?php echo $rw['link'];?>'>Полный список</a></div>
                                        <?php endforeach;?>
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

<?php include_once ROOT.'/views/footer.php'; ?>