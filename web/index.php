<?php

require __DIR__ . "/../../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv( dirname( __DIR__ . "/../" ) );
$dotenv->load();
$dotenv->required( array( 'REDIRECT_URL' ) );


Header( "Location: " . $_ENV['REDIRECT_URL'] );
