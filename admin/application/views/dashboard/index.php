<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<?php load_view('common/css')?>

</head>
<body>
<?php load_view('common/header')?>
<?php load_view('common/nav')?>



<div class="main-content">

	

	<div class="container">


		<!-- Basic Setup -->
		<div class="panel panel-default" style="border: none; box-shadow: none;">

			<h1 style="    padding-top: 20%; text-align: center;">Admin Panel</h1>
			<img src="<?=BASEURL?>public/images/ngen-logo.png" class="logo" alt="logo" class="img-fluid" style="display: block; margin: 30px auto 0;">
		</div>

	</div>

</div>

<?php load_view('common/footer')?>
<?php load_view('common/js')?>
</body>
</html>