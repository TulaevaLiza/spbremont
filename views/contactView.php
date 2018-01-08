<?php include_once ROOT.'/views/header.php';?>
                   <div class="page-title" style="background-image: url('/template/images/background03.png');">
			<div class="inner">
				<h1>Контакты</h1>
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="split-section">
			<div class="inner">
				<div class="split-section-section one-fourth blue text-center no-padding" >
					<div class="inner">
						<div class="contact-info">
							<h3>Специальное предложение</h3>
							<p>Вы можете получить консультацию, заказать замер или составление сметы через наш сайт. Для этого достаточно отправить нам сообщение с помощью формы обратной связи на этой странице. При необходимости наш менеджер свяжется с вами для уточнения информации.</p>
						</div> <!-- end .contact-info -->
					</div> <!-- end .inner -->
				</div> <!-- end .split-section-section -->
				<div class="split-section-section three-fourths light">
					<div class="inner">
						<form action="/template/js/contact.php" method="post" id="contact-form">
							<input type="hidden" id="type" name="type" value='7'>
							<fieldset>
								<legend>Задайте свой вопрос</legend>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Имя</label>
											<input type="text" id="contact-name" name="contact-name" required>
										</div> <!-- end .form-group -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<input type="email" id="contact-email" name="contact-email">
										</div> <!-- end .form-group -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group">
											<label>Телефон</label>
											<input type="tel" id="contact-phone" name="contact-phone" required>
										</div> <!-- end .form-group -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group">
											<label>Тема</label>
											<input type="text" id="contact-subject" name="contact-subject">
										</div> <!-- end .form-group -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-12">
										<div class="form-group">
											<label>Ваше сообщение</label>
											<textarea name="contact-message" id="contact-message" required rows="3"></textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .col-sm-12 -->
								</div> <!-- end .row -->
							</fieldset>
							<button type="submit" class="button">Отправка сообщения</button>
									<div id="contact-loading" class="alert alert-info form-alert">
										<span class="message">Отправка...</span>
									</div>
									<div id="contact-success" class="alert alert-success form-alert">
										<span class="message">Успешно!</span>
									</div>
									<div id="contact-error" class="alert alert-danger form-alert">
										<span class="message">Ошибка!</span>
									</div>
						</form>
					</div> <!-- end .inner -->
				</div> <!-- end .split-section-section -->
			</div> <!-- end .inner -->
		</div> <!-- end .split-section -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row aligned-cols contacts">
						<div class="col-sm-3 aligned-middle">
							<h3>Контактная информация</h3>
						</div> <!-- end .col-sm-3 -->
						<div class="col-sm-3 aligned-middle">
							<i class="icon-clock"></i>
							<h6>Рабочие часы</h6>
							<p>Понедельник - Пятница : 10:00 - 22:00<br>Суббота : 10:00 - 22:00<br>Воскресение : 10:00 - 22:00</p>
						</div> <!-- end .col-sm-3 -->
						<div class="col-sm-3 aligned-middle">
							<i class="icon-call-end"></i>
							<h6>Телефон</h6>
							<p>+7 (812) 98-649-68</p>
						</div> <!-- end .col-sm-3 -->
						<div class="col-sm-3 aligned-middle">
							<i class="icon-call-end"></i>
							<h6>Email</h6>
							<p>78129864968@yandex.ru</p>
						</div> <!-- end .col-sm-3 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

<?php include_once ROOT.'/views/footer.php'; ?>