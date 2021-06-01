<?php
    require 'includes/db.php';
?>
<?php

$login = $_POST['login'];
$password = $_POST['password'];

$sql = mysqli_query($connection, "SELECT * FROM `users` WHERE `name` = '$login'");

if(mysqli_num_rows($sql) >= 1){
    $h_two = 'Такое имя пользователя уже существует';
    include 'includes/header.php';
    ?>
    <script>
        localStorage.setItem('loged', 'false');
    </script>
    <?php
}
else{
    $h_two = 'Регистрация прошла успешно';
    $add = mysqli_query($connection, "INSERT INTO `users` (name, password) VALUES('$login', '$password')");
    include 'includes/header.php';
    ?>
    <script>
        localStorage.setItem('loged', 'true');
        localStorage.setItem('name', '<?php echo $login; ?>');
    </script>
    <?php
}

?>

		<main class="main" id="main">
			<div class="container">
				<div class="row">
					<div class="col-10 offset-1">
						<h2 class="main__post-title"><?php echo $h_two; ?></h2>
					</div>
				</div>
			</div>
		</main>
		<!-- /Main code -->

<?php include 'includes/footer.php' ?>
