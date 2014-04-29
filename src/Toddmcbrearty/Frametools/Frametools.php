<?php namespace Toddmcbrearty\Frametools;

class Frametools
{
	public function d( $var = '', $die = TRUE, $pre = TRUE, $print = FALSE )
	{

		if ( $var === '' )
			$var = time();
		
		if ( gettype($var) == 'string' && ( gettype($var) == 'string' && self::isJson( $var ) ) )
		{
			echo json_encode( $var );
		}
		else
		{	
			if ( $pre )
				echo "<pre>";

			if ( $print )
				print_r( $var );
			else
				var_dump( $var );

			if ( $pre )
				echo "</pre>";

		}
	
		if ( $die ) die();
	}

	public function isJson($string) {
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}
}
