<?php

require_once('config/sample_config.php');

$response = SampleConfig::craftgate()->fraud()->removeValueFromValueList("ipList", "127.0.0.1");

print_r($response);