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
					<h1>About - Edit</h1>
				<?php elseif($property_type == 'faqpage'): ?>
					<h1>FAQ - Edit</h1>
				<?php elseif($property_type == 'homepage'): ?>
					<h1>Home - Edit</h1>
				<?php elseif($property_type == 'testimonial'): ?>
					<h1>Testimonial - Add</h1>
				<?php else: ?>
					<h1>Status - Edit</h1>
				<?php endif;?>

			</div>
		</div>
	</div>
	<hr>

	<div class="container">


		<form method="post" role="form" id="category" action="<?=BASEURL?>property/editcustomproperty_action">
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
							<input type="text" class="form-control" name="sub_title" placeholder="Sub Title" value="<?=$_['sub_title']?>" <?php if($property_type == 'faqpage' || $property_type == 'homepage' || $property_type == 'testimonial' || $property_type == 'vision' || $property_type == 'site' || $property_type == 'documents' || $property_type == 'suites'|| $property_type == 'building'):?>	disabled <?php endif;?>>
						</div>
					</div>
				</div>

			</div>


			<div class="row">


			<?php if($property_type == 'documents'):?>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Select the category</h3>
							</div>
							<div class="panel-body">
								<select name="architech">
									<option value="Planning and Architecture">Planning and Architecture</option>
									<option value="Administrative Documents">Administrative Documents</option>
									<option value="Community Consultation">Community Consultation</option>
									<option value="Environmental Reports">Environmental Reports</option>
									<option value="Engineering Reports">Engineering Reports</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>
				<?php endif;?>


				<?php if($property_type != 'documents'):?>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Architect</h3>

							</div>
							<div class="panel-body">
								<input type="text" class="form-control" name="architech" placeholder="Architect" value="<?=$_['architech']?>" <?php if($property_type == 'aboutpage' || $property_type == 'faqpage' || $property_type == 'homepage' || $property_type == 'testimonial' || $property_type == 'vision' || $property_type == 'site' || $property_type == 'suites'|| $property_type == 'building'):?>	disabled <?php endif;?>>
							</div>
						</div>
					</div>
				<?php endif;?>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
							Location 	<?php if($property_type == 'documents'){ echo "- The name of pdf file"; }?> </h3>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" name="location" placeholder="Location" value="<?=$_['location']?>" <?php if($property_type == 'faqpage' || $property_type == 'homepage' || $property_type == 'testimonial' || $property_type == 'statistics' || $property_type == 'vision' || $property_type == 'suites'|| $property_type == 'building'):?>	disabled <?php endif;?>>
						</div>
					</div>
				</div>

			</div>

			<div class="row<?php if($property_type == 'statistics'):?> disabledBox <?php endif;?>">

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Short Description</h3>
						</div>
						<div class="panel-body">
							<textarea class="form-control" rows="5" name="short_description"  <?php if($property_type == 'aboutpage' || $property_type == 'faqpage' || $property_type == 'testimonial' || $property_type == 'vision' || $property_type == 'site' || $property_type == 'documents' || $property_type == 'suites'|| $property_type == 'building'):?>	disabled <?php endif;?>><?=$_['short_description']?></textarea>
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

			<div class="row<?php if($property_type == 'statuspage' 
									|| $property_type == 'faqpage' 
									|| $property_type == 'homepage' 
									|| $property_type == 'testimonial' 
									|| $property_type == 'statisticscard'
									|| $property_type == 'documents'):?> disabledBox <?php endif;?>">

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

				<div class="col-sm-6 <?php if($property_type == 'aboutpage' 
											|| $property_type == 'statistics' 
											|| $property_type == 'vision'
											|| $property_type == 'site' 
											|| $property_type == 'suites'
											|| $property_type == 'building'):?>	disabledBox <?php endif;?>">
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

			</div>

			<hr>

			<div class="row<?php if($property_type == 'statuspage' || 
									$property_type == 'faqpage' || 
									$property_type == 'homepage' || 
									$property_type == 'testimonial' || 
									$property_type == 'statistics' || 
									$property_type == 'statisticscard' || 
									$property_type == 'statisticscard' || 
									$property_type == 'vision' || 
									$property_type == 'site' || 
									$property_type == 'suites' || 
									$property_type == 'building' || $property_type == 'documents' ):?> disabledBox <?php endif;?>">

				<div class="col-sm-6<?php if($property_type == 'aboutpage'):?>	disabledBox <?php endif;?>">
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