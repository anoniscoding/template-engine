<?php
    include_once('view-engine.php');

    $viewEngine = new ViewEngine();
    $viewEngine->friends = array('femi','ope','tolu','dami','ayo');
    $viewEngine->render('myView.phtml');