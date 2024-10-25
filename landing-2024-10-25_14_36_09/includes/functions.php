<?php

function check_utm(){
  $utm = [];
  $parts = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
  foreach ($parts as $part) {
    if( isset($_GET[$part]) && ( !isset($_COOKIE[$part]) || $_COOKIE[$part] != $_GET[$part] ) ){
      setcookie($part, $_GET[$part], time() + 86400, '/');
    }
  }
}

function check_form(){
  $utm = [];
  $parts = ['name', 'phone'];
  foreach ($parts as $part) {
    if( isset($_REQUEST[$part]) && ( !isset($_COOKIE[$part]) || $_COOKIE[$part] != $_REQUEST[$part] ) ){
      setcookie($part, $_REQUEST[$part], time() + 86400, '/');
    }
  }
}


function discount($echo = True){

  global $config;

  $data = (isset($config['discount']) && $config['discount'])  ? round((double)$config['discount'] * 100, 0) : 0;
  if($echo){
    echo $data;
  } else {
    return $data;
  }
}

function price($echo = True){

  global $config;

  $data = (isset($config['price']) && $config['price']) ? round((double)$config['price'], 2) : 0;
  if($echo){
    echo $data;
  } else {
    return $data;
  }
}

function price_old($echo = True){

  global $config;

  $data = (isset($config['price']) && $config['price']) ? ceil((double)$config['price'] / (1 - (double)$config['discount'])) : round((double)$config['price'], 0);
  if($echo){
    echo $data;
  } else {
    return $data;
  }
}

function price_diff($echo = True){

  global $config;

  $price_old = price_old(False);
  $price = (isset($config['price']) && $config['price']) ? round((double)$config['price'], 0) : 0;
  $data = ceil($price_old - $price);
  if($echo){
    echo $data;
  } else {
    return $data;
  }
}


function name($echo = True){

  $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : False;
  if(!$name){
    $name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";
  }

  if($echo){
    echo $name;
  } else {
    return $name;
  }
}

function phone($echo = True){

  $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : False;
  if(!$phone){
    $phone = isset($_COOKIE['phone']) ? $_COOKIE['phone'] : "";
  }

  if($echo){
    echo $phone;
  } else {
    return $phone;
  }
}


function domain($echo = True, $include_http = False){

  $data = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : False;
  if(!$data){
    $data = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : False;
  }

  $http = '';
  if($include_http){
    $http = ( ( isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ) || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://';
  }

  $data = $http . $data;

  if($echo){
    echo $data;
  } else {
    return $data;
  }
}

?>