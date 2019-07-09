<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_jobboerse
 *
 * @author      SDG
 * @license     GNU General Public License version 2 or later
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

class HelloWorldViewHelloWorld extends JViewLegacy
{
    public function display($tpl = null)
    {
        $input = JFactory::getApplication()->input;
        $alias = $input->get('alias', '', 'string');
        $model = $this->getModel();

        if ($alias) {
            $queries = $model->getAliasSearchResults($alias);
            $allData = new JResponseJson($queries);
            echo $allData->data;
        }
    }
}
