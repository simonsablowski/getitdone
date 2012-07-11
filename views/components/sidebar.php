<? $bp = $this->getApplication()->getConfiguration('baseUrl'); ?>
			<div id="sidebar">
				<div id="logo">
					<a href="<? echo $bp; ?>" title="<? echo $this->localize('getitdone'); ?>"><img src="<? echo $bp; ?>img/logo.png" alt="<? echo $this->localize('getitdone'); ?>" title="<? echo $this->localize('getitdone'); ?>"/></a>
				</div>
				<ul id="controls">
<? if (isset($User)): ?>
					<li class="user">
						<span<? if ($User->isTemporary()): ?> title="<? echo $this->localize('Temporary user name &ndash; to create a user account, hit \'Sign in\'!'); ?>"<? endif; ?>><? echo $User->getName(); ?></span>
					</li>
					<li class="control">
<? if ($User->isTemporary()): ?>
						<a class="popup" href="<? echo $bp; ?>sign-in" title="<? echo $this->localize('Sign in'); ?>"><? echo $this->localize('Sign in'); ?></a>
<? else: ?>
						<a href="<? echo $bp; ?>sign-out" title="<? echo $this->localize('Sign out'); ?>"><? echo $this->localize('Sign out'); ?></a>
<? endif; ?>
					</li>
<? endif; ?>
				</ul>
			</div>
