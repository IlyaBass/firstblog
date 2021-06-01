<?php
require 'includes/db.php';
include 'includes/header.php';
?>

<?php
	$articles = mysqli_query($connection, 'SELECT * FROM `articles` ORDER BY `id` DESC');
?>
		<main class="main" id="main">
			<div class="container">
				<div class="row">
					<div class="col-10 offset-1">

						<?php
							if (mysqli_num_rows($articles) == 0){
							    ?>
							    <h2 class="main__post-title">Записей не найдено</h2>
							    <?php
							}
                        	while ($article = mysqli_fetch_assoc($articles)){
                        		?>
                        			<div class="main__post">
                        				<a href="/article.php?id=<?php echo $article['id'] ?>" class="main__post-img">
                        					<img src="static/images/<?php echo $article['image'] ?>" alt="image">
                        				</a>
                        				<h2 class="main__post-title"><a href="/article.php?id=<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a></h2>
                        				<div class="main__post-date"><?php echo $article['date'] ?></div>

                        				<ul class="main__post-cats d-flex">
                        					<?php 
                        					    $art_cat = false;
                        						foreach ($categories as $cat) {
                        							if ($cat['id'] == $article['category_id']) {
                        								$art_cat = $cat;
                        								break;
                        							}
                        						}
                        					?>
                        					<li class="main__post-cat"><a href="/articles.php?category=<?php echo $art_cat['id'] ?>"><?php echo $art_cat['title'] ?></a></li>
                        				</ul>

                        				<p class="main__post-text"><?php echo mb_substr($article['text'], 0, 250, 'utf-8') . '...' ?></p>
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
