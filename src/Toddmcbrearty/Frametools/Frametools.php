<?php namespace Toddmcbrearty\Frametools;

class Frametools
{
	public static function d( $input, $die = TRUE )
	{
		echo "<pre>";
		try 
		{
			var_dump( $input );
		}
		catch ( Exception $e )
		{
			echo $e->message();
		}
		echo "</pre>";

		if ( $die ) die();
	}
}