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
?>
<h1><?php echo $this->msg; ?></h1>
<h2>Our Jobs</h2>
<ul>
<?php foreach($this->query as $titles) :  ?>
     <li>
          <a href="<?php echo JRoute::_('index.php?option=com_helloworld&view=item&id=' . (int)$titles->id); ?>">
          <?php echo $titles->greeting; ?>
          </a>
     </li>
<?php endforeach; ?>
</ul>