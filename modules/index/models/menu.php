<?php
/*
 * @filesource menu.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Menu;

/**
 * Description
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model
{

  /**
   * ข้อมูลรายการเมนู
   *
   * @return array
   */
  public static function get()
  {
    return array(
      'home' => array(
        'text' => 'Home',
        'url' => 'index.php'
      ),
      'about' => array(
        'text' => 'About',
        'url' => 'index.php?module=about'
      ),
      'download' => array(
        'text' => 'ดาวน์โหลด',
        'submenus' => array(
          array(
            'text' => 'คชสาร',
            'url' => 'http://www.kotchasan.com',
            'target' => '_blank'
          ),
          array(
            'text' => 'Github',
            'submenus' => array(
              array(
                'text' => 'Kotchasan',
                'url' => 'https://github.com/goragod/kotchasan',
                'target' => '_blank'
              ),
              array(
                'text' => 'Site',
                'url' => 'https://github.com/goragod/kotchasan-site',
                'target' => '_blank'
              )
            ),
          )
        )
      )
    );
  }
}