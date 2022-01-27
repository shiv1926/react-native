<?php include('header.php'); ?>
<ul class="index">
	<li>
		<h4>Javascript at runtime</h4>
		<ul>
			<li><a href="<?php echo es_url('how-javascript-works.php'); ?>">How javascript works</a></li>
			<li><a href="<?php echo es_url('execution-context.php'); ?>">Execution Context</a></li>
			<li><a href="<?php echo es_url('call-stack.php'); ?>">Execution Stack / Call Stack</a></li>
			<li><a href="<?php echo es_url('hoisting.php'); ?>">Hoisting</a></li>
		</ul>
	</li>
</ul>
<?php 
$links = array();
$links[] = 'http://es6-features.org';
$links[] = 'https://www.javascripttutorial.net/es6';
$links[] = 'https://www.geeksforgeeks.org';
$links[] = 'https://www.tutorialspoint.com/es6/index.htm';
$links[] = 'https://javascript.info : This site has a good index of tutorial';
$links[] = 'https://developer.mozilla.org/en-US/docs/Web/JavaScript';
$links[] = 'https://www.codeproject.com/Articles/1110916/JavaScript-IIFE-Design-Pattern : analyze this website';
echo refrences($links);
include('footer.php'); 
?>