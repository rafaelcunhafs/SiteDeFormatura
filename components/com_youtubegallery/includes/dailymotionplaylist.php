<?php
/**
 * YoutubeGallery
 * @version 4.9.0
 * @author Ivan Komlev< <support@joomlaboat.com>
 * @link http://www.joomlaboat.com
 * @GNU General Public License
 **/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

require_once(JPATH_SITE.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_youtubegallery'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'misc.php');

class VideoSource_DailymotionPlaylist
{
	public static function extractDailymotionPlayListID($URL)
	{
		//http://www.dailymotion.com/playlist/x1crql_BigCatRescue_funny-action-big-cats/1#video=x7k9rx
		$p=explode('/',$URL);

		if(count($p)<4)
			return '';

                $p2=explode('_',$p[4]);
		if(count($p2)<1)
			return ''; //incorrect playlist ID

	    return $p2[0]; //return without everything after _
	}

	public static function getVideoIDList($URL,$optionalparameters,&$playlistid,&$datalink)
	{
                //https://api.dailymotion.com/playlist/xy4h8/videos

		$videolist=array();

		$playlistid=VideoSource_DailymotionPlaylist::extractDailymotionPlayListID($URL);
		if($playlistid=='')
			return $videolist; //playlist id not found


		$apiurl = 'https://api.dailymotion.com/playlist/'.$playlistid.'/videos';
		$datalink=$apiurl;

		$htmlcode=YouTubeGalleryMisc::getURLData($apiurl);

		if($htmlcode=='')
			return $videolist;



		if(!isset($htmlcode) or $htmlcode=='' or $htmlcode[0]!='{')
		{
			return 'Cannot load data, no connection or access denied';
		}
		$streamData = json_decode($htmlcode);


		foreach ($streamData->list as $entry)
		{
            $videolist[] = 'http://www.dailymotion.com/playlist/'.$entry->id;
            //http://www.dailymotion.com/playlist/x1crql_BigCatRescue_funny-action-big-cats/1#video=x986zk

		}//foreach ($xml->entry as $entry)

		return $videolist;
	}
}
