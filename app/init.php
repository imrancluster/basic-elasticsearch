<?php
use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()->build();

//$es = new Elasticsearch\Client([
//  'hosts' => ['127.0.0.1:9200']
//]);