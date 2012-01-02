<?php include($_SERVER['DOCUMENT_ROOT'].'/Includes/header.php'); ?>
	
	<section class="row">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/Includes/desktopicons.php'); ?>
		
		<section class="eight columns">
			<div class="container graybar rounded-corners">
				<header class="row">
					<hgroup class="six columns">
						<h3>Portfolio</h3>
					</hgroup>
						
					<?php include($_SERVER['DOCUMENT_ROOT'].'/Includes/windowButtons.php'); ?>
				</header>
			</div>
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/Includes/toolbar.php'); ?>
			
			<section class="row application">
				<div class="container">
				<ul class="row">
					<li class="two columns">
						<a href="/portfolio/electrical/" title="electrical"><figure>
							<img src="/images/document-open.png" alt="electrical"/>
							<figcaption>Electrical</figcaption>
						</figure></a>
					</li>
					<li class="two columns">
						<a href="/portfolio/graphics/" title="graphics"><figure>
							<img src="/images/document-open.png" alt="graphics"/>
							<figcaption>Graphics</figcaption>
						</figure></a>
					</li>
					<li class="two columns">
						<a href="/portfolio/software/" title="software"><figure>
							<img src="/images/document-open.png" alt="software"/>
							<figcaption>Software</figcaption>
						</figure></a>
					</li>
				</ul>
				</div>
			</section>
		</section>
	</section>
	
<?php include($_SERVER['DOCUMENT_ROOT'].'/Includes/footer.php'); ?>
