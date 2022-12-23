<?php 
require_once('../../../private/initialize.php');

if (is_post_request()) {

   $page_name = $_POST['page_name'] ?? '';
   $position = $_POST['position'] ?? '';
   $visible = $_POST['visible'] ?? '';
   
   echo "Form parameters<br />";
   echo "Menu name: " . $page_name . "<br />";
   echo "Positioin: " . $position . "<br />";
   echo "Visible: " . $visible . "<br />";
} else {
   redirect_to(url_for('/staff/pages/new.php'));
}
// Handle form values sent by new.php
?>