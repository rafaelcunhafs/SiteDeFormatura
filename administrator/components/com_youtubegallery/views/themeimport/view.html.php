<?php
/**
 * YoutubeGallery Joomla! 3.0 Native Component
 * @version 4.9.0
 * @author Ivan Komlev< <support@joomlaboat.com>
 * @link http://www.joomlaboat.com
 * @GNU General Public License
 **/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * Youtube Gallery Theme Export View
 */
class YoutubeGalleryViewThemeImport extends JViewLegacy
{
        /**
         * display method of Youtube Gallery view
         * @return void
         */

        public function display($tpl = null)
        {
                // Set the toolbar
                $this->addToolBar();
                parent::display($tpl);

        }

        protected function addToolBar()
        {
                $jinput = JFactory::getApplication()->input;
$jinput->get->set('hidemainmenu',true);


                JToolBarHelper::title(JText::_('COM_YOUTUBEGALLERY_THEME_IMPORT'));
                JToolBarHelper::cancel('themeimport.cancel', 'JTOOLBAR_CLOSE');
        }


}//class
