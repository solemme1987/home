<?php

// CONTROLADORES
require_once "controllers/home.controller.php";
require_once "controllers/template.controller.php";

// MODELOS
require_once "models/home.model.php";

$template = new  TemplateController();
$template -> template();