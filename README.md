# Basic Joomla Component
https://docs.joomla.org/J3.x:Developing_an_MVC_Component/Developing_a_Basic_Component

## View Structure
- in `view.html.php`, we define the varible
- in `/tmpl/default.php`, we send the varibale to the frontend
- in `/tmpl/default.xml`, we show the menu im backend menu

## Debug
`JFactory::getApplication()->enqueueMessage('Some debug string(s)');`