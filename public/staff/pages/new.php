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
         <form action="" method="post">
          <label for="" class="form-label" style="font-weight: bold">Page Name</label>
         <input type="text" name="page_name" id="" class="form-control" placeholder="Enter New Page Name" aria-describedby="helpId">
         
         <label for="position" class="form-label" style="font-weight: bold">Position</label>
         <select class="my-3" name="position">
            <option value="1">1</option>
         </select>
         <br />
         <label for="position" class="form-label my-3"  style="font-weight: bold">Visible</label>
         <input type="hidden" name="visible" value="0"> 
         <input type="checkbox" name="visible" value="1">
         </form>
         <div class="operations">
            <input class="btn btn-primary" type="submit" value="Create Page">
         </div>      
      </div>
   </div>
   <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link my-3"><p>&laquo; Back to List</p></a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>