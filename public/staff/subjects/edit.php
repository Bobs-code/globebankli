<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])){
      redirect_to(url_for('/staff/subjects/index.php'));
}

$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if (is_post_request()) {
   // Handle fomr values sent by new.php
   $menu_name = $_POST['menu_name'] ?? '';
   $position = $_POST['position'] ?? '';
   $visible = $_POST['visible'] ?? '';
   
   echo "Form parameters<br />";
   echo "Menu name: " . $menu_name . "<br />";
   echo "Positioin: " . $position . "<br />";
   echo "Visible: " . $visible . "<br />";
   echo "Subect ID: " . $id . "<br />";
} else {
   redirect_to(url_for('/staff/subjects/new.php'));
}


?>

<?php $page_title = 'Edit Subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container my-5">
   <div class="subject new my-3">
      <h1>Edit Subject</h1>
      <form class="my-3" action="<?php echo url_for('/staff/subjects/edit.php?id=' . spCh(u($id))); ?>" method="post">
         <dl>
            <dt>Menu Name</dt>
            <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>"></dd>
         </dl> 
         <dl>
            <dt>Position</dt>
            <dd><select name="position">
               <option value="1">1</option>
            </select></dd>
         </dl>
         <dl>
            <dt>Visible</dt>
            <dd>
               <input type="hidden" name="visible" value="0">
               <input type="checkbox" name="visible" value="1">
            </dd>
         </dl>
         <div id="operations">
            <input class="btn btn-secondary" type="submit" value="Edit Subject">
         </div>
      </form>
   </div>
   <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link my-3"><p class="my-3">&laquo; Back to List</p></a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>