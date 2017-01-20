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
	// function viewAll()
	// {
	// 	$this->with('title', 'All Items - My Todo List App');
	// 	$this->set('todos', $this->Item->selectAll());
	// }
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
			->with("title", "Test Page")->display_with_layout("items/test", "layouts/public");
	}
}
