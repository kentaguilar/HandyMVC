<?php

use HandyMVC\Foundation;

class ItemsController extends Controller
{
	// function view($id = null, $name = null)
	// {
	// 	$this->set('title', $name . ' - My Todo List App');
	// 	$this->set('todo', $this->Item->select($id));
	// }
	//
	function viewAll()
	{
		$userlist = array(
		  array("username" => "Hector Mitchell", "location" => "3698 Maple Rd"),
		  array("username" => "Naomi Jacobs", "location" => "5096 Second St"),
		  array("username" => "Jimmy Stevens", "location" => "3048 E Santa Ana St"),
		);

		foreach($userlist as $user)
		{
		  $row_template = new UrbanTemplate();
		  foreach($user as $key => $value)
		  {
		    $row_template->with($key, $value);
		  }

		  $user_templates[] = $row_template;
		}

		var_dump($user_templates);
	}
	//
	// function add()
	// {
	// 	$todo = $_POST['todo'];
	// 	$this->set('title', 'Success - My Todo List App');
	// 	$this->set('todo', $this->Item->query('insert into items (item_name) values (\''.mysql_real_escape_string($todo).'\')'));
	// }
	//
	// function delete($id = null)
	// {
	// 	$this->set('title','Success - My Todo List App');
  //   $this->set('todo',$this->Item->query('delete from items where id = \''.mysql_real_escape_string($id).'\''));
	// }

	function test()
	{
		$this->with("username", "pogi")->with("name", "Pogi points")
		  ->with("age", "26")->with("location", "Davao")
			->with("title", "Test Page")->displayLayout("items/test", "layouts/public");
	}
}
