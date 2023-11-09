<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/template/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <!-- Responsive navbar-->
 <?php nav(); ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Register</h1>
                <p class="lead">register an account here</p>
                <p>Bootstrap v5.2.3</p>
            </div>
        </div>
<center>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>

          <label for="message">Message:</label><br>
          <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

          <input type="submit" value="Submit">
      </form>
</center>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/template/js/scripts.js"></script>
      <?php
      // echo '<pre>';
      // var_dump($data);
      // echo '</pre>';
?>
    </body>
</html>