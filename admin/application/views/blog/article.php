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
				<h1>Blog - Article</h1>
				<p>Some discription</p>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<!-- Basic Setup -->
		<div class="panel panel-default">
			
			<div class="notes-header">
				<a href="<?=BASEURL?>blog/addarticle" class="btn btn-success btn-icon btn-icon-standalone" id="add-note">
					<i class="fa fa-plus"></i>
					<span>New Article</span>
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
							<th>Date</th>
							<th>Active</th>
							<th>Category</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach($article as $value): 
							$value['category_ids'] = explode(', ', $value['category_ids']);
					?>
						<tr class="odd gradeX">
							<td><img src="<?=BASEURL?>../files/source/<?=$value['image']?>" width="50"/></td>
							<td><?=$value['title']?></td>
							<td><?=$value['updated']?></td>
							<td><?=$value['active']?></td>
							<td>
								<?php 
								foreach($value['category_ids'] as $_){
									foreach($category as $cat){
										if($cat['id'] == $_) echo $cat['name'] . ', ';
									}
								}
								?>
							</td>
							<td>
								<a href="<?=BASEURL?>blog/editarticle/<?=$value['id']?>" class="btn btn-info btn-sm btn-icon icon-left">
									Edit
								</a>

								<a href="javascript: deletearticle(<?=$value['id']?>, '<?=$value['title']?>');" class="btn btn-danger btn-sm btn-icon icon-left">
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

			<form role="form" method="post" action="<?=BASEURL?>blog/deletearticle">

				<input type="hidden" name="id" value="" id="id">

				<div class="modal-header">
					<button type="button" class="close btn btn-lg" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Delete Article</h4>
				</div>

				<div class="modal-body">
					<p>Are you sure you want to delete <span style="color:red" id="name"></span> article?</p>
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

	function deletearticle(id, name){

		$('#id').val(id);
		$('#name').html(name);
		$("#modal").modal('show');
	}
</script> 
</body>
</html>