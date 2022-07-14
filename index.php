<?php include './inc/header.php'; ?>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $sql = "INSERT INTO user (name,email,feedback) values (${name},${email},${feedback})";
  mysqli_query($conn,$sql);
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST" class="col-md-6 col-sm-10 m-auto">
  <header>
    <h1 class="h1. Bootstrap text-center heading mt-2 mb-4 text-info">
      Feedback <i class="fa-solid fa-comment"></i>
    </h1>
  </header>
  <?php 
    echo $name . $email . $feedback;
  ?>
  <div class="form-group">
    <label for="named">Name</label> 
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    <div class="invalid-feedback">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <div class="invalid-feedback">
    </div>
  </div>
  <div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea type="text" class="form-control <?php  ?>" id="feedback" name="feedback" placeholder="Enter your feedback" required></textarea>
    <div class="invalid-feedback">
    </div>
  </div>
  <input name="submit" type="submit" class="btn btn-info w-100">
</form>

<?php include './inc/footer.php'; ?>