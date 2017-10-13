<?php
/**
 * Routes.
 */
require __DIR__ . "/route/remserver.php";
require __DIR__ . "/route/report.php";
require __DIR__ . "/route/main.php";
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/debug.php";
require __DIR__ . "/route/flat-file-content.php";

// Catch all route last
require __DIR__ . "/route/404.php";
