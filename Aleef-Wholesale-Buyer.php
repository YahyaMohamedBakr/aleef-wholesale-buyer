<?php
/**
 * Plugin Name: Aleef Wholesale Buyer
 * Plugin URI: https://motaweroon.com
 * Description: This Plugin helps register custom wholesale buyers, short code to make register form [Aleef_Registration_Form]
 * Author URI: http://motaweroon.com
 * Version: 1.0.0
 */

 function registration_form() {
   
    include_once('submit_form.php');
    
}

add_shortcode( 'Aleef_Registration_Form', 'registration_form' );

include_once('approval.php');
