<?php

require_once __DIR__ . '/vendor/autoload.php';

use Office365\SharePoint\ClientContext;
use Office365\SharePoint\File;

$private_key = file_get_contents("./private.key");
$config = (array) json_decode(file_get_contents("./secrets.json"));

extract($config);

$ctx = (new ClientContext($site_url))->withClientCertificate(
  $tenant,
  $client_id,
  $private_key,
  $thumbprint,
  ["https://{$prefix}.sharepoint.com/.default"]
);

$fileUrl = "{$path}/CalculatorDataSample.xlsx";
$fileContent = File::openBinary($ctx, $fileUrl);
$fileName = basename($fileUrl);
file_put_contents($fileName, $fileContent);
