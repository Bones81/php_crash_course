<?php include 'inc/header.php'; ?>
   
<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

  if(isset($_POST['submit'])) {
    // Get id
    $id = $_POST['id'];
    // echo $id;

    // Delete from database
    $sql = "DELETE FROM feedback WHERE id = $id";

    if(mysqli_query($conn, $sql)) {
      // Success
      header('Location: feedback.php');
    } else {
      // Error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
?>

    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback.</p>
    <?php endif;?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt2">
          By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>

        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <input hidden type="text" name="id" value="<?php echo $item['id']; ?>">
          <input type="submit" value="Delete Post" name="submit">
        </form>
      </div>
     </div>

    <?php endforeach; ?>


   <?php include 'inc/footer.php'; ?>