<? if ($User->isTemporary()): ?>
<? $this->displayView('Model.form.php', array(
			'Fields' => $this->getFields(),
			'ObjectName' => $this->getObjectName(),
			'mode' => 'signIn',
			'title' => 'Sign in'
		)); ?>
<? else: ?>
<? $this->includeComponent('header.php'); ?>
                <div id="body">
					<h2 class="title">
						<? echo $this->localize('User'); ?>

					</h2>
					<div class="content">
						<p <? if ($User->isTemporary()): ?> title="<? echo $this->localize('Temporary user name &ndash; to create a user account, hit \'Sign in\'!'); ?>"<? endif; ?>>
							<? echo $User->getName(); ?>

						</p>
						<p>
							<a href="<? echo $this->link('sign-out'); ?>" title="<? echo $this->localize('Sign out'); ?>"><? echo $this->localize('Sign out'); ?></a>
						</p>
					</div>
                </div>
<? $this->includeComponent('footer.php'); ?>
<? endif; ?>