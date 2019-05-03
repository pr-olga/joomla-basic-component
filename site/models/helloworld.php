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
require __DIR__.'\..\vendor\autoload.php';
/**
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class HelloWorldModelHelloWorld extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * @var string response
	 */
	protected $response;

	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
            $jinput = JFactory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');

			switch ($id)
			{
				case 2:
					$this->message = 'Good bye World!';
					break;
				default:
				case 1:
					$this->message = 'Hello World!';
					break;
			}
		}

		return $this->message;
    }

    public function getList()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://jobs.github.com/positions.json?description=python&location=new+york');

        $resa = $res->getBody();
        $this->response = json_decode($resa);
        return $this->response;

    }
}