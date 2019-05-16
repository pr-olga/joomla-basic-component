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
 * HTML View class for the HelloWorld Component
 *
 * @since  0.0.1
 */
class HelloWorldViewItem extends JViewLegacy
{
    /**
     * Display the Hello World Item view
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     *
     * @return  void
     */
    public function display($tpl = null)
    {
		$document = JFactory::getDocument();

        // Assign data to the view
        $this->item = $this->get('Item');

        // Set Mata Data
        $this->document->setMetadata('description', $this->item["metadescription"]);

        // Display the view
        parent::display($tpl);
    }
}
