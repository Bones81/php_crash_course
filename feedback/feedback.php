<?php include 'inc/header.php'; ?>
   
<?php 
  $feedback = [
    [
      'id' => '1',
      'name' => 'Emilia Sotelo',
      'email' => 'emilia@tmail.com',
      'body' => 'Nathan\'s voice might be higher than mine.'
    ],
    [
      'id' => '2',
      'name' => 'Ivory Bodnar',
      'email' => 'ivory@tmail.com',
      'body' => 'Nathan helped me feel good about going back to Hong Kong.'
    ],
    [
      'id' => '3',
      'name' => 'Sean Gabel',
      'email' => 'sean@tmail.com',
      'body' => 'Let\'s have a Disney day!'
    ],
  ]
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
          By <?php echo $item['name']; ?>
        </div>
      </div>
     </div>

    <?php endforeach; ?>


   <?php include 'inc/footer.php'; ?>