<?php require_once('../../../private/initialize.php'); ?>

<?php $pages = [
   ['id' => '1', 'position' => '1', 'visible' => '1', 'page_name' => 'Globe Bank'],
   ['id' => '2', 'position' => 
   '2', 'visible' => '1', 'page_name' => 'History'],
   ['id' => '3', 'position' => '3', 'visible' => '1', 'page_name' => 'Leadership'],
   ['id' => '4', 'position' => '4', 'visible' => '1', 'page_name' => 'Contact Us'],
];
?>

<?php $page_title = 'Pages'?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

<div class="container">
   <h1 class="display-5">Pages</h1>
   <div class="actions">
      <a href="<?= url_for('/staff/pages/new.php'); ?>" class="actions">Create New Page</a>
   </div>

   <div class="table-responsive-lg">
      <table class="table table-striped">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Position</th>
               <th scope="col">Visible</th>
               <th scope="col">Page Name</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($pages as $page) { ?>
            <tr class="">
               <td scope="row"><?php echo spCh($page['id']) ;?></td>
               <td><?php echo spCh($page['position']);?></td>
               <td><?php echo $page['visible'] == 1 ? 'Yes' : 'No';?></td>
               <td><?php echo spCh($page['page_name']); ?></td>
               <td><a href="<?php echo url_for('staff/pages/show.php?id=' . spCh(u($page['id']))); ?> ">View</a></td>
               <td><a href="<?php echo url_for('staff/pages/edit.php?id=' . spCh(u($page['id'])));?>">Edit</a></td>
               <td><a href="">Delete</a></td>

            </tr>
         <?php } ?>
         </tbody>
      </table>
   </div>
   
</div>



<?php require_once(SHARED_PATH . '/staff_footer.php'); ?>