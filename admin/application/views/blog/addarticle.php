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
				<h1>Blog - Article | Add</h1>
				<p>Some discription</p>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<form method="post" role="form" id="category" action="<?=BASEURL?>blog/addarticle_action">
			<div class="row">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="text" class="form-control" name="title" placeholder="Enter a Title">
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Active</h3>
						</div>
						<div class="panel-body">
							<select name="active" class="form-control" id="sbox-active">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>

						</div>
					</div>
				</div>

			</div>



			<div class="row">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Featured Image (Must upload image) </h3>
						</div>
						<div class="panel-body">

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" data-trigger="fileinput">
									<img id="image_file_image" src="http://placehold.it/200x140" alt="...">
								</div>
								<div>
									<input type="hidden" name="image_file_last" id="image_file_last" value="">
									<a  href="javascript:open_model('image_file')" class="btn" type="button">Select</a>
									<a  href="javascript:remove_image('image_file')" class="btn" type="button">Remove</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Category</h3>
						</div>
						<div class="panel-body">
							

							<select multiple="multiple" name="category[]" class="form-control" id="multi-category">
								<?php foreach($category as $value): ?>
									<option value="<?=$value['id']?>"><?=$value['name']?></option>
								<?php endforeach;?>
							</select>

						</div>
					</div>
				</div>

			</div>



			<div class="row">

				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Short Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="short_description" id="short_description"></textarea>
						</div>
					</div>
				</div>
			</div>


			<div class="row">

				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Content</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="50" name="content" id="content"></textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<input type="submit" value="Save" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>

		<div class="clear"></div>

	</div>

</div>

<div class="modal invert fade" id="filemanager" style="">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="modal-body">
				<input type="hidden" value="" id="selected_field">
				<input type="hidden" value="" id="selected_image">
				<iframe width="100%" height="600" src="<?=BASEURL?>../files/filemanager/dialog.php?type=1&amp;field_id=selected_image" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll;"></iframe>
			</div>

		</div>
	</div>
</div> 

<?php load_view('common/js')?>

<script type="text/javascript">
jQuery(document).ready(function(){

	CKEDITOR.replace( document.getElementById('content') ,{
		filebrowserBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
	});

	// CKEDITOR.replace(document.getElementById('content'))

});
</script>

<script type="text/javascript">
	
	function open_model(office_logo){
		$('#filemanager').modal('show');
		$('#selected_field').val(office_logo);
	}

	function remove_image(field_id){
		
		$('#image_file_last').val('');
		$('#image_file_image').attr("src","http://placehold.it/200x100");
	}

	function responsive_filemanager_callback(field_id){

		var file_name = $('#selected_image').val();
		file_name = file_name.split("/source/").pop();



		$('#image_file_last').val(file_name);
		$('#image_file_image').attr("src","<?=BASEURL?>../files/source/"+file_name);
	}
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#multi-category").multiSelect();
});
</script>

</body>
</html>