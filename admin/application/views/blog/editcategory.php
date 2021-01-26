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
				<h1>Blog - Category | Add</h1>
				<p>Some discription</p>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<form method="post" role="form" action="<?=BASEURL?>blog/editcategory_action">
			<input type="hidden" name="id" value="<?=$category['id']?>"/>
			<div class="row">
				<!-- General Info -->
				<div class="col-sm-6">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Category Name</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="text" class="form-control" name="name" value="<?=$category['name']?>" placeholder="Enter a Category Name">
							</div>

							<input type="submit" class="btn btn-success" value="Save">

						</div>
					</div>
				</div>

			</div>
		</form>

	</div>
	<?php load_view('common/footer')?>

</div>



<?php load_view('common/js')?>


</body>
</html>