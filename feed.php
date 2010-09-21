<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * Create a feed from some content
 * 
 * 
 */
/*
require_once 'Zend/Feed.php';

$feed = array(
	'title'   => 'My RSS Feed',
	'link'    => 'http://localhost/tripugzf/feed.php',
    'charset' => 'UTF-8',
    'author'  => 'Jason',
	'entries' => array(
		0 => array(
			'title'       => 'Post 1',
			'link'        => 'http://localhost/tripugzf/feed.php?id=1',
			'description' => 'This is my first post',
			'lastUpdate'  => time(),
		),
		1 => array(
			'title'       => 'Post 2',
			'link'        => 'http://localhost/tripugzf/feed.php?id=2',
			'description' => 'This is my second post',
			'lastUpdate'  => time(),
		),
	),
);

$rssFeed = Zend_Feed::importArray($feed, 'rss');

$rssFeed->send();    
*/










/**
 * consume an RSS feed
 * 
 * 
 */
/*
require_once 'Zend/Feed/Rss.php';

$awesome = new Zend_Feed_Rss('http://www.jasonawesome.com/feed');

foreach ($awesome as $a) {
	echo "<h3>" . $a->title . "</h3>";
	echo $a->description;
}
*/
 


















