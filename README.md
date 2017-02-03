## Handy MVC

A light and functional PHP MVC Framework

## Getting Started

- Create the needed MVC files initially. Make a new controller on /app/controllers folder e.g. itemscontroller.php.
- Views are organized by folder names, hence, the view files of itemscontroller is located at /app/views/items folder. Controller actions define the filename of the views. So, if you have a controller action named "test" e.g. itemscontroller > test, then you need to create a view named test.urban.php.
- For models, the name of the controller is ultimately the filename e.g. /app/models/item.php.
- For the content, please refer on the sample MVC files -> app/controlers/itemscontroller.php, app/models/item.php, app/views/items/*.*
- Routing is automatically activated based on your defined controller actions. itemscontroller > test will be accessed view http://{domain}/items/test.

## External Technologies Used

HandyMVC uses UrbanTemplate(https://github.com/kentaguilar/UrbanTemplate) as the default templating engine

## Output

<img src="http://deepmirage.com/git/handymvc.png" alt="HandyMVC" width="268"/>
