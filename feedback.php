<?php include './inc/header.php'; ?>

<?php 

$sql = 'SELECT * FROM user';
$result = mysqli_query($conn,$sql);
$feedback_content = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<section class="text-center">
    <header>
        <h2 class="h2. Bootstrap text-center heading mt-2 mb-4 text-info">Feedback</h2>
    </header>
    <?php if(empty($feedback_content)): ?>
        <p class="lead mt-4">There is no feedback yet</p>
    <?php endif; ?>
    <?php foreach($feedback_content as $item): ?>
        <div class="card my-3 mx-auto w-75">
            <div class="card-body d-flex flex-column">
                <p class="lead"><?php echo $item['feedback']; ?></p>
                <span class="h3. Bootstrap text-secondary">By <?php echo $item['first_name']; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php include './inc/footer.php'; ?>