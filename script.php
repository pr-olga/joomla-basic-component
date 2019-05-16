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

// Installer & un-installer for Joomla 2.5+
class com_helloWorldInstallerScript
{
    public function postflight($type, $parent)
    {
        require __DIR__ . '\site\vendor\autoload.php';
        $db = JFactory::getDBO();

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://jobs.github.com/positions.json?description=python&location=new+york');

        $resa = $res->getBody();
        $response = json_decode($resa);

        foreach ($response as $res) {
            $alias = $this->clean($res->title);

            $db->setQuery('INSERT INTO #__helloworld  (`greeting`, `alias`) VALUES ("' . $res->title . '", "' . $alias . '")');
            $db->execute();
        }
    }

    private function clean($string)
    {
        $string = str_replace(array('[\', \']'), '', $string);
        $string = preg_replace('/\[.*\]/U', '', $string);
        $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
        $string = htmlentities($string, ENT_COMPAT, 'utf-8');
        $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string);
        $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/'), '-', $string);
        $string = str_replace('-m-w', '', $string); // Removes mw.
        $string = str_replace('-m-w-', '', $string); // Removes mw.

        return strtolower(trim($string, '-'));
    }
}
