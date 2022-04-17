<?php
   if ($_SERVER['QUERY_STRING']) {
      if ($_GET['description']) {
         $description = $_GET['description'];
      }
      if ($_GET['title']) {
         $title = $_GET['title'];
      }
      if ($_GET['image']) {
         $image = $_GET['image'];
      }
      if ($_GET['author']) {
         $author = $_GET['author'];
      }
      if ($_GET['color']) {
         $color = $_GET['color'];
      }
      if ($_GET['redirect']) {
         $redirect = $_GET['redirect'];
         header('Location: '.$redirect);
      }
   } else {
     $description = "A Discord embed generator that allows users to send embeds.";
     $title = "Faded's Embeds";
     $color = "#00ff04";
   }
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta property="og:description" content="<?php echo $description ?>">
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:image" content="<?php echo $image ?>">
  <meta property="og:site_name" content="<?php echo $author ?>">
  <meta name="theme-color" content="<?php echo $color ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1><center>Discord Embeds</center></h1>
</body>

</html>
