<!-- Connecting scripts -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script>
			loged = localStorage.getItem('loged');

			if (loged == 'false' || loged == null) {
				$('.header__nav').load('../includes/head.php');
			}
			else{
				$('.header__nav').load('../includes/head-loged.php');
			}
			function exiting(){
				localStorage.setItem('loged', 'false');
			}
		</script>
		<script src="js/script.js"></script>
	</body>
</html>