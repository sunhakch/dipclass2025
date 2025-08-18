<?php
namespace sc\webproject;
// declare other components use in this class
use Dotenv;
use Dotenv\Dotenv as DotenvDotenv;
use \Exeption;

class App {
    // visibility
    public function __construct() {
        $dotenv = Dotenv\Dotenv::createImmutable(_DIR_);
    }

}
?>
