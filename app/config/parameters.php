<?php

// Using ClearDB for mysql database
$db = parse_url($_ENV['//b7f0fe187b2406:cec1a983@eu-cdbr-west-01.cleardb.com/heroku_cb767f246fb354c?reconnect=true']); 
$container->setParameter('database_driver', 'pdo_mysql'); 
$container->setParameter('database_host', $db['host']); 
$container->setParameter('database_port', '~');
$container->setParameter('database_name', trim($db['path'], '/')); 
$container->setParameter('database_user', $db['user']); 
$container->setParameter('database_password', $db['pass']);

// Other settings
$container->setParameter('locale', 'en');
$container->setParameter('secret', 'your_secret');

?>
