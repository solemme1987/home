

<?php

require_once "controllers/template.controller.php";

require_once "controllers/user.controller.php";
require_once "controllers/city.controller.php";

require_once "models/user.model.php";
require_once "models/city.model.php";

$template = new  TemplateController();
$template -> template();


