<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>index page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<script src="/js/vendors/require.js" data-main="/js/config"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script> -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('input[placeholder], textarea[placeholder]').placeholder();
			});
		</script>
	<![endif]-->
</head>
<body class="inner result-page">
	<div class="cloud-3"></div>
	<div class="cloud-4"></div>
	<header>
		<div class="box">
			<div class="navi-bar">
				<div class="title">Авиабилеты</div>
				<ul class="nav">
					<li class="active"><a href="#">Отмеченное</a> <span>(1)</span></li>
					<li><a href="#">Мой Билет-он-лайн</a></li>
				</ul>
			</div>
			<!-- mainfilter-->
			<div class="main-fiter">
				<form action="" method="post">
					<div class="col-1">
						<div class="col-left">
							<p><input type="text" name="from" id="from" placeholder="Откуда" /></p>
							<p class="date"><input class="back-end" type="text" name="" id="" placeholder="10 марта, ср" /></p>
							<ul class="date-range">
								<li>7</li>
								<li>8</li>
								<li>9</li>
								<li class="active">10 <span>марта</span></li>
								<li>11</li>
								<li>12</li>
								<li>13</li>
							</ul>
						</div>
						<div class="col-right">
							<p><input type="text" name="to" id="to" placeholder="Куда" /></p>
							<p class="date"><input class="front-end" type="text" name="" id="" placeholder="25 марта, ср" /></p>
							<a href="#" class="closed">Closed</a>
							<ul class="date-range">
								<li>22</li>
								<li>23</li>
								<li>24</li>
								<li class="active">25 <span>марта</span></li>
								<li>26</li>
								<li>27</li>
								<li>28</li>
							</ul>
						</div>
					</div>
					<div class="col-2">
						<a class="logo" href="#" class="logo"><img src="/img/logo_inner.png" alt="" /></a>
						<a href="#" class="search">Найти билеты</a>
					</div>
				</form>
			</div>
		</div>
	</header>
	<div class="box container">
		<article id="left">
			<!-- самый дешевый -->
			<div class="block cheapest">
				<div class="tab">самый дешевый</div>
				<!-- попап подсказка -->
						<div class="poup-dialog">Сыктывкар <span>22:30 → 05:10</span><div class="dialog-bottom"></div></div>
				<!-- end -->
				<div class="content">
					<div class="col-1">
						<div class="title green">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>13:55</strong><span>SVO</span></li>
							<li>6 ч 40 м</li>
							<li><strong>20:35</strong><span>LED</span></li>
						</ul>
						<div class="links-bar">
							<a href="#" class="read-more">ПОДРОБНЕЕ</a>
							<a href="#" class="bookmarks"><img src="/img/star.png" alt="" /></a>
						</div>	
					</div>
					<div class="col-2">
						<div class="title blue"><span>1 пересадка</span>, <a href="#">6 ч 20 м</a><span class="night">night</span>
						<div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>18:30</strong><span>LED</span></li>
							<li>18 ч 35 м</li>
							<li><strong>06:20</strong><span>DME</span></li>
						</ul>
						<div class="links-bar">
							<div class="price">7 856 <span>руб</span></div>
							<a href="#" class="read-more">Еще 3</a>
						</div>
					</div>
				</div>
			</div>
			<!-- самый быстрый -->
			<div class="block fast">
				<div class="tab">самый быстрый</div>
				<div class="content">
					<div class="col-1">
						<div class="title red">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>09:24</strong><span>SVO</span></li>
							<li>3 ч 20 м</li>
							<li><strong>11:50</strong><span>LED</span></li>
						</ul>
						<div class="links-bar">
							<a href="#" class="read-more">ПОДРОБНЕЕ</a>
							<a href="#" class="bookmarks"><img src="/img/star_active.png" alt="" /></a>
						</div>	
					</div>
					<div class="col-2">
						<div class="title red">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>06:45</strong><span>LED</span></li>
							<li>4 ч 15 м</li>
							<li><strong>09:10</strong><span>DME</span></li>
						</ul>
						<div class="links-bar">
							<div class="price">9 180 <span>руб</span></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Дешевый прямой -->
			<div class="block cheapest-more">
				<div class="tab">Дешевый прямой</div>
				<div class="content">
					<div class="col-1">
						<div class="title blue">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>22:40</strong><span>SVO</span></li>
							<li>6 ч 40 м</li>
							<li><strong>23:55</strong><span>LED</span></li>
						</ul>
						<div class="links-bar">
							<a href="#" class="read-more">ПОДРОБНЕЕ</a>
							<a href="#" class="bookmarks"><img src="/img/star.png" alt="" /></a>
						</div>	
					</div>
					<div class="col-2">
						<div class="title blue">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing">
							<li><strong>12:23</strong><span>LED</span></li>
							<li>18 ч 35 м</li>
							<li><strong>22:49</strong><span>DME</span></li>
						</ul>
						<div class="links-bar">
							<div class="price">12 325 <span>руб</span></div>
						</div>
					</div>
				</div>
			</div>
			<!-- два оторванных блока -->
			<div class="block result">
				<div class="content">
					<div class="col-1">
						<div class="title blue"><span>1 пересадка</span>, <a href="#">6 ч 20 м</a> <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing active">
							<li><strong>22:40</strong><span>SVO</span></li>
							<li>6 ч 40 м</li>
							<li><strong>23:55</strong><span>LED</span></li>
						</ul>
						<ul class="timing noactive">
							<li><strong>22:40</strong><span>SVO</span></li>
							<li>6 ч 40 м</li>
							<li><strong>23:55</strong><span>LED</span></li>
						</ul>
						<ul class="timing noactive">
							
						</ul>
						<div class="links-bar">
							<a href="#" class="read-more">ПОДРОБНЕЕ</a>
							<a href="#" class="bookmarks"><img src="/img/star.png" alt="" /></a>
						</div>	
					</div>
					<div class="col-2">
						<div class="title blue">Без пересадок <div class="company-logo"><img src="/img/company.png" alt="" /></div></div>
						<ul class="timing noactive">
							<li><strong>12:23</strong><span>LED</span></li>
							<li>18 ч 35 м</li>
							<li><strong>22:49</strong><span>DME</span></li>
						</ul>
						<ul class="timing noactive">
							<li><strong>12:23</strong><span>LED</span></li>
							<li>18 ч 35 м</li>
							<li><strong>22:49</strong><span>DME</span></li>
						</ul>
						<ul class="timing active">
							<li><strong>12:23</strong><span>LED</span></li>
							<li>18 ч 35 м</li>
							<li><strong>22:49</strong><span>DME</span></li>
						</ul>
						<div class="links-bar">
							<div class="price">12 325 <span>руб</span></div>
							<a class="read-more" href="#">Скрыть</a>
						</div>
					</div>
				</div>
			</div>
		</article>
		<!-- левая колонка -->
		<aside id="filter">
			<!-- блок с фильтром пассажиров -->
			<div class="block">
				<div class="title">Пассажиры</div>
				<ul class="users">
					<li class="first active"><a href="#"><img src="/img/profile.png" alt="" /></a></li>
					<li class="active"><a href="#"><img src="/img/profile.png" alt="" /></a></li>
					<li><a href="#"><img src="/img/profile_active.png" alt="" /></a></li>
					<li><a href="#"><img src="/img/profile_active.png" alt="" /></a></li>
					<li class="parent-last"><a href="#"><img src="/img/profile_active.png" alt="" /></a></li>
					<li class="last"><a href="#"><img src="/img/plus.png" alt="" /></a></li>
				</ul>
				<div class="title">Класс</div>
				<ul class="aveo-class">
					<li class="first active"><a href="#">Эконом</a></li>
					<li class="last"><a href="#">Бизнес</a></li>
				</ul>
			</div>
			<!-- фильтр время в пути -->
			<div class="block">
				<div class="title">Время в пути</div>
				<div class="slider"></div>
				<div class="parametr"><span class="l"></span><span class="d">до 9 ч.</span><span class="r"></span></div>
				<div class="title">Количество пересадок</div>
				<ul class="peresadka">
					<li class="first active"><a href="#">Все рейсы</a></li>
					<li><a href="#">Не более одной</a></li>
					<li class="last"><a href="#">Без пересадок</a></li>
				</ul>
				<div class="city"><a href="#">В любом городе</a></div>
				<div class="title">Перевозчик</div>
				<div class="city transfer"><a href="#">Любой</a></div>
			</div>
			<!-- фильтр еще параметры -->
			<div class="options-more"><a href="#">Еще параметры</a></div>
			<!--блок недавно смотрели -->
			<div class="viwed-block">
				<div class="title">Недавно смотрели</div>
				<ul>
					<li>
						<div class="two"></div>
						<a href="#">Москва – Санкт-Петербург</a>
						<div class="desc">16 сентября – 25 сентября</div>
					</li>
					<li>
						<div class="one"></div>
						<a href="#">Москва – Берлин</a>
						<div class="desc">15 мая – 5 июня</div>
					</li>
					<li>
						<div class="three"></div>
						<a href="#">Берлин – Амстердам</a>
						<div class="desc">1 января – 15 января</div>
					</li>
					<li>
						<div class="two"></div>
						<a href="#">Амстердам – Санкт-Петер...</a>
						<div class="desc">21 февраля – 8 марта</div>
					</li>
					<li>
						<div class="two"></div>
						<a href="#">Москва – Санкт-Петербург</a>
						<div class="desc">16 сентября – 25 сентября</div>
					</li>
				</ul>
			</div>
		</aside>
	</div>
	
	<footer>
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
	<!-- фон затемнения -->
	<div class="overlay" style="display:none;"></div>
	<!-- попап формы сайта -->
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
	<!-- попап окно инфо о перелете -->
	<div class="poup-info-block poup" style="display:none;">
		<div class="title">Перелет из Москвы в Санкт-Петербург и обратно <a href="#" class="closed">Закрыть</a></div>
		<!-- саб инфо блок -->
		<div class="sub-info">
			<div class="sub-title"><span class="icon"><img src="/img/samalet.png" alt="" /></span>Из Москвы <span class="gray">в Санкт-Петербург, 10 марта</span>  <span class="red">Осталось 3 места!</span></div>
			<div class="info-block">
				<div class="col-1 first">
					<ul>
						<li><a href="">14 55</a></li>
						<li>17 45</li>
						<li class="total-time"><span>Общее время</span>2 ч 50 мин</li>
					</ul>
				</div>
				<div class="col-2">
					<ul>
						<li>
							<div class="date">10 марта, <span>среда</span></div>
							<div class="inform">
								<span class="top"></span>
								<p>Вылет из Москвы</p>
								<span>Внуково (VKO)</span>
							</div>
						</li>
						<li>
							<div class="date">10 марта, <span>среда</span></div>
							<div class="inform">
								<p>Прилет в Санкт-Петербург</p>
								<span>Пулково (LED)</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-3">
					<ul>
						<li>2 ч 50 мин <span>время в пути</span></li>
						<li>Рейс LH3019 <span>Эконом, Эрбас Индастри А320</span></li>
						<li><img src="/img/logo-1.png" alt="" /></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end -->
		<div class="sub-info">
			<div class="sub-title"><span class="icon"><img src="/img/samalet-2.png" alt="" /></span>Из Санкт-Петербурга <span class="gray">в Москву, 25 марта</span></div>
			<div class="info-block">
				<div class="col-1 two">
					<ul>
						<li>06 20</li>
						<li>17 45</li>
					</ul>
				</div>
				<div class="col-2">
					<ul>
						<li>
							<div class="date">25 марта, <span>воскресенье</span></div>
							<div class="inform">
								<p>Вылет из Санкт-Петербурга</p>
								<span>Пулково (LED)</span>
							</div>
						</li>
						<li>
							<div class="date">25 марта, <span>воскресенье</span></div>
							<div class="inform">
								<p>Прилет в Саратов</p>
								<span>Саратово (SAR)</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-3">
					<ul>
						<li>2 ч 50 мин <span>время в пути</span></li>
						<li>Рейс LH3019 <span>Эконом, Эрбас Индастри А320</span></li>
						<li><img src="/img/logo-2.png" alt="" /></li>
					</ul>
				</div>
			</div>
			<div class="info-block-night">
				<div class="col-2">Пересадка в Саратове <span class="red">Не забудьте сменить аэропорт!</span></div>
				<div class="col-4">9 ч 35 мин, <span class="red">вылет на следующий день</span></div>		
			</div>
			<div class="info-block last">
				<div class="col-1 three">
					<ul>
						<li>02 20</li>
						<li>04 30</li>
						<li class="total-time"><span>Общее время</span> 18 ч 40 мин</li>
					</ul>
				</div>
				<div class="col-2">
					<ul>
						<li>
							<div class="date">26 марта, <span>понедельник</span></div>
							<div class="inform">
								<p>Вылет из Cаратова</p>
								<span>Саратово-2 (OLM)</span>
							</div>
						</li>
						<li>
							<div class="date">26 марта, понедельник</div>
							<div class="inform">
								<p>Прилет в Москву</p>
								<span>Пулково (LED)</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-3">
					<ul>
						<li>1 ч 50 мин <span>время в пути</span></li>
						<li>Рейс LH3019 <span>Эконом, Эрбас Индастри А320</span></li>
						<li><img src="/img/logo-2.png" alt="" /></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end -->
		<div class="buttoms">
			<div class="col-l">
				<a href="#" class="closed-but">Закрыть</a>
				<ul>
					<li>Частично возвратный билет <span class="help"></span></li>
					<li>Время в пунктах вылета и прилета местное</li>
				</ul>
			</div>
			<div class="col-r">
				<a href="#" class="print-page"><span>Распечатать</span></a>
				<a href="#" class="add-to-favorite"><span>Star</span></a>
				<div class="price">14 960 <span>руб</span></div>
			</div>
		</div>
	</div>
</body>
</html>