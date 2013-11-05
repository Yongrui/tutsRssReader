<?php

$siteList = array(
	'nettuts',
	'psdtuts',
	'vectortuts',
	'phototuts',
	'mobiletuts',
	'cgtuts',
	'webdesigntuts',
	'audiotuts',
	'aetuts'
);

$siteName = $_GET['siteName'];

if (!in_array($siteName, $siteList)) {
	$siteName = 'nettuts';
}

$path = "http://query.yahooapis.com/v1/public/yql?q=";
$path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName'");
$path .= "&format=json";

$feed = file_get_contents($path);
$feed = json_encode($feed);

include('site.view.php');

?>