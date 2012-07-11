<?php

abstract class CustomController extends Controller {
	protected $User;
	protected $Tasks;
	
	protected function redirect($path = NULL) {
		header(sprintf('Location: %s', $this->link($path)));
	}
	
	protected function displayView($view, $variables = array()) {
		$this->setVariables(array(
			'User' => $this->getUser(),
			'Tasks' => $this->getTasks()
		));
		
		return parent::displayView($view, $variables);
	}
	
	public function __construct() {
		$this->setVariables(array());
	}
	
	protected function setupUser() {
		if ($User = $this->getSession()->getData('User')) {
			return $this->setUser($User);
		} else {
			return $this->setUser(new TemporaryUser);
		}
	}
	
	protected function getUser() {
		if (is_null($this->User)) $this->setupUser();
		return $this->User;
	}
	
	protected function loadTasks() {
		return $this->setTasks(Task::findAll());
	}
	
	protected function getTasks() {
		if (is_null($this->Tasks)) $this->loadTasks();
		return $this->Tasks;
	}
}