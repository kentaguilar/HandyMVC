<?php

class UrbanTemplate
{
  protected $_layout;
  protected $_variables = array();
  protected $_controller;
	protected $_action;

  function __construct($controller, $action)
	{
		$this->_controller = $controller;
		$this->_action = $action;
	}

  public function with($key, $value)
  {
    $this->_variable[$key] = $value;
    return $this;
  }

  public function display_with_layout($child_layout, $main_layout = "")
  {
      $cleaned_child_layout = ROOT . "/app/views/" . $child_layout;
      $cleaned_main_layout = ROOT . "/app/views/layouts/default";

      if($main_layout)
      {
        $cleaned_main_layout = ROOT . "/app/views/" . $main_layout;
      }

      $this->_variable['content'] = $this->view($cleaned_child_layout);
      echo $this->view($cleaned_main_layout);
  }

  public function view($layout)
  {
    $this->_layout = $layout . ".urban.php";

    if(!file_exists($this->_layout))
    {
      return "[Error loading template file (" . $this->_layout . ")]";
    }

    $output = file_get_contents($this->_layout);
    foreach($this->_variable as $key => $value)
    {
      $tagToReplace = "[@$key]";
      $output = str_replace($tagToReplace, $value, $output);
    }

    return $output;
  }

  public function merge($layout, $templates, $separator = "\n")
  {
    $output = "";
    foreach($templates as $template)
    {
      $content = (get_class($template) !== "UrbanTemplate")
                ? "[Error, incorrect type - expected template]" : $template->view($layout);
      $output .= $content . $separator;
    }

    return $output;
  }
}
