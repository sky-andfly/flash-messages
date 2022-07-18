<?php

class FlashMessages{
    public function set($key, $value){
        $_SESSION[$key] = $value;
    }
    public function get($key){
        return $_SESSION[$key];
    }
    public function getFlashMessages($key){
        if(isset($_SESSION[$key])){
            $s =  $this->get($key);
            $this->delete($key);
            return $s;
        }
    }
    public function delete($key){
        unset($_SESSION[$key]);
    }

}