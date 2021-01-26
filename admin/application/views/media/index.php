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
		<div class="row">
			<div class="col-md-12">
				<h1>File Manager</h1>
				<p>Manage all media files.</p>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<!-- Basic Setup -->
		<div class="panel panel-default">
		
			<div class="panel-body">



				<iframe  width="100%" height="700" frameborder="0" src="<?=BASEURL?>../files/filemanager/dialog.php?type=0">
				</iframe>

			</div>
		</div>

	</div>

</div>



<?php load_view('common/js')?>
</body>
</html>