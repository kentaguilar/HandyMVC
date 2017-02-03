<?php

use HandyMVC\Foundation;

class ItemsController extends Controller
{
	public function index()
	{
		$itemList = $this->Item->selectAll();

		foreach($itemList as $item)
		{
		  $row_template = new UrbanTemplate();
		  foreach($item["Item"] as $key => $value)
		  {
		    $row_template->with($key, $value);
		  }

		  $user_templates[] = $row_template;
		}

		$user_content = $this->addDataToGridLayout("items/datarow", $user_templates, true);
		$this->with("users", $user_content)->with("title", "View All Items")->displayLayout("items/index", "layouts/public");
	}

	public function show($id = null)
	{
		$currentItem = $this->Item->query("SELECT * FROM items WHERE id=$id");

		$this->with("name", $currentItem[0]["Item"]["name"])->with("price", $currentItem[0]["Item"]["price"])
			->with("title", "Test Page")->displayLayout("items/show", "layouts/public");
	}

	public function add()
	{
		$this->with("title", "New Item")->displayLayout("items/new", "layouts/public");
	}

	public function create()
	{
		$itemName = $_POST['txtItemName'];
		$itemPrice = $_POST['txtItemPrice'];

		$this->Item->query("INSERT INTO items(name, price) VALUES('" . $itemName . "', '" . $itemPrice . "');");

		echo "Item successfully added	<br/><a href='index'>Item List</a>";
	}

	public function delete($id = null)
	{
		$this->Item->query("DELETE FROM items WHERE id=$id");

		echo "Item successfully deleted	<br/><a href='../index'>Item List</a>";
	}
}
