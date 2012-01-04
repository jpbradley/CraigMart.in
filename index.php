<?php 
$page = $_GET['p'];

if($page == 'desktop') {
	include($_SERVER['DOCUMENT_ROOT'].'/tpl/base.tpl.php');
} else {
	$title = '';
	$include = '';
	switch ($page) {
		case 'copyright':
			$title = 'Copyright';
			$include = '/copyright.php';
			break;
		case 'myWebsite':
			$title = 'My Website';
			$include = '/myWebsite.php';
			break;
		case 'craig':
			$title = 'Craig';
			$include = '/craig/index.php';
			break;
		case 'craig/about':
			$title = 'About';
			$include = '/craig/about.php';
			break;
		case 'craig/contact':
			$title = 'Contact';
			$include = '/craig/contact.php';
			break;
		case 'portfolio':
			$title = 'Portfolio';
			$include = '/portfolio/index.php';
			break;
		case 'portfolio/electrical':
			$title = 'Electrical';
			$include = '/portfolio/electrical/index.php';
			break;
		case 'portfolio/graphics':
			$title = 'Graphics';
			$include = '/portfolio/graphics/index.php';
			break;
		case 'portfolio/software':
			$title = 'Software';
			$include = '/portfolio/software/index.php';
			break;
		case 'portfolio/software/blackjack':
			$title = 'Blackjack';
			$include = '/portfolio/software/blackjack.php';
			break;
		default:
			$title = 'Introduction';
			$include = '/intro.php';
			break;
	}
	
	include($_SERVER['DOCUMENT_ROOT'].'/tpl/app.tpl.php');
}

