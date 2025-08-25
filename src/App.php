<?php
namespace Sc\Webproject;
// declare other components use in this class
use Dotenv;
// use Dotenv\Dotenv as DotenvDotenv;
use \Exeption;

class App {
    // visibility
    public function __construct() {
        // get the root directory or Current Working Directory
        $path = getcwd();
        // pass the path to Dotenv to load the .env file
        $dotenv = Dotenv\Dotenv::createImmutable( $path );
        // load the .env configuratiion into $_ENV (super global)
        $dotenv -> load();
    }

}
?>
