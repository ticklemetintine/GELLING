<?php 
  include('../includes/header.php');
  include('../includes/sticky-nav.php');
?>
<div class="container-fluid">
  <div class="row-fluid">
    <?php include('../includes/sidebar.php'); ?>
    <div class="span9">
      <form action = "functions/_borrow.php" method = "post">
        <div class="row-fluid">
          <div class="span12">
            <h3>Borrow</h3>
            <hr>
            <h4>Borrower</h4>
            <div class = "row-fluid">
              <div class = "span8">
                <input type="text" class="input-block-level" name="firstName" placeholder = "First Name" required>
                <input type="text" class="input-block-level" name="lastName" placeholder = "Last Name" required>
                <input type="text" class="input-block-level" name="sid" placeholder = "Student Number" required>
              </div>
            </div>
          </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid">
          <div class="span12">
            <hr>
            <h4>Book</h4>
            <div class = "row-fluid">
              <div class = "span8">
                <input type="text" class="input-block-level" name="isbn" placeholder = "ISBN Number" required>
                <input type="text" class="input-block-level" value = "<?php echo date('Y-m-d') ?>" disabled>
                <input type="hidden" name="dateIn" value = "<?php echo date('Y-m-d') ?>">
                <input type="text" class="input-block-level" name="dateOut" placeholder = "Return Date" required>
                <input type="submit" class="btn btn-success" name="submitBtn" value = "Submit">
                <input type = "hidden" value = "$_SESSION['uname']" name = "user">
              </div>
            </div>
          </div><!--/span-->
        </div><!--/row-->
      </form><!-- form -->
    </div><!--/span-->
  </div><!--/row-->

  <hr>

  
<?php 
  include('../includes/footer.php');
?>