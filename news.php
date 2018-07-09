<!DOCTYPE html>
<html>

<head>
  <title>News</title>
<?php include "includes/_head.php" ; ?>
</head>

<body>
<?php include "includes/_slider.php" ; ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span3">
        <?php include "includes/_sidebarMenu.php" ; ?>
      </div>
      <div class="span9">
        <div class="row-fluid"> 
          <?php include "includes/_news.php" ; ?>
          <?php include "includes/_pagination.php" ; ?>
      </div> <!-- / main content -->
    </div><!-- /row Fluid -->
  </div> <!-- /contaner -->
  <a href="#" class="pull-right hidden-desktop">back to top &#8593;</a>
</div>

  <?php include "includes/_footer.php" ; ?>

  <?php include "includes/_scripts.php" ; ?>
</body>
</html>