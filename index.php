<?php include './inc/header.php'; ?>

<?php
$first_name = $email = $feedback = '';
if (isset($_POST['submit'])) {
  if (!empty($_POST['name'])) {
    $first_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  if (!empty($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  if (!empty($_POST['feedback'])) {
    $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  $sql = "INSERT INTO user (first_name, email, feedback) VALUES ('$first_name','$email','$feedback')";
  try {
    mysqli_query($conn,$sql);
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST" class="col-md-6 col-sm-10 m-auto">
  <header>
    <h1 class="h1. Bootstrap text-center heading mt-2 mb-4 text-info">
      Feedback <i class="fa-solid fa-comment"></i>
    </h1>
  </header>
  <div class="form-group">
    <label for="named">Name</label> 
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>  
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea type="text" class="form-control" id="feedback" placeholder="Enter your feedback" name="feedback" required></textarea>
    </div>
  </div>
  <input name="submit" type="submit" value="Submit" class="btn btn-info w-100">
</form>

<?php include './inc/footer.php'; ?>