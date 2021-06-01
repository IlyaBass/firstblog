<?php
	require 'includes/db.php';
?>
<?php include 'includes/header.php' ?>

		<main class="main" id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<?php
							$article = mysqli_query($connection, 'SELECT * FROM `articles` WHERE `id` =' . (int) $_GET['id']);
							if (mysqli_num_rows($article) <= 0){
								?>
								<h2 class="main__post-title">Статья не была найдена</h2>
								<?php
							}
							else{
								$art = mysqli_fetch_assoc($article)
								?>
								<div class="main__post">
									<a href="/static/images/<?php echo $art['image'] ?>" data-fancybox="post-image" class="main__post-img">
										<img src="/static/images/<?php echo $art['image'] ?>" alt="image">
									</a>
									<h2 class="main__post-title"><a href="#"><?php echo $art['title'] ?></a></h2>
									<div class="main__post-date"><?php echo $art['date'] ?></div>

									<ul class="main__post-cats d-flex">
										<?php 
										    $art_cat = false;
											foreach ($categories as $cat) {
												if ($cat['id'] == $art['category_id']) {
													$art_cat = $cat;
													break;
												}
											}
										?>
										<li class="main__post-cat"><a href="/articles.php?category=<?php echo $art_cat['id'] ?>"><?php echo $art_cat['title'] ?></a></li>
									</ul>

									<p class="main__post-text"><?php echo $art['text'] ?></p>
								</div>
								<?php
							}
						?>

					</div>
				</div>
			</div>
		</main>
		<!-- /Main code -->

<?php include 'includes/footer.php' ?>
