<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<? $bp = $this->getApplication()->getConfiguration('baseUrl') . 'web/'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="<? echo $this->localize('en'); ?>"/>
		<title><? echo $this->localize('getitdone'); ?></title>
		<link rel="canonical" href="<? echo $this->localize('http://www.getitdone.com/'); ?>"/>
        <meta name="dc.title" content="<? echo $this->localize('getitdone'); ?>"/>
        <meta name="description" content="<? echo $this->localize('A simple JavaScript-based task management tool by Simon Sablowski'); ?>"/>
        <meta name="keywords" content="<? echo $this->localize('simon sablowski, berlin, web development, javascript, getitdone, task management'); ?>"/>
        <meta name="revisit-after" content="1 day"/>
		<!-- Mobile device detection by Bushido Designs: BushidoDesigns.net -->
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
				<div id="logo">
					<a href="<? echo $this->link(); ?>" title="<? echo $this->localize('getitdone'); ?>"><img src="<? echo $bp; ?>img/logo.png" alt="<? echo $this->localize('getitdone'); ?>" title="<? echo $this->localize('getitdone'); ?>"/></a>
				</div>
				<ul id="controls">
<? if (isset($User)): ?>
					<li class="user">
						<span<? if ($User->isTemporary()): ?> title="<? echo $this->localize('Temporary user name &ndash; to create a user account, hit \'Sign in\'!'); ?>"<? endif; ?>><? echo $User->getName(); ?></span>
					</li>
<? endif; ?>
					<li class="control">
						<a class="popup" href="<? echo $this->link('add-task'); ?>" title="<? echo $this->localize('Add task'); ?>"><? echo $this->localize('Add task'); ?></a>
					</li>
<? if (isset($User)): ?>
					<li class="control">
<? if ($User->isTemporary()): ?>
						<a class="popup" href="<? echo $this->link('sign-in'); ?>" title="<? echo $this->localize('Sign in'); ?>"><? echo $this->localize('Sign in'); ?></a>
<? else: ?>
						<a href="<? echo $this->link('sign-out'); ?>" title="<? echo $this->localize('Sign out'); ?>"><? echo $this->localize('Sign out'); ?></a>
<? endif; ?>
					</li>
<? endif; ?>
				</ul>
<? if (isset($message) && !empty($message)): ?>
				<div id="message">
					<? echo $this->localize($message); ?>

				</div>
<? endif; ?>
			</div>
			<div id="content">
