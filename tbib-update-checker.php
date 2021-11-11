<?php
/**
 * Plugin Name:       TBIB Update Checker
 * Description:       Update TBIB Plugins.
 * Version:           1.1
 * Author:            Michelle Raouf - TBIB
 * **/


    require dirname(__FILE__) . '/load-v4p11.php';
   

    require_once ABSPATH . '/wp-content/plugins/tbib-update-plugin/tbib-update-checker.php';
    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://raw.githubusercontent.com/the-best-is-best/tbib-polylang-acf/master/check.json',
        __FILE__, //Full path to the main plugin file or functions.php.
        'tbib-update-checker'
    );