<?php
// init framework
define('APP_DIR', 'app');
include 'core/load.php';


// Routing
// --------------------
// Browser routes
get('/', 'Main->home');

// API routes
post('/api/1/apps', 'Apps->post');
delete('/api/1/apps/@id', 'Apps->delete');


// Run
// --------------------
run('Main->default');
