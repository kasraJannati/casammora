<!-- START JAVASCRIPT -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<script src="<?=BASEURL?>public/js/bootstrap.min.js"></script>
<script src="<?=BASEURL?>public/js/bootsnav.js"></script>
<script src="<?=BASEURL?>public/js/jquery.multi-select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>




<script type="text/javascript">
	
	$(document).ready(function (){

		$(".scroll_to").click(function (){
			var id = $(this).data('scroll');
			console.log(id);
			$('html, body').animate({
				scrollTop: $(id).offset().top -80
			});
		});
	});
</script>