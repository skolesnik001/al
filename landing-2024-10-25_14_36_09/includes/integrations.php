<?php

function easyweb($name = "", $phone = "", $source = 'form'){

  global $config;

  $name = empty($name) && isset($_COOKIE['name']) ? $_COOKIE['name'] : $name;
  $phone = empty($phone) && isset($_COOKIE['phone']) ? $_COOKIE['phone'] : $phone;

  $easyweb_status = isset($config['integrations']['easyweb']['status']) && $config['integrations']['easyweb']['status'] ? 1 : 0;
  $tg_status = isset($config['integrations']['easyweb']['tg']['status']) && $config['integrations']['easyweb']['tg']['status'] ? 1 : 0;

  if( !($easyweb_status || $tg_status) || !($name && $phone) ){
    return NULL;
  }

  $source_options = ['form', 'callback', 'popup'];
  $source = !in_array($source, $source_options) ? $source_options[0] : $source;

  $params = [
    'api_key' => isset($config['integrations']['easyweb']['api_key']) ? $config['integrations']['easyweb']['api_key'] : "",
    'product_id' => isset($config['integrations']['easyweb']['product_id']) ? $config['integrations']['easyweb']['product_id'] : 0,
    'price' => isset($config['price']) ? $config['price'] : 0,
    'currency' => isset($config['integrations']['easyweb']['currency']) ? $config['integrations']['easyweb']['currency'] : "",
    'source' => $source,

    'target' => [
      'easyweb' => $easyweb_status,
      'tg' => $tg_status,
    ],

    'name' => $name,
    'phone' => $phone,

    'utm' => [],

    'remote' => []
  ];

  $utm_prefix = 'utm_';
  $utms = ['source', 'medium', 'campaign', 'content', 'term'];
  foreach ($utms as $utm) {
    if(isset($_COOKIE[$utm_prefix . $utm])){
      $params['utm'][$utm] = $_COOKIE[$utm_prefix . $utm];
    }
  }

  if(isset($_SERVER['REMOTE_ADDR'])){
    $params['remote']['ip'] = $_SERVER['REMOTE_ADDR'];
  }

  if(isset($_SERVER['HTTP_USER_AGENT'])){
    $params['remote']['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
  }

  if(isset($_SERVER['SERVER_NAME'])){
    $params['remote']['domain'] = $_SERVER['SERVER_NAME'];
  }


  $curl_opts = [
    CURLOPT_RETURNTRANSFER => True,
    CURLOPT_FOLLOWLOCATION => True,
    CURLOPT_POST => True,
    CURLOPT_POSTFIELDS => http_build_query($params),
    CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
    CURLOPT_URL => "https://orders.easy-web.io/v1/orders/create"
  ];

  $response = NULL;
  if(function_exists('curl_init')){
    $curl = curl_init();
    curl_setopt_array($curl, $curl_opts);
    $response_json = curl_exec($curl);
    curl_close($curl);

    try {
      $response = json_decode($response_json, JSON_OBJECT_AS_ARRAY);
    } catch (\Throwable $e) {
      $response = NULL;
    }
  }

  if(isset($config['integrations']['debug']) && $config['integrations']['debug']){
    echo "<pre>" . print_r($response, True) . "</pre>";
  }

  return $response;
}


function lpcrm($name = "", $phone = ""){

  global $config;

  $name = empty($name) && isset($_COOKIE['name']) ? $_COOKIE['name'] : $name;
  $phone = empty($phone) && isset($_COOKIE['phone']) ? $_COOKIE['phone'] : $phone;

  $status = isset($config['integrations']['lpcrm']['status']) && $config['integrations']['lpcrm']['status'] ? 1 : 0;
  $url = isset($config['integrations']['lpcrm']['url']) && $config['integrations']['lpcrm']['url'] ? $config['integrations']['lpcrm']['url'] : NULL;
  $key = isset($config['integrations']['lpcrm']['key']) && $config['integrations']['lpcrm']['key'] ? $config['integrations']['lpcrm']['key'] : NULL;
  $country = isset($config['integrations']['lpcrm']['country']) && $config['integrations']['lpcrm']['country'] ? $config['integrations']['lpcrm']['country'] : NULL;
  $office = isset($config['integrations']['lpcrm']['office']) && $config['integrations']['lpcrm']['office'] ? $config['integrations']['lpcrm']['office'] : '';
  $product_id = isset($config['integrations']['lpcrm']['product_id']) && $config['integrations']['lpcrm']['product_id'] ? $config['integrations']['lpcrm']['product_id'] : NULL;

  if( !($status && $url && $key && $country && $product_id && $name && $phone) ){
    return NULL;
  }

  $product = [
    'product_id' => $product_id,
    'price' => isset($config['price']) ? $config['price'] : 0,
    'count' => 1
  ];
  $products = urlencode(serialize([$product]));
  $sender = urlencode(serialize($_SERVER));


  $params = [
    'key' => $key,
    'country' => $country,
    'office' => $office,
    'order_id' => number_format(round(microtime(True) * 10), 0, '.' ,''),
    'sender' => $sender,

    'bayer_name' => $name,
    'phone' => $phone,
    'products' => $products

  ];

  $utms = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
  foreach ($utms as $utm) {
    if(isset($_COOKIE[$utm])){
      $params[$utm] = $_COOKIE[$utm];
    }
  }

  $curl_opts = [
    CURLOPT_RETURNTRANSFER => True,
    CURLOPT_FOLLOWLOCATION => True,
    CURLOPT_POST => True,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_URL => $url
  ];

  $response = NULL;
  if(function_exists('curl_init')){
    $curl = curl_init();
    curl_setopt_array($curl, $curl_opts);
    $response_json = curl_exec($curl);
    curl_close($curl);

    try {
      $response = json_decode($response_json, JSON_OBJECT_AS_ARRAY);
    } catch (\Throwable $e) {
      $response = NULL;
    }
  }

  if(isset($config['integrations']['debug']) && $config['integrations']['debug']){
    echo "<pre>" . print_r($response, True) . "</pre>";
  }

  return $response;
}


function integrations($name = "", $phone = "", $source = "form"){
  if(function_exists('easyweb')){
    easyweb($name, $phone, $source);
  }

  if(function_exists('lpcrm')){
    lpcrm($name, $phone);
  }
}

?>