<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
	
	<section class="row">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/desktopicons.php'); ?>
		
		<section class="eight columns">
			<div class="container graybar rounded-corners">
				<header class="row">
					<hgroup class="six columns">
						<h3>My Website</h3>
					</hgroup>
						
					<?php include($_SERVER['DOCUMENT_ROOT'].'/windowButtons.php'); ?>
				</header>
			</div>
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/toolbar.php'); ?>
			
			<section class="row application">
				<div class="container">
					<ul class="row">
						<li class="two columns">
							<a href="/craig/" title="Craig"><figure>
								<img src="/images/document-open.png" alt="Craig"/>
								<figcaption>Craig</figcaption>
							</figure></a>
						</li>
						<li class="two columns">
							<a href="/portfolio/" title="portfolio"><figure>
								<img src="/images/document-open.png" alt="portfolio"/>
								<figcaption>Portfolio</figcaption>
							</figure></a>
						</li>
						<li class="two columns">
							<a href="/intro.php" title="intro.php"><figure>
								<img src="/images/document-new.png" alt="intro.php"/>
								<figcaption>Intro.php</figcaption>
							</figure></a>
						</li>
					</ul>
				</div>
			</section>
		</section>
	</section>
	
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
