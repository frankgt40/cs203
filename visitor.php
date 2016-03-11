<?php
//error_reporting(E_ALL);
//ini_set('display_errors', True);

class Visitor {
    public $country;
    public $province;
    public $city;
    public $isp;
    public $ip;
    public function __set($name, $value) {
        $this->$name = $value;
        if (!$this->$name) {
            //echo "Set failed";
            exit;
        }
    }
    public function __get($name) {
        return $this->$name;
    }
    public function printVisitorInfo() {
        echo $this->country;
        echo ',';
        echo $this->province;
        echo ',';
        echo $this->city;
        echo ',';
        echo $this->isp;
        echo ',';
        echo $this->ip;
    }
}
