<?php require_once('../../../private/initialize.php'); 

if(!isset($_GET['id'])){
   redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'];
$page_name = '';
$position = '';
$visible = '';

if(is_post_request()){
   $page_name = $_POST['page_name'];
   $position = $_POST['position'];
   $visible = $_POST['visible'];

   echo "Form parameters<br />";
   echo "Menu name: " . $page_name . "<br />";
   echo "Positioin: " . $position . "<br />";
   echo "Visible: " . $visible . "<br />";
   echo "Subect ID: " . $id . "<br />";
}
?>

<?php $page_title = 'Edit Staff Page'; ?>
<?php require(SHARED_PATH . '/staff_header.php'); ?>

<div class="container my-5">
   <div class="subject new my-3">
      <h1>Edit Subject</h1>
      <form class="my-3" action="<?php echo url_for('/staff/pages/edit.php?id=' . spCh(u($id))); ?>" method="post">
         <dl>
            <dt>Page Name</dt>
            <dd><input type="text" name="page_name" value="<?php echo $page_name; ?>"></dd>
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
            <input class="btn btn-secondary" type="submit" value="Edit Page">
         </div>
      </form>
   </div>
   <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link my-3"><p class="my-3">&laquo; Back to List</p></a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
