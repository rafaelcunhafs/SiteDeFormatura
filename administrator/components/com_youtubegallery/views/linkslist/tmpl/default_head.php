<?php
/**
 * YoutubeGallery Joomla! Native Component
 * @version 4.9.0
 * @author Ivan Komlev< <support@joomlaboat.com>
 * @link http://www.joomlaboat.com
 * @GNU General Public License
 **/

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

?>
<tr>
        <th width="5">
                <?php echo JText::_('COM_YOUTUBEGALLERY_ID'); ?>
        </th>
        <th width="20">
             <input type="checkbox" name="checkall-toggle" value="" title="Check All" onclick="Joomla.checkAll(this);" />
        </th>
        <th align="left" style="text-align:left;">
                <?php echo JText::_('COM_YOUTUBEGALLERY_LISTNAME'); ?>
        </th>

        <th align="left" style="text-align:left;">
                <?php echo JText::_('COM_YOUTUBEGALLERY_CATEGORY'); ?>
        </th>

        <th align="left" style="text-align:left;">
                <?php echo JText::_('COM_YOUTUBEGALLERY_UPDATE'); ?>
        </th>
        <th align="left" style="text-align:left;">
                <?php echo JText::_('COM_YOUTUBEGALLERY_NUMBER_OF_VIDEOS'); ?>
        </th>
</tr>
