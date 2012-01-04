<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	
	<section class="row">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/desktopicons.php'); ?>
		
		<section class="eight columns">
			<div class="container graybar rounded-corners">
				<header class="row">
					<hgroup class="six columns">
						<h3><?php echo $title; ?></h3>
					</hgroup>
						
					<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/windowButtons.php'); ?>
				</header>
			</div>
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/toolbar.php'); ?>
			
			<section class="row application">
				<?php include($_SERVER['DOCUMENT_ROOT'].$include); ?>
			</section>
		</section>
	</section>
	
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
