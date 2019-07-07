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
$document = JFactory::getDocument();
JHtml::_('bootstrap.framework');
$document->addScript("components/com_jobboerse/assets/search.js");
?>
<h1><?php echo $this->msg; ?></h1>
<h2>Our Jobs</h2>
<div class="row search-area">
<div class="col-sm-5 col-md-5 search-area__element">
<?php echo '<input id="token" type="hidden" name="' . JSession::getFormToken() . '" value="1" />'; ?>
  <input type="text" name="alias_search" id="alias_search" class="form-control input-md" autocomplete="off" placeholder="Alias" style="">
</div>
<div class="col-sm-2 col-md-2 search-area__element">
<?php echo '<input id="token" type="hidden" name="' . JSession::getFormToken() . '" value="3" />'; ?>
  <button type="submit" class="button button--search" onclick="searchHere();">Suchen</button>
</div>
</div>


<ul>
<?php foreach($this->query as $titles) :  ?>
     <li>
          <a href="<?php echo JRoute::_('index.php?option=com_helloworld&view=item&id=' . (int)$titles->id); ?>">
          <?php echo $titles->greeting; ?>
          </a>
     </li>
<?php endforeach; ?>
</ul>