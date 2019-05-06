<?php
/**
 * @package     Joomla.Administrator
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
    public function edit ()
    {
        $input = JFactory::getApplication()->input;
        $id     = $input->get('id', 0, 'int');
        if ($id == 0) {
            $ids = $input->get('cid', array(), 'array');
            $id = $ids[0];
        }
        $this->setRedirect(JRoute::_("index.php?option=com_helloworld&view=helloworld&layout=edit&id=$id", false));
    }
}

