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
				<?php if($property_type == 'communities'): ?>
					<h1>Communities</h1>
				<?php else: ?>
					<h1>Retail</h1>
				<?php endif;?>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<!-- Basic Setup -->
		<div class="panel panel-default">
			
			<div class="notes-header">
				<a href="<?=BASEURL?>property/addproperty" class="btn btn-success btn-icon btn-icon-standalone" id="add-note">
					<i class="fa fa-plus"></i>	
					<?php if($property_type == 'communities'): ?>
						<span>New Community</span>
					<?php else: ?>
						<span>New Retail</span>
					<?php endif;?>
				</a>
			</div>
			<div class="panel-body">

				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#example-1").dataTable({
						aLengthMenu: [
							[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
						]
					});
				});
				</script>

				<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach($properties as $value): ?>
						<tr class="odd gradeX">
							<td><img src="<?=BASEURL?>../files/source/<?=$value['hero_image']?>" width="50"/></td>
							<td><?=$value['title']?></td>
							<td>
								<a href="<?=BASEURL?>property/editproperty/<?=$value['id']?>" class="btn btn-info btn-sm btn-icon icon-left">
									Edit
								</a>
								<a href="javascript: deleteitem(<?=$value['id']?>, '<?=$value['title']?>');" class="btn btn-danger btn-sm btn-icon icon-left">
									Delete
								</a>
							</td>
						</tr>

					<?php endforeach;?>
					</tbody>


				</table>

			</div>
		</div>

	</div>
	<?php load_view('common/footer')?>
</div>

<div class="modal invert fade" id="modal">
	<div class="modal-dialog">
		<div class="modal-content">

			<form role="form" method="post" action="<?=BASEURL?>property/deleteproperty">

				<input type="hidden" name="id" value="" id="id">

				<div class="modal-header">
					<button type="button" class="close btn btn-lg" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Delete Item</h4>
				</div>

				<div class="modal-body">
					<p>Are you sure you want to delete <span style="color:red" id="name"></span> item?</p>
				</div>

				

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-danger btn-lg">Yes</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php load_view('common/js')?>

<script type="text/javascript">

	function deleteitem(id, name){

		$('#id').val(id);
		$('#name').html(name);
		$("#modal").modal('show');
	}
</script> 
</body>
</html>