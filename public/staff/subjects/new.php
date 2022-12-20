<?php

require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404'){
   error_404();
} elseif($test == '500'){
   error_500();
} elseif($test == 'redirect') {
   redirect_to(url_for('/staff/subjects/index.php'));
}


?>

<?php $page_title = 'Create Subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container my-5">
   <div class="subject new my-3">
      <h1>Create Subject</h1>
      <form class="my-3" action="<?php echo url_for('/staff/subjects/create.php');?>" method="post">
         <dl>
            <dt>Menu Name</dt>
            <dd><input type="text" name="menu_name" value=""></dd>
         </dl> 
         <dl>
            <dt>Position</dt>
            <dd><select name="position">
               <option value="1">1</option>
            </select></dd>
         </dl>
         <dl>
            <dt>visible</dt>
            <dd>
               <input type="hidden" name="visible" value="0">
               <input type="checkbox" name="visible" value="1">
            </dd>
         </dl>
         <div id="operations">
            <input type="submit" value="Create Subject">
         </div>
      </form>
   </div>
   <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link my-3"><p class="my-3">&laquo; Back to List</p></a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>