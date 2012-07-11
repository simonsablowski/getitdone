<? $this->includeComponent('header.php'); ?>
                <div id="body">
                    <h2>
                        <? echo $this->localize('Tasks'); ?>

                    </h2>
                    <ul class="items">
<? foreach ($Tasks as $n => $Task): ?>
                        <li class="<? echo $n % 2 ? 'odd' : 'even'; ?> item">
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