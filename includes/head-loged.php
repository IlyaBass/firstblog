<li class="header__nav-item"><a href="/">Главная</a></li>
<li class="header__nav-item"><a href="/" id="login"></a></li>
<li class="header__nav-item"><a href="/" onclick="exiting()">Выйти</a></li>
<script>
	let login = document.querySelector('#login');
	login.innerHTML = localStorage.getItem('name');
</script>