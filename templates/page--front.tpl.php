<?php include "header.tpl.php"; ?>
<div class="destaque">
		<div class="col-sm-8">
			<?php print views_embed_view('destaque_a', 'default'); ?>
		</div>
		<div class="col-sm-4">
			<?php print views_embed_view('destaque_b', 'default'); ?>
			<?php print views_embed_view('destaque_c', 'default'); ?>
			<?php print views_embed_view('destaque_d', 'default'); ?>
		</div>
</div>
<div class="principal">
	<div class="container">
				
			<?php if ($messages): ?>
	          <div id="messages"><div class="section clearfix">
	            <?php print $messages; ?>
	          </div></div> <!-- /.section, /#messages -->          
	          <?php endif; ?>
	          <?php if ($tabs): ?>
	            <div class="tabs">
	              <?php print render($tabs); ?>
	            </div>
	        <?php endif; ?>   
		<div class="row">
			
			<div class="col-sm-8">
				<div class="ultimas-noticias">
				 <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				  	<h4>Notícias</h4>
				    <li role="presentation"><a href="#cena" aria-controls="profile" role="tab" data-toggle="tab">Cena</a></li>
				    <li role="presentation"><a href="#djs" aria-controls="messages" role="tab" data-toggle="tab">DJs</a></li>
				    <li role="presentation"><a href="#lancamentos" aria-controls="settings" role="tab" data-toggle="tab">Lançamentos</a></li>
				    <li role="presentation" class="active"><a href="#todas" aria-controls="home" role="tab" data-toggle="tab">Todas</a></li>
				  </ul>
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="todas">
				    	<div class="row">
							<div class="col-sm-6">
								<?php print views_embed_view('noticias_home_a', 'default'); ?>
					        </div> 
					        <div class="col-sm-6">
								<?php print views_embed_view('noticias_home_b', 'default'); ?>
					        </div> 
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="cena">
				    	<div class="row">
							<div class="col-sm-6">
								<?php print views_embed_view('noticias_home_a', 'default', 15); ?>
					        </div> 
					        <div class="col-sm-6">
								<?php print views_embed_view('noticias_home_b', 'default', 15); ?>
					        </div> 
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="djs">
				    	<div class="row">
							<div class="col-sm-6">
								<?php print views_embed_view('noticias_home_a', 'default', 14); ?>
					        </div> 
					        <div class="col-sm-6">
								<?php print views_embed_view('noticias_home_b', 'default', 14); ?>
					        </div> 
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="lancamentos">
				    	<div class="row">
							<div class="col-sm-6">
								<?php print views_embed_view('noticias_home_a', 'default', 75); ?>
					        </div> 
					        <div class="col-sm-6">
								<?php print views_embed_view('noticias_home_b', 'default', 75); ?>
					        </div> 
						</div>
				    </div>
				  </div>

				 </div>

				  <div class="podcast">
						<h4>Podcast</h4>
		        		<a href="https://soundcloud.com/detroitbr" class="soundcloud" target="_blank">Soundcloud</a>
		        		<iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/101517582&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					</div>

					<div class="playlists">
						<h4>Playlists</h4>
		        		<a href="#" class="spotify" target="_blank">Spotify</a>
		        		<div class="list"><?php print views_embed_view('playlist_home', 'default'); ?></div>
					</div>

				
	        </div> 
	        <div class="col-sm-4">
	        	<div class="instagram">
		        	<h4>Fotos</h4>
		        	<a href="https://www.instagram.com/detroit.br/" class="instagram" target="_blank">Instagram</a>
		        	<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/623db315fccf5e94bd69f4d3ab8b7341.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
	        	</div>

	        	<div class="eventos">	
					<ul class="nav nav-tabs" role="tablist">
					  	<h4>Eventos</h4>
					  	<li role="presentation"><a href="#passados" aria-controls="messages" role="tab" data-toggle="tab">Passados</a></li>					    
					    <li role="presentation" class="active"><a href="#futuros" aria-controls="profile" role="tab" data-toggle="tab">Futuros</a></li>
					 </ul>		
					 <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="futuros">
				    	<?php print views_embed_view('eventos_home', 'block_2'); ?>	
				    </div>
				    <div role="tabpanel" class="tab-pane" id="passados">
				    	<?php print views_embed_view('eventos_home_passados', 'default'); ?>	
				    </div>
				  </div>							
				</div>

	        </div> 
		</div>

		<!--div class="banner-home">
			<div class="container-banner">
				<div class="tag">Publicidade</div>
				<a href="http://www.br-oriente.com.br/"><img src="http://detroitbr.org/sites/all/themes/detroitbr2016/img/banner-home.jpg"></a>
			</div>
		</div-->


	</div><!-- container -->
</div><!-- principal -->
 
 <?php include "footer.tpl.php"; ?>