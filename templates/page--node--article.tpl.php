<?php include "header.tpl.php"; ?>
<div class="principal">
	<div class="capa">
		<?php print views_embed_view('capa_noticia', 'default'); ?>
	</div>
	<div class="container">
				
			<?php if ($messages): ?>
	          <div id="messages"><div class="section clearfix">
	            <?php print $messages; ?>
	          </div></div> <!-- /.section, /#messages -->          
	          <?php endif; ?>
	         
		<div class="row">
			
			<div class="col-sm-8"> 
				 <?php print views_embed_view('topo_noticia_16', 'default'); ?>
				 <?php print views_embed_view('corpo_noticia_16', 'default'); ?>
				
	        </div> 
	        <div class="col-sm-4">
	        	
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
 });
	
</script>  