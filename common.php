<?php

		function write_log( $log )
		{
			date_default_timezone_set('PRC');
			$fp = fopen('log/app.log', 'a+');
			fwrite( $fp, date( "Y-m-d H:i:s")."  ".print_r($log,TRUE). "\r\n" );
			fclose( $fp );
		}

?>



