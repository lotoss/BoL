<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Билет-Он-Лайн</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />
	<script src="/js/vendors/require.js" data-main="/js/config"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="/js/old/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="/js/old/scripts.js"></script> -->
	<!-- [if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('input[placeholder], textarea[placeholder]').placeholder();
			});
		</script>
	<![endif] -->
</head>
<body class="front">
	<div class="cloud-1"></div>
	<div class="cloud-2"></div>
	<article id="home">
		<div class="box">
			<div class="slogan">Чтобы начать поиск билетов укажите пункт вылета</div>
			<div class="block-form">
				<div class="title">Авиабилеты</div>
				<ul class="nav">
					<li class="active"><a href="#">Отмеченное</a> <span>(1)</span></li>
					<li><a href="#">Мой Билет-он-лайн</a></li>
				</ul>
				<form action="#" method="post">
					<p>
						<input type="text" name="from" id="from" placeholder="Откуда" />
						<!-- <input type="hidden" name="fromIATA" id="fromIATA" /> -->
					</p>
					<p>
						<input type="text" name="to" id="to" placeholder="Куда" />
						<!-- <input type="hidden" name="toIATA" id="toIATA" /> -->
					</p>
					<div class="descript"><a href="#">Москва,</a> <a href="#">Санкт-Петербург,</a> <a href="#">Хельсинки</a></div>
				</form>
				<a href="#" class="logo"><img src="/img/logo.png" alt="" /></a>
			</div>
		</div>
	</article>
	<footer>
		<div class="box full">
			<div class="carusel">
				<ul>
					<li>
						<strong>«Спасибо» и «Кукуруза»</strong>
						<img src="/img/block_1.png" alt="" />
						<p>Пользователи этих программпокупают билеты на лучших условиях.</p>
					</li>
					<li>
						<strong>Финальные суммы</strong>
						<img src="/img/block_2.png" alt="" />
						<p>Мы всегда показываем только окончательные суммы.</p>
					</li>
					<li>
						<strong>Возврат билетов</strong>
						<img src="/img/block_3.png" alt="" />
						<p>Все билеты можно вернуть так же, как и билеты из обычной кассы. </p>
					</li>
				</ul>
				<div class="prev">prev</div>
				<div class="next">next</div>
			</div>
		</div>
		<div class="box">
			<div class="col-l">
				<div class="copiryng">© 2012 ООО «Агентство Билет Онлайн»</div>
				<nav>
					<a href="#">Контактная информация</a>
					<a href="#">Условия использования</a>
					<a href="#">Вопросы и ответы</a>
					<a href="#">Оставить отзыв</a>
				</nav>
			</div>
			<div class="payment">
				<p>Мы принимаем к оплате</p>
				<img src="/img/payment.png" alt="" />
			</div>
		</div>
	</footer>
	<!-- попап формы сайта -->
	<div class="overlay" style="display:none;"></div>
	<!-- форма входа -->
	<div class="poup-form login" style="display:none;">
		<span class="top"></span>
		<div class="title">Вход <a href="#" class="nav-link">Регистрация</a></div>
		<form action="#" method="post">
			<p><input type="email" name="" id="" placeholder="Электронная почта" /></p>
			<p class="last"><input type="password" class="password" name="" id="" placeholder="Пароль" /></p>
			<p><input type="submit" value="Войти" /></p>
			<a href="#" class="lost-pass">Забыли пароль?</a>
		</form>
	</div>
	<!-- форма регистрации -->
	<div class="poup-form register" style="display:none;">
		<span class="top"></span>
		<div class="title">Регистрация <a href="#" class="nav-link-login">Вход</a></div>
		<form action="" method="post">
			<p><input type="email" name="" id="" placeholder="Электронная почта" /></p>
			<p class="last"><input type="password" class="password" name="" id="" placeholder="Пароль" /></p>
			<p class="last"><input type="submit" value="Зарегистрироваться" /></p>
		</form>
		<div class="desc">Зарегистриованные пользователи могут не заполнять формы по 100 раз и имеют другие приемущества регистрации.</div>
	</div>
	<!-- форма забыл пароль -->
	<div class="poup-form pass" style="display:none;">
		<span class="top"></span>
		<div class="title">Забыли пароль? <a href="#" class="nav-link-login">Вход</a></div>
		<form action="" method="post">
			<p class="last"><input type="email" name="" id="" placeholder="Электронная почта" /></p>
			<input type="submit" value="Восстановить" />
		</form>
	</div>
</body>
</html>