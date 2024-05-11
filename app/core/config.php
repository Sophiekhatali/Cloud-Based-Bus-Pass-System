<?php

define('NAME','BUS BOOKING SYSTEM');
define('DEBUG',"true");

if($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] =='localhost' )
{
    define('DBHOST','127.0.0.1');
    define('DBUSER','root');
    define('DBNAME','bus_booking');
    define('DBDRIVER','mysql');
    define('DBPASS','');
    define('ROOT','http://localhost/PROJECTS/sophie/public');
}
else
{
    define('ROOT','https://wwww/system/public');
}

