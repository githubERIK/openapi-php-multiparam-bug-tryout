<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label_ids = array('LabelOne', 'LabelTwo', 'LabelThree'); // string[] |

try {
    $apiInstance->fetchNotes($label_ids);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchNotes: ', $e->getMessage(), PHP_EOL;
}

?>
