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

        require __DIR__.'\site\vendor\autoload.php';
        $db = JFactory::getDBO();

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://jobs.github.com/positions.json?description=python&location=new+york');

$resa = $res->getBody();
$response = json_decode($resa);


foreach ($response as $res) {
            $db->setQuery('INSERT INTO #__helloworld  (`greeting`) VALUES ("'. $res->company .'")');
            $db->execute();
        }
   }
}