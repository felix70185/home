<?php
error_reporting(E_ALL);
ini_set('display_errors','on');

abstract class CommsManager{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;
    
    abstract public function getTestData():string;
}

class MegaCommsManager extends CommsManager{
    function __construct() {
        
    }
    
    public function getTestData() : string
    {
        return 'Test: Mega';
    }
}

class BloggsCommsManager extends CommsManager{
    function __construct() {
        
    }
    
    public function getTestData() : string
    {
        return 'Test: Bloggs';
    }
}

class Settings {
    static $COMMSTYPE = 'Bloggs';
}

class AppConfig {
    private static $instance = false;
    private $CommsManager;
    
    private function __construct() {
        $this->init();
    }
    
    private function init(){
        switch (Settings::$COMMSTYPE){
            case "Mega":
                $this->CommsManager = new MegaCommsManager();
                break;
            default:
                $this->CommsManager = new BloggsCommsManager();
                break;
        }
    }
    
    public static function getInstance(){
        if ( empty(self::$instance) )
            self::$instance = new self();
        
        return self::$instance;
    }
    
    public function getCommsManager() : CommsManager
    {
        return $this->CommsManager;
    }
}

$comm = AppConfig::getInstance()->getCommsManager();

echo $comm->getTestData();
