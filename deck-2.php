<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./slick-theme.css">
    <link rel="stylesheet" href="./slick.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Deck</title>
</head>
<body>
  <?php include "header.php"; ?>
    <div class="main-content">
      <div class="main-content-left">
        <?php include "banner.php"; ?>
        <?php include "list.php"; ?>
      </div>
      <div class="main-content-right">
        <div class="content-right">
          <?php include "content.php"; ?>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>

    <SCript src="./jquery.js"></SCript>
    <script src="./slick.min.js"></script>
    <script src="./main.js"></script>
   
</body>
</html>
