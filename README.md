todolist
========

A Symfony project created on June 15, 2017, 5:03 pm.
git@github.com:gda2016/TreversMedia-Symfony.git
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
   - return $this->render('todo/index.html.twig); 
Step 2 : Create View : 
  - create folder : app/Resources/views/todo
  - create file : app/Resources/views/todo/index.html.twig
  - into index.html.twig insert : TODO INDEX
  - in the same way create files : create.html.twig(TODO CREATE), 
    - edit.html.twig(TODO EDIT), 
    - details.html.twig(TODO DATAILS) accordingly

#### Step 1 : 
##### Controllers
- Create controller : TodoController.php
- copy from DefaultController.php
- change class name to TodoController
- @Route("/todo", "todo_list")
- in method indexAction add : `die('TODO')`

##### Views

#### Step 2 : 
##### Controllers
- delete die( ...
- return $this->render('todo/index.html.twig);

##### Views
  - create folder : app/Resources/views/todo
  - create file : app/Resources/views/todo/index.html.twig
  - into index.html.twig insert : TODO INDEX
  - in the same way create files : create.html.twig(TODO CREATE), 
    - edit.html.twig(TODO EDIT), 
    - details.html.twig(TODO DATAILS) accordingly

## Part 2
Hello
     Hello

## Part 3


Git
===
## Basic Commands
``$git init // Initialize Local Git Repository
$ git config --global user.name 'gda2016'
$ git config --global user.email 'gda10672@gmail.com'``
  ### Change config:
      `$ git config user.name // Show User Name`
      - $ git config --list // Show All
      - $ ~/.gitconfig // File System location

- $ git add {<file>, <.>, *.html} // Add File(s) To Index
  - $ git rm --cached {<file>, *.html} // Remove Cached file(s)

- $ git status // Check status Of Working Tree
- $ git commit -m ('Comment hear') // Commit Changes In Index
- $ got push // Push To Remote Repository
  - The forst time:
    - $ git remote add origin git@github.com:gda2016/TreversMedia-Symfony.git
    - $ git remote rm origin // Remove remote
    - $ git push -u origin master

- $ git pull // Pull Latest From Remote Repository
- $ git clone // Clone Repository Into A New Directory 

## Branch
- $ git branch login // Create Branch
- $ git checkout login // Switch Branch
- $git merge login
