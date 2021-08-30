# Basic Joomla Component

This component inspired by this tutorial https://docs.joomla.org/J3.x:Developing_an_MVC_Component/Developing_a_Basic_Component. It covers some parts disscussed there and it is extended by composer/GUZZLEHHTP.

## Debug
`JFactory::getApplication()->enqueueMessage('Some debug string(s)');`

## View Structure
- in `view.html.php`, we define the varible
- in `/tmpl/default.php`, we send the varibale to the frontend
- in `/tmpl/default.xml`, we show the menu im backend menu

## How Tos?

### How to change components name?
1. rename file `helloworld.xml`
2. rename all `helloworld` files mentioned in this `helloworld.xml` file
3. re-/install component if necessary

### Create new views in site/ (e.g. student)
1. in folder `controllers` create `HelloWorldControllerStudent` class (replace `Helloworld` with the name of your component)
and extend it from `JControllerLegacy` (e.g. `controllers/item.php`)
2. in folder `models` create `HelloWorldModelStudent` class (replace `Helloworld` with the name of your component) 
and extend it from `JModelItem` (e.g. `models/item.php`)
3. in folder `views` create folder `student` and following files:
```
   views
   |---- student
   |     |----tmpl
   |     |    -- default.php
   |     |    -- default.xml
   |     |    -- index.html
   |     -- index.html 
   |     -- view.html.php
```
4. in the file `view.html.php` create class `HelloWorldViewStudent` get data from model and save it into variables
5. put defined variables into html template in `default.php` (e.g. `views/item`)