<?php

class Task extends Model {
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
}