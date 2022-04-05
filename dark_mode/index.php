
<!DOCTYPE html>
<html lang="es">
<head>
	
	<script src="/student64/dwes/dark_mode/action.js"></script>
    <link rel="stylesheet" href="/student64/dwes/dark_mode/css.scss">
	<!-- <script src="/student64/dwes/js/materialize.js"></script>
    <link rel="stylesheet" href="/student64/dwes/css/materialize.css"> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
</body>
</html>
<div class="navbar-fixed">
	<nav>
  <div class="nav-wrapper">
    <div class="row">
      <div class="col s12">
				<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
				<a href="https://codepen.io/collection/nbBqgY" target="_blank" class="brand-logo">Materialize <span class="hide-on-small-only">Framework</span>
					<span class="hide-on-small-only" style="font-weight: 100; font-size: 0.4em; opacity:0.5;">
						v1.0.0
					</span>
				</a>
        <ul class="right">
          <li><a href="https://s.codepen.io/j_holtslander/fullpage/MRbpLX" target="_blank"><i class="material-icons">fullscreen</i></a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>

<ul id="slide-out" class="sidenav">
	<li><a class="subheader">Links</a></li>
	<li><a href="#!">First Link</a></li>
	<li><a href="#!">Second Link</a></li>
	<li><div class="divider"></div></li>
	<li><a class="subheader">More links</a></li>
	<li><a href="#!">Third Link</a></li>
	<li><a href="#!">Fourth Link</a></li>
	<li><a href="https://codepen.io/collection/nbBqgY">More Materialize Pens</a></li>
	<li><a class="dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a></li>
</ul>



<div class="container">
	<div class="row">
		<div class="col s12">
			<h4>Dark mode toggle in materialize</h4>
			<p>Toggle the button to enable or disable dark mode. Hit the heart button above if you liked this.</p>
			<p>Another way to do dark mode is based off of system settings. See: <a href="https://medium.com/front-end-field-guide/automatic-dark-mode-for-your-website-b446d8a3b8a5" target="_blank">this link</a> to learn how to do that.</p>
			
			<a class="btn dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a>
		</div>
	</div>
	<div class="row">
    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="https://materializecss.com/images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
		<div class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="https://materializecss.com/images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
	</div>
	
	<div class="row">
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
				<span class="title">Title</span>
				<p>First Line <br>
					 Second Line
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle">folder</i>
				<span class="title">Title</span>
				<p>First Line <br>
					 Second Line
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle green">insert_chart</i>
				<span class="title">Title</span>
				<p>First Line <br>
					 Second Line
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<i class="material-icons circle red">play_arrow</i>
				<span class="title">Title</span>
				<p>First Line <br>
					 Second Line
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
		</ul>
	</div>
	
	
	
</div>


<!-- Gitter Chat Link -->
<div class="fixed-action-btn"><a class="btn-floating btn-large red" href="https://gitter.im/Dogfalo/materialize" target="_blank"><i class="large material-icons">chat</i></a></div>

