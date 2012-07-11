<?php

class TaskController extends CustomController {
	public function getFields() {
		return array(
			new TextField('title', 'Title', 255),
			new TextField('description', 'Description', 255),
            new OptionField('status', 'Status', array(
                new Option('open', 'Open', TRUE),
                new Option('in-progress', 'In progress'),
                new Option('resolved', 'Resolved'),
                new Option('closed', 'Closed')
            ))
		);
	}
	
	public function index() {
		return $this->displayView('Task.index.php', array(
			'Tasks' => Task::findAll()
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