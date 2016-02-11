<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['protocol'] = 'smtp';
$config['smtp_host']='ssl://smtp.googlemail.com';  
$config['smtp_port']='465';  
$config['smtp_timeout']='30';  
$config['smtp_user']='seuemail@gmail.com';  
$config['smtp_pass']='senha_do_email';  
$config['charset']  ='utf-8';
$config['newline']  ="\r\n";
$config['mailtype'] = 'html';