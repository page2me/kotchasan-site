<?php
/*
 * @filesource home.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Home;

use \Kotchasan\Template;

/**
 * เนื้อหาหน้า Home
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Kotchasan\View
{

  /**
   * เนื้อหาหน้า Home
   *
   * @return string
   */
  public function render()
  {
    // โหลด template หน้า home.html มาส่งให้ Controller
    return Template::load('', '', 'home');
  }

  /**
   * คืนค่าข้อความบนไตเติลบาร์เมื่อแสดงหน้านี้ ไปยัง Controller
   *
   * @return string
   */
  public function title()
  {
    return 'หน้า Home';
  }
}
