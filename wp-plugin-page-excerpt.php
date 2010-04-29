<?php

/*
Plugin Name: Page Excerpt
Plugin URI: http://dennishoppe.de/wordpress-plugins/page-excerpt
Description: Adds an Excerpt box to the page edit backend. 
Version: 1.0
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de
*/


If (!Class_Exists('wp_plugin_page_excerpt')){
Class wp_plugin_page_excerpt {

  Function wp_plugin_page_excerpt(){
    // Set Hook
    Add_Action('admin_menu', Array($this, 'add_page_excerpt_box'));
  }
  
  Function add_page_excerpt_box(){
    // We just copy the function for the post.
    add_meta_box('pageexcerpt', __('Excerpt'), Array($this, 'excerpt_box'), 'page', 'normal', 'core');
  }
  
  Function excerpt_box (){
    Global $post;
    
    /* Start of the box content - this is a copy from edit-form-advanced.php so the translation exists already in the core! */
    ?><label class="screen-reader-text" for="excerpt"><?php _e('Excerpt') ?></label>
    <textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"><?php echo $post->post_excerpt ?></textarea>
    <p><?php _e('Excerpts are optional hand-crafted summaries of your content that can be used in your theme. <a href="http://codex.wordpress.org/Excerpt" target="_blank">Learn more about manual excerpts.</a>'); ?></p>
    <?php
    /* End of the box content */
    
  }

} /* End of the Class */
New wp_plugin_page_excerpt();
} /* End of the If-Condition */
/* End of File */