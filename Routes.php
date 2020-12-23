<?php
    require_once './controllers/Controller.php';
    require_once './controllers/Index.php';
    require_once './controllers/Error.php';

    Route::set('index', function(){
        IndexController::CreateView('Index');
    });
    Route::set('error', function(){
        ErrorController::CreateView('Error');
    });

?>