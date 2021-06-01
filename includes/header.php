<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>First_blog</title>
		<!-- Connecting stylesheet -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<!-- Main code -->
		<header class="header" id="header">
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex align-items-center justify-content-between">
						<a href="/" class="header__logo"><code>&lt;/First_blog&gt;</code></a>
						<ul class="header__nav d-flex">
						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="modal text-center" id="modal-registration" style="display: none;">
			<h2 class="modal__title">Регистрация</h2>
			<form action="registered.php" method="POST" class="modal__form d-flex flex-column">
				<input type="text" name="login" class="modal__input" placeholder="Имя пользователя">
				<input type="password" name="password" class="modal__input" placeholder="Пароль">
				<button class="modal__btn">Отправить</button>
			</form>
		</div>

		<div class="modal text-center" id="modal-login" style="display: none;">
			<h2 class="modal__title">Логин</h2>
			<form action="loged.php" method="POST" class="modal__form d-flex flex-column">
				<input type="text" name="login" class="modal__input" placeholder="Имя пользователя">
				<input type="password" name="password" class="modal__input" placeholder="Пароль">
				<button class="modal__btn">Отправить</button>
			</form>
		</div>

		<?php
 			$categories_q = mysqli_query($connection, 'SELECT * FROM `articles_categories`');
 			$categories = array();
 			while ($cat = mysqli_fetch_assoc($categories_q)){
 				$categories[] = $cat;
 			}
		?>

		<aside class="aside" id="aside">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="aside__nav d-flex">
							<?php
								foreach($categories as $cat){
									?>
										<li class="aside__nav-item"><a href="/articles.php?category=<?php echo $cat['id'] ?>"><?php echo $cat['title'] ?></a></li>
									<?php
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</aside>