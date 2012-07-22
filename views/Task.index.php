<? $this->includeComponent('header.php'); ?>
                <div id="body">
					<form action="<? echo $this->link('Task/add'); ?>" method="post">
						<div class="columns content">
<? foreach ($statusOptions as $n => $statusOption): ?>
<? $m = count($statusOptions); $width = floor(100 / $m); if ($n + 1 == $m): $width = 100 - $n * $width; endif; ?>
							<div id="<? echo $statusOption['name']; ?>" class="<? echo $n % 2 ? 'odd' : 'even'; ?> column" style="width: <? echo $width; ?>%;">
								<h3 class="title">
									<? echo $statusOption['label']; ?>

								</h3>
								<ul class="items"></ul>
							</div>
<? endforeach; ?>
						</div>
						<ul class="distributable-items">
<? foreach ($Tasks as $n => $Task): ?>
							<li class="<? echo $n % 2 ? 'odd' : 'even'; ?> item" title="<? echo $Task->getStatus(); ?>">
								<h4 class="title expand">
									<? echo $Task->getTitle(); ?>

								</h4>
								<div class="expandable">
									<? echo $Task->getDescription(); ?>

								</div>
							</li>
<? endforeach; ?>
						</ul>
						<div id="trash">
							<ul class="items"></ul>
						</div>
					</form>
                </div>
<? $this->includeComponent('footer.php'); ?>