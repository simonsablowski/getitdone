<? $this->includeComponent('header.php'); ?>
                <div id="body">
                    <h2>
                        <? echo $this->localize('Tasks'); ?>

                    </h2>
                    <div class="columns">
<? $n = 0; foreach ($statusOptions as $optionName => $optionLabel): ?>
                        <div class="<? echo $n % 2 ? 'odd' : 'even'; ?> column">
                            <h3 class="title">
                                <? echo $optionLabel; ?>

                            </h3>
                            <div></div>
                        </div>
<? $n++; endforeach; ?>
                    </div>
                    <ul class="items">
<? foreach ($Tasks as $n => $Task): ?>
                        <li class="<? echo $n % 2 ? 'odd' : 'even'; ?> item <? echo $Task->getStatus(); ?>">
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