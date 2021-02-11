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
				
				<?php if($property_type == 'aboutpage'): ?>
					<h1>About - Add</h1>
				<?php elseif($property_type == 'policypage'): ?>
					<h1>Policy - Add</h1>
				<?php elseif($property_type == 'homepage'): ?>
					<h1>Home - Add</h1>
				<?php elseif($property_type == 'slideshow'): ?>
					<h1>Sildeshow - Add</h1>
				<?php elseif($property_type == 'communities'): ?>
					<h1>communities - Add</h1>
				<?php else: ?>
					<h1>Status - Add</h1>
				<?php endif;?>
				
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<form method="post" role="form" id="category" action="<?=BASEURL?>property/addcustomproperty_action">
			<div class="row">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="title" placeholder="Title" required>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sub - Title</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="sub_title" placeholder="Sub Title" <?php if($property_type == 'aboutpage' || $property_type == 'policypage' || $property_type == 'homepage' || $property_type == 'slideshow' || $property_type == 'communities'):?>	disabled <?php endif;?>>
						</div>
					</div>
				</div>

			</div>


			<div class="row<?php if($property_type == 'policypage'):?> disabledBox <?php endif;?>"> 


				<?php if($property_type == 'communities'):?>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Status</h3>
							</div>
							<div class="panel-body">
								<select name="architech">
									<option value="coming soon">coming soon</option>
									<option value="sold out">sold out</option>
									<option value="now open">now open</option>
								</select>
							</div>
						</div>
					</div>
				<?php endif;?>


				<?php if($property_type != 'communities'):?>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Architect</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="architech" placeholder="Architect" <?php if($property_type == 'aboutpage' || $property_type == 'policypage' || $property_type == 'homepage' || $property_type == 'slideshow' || $property_type == 'building'):?>	disabled <?php endif;?> >
						</div>
					</div>
				</div>
				<?php endif;?>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Location<?php if($property_type == 'policypage'){ echo "- The name of pdf file"; }?> </h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="location" placeholder="Location" <?php if($property_type == 'aboutpage' || $property_type == 'homepage' || $property_type == 'suites' || $property_type == 'building') :?>	disabled <?php endif;?>>
						</div>
					</div>
				</div>

			</div>

			<div class="row<?php if($property_type == 'statuspage'):?> disabledBox <?php endif;?>">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Short Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="short_description" <?php if($property_type == 'aboutpage' || $property_type == 'policypage' || $property_type == 'homepage' || $property_type == 'slideshow' || $property_type == 'documents' || $property_type == 'suites' || $property_type == 'building'):?>	disabled <?php endif;?>></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Long Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="description" id="description"></textarea>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sort Order</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="sort_order" placeholder="Sort Order" required>
						</div>
					</div>
				</div>
			</div>
			
			<hr>

			<div class="row<?php if($property_type == 'policypage' ||
									$property_type == 'homepage' || 
									$property_type == 'testimonial' || 
									$property_type == 'statisticscard' || 
									$property_type == 'documents'):?> disabledBox <?php endif;?>">

				<div class="col-sm-6">
					
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Hero Image (Must upload image)</h3>
						</div>
						<div class="panel-body">

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" data-trigger="fileinput">
									<img id="hero_image_image" src="http://placehold.it/1200x800" alt="...">
								</div>
								<div>
									<input type="hidden" name="hero_image" id="hero_image" value="" required>
									<a  href="javascript:open_model('hero_image')" class="btn" type="button">Select</a>
									<a  href="javascript:remove_image('hero_image')" class="btn" type="button">Remove</a>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-6 <?php if($property_type == 'aboutpage' || $property_type == 'policypage' || $property_type == 'homepage' || $property_type == 'building'):?>	disabledBox <?php endif;?>" >
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Logo</h3>
						</div>
						<div class="panel-body">

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" data-trigger="fileinput">
									<img id="logo_image" src="http://placehold.it/520x130" alt="...">
								</div>
								<div>
									<input type="hidden" name="logo" id="logo" value="">
									<a  href="javascript:open_model('logo')" class="btn" type="button">Select</a>
									<a  href="javascript:remove_image('logo')" class="btn" type="button">Remove</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<hr>

			<div class="row<?php if($property_type == 'policypage' || $property_type == 'homepage' || $property_type == 'slideshow' || $property_type == 'statistics' || $property_type == 'statisticscard' || $property_type == 'suites' || $property_type == 'building' || $property_type == 'documents'):?> disabledBox <?php endif;?>">

				<div class="col-sm-6<?php if($property_type == 'aboutpage'):?>	disabledBox <?php endif;?>">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Images</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="image1" id="image1" placeholder="Select a Image" onclick="open_model('image1')"><br>
							<input type="text" class="form-control" name="image2" id="image2" placeholder="Select a Image" onclick="open_model('image2')"><br>
							<input type="text" class="form-control" name="image3" id="image3" placeholder="Select a Image" onclick="open_model('image3')"><br>
							<input type="text" class="form-control" name="image4" id="image4" placeholder="Select a Image" onclick="open_model('image4')"><br>
							<input type="text" class="form-control" name="image5" id="image5" placeholder="Select a Image" onclick="open_model('image5')"><br>
							<input type="text" class="form-control" name="image6" id="image6" placeholder="Select a Image" onclick="open_model('image6')"><br>
							<input type="text" class="form-control" name="image7" id="image7" placeholder="Select a Image" onclick="open_model('image7')"><br>
							<input type="text" class="form-control" name="image8" id="image8" placeholder="Select a Image" onclick="open_model('image8')"><br>
							<input type="text" class="form-control" name="image9" id="image9" placeholder="Select a Image" onclick="open_model('image9')"><br>
							<input type="text" class="form-control" name="image10" id="image10" placeholder="Select a Image" onclick="open_model('image10')">
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

<div class="modal invert fade" id="filemanager" >
	<div class="modal-dialog" style="width: 80%;">
		<div class="modal-content">
		
			<div class="modal-body">
				<input type="hidden" value="" id="selected_field">
				<input type="hidden" value="" id="selected_image">
				<iframe width="100%" height="600" src="<?=BASEURL?>../files/filemanager/dialog.php?type=0&amp;field_id=selected_image" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll;"></iframe>
			</div>

		</div>
	</div>
</div> 

<?php load_view('common/js')?>

<script type="text/javascript">
	
	function open_model(selected_field){
		$('#filemanager').modal('show');
		$('#selected_field').val(selected_field);
	}

	function remove_image(selected_field){
		
		$('#'+selected_field).val('');
		$('#'+selected_field+'_image').attr("src","http://placehold.it/200x100");
	}

	function responsive_filemanager_callback(field_id){

		var selected_field = $('#selected_field').val();
		var file_name = $('#selected_image').val();
		file_name = file_name.split("/source/").pop();

		$('#'+selected_field).val(file_name);
		$('#'+selected_field+'_image').attr("src","<?=BASEURL?>../files/source/"+file_name);
	}

</script>

<script type="text/javascript">
jQuery(document).ready(function(){

	CKEDITOR.replace( document.getElementById('description') ,{
		filebrowserBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
	});

});
</script>

</body>
</html>