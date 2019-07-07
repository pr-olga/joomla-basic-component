<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
/**
 * Hello World Component Controller
 *
 * @since  0.0.1
 */
class HelloWorldControllerHelloWorld extends JControllerLegacy
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Method to get a model object, loading it if required.
     *
     * @param    string    $name    The model name. Optional.
     * @param    string    $prefix    The class prefix. Optional.
     * @param    array    $config    Configuration array for model. Optional.
     *
     * @return    object    The model.
     * @since    1.5
     */
    public function &getModel($name = 'helloworld', $prefix = '', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }

	/**
	 * Get the json view
	 *
	 * @return void
	 */
    public function typeaheadsearchalias()
    {
        if (!JSession::checkToken('get')) {
            echo new JResponseJson(null, JText::_('JINVALID_TOKEN'), true);
        } else {
            parent::display();
        }
    }
}
