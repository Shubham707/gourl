<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Captcha {

	
	function Captcha()
    {
        $CI = & get_instance();
        log_message('Debug', 'Captcha class is loaded.');
    }

	function captcha_load()
    {
        include_once APPPATH.'/third_party/captcha/simplecaptcha.php';
         
        return new SimpleCaptcha();
    }


  
}

