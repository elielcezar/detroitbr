
<?php include "header.tpl.php"; ?>



<div class="principal">


	<div class="container">

		<h1>Playlists</h1>
				
			<?php if ($messages): ?>
	          <div id="messages"><div class="section clearfix">
	            <?php print $messages; ?>
	          </div></div> <!-- /.section, /#messages -->          
	          <?php endif; ?>
	         


		<div class="row">
			
			<div class="col-sm-12"> 

				 <?php print views_embed_view('playlists', 'default'); ?>
				
	        </div> 

		</div>

		

	</div><!-- container -->
</div><!-- principal -->
 

 <?php include "footer.tpl.php"; ?>


 <script type="text/javascript">
jQuery(document).ready(function ($) {
	var image = $('.view-capa-noticia img').attr('src');
	$('.view-capa-noticia').css({           	
	 'background-image': 'url('+ image +')'
	});    
 });
	
</script>  