<?php
require_once 'goutte.phar';
use Goutte\Client;
$client = new Client();
$crawler = $client->request('GET', 'http://www.ss-complex.com');
$crawler->filter('title')->each(function($node)
{
echo $node->text();
});
?>