<?php 
require_once('../../private/initialize.php');
?>
<?php $page_title = 'Staff Menu'; ?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>

   <div class="container-lg">
      <div class="row">
         <div class="col-12 text-center">
            <h2>Main Menu</h2>
            <ul>
               <li>
                  <a href="<?php echo url_for('staff/subjects/index.php');?>">Subjects</a>
               </li>
               <li>
                  <a href="<?php echo url_for('staff/pages/index.php');?>">Pages</a>
               </li>
            </ul>
         </div>
      </div>
   </div>

   <?php require_once(SHARED_PATH . '/staff_footer.php'); ?>
      