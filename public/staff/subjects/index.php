<?php 
require_once('../../../private/initialize.php');
?>
<?php 

$subjects = [
 ['id' => 1, 'position' => 1, 'visible' => 1, 'menu_name' => 'About'],
 ['id' => 2, 'position' => 2, 'visible' => 1, 'menu_name' => 'Consumer'],
 ['id' => 3, 'position' => 3, 'visible' => 1, 'menu_name' => 'Small Business'],
 ['id' => 4, 'position' => 4, 'visible' => 1, 'menu_name' => 'Commercial'],
];
?>
<?php $page_title = 'Subjects'; ?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

   <div class="container">
      <div class="row">
         <div class="col-12">
            
               <h1>Subjects</h1>
               <div class="actions">
                  <a href="<?= url_for('/staff/subjects/new.php'); ?>" class="action">Create New Subject</a>
               </div>
            

            <table class="mt-4 table table-hover table-striped">
               <thead class="table-success">
                  <tr>
                     <th>ID</th>
                     <th>Position</th>
                     <th>Visible</th>
                     <th>Name</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>
                     <th>&nbsp;</th>
                  </tr>
               </thead>

            <?php foreach($subjects as $subject) { ?>
               <tr>
                  <td><?php echo $subject['id'];?></td>
                  <td><?php echo $subject['position'];?></td>
                  <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                  <td><?php echo $subject['menu_name']?></td>
                  <td><a href="<?php echo url_for('/staff/subjects/show.php?id=' . spCh(u($subject['id'])));?>" class="action">View</a></td>
                  <td><a href="<?= url_for('/staff/subjects/edit.php?id=' . spCh(u($subject['id']))); ?>" class="action">Edit</a></td>
                  <td><a href="" class="action">Delete</a></td>
               </tr>
            <?php } ?>
            </table>
            
         </div>
      </div> 
   </div>

   <?php require_once(SHARED_PATH . '/staff_footer.php'); ?>
      