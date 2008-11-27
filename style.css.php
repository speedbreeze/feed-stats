<?php 
	// Set the content-type header so that the browser knows what to do
	header('Content-type: text/css');
	
	// Set variable with the WP version taken from the post header
	$ver = $_GET['v'];
?>

.feed-stats-container {
	text-align: center;
}
		
#feed-stats-waiting, #feed-stats-result-good, #feed-stats-result-bad {
	display: none; 
}
		
#feed-stats-waiting img, #feed-stats-result-good img, #feed-stats-result-bad img {
	margin: 0 5px;
	position: relative;
	top: 3px;
}
		
#feed-stats-troubleshooting {
	display: none;
	padding-bottom: 5px;
	margin-left: 20px;
}

.feed-stats-tabs {
	width: 450px; 
	display: block; 
	margin: 0; 
	padding: 0; 
	list-style-type: none; 
	font-size: 12pt;
<?php if (version_compare($ver, '2.5', '>=')) : ?>
	margin-top: 20px !important;
<?php endif; ?>
}

.feed-stats-tabs ul {
	border-bottom: 1px solid #999999;
<?php if (strpos($ver, '2.7') == 0) : ?>
	margin-bottom: 10px;
	padding-left: 20px;
<?php endif; ?>
}

.feed-stats-tabs ul li {
	float: left; 
	padding: 5px; 
	margin-bottom: 0; 
	border: 1px solid #dddddd; 
	border-bottom: 0;
	margin-right: 5px;
	list-style-type: none;
	cursor: pointer;
	position: relative;
	top: 1px;
}

#hits-tab, #clicks-tab {
	margin: 0 5px 0 -17px;
}

.feed-stats-tabs .active {
	border: 1px solid #999999 !important;
	border-bottom: 1px solid #ffffff !important;
}

.feed-stats-tabs .active span {
	color: #000000;
	font-weight: bold;
}

.feed-stats-tabs ul li span {
	cursor: pointer;
	text-decoration: none;
	border: 0;
}

.feed-stats-clear {
	clear: both; 
	margin: 0; 
	padding: 0;
}

.feed-stats-link {
	font-size: 10pt;
}

table.feed-stats-data {
	margin: 20px 0; 
	width: 450px;
}

table.feed-stats-data th {
	text-align: left; 
	border-bottom: 2px solid #cccccc; 
	font-size: 13px;
}

table.feed-stats-data td {
	height: 22px;
}

table.feed-stats-data td.feed-stats-left {
	text-align: left; 
	padding-left: 8px;
}
		
table.feed-stats-data td.feed-stats-alt {
	background: #E6F0FF;
}

.layout td {
	vertical-align: top;
}

.feed-stats-nmb {
	margin: 10px 0 0 0 !important;
}

.feed-stats-nmt {
	margin: 0 0 10px 0 !important;
}