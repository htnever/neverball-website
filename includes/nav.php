<?php 
$filename = basename($_SERVER['PHP_SELF']);
$class = 'class="current" ';

// Be sure to recompute #navigation width and offset in default.css
// when changing the number of links in this list.
$navArray = array(
	'index.php' => 'Home',
	'screenshots.php' => 'Screenshots',
	'download.php' => 'Download',
	'http://nevercorner.net' => 'Forum',
#	'faq.php' => 'FAQ',
#	'changes.php' => 'Changes',
	'contributors.php' => 'Contributors'
);
?>

	<div id="navigation">
		<ul id="primary">

<?php
foreach ($navArray as $url => $title) {
	echo '			<li><a ';
	echo ($url == $filename ? $class : '');
	echo "href=\"{$url}\">{$title}</a></li>\n";
}
?>

		</ul>
	</div>
