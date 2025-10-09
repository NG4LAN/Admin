<?php

namespace app;

use app\Controllers\AddFacultyController;
use app\Controllers\LoginController;
use app\Controllers\AddSubjectController;

class Router
{
    public static $routes = [];

    public static function init()
    {
        // Define application routes here


        Router::add('/', fn() => (new \app\Controllers\LoginController())->showLogin()); // show login page
        Router::add('/LoginView', fn() => (new \app\Controllers\LoginController())->authenticate(), 'POST'); // login form submit

        // Add Faculty routes
        Router::add('/AddFacultyView', fn() => \app\Router::render('AddFacultyView')); // show add faculty page
        Router::add('/AddFacultySubmit', fn() => (new \app\Controllers\AddFacultyController())->addFaculty(), 'POST'); // handle POST submit
        
        
        
        Router::add('/DashboardView', fn() => \app\Router::render('DashboardView')); // show dashboard page



        // Router::add('/AddSubjectView', fn() => (new \app\Controllers\AddSubjectController())->showSubjectForm());
        Router::add('/AddSubjectView', fn() => \app\Router::render('AddSubjectView'));
        Router::add('/AddSubjectSubmit', fn() => (new \app\Controllers\AddSubjectController())->addSubject(), 'POST');
        Router::add('/ViewFaculty', fn() => (new \app\Controllers\AddFacultyController())->readfaculty());

        


        // Show Subject form
        Router::add('/ViewSubjects', fn() => (new \app\Controllers\AddSubjectController())->readSubject());
        Router::add('/ViewSubjects/UpdateSubjectView/{id}',fn($data) => (new \app\Controllers\AddSubjectController())->showSubjectForm($data['id']),'GET');
        Router::add('/ViewSubjects/UpdateSubjectView/{id}/Update',fn($data) => (new \app\Controllers\AddSubjectController())->updateSubject($data['id']),'POST');




        // Show update form (GET)
        // Show the update form (GET)
        Router::add(
            '/ViewFaculty/UpdateFaculty/{faculty}',
            fn($data) => (new \app\Controllers\AddFacultyController())->showUpdateForm($data['faculty']),
            'GET'
        );
        // Handle the form submit (POST)
        Router::add('/ViewFaculty/UpdateFaculty/{faculty}/Update',fn($data) => (new \app\Controllers\AddFacultyController())->updateFaculty($data['faculty']),'POST'
        );





        Router::run();
    }

    public static function add($path, $callback)
    {
        $path = str_replace(['{', '}'], ['(?P<', '>[^/]+)'], $path);

        Router::$routes[$path] = $callback;
    }

    public static function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (self::$routes as $route => $callback) {
            if (preg_match("#^$route$#", $requestUri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                echo call_user_func($callback, $params);

                return;
            }
        }
        echo template()->render('Errors/404');
    }

    public static function render($view, $data = [])
    {
        $viewPath = __DIR__ . "/Views/{$view}.php";

        if (file_exists($viewPath)) {
            $templates = new \League\Plates\Engine(__DIR__ . '/Views');
            echo $templates->render($view, $data);
        } else {
            echo template()->render('Errors/404');
        }
    }
}
