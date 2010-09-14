<?php

/*

Plugin Name: Page Excerpt
Plugin URI: http://dennishoppe.de/wordpress-plugins/page-excerpt
Description: The Page Excerpt Plugin enables you to add an optional hand-crafted summary of your pages content to each page that can be used in your theme or by plugins. 
Version: 1.0.1
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de

*/


// Please think about a donation
If (Is_File(DirName(__FILE__).'/donate.php')) Include DirName(__FILE__).'/donate.php';


If (!Class_Exists('wp_plugin_page_excerpt')){
Class wp_plugin_page_excerpt {

  Function __construct(){
    // Set Hook
    Add_Action('admin_menu', Array($this, 'Add_Page_Excerpt_Box'));
  }
  
  Function Add_Page_Excerpt_Box(){
    // We just copy the function for the post.
    Add_Meta_Box(
      'pageexcerpt',
      __('Excerpt'),
      Array($this, 'Print_Excerpt_Box'),
      'page',
      'normal',
      'core'
    );
  }
  
  Function Print_Excerpt_Box (){
    /* Start of the box content - this is a copy from edit-form-advanced.php so the translation exists already in the core! */
    Include DirName(__FILE__) . '/meta-box.php';
    /* End of the box content */    
  }

} /* End of the Class */
New wp_plugin_page_excerpt();
} /* End of the If-Condition */
/* End of File */