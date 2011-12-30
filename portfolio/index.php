<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
	
	<section class="row">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/desktopicons.php'); ?>
		
		<section class="eight columns">
			<header class="row graybar rounded-corners">
				<div class="twelve columns">
					<hgroup class="left container">
						<h3>Portfolio</h3>
					</hgroup>
					
					<?php include($_SERVER['DOCUMENT_ROOT'].'/windowButtons.php'); ?>
				</div>
			</header>
			<section class="row application">
				<ul class="row">
					<li class="three columns">
						<a href="/portfolio/electrical/" title="electrical"><figure>
							<img src="/images/document-open.png" alt="aelectrical"/>
							<figcaption>Electrical</figcaption>
						</figure></a>
					</li>
					<li class="three columns">
						<a href="/portfolio/graphics/" title="graphics"><figure>
							<img src="/images/document-open.png" alt="graphics"/>
							<figcaption>Graphics</figcaption>
						</figure></a>
					</li>
					<li class="three columns">
						<a href="/portfolio/software/" title="software"><figure>
							<img src="/images/document-open.png" alt="software"/>
							<figcaption>Software</figcaption>
						</figure></a>
					</li>
				</ul>
			</section>
		</section>
	</section>
	
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
