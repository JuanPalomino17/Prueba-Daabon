<?php

require '../app/models/Database.php';
require '../app/models/DataDAO.php';
require '../app/controllers/DataController.php';
require '../app/routes.php';

$router = new Router();

// Agrega aquí más rutas si es necesario

$router->dispatch();
