<?php

class Task extends Model {
	protected static $defaultCondition = array();
	protected static $defaultSorting = array(
		'created' => 'ascending'
	);
	protected $fields = array(
        'id',
        'title',
        'description',
        'status',
		'created',
		'modified'
	);
	protected $requiredFields = array(
        'title',
        'description'
	);
	
	protected function prepareCreating() {
		if ($this->isField('created')) $this->setData('created', 'NOW()');
	}
	
	protected function prepareDeleting() {
		$this->prepareUpdating();
	}
}