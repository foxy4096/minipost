<?php 
$colors = ['primary', 'info', 'success', 'warning', 'danger', 'light', 'black'];
$randomColor = $colors[array_rand($colors)];
?>

<section class="hero is-<?php echo $randomColor; ?> is-bold">
  <div class="hero-body">
    <p class="title">Mini Post</p>
    <p class="subtitle">
        A Postman alternative for testing and debugging your APIs.
        <br>Built with PHP and MySQL, it allows you to send requests and view responses in a user-friendly interface.
    </p>
  </div>
</section>