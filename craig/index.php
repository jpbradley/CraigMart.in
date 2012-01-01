<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
	
	<section class="row">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/desktopicons.php'); ?>
		
		<section class="eight columns">
			<header class="row graybar rounded-corners">
				<div class="twelve columns">
					<hgroup class="left container">
						<h3>Craig</h3>
					</hgroup>
					
					<?php include($_SERVER['DOCUMENT_ROOT'].'/windowButtons.php'); ?>
				</div>
			</header>
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/toolbar.php'); ?>
			
			<section class="row application">
				<div class="container">
					<ul class="row">
						<li class="two columns">
							<a href="/craig/about.php" title="about.php"><figure>
								<img src="/images/document-new.png" alt="about.php"/>
								<figcaption>About.php</figcaption>
							</figure></a>
						</li>
						<li class="two columns">
							<a href="/craig/contact.php" title="contact.php"><figure>
								<img src="/images/document-new.png" alt="contact.php"/>
								<figcaption>Contact.php</figcaption>
							</figure></a>
						</li>
					</ul>
				</div>
			</section>
		</section>
	</section>
	
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
