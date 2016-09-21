<?php

$state= "nonlocal";

if( $state == "local" || $state == "testing" )
{
 ini_set( "display_errors", "1" );
 error_reporting( E_ALL & ~E_NOTICE );
}
else
{
 error_reporting( 0 );
}
?>