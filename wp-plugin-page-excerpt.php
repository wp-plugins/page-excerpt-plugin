<?php

/*

Plugin Name: Page Excerpt
Plugin URI: http://dennishoppe.de/wordpress-plugins/page-excerpt
Description: The Page Excerpt Plugin enables you to add an optional hand-crafted summary of your pages content to each page that can be used in your theme or by plugins. 
Version: 1.2.2
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de

*/


If (!Class_Exists('wp_plugin_page_excerpt')){
Class wp_plugin_page_excerpt {

  Function __construct(){
    Add_Action('init', Array($this, 'Add_Page_Excerpt_Box'));
  }
  
  Function Add_Page_Excerpt_Box(){
    Add_Post_Type_Support( 'page', 'excerpt' );
  }
  
} /* End of the Class */
New wp_plugin_page_excerpt();
Require_Once DirName(__FILE__).'/contribution.php';
} /* End of the If-Condition */
/* End of File */