<?php
/**
 *
 * @version Jomres 9.23.x
 *
 * @copyright	2021 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_remove_jomres_patreon_nag
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"remove_jomres_patreon_nag",
			"category"=>"System",
			"marketing"=>"This Plugin will remove jomres Patreon Nag popup screen.",
			"version"=>"1.01",
			"description"=> "This Plugin will remove jomres Patreon Nag popup screen.  ",
			"lastupdate"=>"05/07/2022",
			"min_jomres_ver"=>"9.24.1",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/remove_plugin_update_check.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'http://www.fixmycomputermark.com/images/remove_plugin_update_check.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/130-remove-jomres-plugin-update-check.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=remove_plugin_update_check>Email_Me</a>"
			);
		}
	}
?>