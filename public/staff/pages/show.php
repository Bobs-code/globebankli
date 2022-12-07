<?php require_once('../../../private/initialize.php'); ?>

<?php $id = $_GET['id'];
?>
<?php $page_title = "Show Page"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container">
<a href="<?php echo url_for('/staff/pages/index.php');?>">&laquo; Back to List</a>
<div class="row">
   <p>Page ID: <?php echo spCh($id); ?></p>
</div>


</div>
