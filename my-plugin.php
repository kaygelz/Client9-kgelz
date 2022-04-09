/** 
 * Hello World 
 * 
 * @package HelloWorld 
 * @author Kaylee Gelz
 * @copyright 2020 Kaylee Gelz 
 * @license GPL-2.0-or-later 
 * 
 * @wordpress-plugin 
 * Plugin Name: Hello World 
 * Plugin URI: https://mysite.com/hello-world 
 * Description: Prints "Hello World" in WordPress admin. 
 * Version: 0.0.1 
 * Author: Your Name 
 * Author URI: https://mysite.com 
 * Text Domain: hello-world 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */
...
?>
“Hello World” in it. When you add an admin page, it also adds a menu item.

<?php
function print_hello_world_title()  {
  echo "<h1>Hello World</h1>"; 
}
function hello_world_admin_menu()  {
  add_menu_page(
    'Hello World',// page title  
    'Hello World Menu Title,// menu title  
    'manage_options',// capability  
    'hello-world',// menu slug  
    'print_hello_world_title'  // callback function  
  );  
}  
add_action( 'admin_menu', 'hello_world_admin_menu' );
...
?>