<?php

$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/Request.php';
require 'database/Connector.php';
require 'database/QueryBuilder.php';


$app['database'] = new QueryBuilder(Connector::make($app['config']['access']));