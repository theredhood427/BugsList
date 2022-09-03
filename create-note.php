<?php
$client = new Client();
$headers = [
  'Authorization' => 'EizrKwii3uUmdN09Cn6YxVE9DxDi9UMh',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "bangsil.ronrusselle@auf.ed.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', '{{url}}/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
