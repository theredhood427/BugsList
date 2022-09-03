<?php
    include "vendor/autoload.php";
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;


    $client = new Client();
$headers = [
  'Authorization' => 'EizrKwii3uUmdN09Cn6YxVE9DxDi9UMh'
];
$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();

//Token2 =EizrKwii3uUmdN09Cn6YxVE9DxDi9UMh
define('TOKEN', 'EizrKwii3uUmdN09Cn6YxVE9DxDi9UMh');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$bugs_list = json_decode($bugs);


foreach ($bugs_list->issues as $bug)
{
	echo '<li>' . $bug->id . ' ' .
$bug->summary . ' - ' .
$bug->severity->name . ' - ' .
$bug->status->name . "\n";
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>IPT10 Bugs</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1>IPT10 Bugs List</h1>
    <h3><a href="">Ron Russelle L. Bangsil</a></h3>
    
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Summary</th>
          <th>Severity</th>
          <th>Status</th>
        </tr>
</thead>
        <tbody>
          <?php 
          foreach ($bugs_list->issues as $bug){
        echo '<tr>';
        echo '<th>' . $bug->id. '</th>';
        echo '<td>' . $bug->summary. '</td>';
        echo '<td>' . $bug->severity->name. '</td>';
        echo '<td>' . $bug->status->name . '</td>';
        echo '</tr>';
      }
        ?>
      </tbody>
      </table>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>


