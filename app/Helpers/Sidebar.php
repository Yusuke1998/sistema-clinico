<?php 

/**
 * Todo lo necesario para los menus del sidebar
 **/

class Sidebar
{
	public static function here($urls)
	{
		foreach ($urls as $url) {
			if (request()->is($url))return"open";
		}
	}
}