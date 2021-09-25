<?php
require_once 'model/database.php';

$controller = '';

if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
    /*    echo "
        <script>console.log('".$controller."')</script>
        ";*/
}
else
{
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
/*    echo "
    <script>console.log('".$controller."')</script>
    <script>console.log('".$accion."')</script>
    ";*/

    $controller = new $controller;

    call_user_func( array( $controller, $accion ) );
}
