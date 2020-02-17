<?php
/**
 * Created by PhpStorm.
 * User: Lone
 * Date: 11/8/2018
 * Time: 10:30 PM
 */
require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot . '/auth/drupalservices/auth.php');

$auth = get_auth_plugin('drupalservices');
$auth->cron();