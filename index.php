<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'app/models/DatabaseModel.php';
require_once 'app/models/UserModel.php';
require_once 'app/models/AuthUserModel.php';
require_once 'app/models/roles/RoleModel.php';
require_once 'app/models/pages/PageModel.php';
require_once 'app/controllers/pages/PageController.php';
require_once 'app/controllers/users/AuthController.php';
require_once 'app/controllers/users/UsersController.php';
require_once 'app/controllers/roles/RoleController.php';
require_once 'app/controllers/HomeController.php';


require_once 'app/router.php';
$router = new Router();
$router->run();