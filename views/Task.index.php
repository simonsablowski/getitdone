<? $this->includeComponent('header.php'); ?>
                <div id="body">
                    <h2>
                        <? echo $this->localize('Tasks'); ?>

                    </h2>
                    <div class="columns">
<? foreach ($statusOptions as $n => $statusOption): ?>
                        <div id="<? echo $statusOption['name']; ?>" class="<? echo $n % 2 ? 'odd' : 'even'; ?> column">
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
                            <h3 class="title expand">
                                <? echo $Task->getTitle(); ?>

                            </h3>
                            <div class="expandable">
                                <? echo $Task->getDescription(); ?>

                            </div>
                        </li>
<? endforeach; ?>
                    </ul>
                </div>
<? $this->includeComponent('footer.php'); ?>