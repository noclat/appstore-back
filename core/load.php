<?php
// load core
include_once __DIR__ . '/r76.php';
load(basename(__DIR__));

// load composer dependencies
include_once __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../vendor/autoload.php';

// load application
load(rtrim(APP_DIR, '/') . '/config');
load(rtrim(APP_DIR, '/') . '/helpers');
load(rtrim(APP_DIR, '/') . '/lib');
load(rtrim(APP_DIR, '/') . '/controllers');
load(rtrim(APP_DIR, '/') . '/models');
