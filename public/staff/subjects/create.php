

<?php 
require_once('../../../private/initialize.php');

if (is_post_request()) {

   $menu_name = $_POST['menu_name'] ?? '';
   $position = $_POST['position'] ?? '';
   $visible = $_POST['visible'] ?? '';
   
   echo "Form parameters<br />";
   echo "Menu name: " . $menu_name . "<br />";
   echo "Positioin: " . $position . "<br />";
   echo "Visible: " . $visible . "<br />";
} else {
   redirect_to(url_for('/staff/subjects/new.php'));
}
// Handle form values sent by new.php
?>
