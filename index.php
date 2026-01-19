<?php

declare(strict_types=1);

define( "ROUTE_ROOT", __DIR__ );
define( "PUBLICS", [
  __DIR__ . "/vendor/websyspro/wpengine/src/Core",
  __DIR__ . "/src",
]);

require ROUTE_ROOT . "/vendor/autoload.php";
require ROUTE_ROOT . "/vendor/websyspro/devtools/routers.php";