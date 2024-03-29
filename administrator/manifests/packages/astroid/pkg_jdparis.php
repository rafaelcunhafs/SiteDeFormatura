<?php
/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2018 JoomDev.
 * @license   GNU/GPLv2 and later
 */
// no direct access
defined('_JEXEC') or die;

class pkg_astroidInstallerScript {

   /**
    * 
    * Function to run before installing the component	 
    */
   public function preflight($type, $parent) {
      
   }

   /**
    *
    * Function to run when installing the component
    * @return void
    */
   public function install($parent) {
      $this->displayAstroidWelcome();
   }

   /**
    *
    * Function to run when un-installing the component
    * @return void
    */
   public function uninstall($parent) {
      
   }

   /**
    * 
    * Function to run when updating the component
    * @return void
    */
   function update($parent) {
      $this->displayAstroidWelcome();
   }

   /**
    * 
    * Function to update database schema
    */
   public function updateDatabaseSchema($update) {
      
   }

   /**
    * 
    * Function to display welcome page after installing
    */
   public function displayAstroidWelcome() {
      ?>
      <style>
         .astroid-install {
            margin: 20px 0;
            padding: 40px 0;
            text-align: center;
            border-radius: 0px;
            position: relative;
            border: 1px solid #f8f8f8;
            background:url(<?php echo JURI::root(); ?>media/astroid/assets/images/moon-surface.png); 
            background-repeat: no-repeat; 
            background-position: bottom;
         }
         .astroid-install p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
         }
         .astroid-install .install-message {
            width: 90%;
            max-width: 800px;
            margin: 50px auto;
         }
         .astroid-install .install-message h3 {
            display: block;
            font-size: 20px;
            line-height: 27px;
            margin: 25px 0;
         }
         .astroid-install .install-message h3 span {
            display: block;
            color: #7f7f7f;
            font-size: 13px;
            font-weight: 600;
            line-height: normal;
         }
         .astroid-install-actions .btn {
            color: #fff;
            overflow: hidden;
            font-size: 18px;
            box-shadow: none;
            font-weight: 400;
            padding: 15px 50px;
            border-radius: 50px;
            background: transparent linear-gradient(to right, #8E2DE2, #4A00E0) repeat scroll 0 0 !important;
            line-height: normal;
            border: none;
            font-weight: bold;
            position: relative;
            box-shadow:0px 0px 30px #b0b7e2;
            transition: linear 0.1s;
         }
         .astroid-install-actions .btn:after{
            top: 50%;
            width: 20px;
            opacity: 0;
            content:"";
            right: 80px;
            height: 17px;
            display: block;
            position: absolute;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAARCAYAAADdRIy+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OERDRjlBMjY0OTIzMTFFODkyQTI4MzYzN0ZGQ0Y1NTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OERDRjlBMjc0OTIzMTFFODkyQTI4MzYzN0ZGQ0Y1NTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4RENGOUEyNDQ5MjMxMUU4OTJBMjgzNjM3RkZDRjU1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4RENGOUEyNTQ5MjMxMUU4OTJBMjgzNjM3RkZDRjU1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvXGU3IAAADpSURBVHjarNShCsJAHMfxO1iyyEw+gsFoEIMKA5uoxSfwKQSjYWASq4JVEKPggwgmi2ASFcMUdefvj3/QsMEdd3/4lO32Zey2SaWU0JwsLOEGndRVFNTkw0N9Z562ziRIAog4OnMRJDV4c3TsIki6EHM0dBEkbfWbgYsgqcKRo3065mGjm1CHM0ihP084wA7yMIRIokonPOFoKNjjO4zptTS4ltZuoQUVPhbaPsMC7PkZjmw3pQx3jk1sdzn4i01t38MiXDi2sP1SSnDl2Mr2W87BiWNryCStkwb/Qx82/D9swCtp0UeAAQDi4gvA12LkbAAAAABJRU5ErkJggg==') no-repeat;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
         }
         .astroid-install-actions .btn:hover{
            transition: linear 0.1s;
            box-shadow:0px 0px 30px #4b57d9;
         }
         .astroid-install-actions .btn:hover:after{
            opacity: 1;
            right: 20px;
            margin-left: 0;
         }
         .astroid-support-link{
            color: #8E2DE2;
            padding: 30px 0 10px;
         }
         .astroid-support-link a{
            color: #8E2DE2;
            text-decoration: none;
         }
         .astroid-support-link a:hover {
            text-decoration: underline;
         }
         .astroid-poweredby{
            right: 20px;
            width: 150px;
            height: 25px;
            bottom: 20px;
            position: absolute;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAAAZCAYAAADT59fvAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjBBMzcwNEU0N0YzMTFFOEE0ODFCNkJDMkNBMDVFNDIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjBBMzcwNEY0N0YzMTFFOEE0ODFCNkJDMkNBMDVFNDIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MEEzNzA0QzQ3RjMxMUU4QTQ4MUI2QkMyQ0EwNUU0MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2MEEzNzA0RDQ3RjMxMUU4QTQ4MUI2QkMyQ0EwNUU0MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgETteYAAA5xSURBVHja7Ft5eBRV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') no-repeat 0 0;
         }
         .astroid-poweredby a{
            bottom: 0;
            display: block;
            font-size: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
         }
         .astroid-poweredby span{
            font-size: 0;
         }
      </style>
      <div class="astroid-install">
         <img src="data:image/png;base64,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" alt="Logo" />
         <div class="install-message">
            <h3>JD Paris - Free School Joomla Template
               <span>v 1.1</span>
            </h3>
         </div>
         <div class="astroid-install-actions">
            <a href="index.php?option=com_templates" class="btn btn-default">Get started</a>
         </div>
         <div class="astroid-support-link">
            <a href="https://www.joomdev.com/documentation/cleanx" target="_blank">Documentation</a> <span>|</span> <a href="https://www.joomdev.com/forum/jd-cleanx" target="_blank">Forum</a> <span>|</span> <a href="https://www.youtube.com/playlist?list=PLv9TlpLcSZTBBVpJqe3SdJ34A6VvicXqM" target="_blank">Tutorials</a> <span>|</span> <a href="https://www.joomdev.com/about-us" target="_blank">Credits</a>
         </div>
         <div class="astroid-poweredby">
            <a href="https://www.joomdev.com" target="_blank">
               <span>JoomDev</span>
            </a>
         </div>
      </div>
      <?php
   }

   /**
    * 
    * Function to run after installing the component	 
    */
   public function postflight($type, $parent) {
      
   }

}
