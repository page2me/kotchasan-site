<?php
/*
 * @filesource index.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Index;

use \Kotchasan\Http\Request;
use \Kotchasan\Template;

/**
 * Description
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Controller extends \Kotchasan\Controller
{

  public function index(Request $request)
  {
    // รับค่าจาก $_GET['module'] ถ้าไม่มีการส่งค่ามาจะคืนค่า home โดยคืนค่าเป็น string ที่ตัวแปร module
    // method filter() กำหนดให้รับค่าเฉพาะตัวอักษรที่กำหนดเท่านั้น
    $module = $request->get('module', 'home')->filter('a-z');
    // กำหนดค่า template ที่ใช้งานอยู่
    Template::init(self::$cfg->skin);
    // ตรวจสอบว่ามี View ของหน้าที่เรียกหรือไม่
    // เช่น Index\Home\View สำหรับหน้า home
    // ถ้าไม่พบหน้าที่เรียกจะคืนค่า Index\Pagenotfound\View
    $class = 'Index\\'.ucfirst($module).'\View';
    if (method_exists($class, 'render')) {
      // โหลดหน้าที่เรียก
      $content = createClass($class);
    } else {
      // โหลดหน้า Pagenotfound เมื่อไม่พบหน้าที่เรียก
      $content = createClass('Index\Pagenotfound\View');
    }
    // เริ่มต้นใช้งาน View
    $view = new \Kotchasan\View;
    // ใส่เนื้อหาลงใน View ตามที่กำหนดใน Template
    // ตาม method ของ View
    $view->setContents(array(
      // ข้อความจาก View แสดงบน title bar
      '/{TITLE}/' => $content->title(),
      // เนื้อหาหน้า View ที่เรียกใช้งาน
      '/{CONTENT}/' => $content->render(),
      // แสดงเมนู
      '/{TOPMENU}/' => \Kotchasan\Menu::render(\Index\Menu\Model::get(), $module)
    ));
    // โหลด gcss ลงใน template
    $view->addCSS(WEB_URL.'skin/gcss.css');
    // โหลด template หลัก (index.html)
    $template = Template::load('', '', 'index');
    // ส่งออก HTML
    echo $view->renderHTML($template);
  }
}