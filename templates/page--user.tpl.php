<?php include "header.tpl.php"; ?>
<div class="principal">
	
	<div class="container">
				
			  
	         
		<div class="row">

			<div class="col-sm-3">
	        	<div class="sidebar">

	        		<?php print views_embed_view('usuario_info', 'default'); ?>
	        	</div>
	        </div> 
			
			<div class="col-sm-9"> 
				
	          <?php /*if ($tabs): ?>
	            <div class="tabs">
	              <?php print render($tabs); ?>
	            </div>
	          <?php endif;*/ ?> 


				<?php print render($page['content']); ?>  

				<?php print views_embed_view('noticias_autor', 'default'); ?>

				
	        </div> 
	        
		</div>
		
		<!--div class="row">
			<?php print views_embed_view('banner_home', 'default'); ?>
		</div-->
	</div><!-- container -->
</div><!-- principal -->
 
 <?php include "footer.tpl.php"; ?>
 <script type="text/javascript">
jQuery(document).ready(function ($) {
	var image = $('.view-capa-noticia img').attr('src');
	$('.view-capa-noticia').css({           	
	 'background-image': 'url('+ image +')'
	});   

	$('.tabs').prependTo('.view-topo-noticia-16');

 });
	
</script>  