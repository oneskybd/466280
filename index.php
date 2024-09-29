<?php include_once('connection.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $css.'/bootstrap.min.css';?>" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Class : 2024</title>
  </head>
  <body>
    <div class="container-fluid" style="border: 1px solid black">
        <div class="row bg-info">
            <div class="col">
                <img src="<?php echo $img.'/baf_logo.png';?>" alt="Img logo">
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
        <?php include_once($docroot.'frontend/partials/nabbar.php');?>
        <?php include_once($docroot.'frontend/partials/slider.php');?>
      </div>
    <script src="<?php echo $js.'/jquery-3.3.1.slim.min.js';?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo $js.'/bootstrap.min.js';?>" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>