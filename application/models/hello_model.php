<?php
defined('BASEPATH') or exit('No direct scrip access allowed');

class Hello_model extends CI_Model
{

    public function hello_nim()
    {
        echo "Hello Perkenalkan Saya 2110020069";
    }


    public function hello_mvc()
    {
        return "ini menggunakan MVC buatan 2110020069";
    }
}
