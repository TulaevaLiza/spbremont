<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $data['meta_title'];?></title>
                <meta name="keywords" content="<?php echo $data['meta_kw'];?>">
                <meta name="author" content="спб-ремонтпро.рф">
                <meta name="description" content="<?php echo $data['meta_description']; ?>" />     
                <?php if(isset($data['canonical'])):?>
                <link rel="canonical" href="<?php echo 'http://xn----9sbn2affbbgffcv.xn--p1ai'.$data['canonical'];?>"/>                
                <?php endif;?>
                <meta name="robots" content="noyaca"/>
                <meta name="robots" content="noodp"/> 
                <meta property="og:title" content="<?php echo $data['meta_title']; ?>" />
                <meta property="og:site_name" content="СПб-Ремонт" />
                <meta property='og:description' content='<?php echo $data['meta_description']; ?>'/>
                <meta property='og:type' content='website' />
                <?php if(isset($data['canonical'])):?>
                <meta property='og:url' content='<?php echo 'http://xn----9sbn2affbbgffcv.xn--p1ai'.$data['canonical'];?>' />
                <?php endif;?>

                <meta name="yandex-verification" content="533de87fc47dc8a3" />
                <meta name="google-site-verification" content="KYWBXKDL0aKG_fStMq1o2XTRSQ7Bo3CawYV_UnvXlQU" />
                <meta name="msvalidate.01" content="1D226B61343ACB9023481B46F454D1C5" />


<?php if(isset($pul)): ?>
<?php  include_once ROOT.'/views/headLinks.php';?>
<?php else: ?>                
<?php  include_once ROOT.'/views/headLinksMain.php';?>
<?php endif; ?>
                
                <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61014803-1', 'auto');
  ga('send', 'pageview');

</script>


	</head>
	<body>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({id: "2803160", type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2803160;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61014803-1', 'auto');
  ga('send', 'pageview');

</script>

		<header class="header header-landing">

			<div class="site-top hidden-xs hidden-sm">
                <div class="container">
                    <div class="row middle">
                        <div class="col-md-12 col-lg-7">
                            <aside id="text-2" class="widget widget_text">
                                <div class="textwidget">
                                    <ul class="extra-info">
                                        <li><i class="fa fa-phone"> </i> 8 (812) 98-649-68</li>
                                        <li><i class="fa fa-clock-o"></i> Ежедневно: 10:00 - 22:00</li>
                                        <li><i class="fa fa-envelope-o"></i> 78129864968@yandex.ru</li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-5 hidden-md end-lg">
<!--                            <div class="social-menu">
                                <ul id="social-menu-top" class="menu">
                                    <li><a href="http://facebook.com/">facebook</a></li>
                                    <li><a href="http://twitter.com/">twitter</a></li>
                                    <li><a href="http://linkedin.com/">linkedin</a></li>
                                    <li><a href="http://dribbble.com/">dribbble</a></li>
                                    <li><a href="http://youtube.com/">youtube</a></li>
                                    <li><a href="#">feed</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
			<div class="container-fluid clearfix" style='margin:0 7%;'>
				<div class="logo"><a href="/"><img src="/template/images/logo_new.png" alt="constructor" class="img-responsive"></a></div> <!-- end .logo -->
				<div class="navigation clearfix">
					<nav class="main-nav">
						<ul class="list-unstyled">
							<li<?php if(!isset($pul)):?> class="active"<?php endif; ?>><a href="/">Главная</a></li>
                                                        <li<?php if(isset($pul) && $pul=='о_компании'):?> class="active"<?php endif; ?>>
								<a href="/о_компании">О компании</a>
							</li>
							<li<?php if(isset($pul) && $pul=='услуги'):?> class="active"<?php endif; ?>>
								<a href="/услуги">Услуги по ремонту</a>
								<ul>
                                                                    <?php  foreach($data['menu'] as $rw):?>
                                                                    <li><a href="<?php echo $rw['link'];?>"><?php echo $rw['title'];?></a></li>
                                                                    <?php endforeach;?>
								</ul>
							</li>
							<li<?php if(isset($pul) && $pul=='фото_ремонта'):?> class="active"<?php endif; ?>><a href="/фото_ремонта">Наши работы</a></li>
							<li<?php if(isset($pul) && $pul=='прайс'):?> class="active"<?php endif; ?>><a href="/прайс">Цены на ремонт</a></li>
							<li<?php if(isset($pul) && $pul=='блог'):?> class="active"<?php endif; ?>>
								<a href="/блог">Секреты ремонта</a>
							</li>
							<li<?php if(isset($pul) && $pul=='контакты'):?> class="active"<?php endif; ?>><a href="/контакты">Контакты</a></li>
						</ul>
					</nav> <!-- end .main-nav -->
					<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .navigation -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->
		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
