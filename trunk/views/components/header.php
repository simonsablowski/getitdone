<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<? $bp = $this->getApplication()->getConfiguration('baseUrl') . 'web/'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="<? echo $this->localize('en'); ?>"/>
		<title><? echo $this->localize('Get it done!'); ?></title>
		<link rel="canonical" href="<? echo $this->localize('http://projects.simsab.net/getitdone/'); ?>"/>
		<meta name="dc.title" content="<? echo $this->localize('Get it done!'); ?>"/>
		<meta name="description" content="<? echo $this->localize('A simple JavaScript-based task management tool by Simon Sablowski'); ?>"/>
		<meta name="keywords" content="<? echo $this->localize('simon sablowski, berlin, web development, javascript, getitdone, task management'); ?>"/>
		<meta name="revisit-after" content="1 day"/>
		<link href="<? echo $bp; ?>css/handheld.css" rel="stylesheet" type="text/css"/>
		<style type="text/css" media="screen and (min-width: 860px)">
		<!--
		@import url("<? echo $bp; ?>css/screen.css");
		-->
		</style>
		<!--[if IE]>
		<link href="<? echo $bp; ?>css/screen.css" rel="stylesheet" type="text/css" media="screen"/>
		<link href="<? echo $bp; ?>css/ie.css" rel="stylesheet" type="text/css" media="screen"/>
		<![endif]-->
		<link href="<? echo $bp; ?>css/handheld.css" rel="stylesheet" type="text/css" media="handheld, only screen and (max-device-width: 859px)"/>
		<link href="<? echo $bp; ?>css/print.css" rel="stylesheet" type="text/css" media="print"/>
		<link type="image/x-icon" href="<? echo $bp; ?>img/favicon.ico" rel="shortcut icon"/>
		<script type="text/javascript" src="<? echo $bp; ?>js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<? echo $bp; ?>js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="<? echo $bp; ?>js/getitdone.js"></script>
	</head>
	<body>
		<div id="popup"></div>
		<div id="document">
			<div id="header">
				<ul id="controls">
					<li class="control">
						<a href="<? echo $this->link(); ?>" title="<? echo $this->localize('Get it done!'); ?>"><? echo $this->localize('Get it done!'); ?></a>
					</li>
					<li class="control">
						<a class="popup" href="<? echo $this->link('account'); ?>" title="<? echo $this->localize('Your account'); ?>"><? echo $this->localize('Your account'); ?></a>
					</li>
				</ul>
<? if (isset($message) && !empty($message)): ?>
				<div id="message">
					<? echo $this->localize($message); ?>

				</div>
<? endif; ?>
			</div>
			<div id="content">
