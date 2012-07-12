<?php

class TaskController extends CustomController {
	protected $statusOptions = array(
		array(
            'name' => 'open',
            'label' => 'Open',
            'default' => TRUE
        ),
        array(
            'name' => 'in-progress',
            'label' => 'In progress',
            'default' => FALSE
        ),
        array(
            'name' => 'resolved',
            'label' => 'Resolved',
            'default' => FALSE
        ),
        array(
            'name' => 'closed',
            'label' => 'Closed',
            'default' => FALSE
        )
	);
	
	public function getFields() {
		return array(
			new TextField('title', 'Title', 255),
			new TextField('description', 'Description', 255),
            new OptionsField('status', 'Status', array_map(
                create_function(
                    '$statusOption',
                    'return new Option($statusOption[\'name\'], $statusOption[\'label\'], $statusOption[\'default\']);'
                ), $this->getStatusOptions()
            ))
		);
	}
	
	public function index() {
		return $this->displayView('Task.index.php', array(
			'Tasks' => Task::findAll(),
			'statusOptions' => $this->getStatusOptions()
		));
	}
	
	public function add() {
		if ($this->getRequest()->isSubmitted()) {
			try {
				$Task = new Task(array(
					'title' => $this->getRequest()->getData('title'),
					'description' => $this->getRequest()->getData('description'),
					'status' => $this->getRequest()->getData('status')
				));
				$Task->create();
				
				$this->getMessageHandler()->setMessage('The task was created successfully.');
			} catch (Exception $Exception) {
				$this->getMessageHandler()->setMessage('The task could not be created, please check your input.');
			}
			
			return $this->redirect();
		}
		
		return $this->displayView($this->getViewFile('form'), array(
			'Fields' => $this->getFields(),
			'ObjectName' => 'Task',
			'mode' => 'add'
		));
	}
}