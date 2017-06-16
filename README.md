todolist
========

A Symfony project created on June 15, 2017, 5:03 pm.

## Part 1
### Installation
```$ sudo mkdir -p /usr/local/bin
$ sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
$ sudo chmod a+x /usr/local/bin/symfony```
### Create a Project
```$ symfony new todolist 3.1.5```
### MVC Folders
- Views : app/Resources/views
  - Root view : base.html.twig
- Controllers : src/AppBundle/Controller
- Routing : config/routing.yml

### Develop app
Step 1 : Create controller : TodoController.php
   - copy from DefaultController.php
   - change class name to TodoController
   - @Route("/todo", "todo_list")
   - in method indexAction add : `die('TODO')`
   - Change function name on : listAction
   - delete die( ...
   - `return $this->render('todo/index.html.twig);` 
Step 2 : Create View : 
  - create folder : app/Resources/views/todo
  - create file : app/Resources/views/todo/index.html.twig
  - into index.html.twig insert : TODO INDEX
  - in the same way create files : create.html.twig(TODO CREATE), 
    - edit.html.twig(TODO EDIT), 
    - details.html.twig(TODO DATAILS) accordingly

## Part 2

## Part 3


