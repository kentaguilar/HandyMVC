<?php

class Controller
{
	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	function __construct($model, $controller, $action)
	{
		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;

		$this->$model = new $model;
		$this->_template = new UrbanTemplate($controller, $action);
	}

	function with($name, $value)
	{
		return $this->_template->with($name, $value);
	}

	function view($layout)
	{
		return $this->_template->view( ROOT . "/app/views/" . $layout);
	}

	public function displayLayout($childLayout, $mainLayout = "")
	{
		$this->_template->displayLayout($childLayout, $mainLayout);
	}

	public function addDataToGridLayout($layout, $templates, $separator = "\n")
	{
		$this->_template->addDataToGridLayout($layout, $templates, $separator);
	}

	function __destruct()
	{
		// $this->_template->render();
	}
}
