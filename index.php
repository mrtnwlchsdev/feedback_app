<?php include './inc/header.php'; ?>

<form class="col-md-6 col-sm-10 m-auto">
  <header>
    <h1 class="h1. Bootstrap text-center heading mt-2 mb-4 text-info">
      Feedback <i class="fa-solid fa-comment"></i>
    </h1>
  </header>
  <div class="form-group">
    <label for="named">Name</label>
    <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea type="text" class="form-control" id="feedback" placeholder="Enter your feedback"></textarea>
  </div>
  <button type="submit" class="btn btn-info w-100">Submit</button>
</form>

<?php include './inc/footer.php'; ?>