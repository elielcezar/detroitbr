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


	          <?php if ($tabs): ?>
	            <div class="tabs">
	              <?php print render($tabs); ?>
	            </div>
	          <?php endif; ?> 


				<?php print views_embed_view('corpo_noticia_16', 'default'); ?>

				
	        </div> 
	        <div class="col-sm-4">
	        	<div class="sidebar">
	        		
	        		<div class="fb-page" data-href="https://www.facebook.com/detroit.brasil/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/detroit.brasil/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/detroit.brasil/">detroitbr</a></blockquote></div>

	        		<div class="eventos">	
					<ul class="nav nav-tabs" role="tablist">
					  	<h4>Eventos</h4>
					  	<li role="presentation"><a href="#passados" aria-controls="messages" role="tab" data-toggle="tab">Passados</a></li>					    
					    <li role="presentation" class="active"><a href="#futuros" aria-controls="profile" role="tab" data-toggle="tab">Futuros</a></li>
					 </ul>		
					 <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="futuros">
				    	<?php print views_embed_view('eventos_home', 'default'); ?>	
				    </div>
				    <div role="tabpanel" class="tab-pane" id="passados">
				    	<?php print views_embed_view('eventos_home_passados', 'default'); ?>	
				    </div>
				  </div>							
				</div>

	        		<?php print views_embed_view('noticias_relacionadas', 'default'); ?>
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
	var image = $('.view-capa-noticia img').attr('src');
	$('.view-capa-noticia').css({           	
	 'background-image': 'url('+ image +')'
	});   

	$('.tabs').prependTo('.view-topo-noticia-16');

 });
	
</script>  