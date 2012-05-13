<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

    Router::connect('/',            array('controller' => 'pages', 'action' => 'index', 'home'));
    Router::connect('/releasenote', array('controller' => 'pages', 'action' => 'releaseNotes'));
    Router::connect('/about',       array('controller' => 'pages', 'action' => 'about'));
    Router::connect('/products',    array('controller' => 'pages', 'action' => 'products'));
    Router::connect('/members',     array('controller' => 'pages', 'action' => 'members'));
//    Router::connect('/culture',     array('controller' => 'pages', 'action' => 'culture'));
    Router::connect('/activities',  array('controller' => 'pages', 'action' => 'activities'));
//    Router::connect('/disclaimer',  array('controller' => 'pages', 'action' => 'disclaimer'));
    Router::connect('/inquiry',     array('controller' => 'pages', 'action' => 'inquiry'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
