<?php 

require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404'){
   error_404();
} elseif($test == '500'){
   error_500();
} elseif($test == 'redirect'){
   redirect_to(url_for('/staff/pages/index.php'));
}

?>

<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container my-5">
   <div class="new my-3">
      <h1>Create Page</h1>
      <div class="my-3 col-lg-6">
      <form class="my-3" action="<?php echo url_for('/staff/pages/create.php');?>" method="post">
         <dl>
            <dt>Page Name</dt>
            <dd><input type="text" name="page_name" value=""></dd>
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
      </div>
   </div>
   <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link my-3"><p>&laquo; Back to List</p></a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>