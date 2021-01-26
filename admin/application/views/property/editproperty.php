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
					<h1>Community - Edit</h1>
				<?php else: ?>
					<h1>Retail - Edit</h1>
				<?php endif;?>
			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<form method="post" role="form" id="category" action="<?=BASEURL?>property/editproperty_action">
			<div class="row">
				<input type="hidden" name="id" value="<?=$_['id']?>">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="title" placeholder="Title" value="<?=$_['title']?>">
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sub - Title</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="sub_title" placeholder="Sub Title" value="<?=$_['sub_title']?>">
						</div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Short Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="short_description" ><?=$_['short_description']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Long Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="description" id="description"><?=$_['description']?></textarea>
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
							<input type="text" class="form-control" name="sort_order" placeholder="Sort Order" value="<?=$_['sort_order']?>">
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">

				<div class="col-sm-6">


					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Hero Image (Must upload image)</h3>
						</div>
						<div class="panel-body">

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" data-trigger="fileinput">
									<?php if($_['hero_image']!= ''):?>
										<img id="hero_image_image" src="<?=BASEURL?>../files/source/<?=$_['hero_image']?>" alt="...">
									<?php else:?>
										<img id="hero_image_image" src="http://placehold.it/1200x800" alt="...">
									<?php endif;?>
								</div>
								<div>
									<input type="hidden" name="hero_image" id="hero_image" value="<?=$_['hero_image']?>">
									<a  href="javascript:open_model('hero_image')" class="btn" type="button">Select</a>
									<a  href="javascript:remove_image('hero_image')" class="btn" type="button">Remove</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<?php if($property_type == 'communities'): ?>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Logo</h3>
						</div>
						<div class="panel-body">

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" data-trigger="fileinput">
									<?php if($_['logo']!= ''):?>
										<img id="logo_image" src="<?=BASEURL?>../files/source/<?=$_['logo']?>" alt="...">
									<?php else:?>
										<img id="logo_image" src="http://placehold.it/520x130" alt="...">
									<?php endif;?>
								</div>
								<div>
									<input type="hidden" name="logo" id="logo" value="<?=$_['logo']?>">
									<a  href="javascript:open_model('logo')" class="btn" type="button">Select</a>
									<a  href="javascript:remove_image('logo')" class="btn" type="button">Remove</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif;?>

			</div>

			<hr>

			<div class="row">

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Status</h3>
						</div>
						<div class="panel-body">
							<select name="status" class="form-control">
								<option value="1" <?=($_['status']==1)?'selected':''?>>Now Open</option>
								<option value="2" <?=($_['status']==2)?'selected':''?>>Sold Out</option>
								<option value="3" <?=($_['status']==3)?'selected':''?>>Coming Soon</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Is Signature</h3>
						</div>
						<div class="panel-body">
							<select name="is_signature" class="form-control">
								<option value="0" <?=($_['is_signature']==0)?'selected':''?>>No</option>
								<option value="1" <?=($_['is_signature']==1)?'selected':''?>>Yes</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Map Latitude</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="map_lat" placeholder="Map Pin Latitude" value="<?=$_['map_lat']?>">
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Map Longitude</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="map_lng" placeholder="Map Pin Longitude" value="<?=$_['map_lng']?>">
						</div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sq.Ft.</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="sqft" placeholder="Enter Sq.Ft." value="<?=$_['sqft']?>">
						</div>
					</div>
				</div>
				<?php if($property_type == 'communities'): ?>
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Bedrooms</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="bedroom" placeholder="Bedrooms" value="<?=$_['bedroom']?>">
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Bathrooms</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="bathroom" placeholder="Bathrooms" value="<?=$_['bathroom']?>">
						</div>
					</div>
				</div>
				<?php endif;?>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Microsite</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="microsite" placeholder="Microsite" value="<?=$_['microsite']?>">
						</div>
					</div>
				</div>

			</div>

			<hr>

			<div class="row">

				<?php if($property_type == 'communities'): ?>
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Commuting</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="commuting" ><?=$_['commuting']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Activities</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="activities" ><?=$_['activities']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Dining</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="dining" ><?=$_['dining']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Entertainment</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="entertainment" ><?=$_['entertainment']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Education</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="education" ><?=$_['education']?></textarea>
						</div>
					</div>
				</div>

				<?php else: ?>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Notable Tenants</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="tenents" ><?=$_['tenents']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Address</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="address" ><?=$_['address']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Contact</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="contact" id="contact"><?=$_['contact']?></textarea>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Brochure</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="brochure" id="brochure" placeholder="Select a file" onclick="open_model('brochure')" value="<?=$_['brochure']?>">
						</div>
					</div>
				</div>
				<?php endif; ?>

			</div>
			<hr>

			<div class="row">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Images</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="image1" id="image1" placeholder="Select a Image" onclick="open_model('image1')" value="<?=$_['image1']?>"><button type="button" onclick="$('#image1').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image2" id="image2" placeholder="Select a Image" onclick="open_model('image2')" value="<?=$_['image2']?>"><button type="button" onclick="$('#image2').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image3" id="image3" placeholder="Select a Image" onclick="open_model('image3')" value="<?=$_['image3']?>"><button type="button" onclick="$('#image3').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image4" id="image4" placeholder="Select a Image" onclick="open_model('image4')" value="<?=$_['image4']?>"><button type="button" onclick="$('#image4').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image5" id="image5" placeholder="Select a Image" onclick="open_model('image5')" value="<?=$_['image5']?>"><button type="button" onclick="$('#image5').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image6" id="image6" placeholder="Select a Image" onclick="open_model('image6')" value="<?=$_['image6']?>"><button type="button" onclick="$('#image6').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image7" id="image7" placeholder="Select a Image" onclick="open_model('image7')" value="<?=$_['image7']?>"><button type="button" onclick="$('#image7').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image8" id="image8" placeholder="Select a Image" onclick="open_model('image8')" value="<?=$_['image8']?>"><button type="button" onclick="$('#image8').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image9" id="image9" placeholder="Select a Image" onclick="open_model('image9')" value="<?=$_['image9']?>"><button type="button" onclick="$('#image9').val('');return;">Remove</button><br><br>
							<input type="text" class="form-control" name="image10" id="image10" placeholder="Select a Image" onclick="open_model('image10')" value="<?=$_['image10']?>"><button type="button" onclick="$('#image10').val('');return;">Remove</button><br>
						</div>
					</div>
				</div>
				<?php if($property_type == 'communities'): ?>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Progress Images</h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="progress_image1" id="progress_image1" placeholder="Select a progress Image" onclick="open_model('progress_image1')" value="<?=$_['progress_image1']?>">
							<input type="text" class="form-control" name="progress_image_alt1" id="progress_image_alt1" placeholder="Description" value="<?=$_['progress_image_alt1']?>">
							<button type="button" onclick="$('#progress_image1').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image2" id="progress_image2" placeholder="Select a progress Image" onclick="open_model('progress_image2')" value="<?=$_['progress_image2']?>">
							<input type="text" class="form-control" name="progress_image_alt2" id="progress_image_alt2" placeholder="Description" value="<?=$_['progress_image_alt2']?>">
							<button type="button" onclick="$('#progress_image2').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image3" id="progress_image3" placeholder="Select a progress Image" onclick="open_model('progress_image3')" value="<?=$_['progress_image3']?>">
							<input type="text" class="form-control" name="progress_image_alt3" id="progress_image_alt3" placeholder="Description" value="<?=$_['progress_image_alt3']?>">
							<button type="button" onclick="$('#progress_image3').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image4" id="progress_image4" placeholder="Select a progress Image" onclick="open_model('progress_image4')" value="<?=$_['progress_image4']?>">
							<input type="text" class="form-control" name="progress_image_alt4" id="progress_image_alt4" placeholder="Description" value="<?=$_['progress_image_alt4']?>">
							<button type="button" onclick="$('#progress_image4').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image5" id="progress_image5" placeholder="Select a progress Image" onclick="open_model('progress_image5')" value="<?=$_['progress_image5']?>">
							<input type="text" class="form-control" name="progress_image_alt5" id="progress_image_alt5" placeholder="Description" value="<?=$_['progress_image_alt5']?>">
							<button type="button" onclick="$('#progress_image5').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image6" id="progress_image6" placeholder="Select a progress Image" onclick="open_model('progress_image6')" value="<?=$_['progress_image6']?>">
							<input type="text" class="form-control" name="progress_image_alt6" id="progress_image_alt6" placeholder="Description" value="<?=$_['progress_image_alt6']?>">
							<button type="button" onclick="$('#progress_image6').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image7" id="progress_image7" placeholder="Select a progress Image" onclick="open_model('progress_image7')" value="<?=$_['progress_image7']?>">
							<input type="text" class="form-control" name="progress_image_alt7" id="progress_image_alt7" placeholder="Description" value="<?=$_['progress_image_alt7']?>">
							<button type="button" onclick="$('#progress_image7').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image8" id="progress_image8" placeholder="Select a progress Image" onclick="open_model('progress_image8')" value="<?=$_['progress_image8']?>">
							<input type="text" class="form-control" name="progress_image_alt8" id="progress_image_alt8" placeholder="Description" value="<?=$_['progress_image_alt8']?>">
							<button type="button" onclick="$('#progress_image8').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image9" id="progress_image9" placeholder="Select a progress Image" onclick="open_model('progress_image9')" value="<?=$_['progress_image9']?>">
							<input type="text" class="form-control" name="progress_image_alt9" id="progress_image_alt9" placeholder="Description" value="<?=$_['progress_image_alt9']?>">
							<button type="button" onclick="$('#progress_image9').val('');return;">Remove</button><br><br>

							<input type="text" class="form-control" name="progress_image10" id="progress_image10" placeholder="Select a progress Image" onclick="open_model('progress_image10')" value="<?=$_['progress_image10']?>">
							<input type="text" class="form-control" name="progress_image_alt10" id="progress_image_alt10" placeholder="Description" value="<?=$_['progress_image_alt10']?>">
							<button type="button" onclick="$('#progress_image10').val('');return;">Remove</button><br>
						</div>
					</div>
				</div>
				<?php endif; ?>

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

	CKEDITOR.replace( document.getElementById('contact') ,{
		filebrowserBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '<?=BASEURL?>../files/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
	});

});
</script>

</body>
</html>
