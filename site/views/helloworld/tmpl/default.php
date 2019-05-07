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
?>
<h1><?php echo $this->msg; ?></h1>
<h2>List of Locations</h2>
<ul>
     <?php foreach($this->query as $titles) :  ?>
     <li><?php echo $titles->greeting; ?></li>
     <?php endforeach; ?>
</ul>