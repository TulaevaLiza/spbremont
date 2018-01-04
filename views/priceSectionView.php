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
                                            <td><?php if($rw2['price']) echo $rw2['price']; else echo 'уточняйте'?></td>
                                        </tr>                                        
                                        <?php endforeach;?>
                                        </table>
                                        <?php endforeach;?>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php'; ?>