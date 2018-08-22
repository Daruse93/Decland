<?php
require_once 'build.class.php';
$resolvers = array(
    'providers',
    'addons',
    'template',
    'tvs',
    'resources',
);
$builder = new siteBuilder('Decland', '0.1.3', 'beta', $resolvers);
$builder->build();
