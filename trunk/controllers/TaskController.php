<?php

class TaskController extends CustomController {
	protected $statusOptions = array(
		'open' => 'Open',
		'in-progress' => 'In progress',
		'resolved' => 'Resolved',
		'closed' => 'Closed'
	);
	
	public function getFields() {
		return array(
			new TextField('title', 'Title', 255),
			new TextField('description', 'Description', 255),
            new OptionsField('status', 'Status', array(
                new Option('open', 'Open', TRUE),
                new Option('in-progress', 'In progress'),
                new Option('resolved', 'Resolved'),
                new Option('closed', 'Closed')
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
					'title' => ($title = $this->getRequest()->getData('title')),
					'description' => ($description = $this->getRequest()->getData('description'))
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