<?php include "header.tpl.php"; ?>
<div class="principal">
	<div class="capa">
		<?php print views_embed_view('capa_artista', 'default'); ?>
	</div>
	<div class="container">
	         
		<div class="row">
			
			<div class="col-sm-8"> 				
				 <?php print views_embed_view('topo_artista', 'default'); ?>
				
				<?php if ($messages): ?>
					<div id="messages"><div class="section clearfix">
					<?php print $messages; ?>
					</div></div>
				<?php endif; ?>
				<?php if ($tabs): ?>
					<div class="tabs"><?php print render($tabs); ?></div>
				<?php endif; ?> 

				<?php print views_embed_view('release_artista', 'default'); ?>
				
	        </div> 
	        <div class="col-sm-4">
	        	<div class="contatos">
		        	<h3>Veja Mais</h3>
		        	<?php print views_embed_view('contatos_artista', 'default'); ?>

		        	<div class="eventos">
		        	<h3>Próximos Eventos</h3>
		        	<?php print views_embed_view('eventos_artista', 'default'); ?>	
		        	</div>

		        	<div class="veja-mais">
		        		<a href="http://detroitbr.org/eventos/<?php print $node->nid;?>">Veja Mais</a>
		        	</div>

	        	</div>
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
	var image = $('.view-capa-artista img').attr('src');
	$('.view-capa-artista').css({           	
	 'background-image': 'url('+ image +')'
	});    
 });
	
</script>  