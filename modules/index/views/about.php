<?php
/*
 * @filesource about.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\About;

use \Kotchasan\Template;

/**
 * เนื้อห่าหน้า About
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Kotchasan\View
{

  /**
   * เนื้อหาหน้า About
   *
   * @return string
   */
  public function render()
  {
    // โหลด template หน้า about.html มาส่งให้ Controller
    return Template::load('', '', 'about');
  }

  /**
   * คืนค่าข้อความบนไตเติลบาร์เมื่อแสดงหน้านี้ ไปยัง Controller
   *
   * @return string
   */
  public function title()
  {
    return 'หน้า About';
  }
}
