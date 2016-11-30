<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include ('includes/functs.php');



// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('menu.tpl');

$page_nr=1 ;






$action=isset($_GET['action'])?$_GET['action']:'home';
switch ($action){
    case 'home':
    $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;


    // Get newsarticles from database
    include('model/select_newsarticles.php');

// Show newsarticles 'old style' => refactor to template system.
    $templateParser->assign('result',$result);


    include("model/get_nr_articles.php");
    $nr_pages = $total_number_articles/NR_ITEMS_PER_PAGE;
    $templateParser->assign('nr_pages',$nr_pages);

    $templateParser->display('newsarticles.tpl');

        break;
        
    case 'admin';
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:"show";
//        $cms_action=$_GET['cms_action'];
        echo $cms_action;
        switch($cms_action)
        {
            case 'show':
                include 'model/select_all_items.php';
                $templateParser->assign('result',$result);
                $templateParser->display('cms_show.tpl');
                break;
            case 'delete':
                $id = $_GET['id'];
                include 'model/delete_item.php';
                break;
            case 'insert':
                break;
            case 'edit':
                break;
        }
       break; 
}



$templateParser->display('footer.tpl');

