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

class  HelloWorldControllerItem extends JControllerLegacy
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param	string	$name	The model name. Optional.
	 * @param	string	$prefix	The class prefix. Optional.
	 * @param	array	$config	Configuration array for model. Optional.
	 *
	 * @return	object	The model.
	 * @since	1.5
	 */
	public function &getModel($name = 'item', $prefix = '', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}