
<?php include "header.tpl.php"; ?>



<div class="principal">


	<div class="container">

	
		

			<h1>Notícias</h1>
			
			<div class="col-sm-12"> 
				 <?php print views_embed_view('noticias_todas_16', 'default'); ?>
				 <?php print render($page['content']); ?>
				 
	        </div> 

	

		

	</div><!-- container -->
</div><!-- principal -->
 

 <?php include "footer.tpl.php"; ?>


 <script type="text/javascript">
/*jQuery(document).ready(function ($) {
	var image = $('.view-capa-noticia img').attr('src');
	$('.view-capa-noticia').css({           	
	 'background-image': 'url('+ image +')'
	});    
 });*/
	
</script>  