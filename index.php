<?php
/*
 * index.php
 *
 * @author Goragod Wiriya <admin@goragod.com>
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */
// เปิดใช้งานแสดงผล error ออกทางหน้าจอ
define('DEBUG', 2);
// load Kotchasan
include 'Kotchasan/load.php';
// Initial Kotchasan Framework
Kotchasan::createWebApplication()->run();
