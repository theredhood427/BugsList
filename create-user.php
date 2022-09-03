<?php
$client = new Client();
$headers = [
  'Authorization' => 'EizrKwii3uUmdN09Cn6YxVE9DxDi9UMh',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "RussClass",
  "password": "password123",
  "real_name": "Ron Russelle L. Bangsil",
  "email": "bangsil.ronrusselle@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', '{{url}}/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
