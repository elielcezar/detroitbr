

<?php include "header.tpl.php"; ?>


<div class="principal">
	<div class="container">
		<div class="row">
			

			<div class="col-sm-12">

				<div class="menu">									
					<?php print render($page['menu']); ?>
				</div>
				<div class="conteudo">					
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
		    
		          <?php if (($title)&&(!$is_front)): ?>
		            <h1 class="title" id="page-title">
		              <?php print $title; ?>
		            </h1>
		          <?php endif; ?>
		          
		          <?php print render($page['content']); ?>
		      	</div>
	          </div> <!-- conteudo -->
		</div>	   
	</div><!-- container -->
</div><!-- principal -->
 
<!-- FOOTER-->
 <?php include "footer.tpl.php"; ?>
 

