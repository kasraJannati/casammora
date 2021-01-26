<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<?php load_view('common/css')?>


<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
* {
	-webkit-box-sizing: border-box;
					box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-weight: 300;
}
body {
	font-family: 'Source Sans Pro', sans-serif;
	color: white;
	font-weight: 300;
}
body ::-webkit-input-placeholder {
	/* WebKit browsers */
	font-family: 'Source Sans Pro', sans-serif;
	color: white;
	font-weight: 300;
}
body :-moz-placeholder {
	/* Mozilla Firefox 4 to 18 */
	font-family: 'Source Sans Pro', sans-serif;
	color: white;
	opacity: 1;
	font-weight: 300;
}
body ::-moz-placeholder {
	/* Mozilla Firefox 19+ */
	font-family: 'Source Sans Pro', sans-serif;
	color: white;
	opacity: 1;
	font-weight: 300;
}
body :-ms-input-placeholder {
	/* Internet Explorer 10+ */
	font-family: 'Source Sans Pro', sans-serif;
	color: white;
	font-weight: 300;
}
.wrapper {
	/*background: #50a3a2;
	background: -webkit-gradient(linear, left top, right bottom, from(#50a3a2), to(#53e3a6));
	background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);*/

	background: #fc4a1a;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



	position: absolute;
	/*top: 50%;*/
	left: 0;
	width: 100%;
	height: 100%;
	/*margin-top: -200px;*/
	overflow: hidden;
}
.wrapper.form-success .container h1 {
	-webkit-transform: translateY(85px);
					transform: translateY(85px);
}
/*.container {
	max-width: 600px;
	margin: 0 auto;
	padding: 80px 0;
	height: 400px;
	text-align: center;
}*/
.container h1 {
	font-size: 40px;
	-webkit-transition-duration: 1s;
			transition-duration: 1s;
	-webkit-transition-timing-function: ease-in-put;
			transition-timing-function: ease-in-put;
	font-weight: 200;
}
form {
	padding: 20px 0;
	position: relative;
	z-index: 2;
}
form input {
	-webkit-appearance: none;
	-moz-appearance: none;
		appearance: none;
	outline: 0;
	border: 1px solid rgba(255, 255, 255, 0.4);
	background-color: rgba(255, 255, 255, 0.2);
	width: 250px;
	border-radius: 3px;
	padding: 10px 15px;
	/*margin: 0 auto 10px auto;*/
	margin: 10px;
	display: block;
	text-align: center;
	font-size: 18px;
	color: white;
	-webkit-transition-duration: 0.25s;
					transition-duration: 0.25s;
	font-weight: 300;
}
form input:hover {
	background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
	background-color: white;
	width: 300px;
	color: #53e3a6;
}
form button {
	-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
	outline: 0;
	background-color: white;
	border: 0;
	padding: 10px 15px;
	color: #53e3a6;
	border-radius: 3px;
	width: 250px;
	cursor: pointer;
	font-size: 18px;
	-webkit-transition-duration: 0.25s;
			transition-duration: 0.25s;
	margin: 0 0 0 10px;
}
form button:hover {
	background-color: #f5f7f9;
}
.bg-bubbles {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
}
.bg-bubbles li {
	position: absolute;
	list-style: none;
	display: block;
	width: 40px;
	height: 40px;
	background-color: rgba(255, 255, 255, 0.15);
	bottom: -160px;
	-webkit-animation: square 25s infinite;
	animation: square 25s infinite;
	-webkit-transition-timing-function: linear;
	transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
	left: 10%;
}
.bg-bubbles li:nth-child(2) {
	left: 20%;
	width: 80px;
	height: 80px;
	-webkit-animation-delay: 2s;
			animation-delay: 2s;
	-webkit-animation-duration: 17s;
			animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
	left: 25%;
	-webkit-animation-delay: 4s;
			animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
	left: 40%;
	width: 60px;
	height: 60px;
	-webkit-animation-duration: 22s;
			animation-duration: 22s;
	background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
	left: 70%;
}
.bg-bubbles li:nth-child(6) {
	left: 80%;
	width: 120px;
	height: 120px;
	-webkit-animation-delay: 3s;
			animation-delay: 3s;
	background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
	left: 32%;
	width: 160px;
	height: 160px;
	-webkit-animation-delay: 7s;
			animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
	left: 55%;
	width: 20px;
	height: 20px;
	-webkit-animation-delay: 15s;
			animation-delay: 15s;
	-webkit-animation-duration: 40s;
			animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
	left: 25%;
	width: 10px;
	height: 10px;
	-webkit-animation-delay: 2s;
			animation-delay: 2s;
	-webkit-animation-duration: 40s;
			animation-duration: 40s;
	background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
	left: 90%;
	width: 160px;
	height: 160px;
	-webkit-animation-delay: 11s;
			animation-delay: 11s;
}
@-webkit-keyframes square {
	0% {
		-webkit-transform: translateY(0);
				transform: translateY(0);
	}
	100% {
		-webkit-transform: translateY(-700px) rotate(600deg);
				transform: translateY(-700px) rotate(600deg);
	}
}
@keyframes square {
	0% {
		-webkit-transform: translateY(0);
				transform: translateY(0);
	}
	100% {
		-webkit-transform: translateY(-700px) rotate(600deg);
				transform: translateY(-700px) rotate(600deg);
	}
}

</style>

</head>
<body>



<div class="wrapper">
	<div class="container" style="margin-top: 50px; position: relative; z-index: 3;">
		<div class="row">
			<div class="col-md-12" align="center">
				<h1>Welcome</h1>
			</div>
		</div>
		<br> <br> <br>
		<div class="row">
			<div class="col-md-6" align="right" style="border-right: 1px solid; padding: 30px;">
				<h2 style="font-size: 60px; line-height: 60px;">Admin <br> Panel</h2>
			</div>
			<div class="col-md-6" align="left">
				<form class="form" action="<?=BASEURL?>login/login" method="post">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<?php if(isset($error) && $error != '') : ?>
					<div class="form-group" style="width:250px" align="center">
						<span style="color: red;">Login Failed.</span>
					</div>
					<?php endif; ?>
					<button type="submit" id="login-button">Login</button>
				</form>
			</div>
		</div>
		<br> <br> <br>
		<div class="row">
			<div class="col-md-12" align="center">
				powered by &nbsp;&nbsp;&nbsp; <a href="//www.ngenagency.com/" target="blank"><img src="<?=BASEURL?>public/images/ngen-logo-w.png" width="80"></a>
			</div>
		</div>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


<?php load_view('common/js')?>

<footer style="position: absolute;"> 
	&copy; 2018 <strong>Ngen</strong>. All rights reserved.
</footer>
</body>
</html>