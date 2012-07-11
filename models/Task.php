<?php

class Task extends Model {
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