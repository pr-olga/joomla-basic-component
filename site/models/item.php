<?php
/**
 * @version
 * @package		Joomla.Site
 * @subpackage	com_joomcareer
 *
 * @author
 * @copyright
 * @license		GNU/GPL, see license.php
 */

// No direct access to this file
defined('_JEXEC') or die;

class HelloWorldModelItem extends JModelItem
{
	/**
	 * @var object item
	 */
    protected $item;

    	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 * @since	1.6
	 */
	public function getTable($type = 'HelloWorld', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
    }


	/**
	 * Method to get the item.
	 *
	 *
	 * @return	void
	 * @since	1.6
	 */
	public function getItem()
	{
        if (!is_array($this->item))
		{
			$this->item = array();
        }

        $app = JFactory::getApplication()->input;
        $id = $app->get('id', NULL, 'int');

        // Get a TableHelloWorld instance
        $table = $this->getTable();

        // Load the item
        $table->load($id);

        // Assign the item
		$this->item[$id] =
		array (
			"message" => $table->greeting,
			"metadescription" => $table->metadescription
		);


        return $this->item[$id];
    }
}
