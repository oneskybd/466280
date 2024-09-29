<?php include_once('../../connection.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $css.'/bootstrap.min.css'; ?>" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Class : 2024</title>
  </head>
  <body>
    <div class="container-fluid" style="border: 1px solid black">
        <div class="row bg-info">
            <div class="col">
                <img src="<?php echo $img.'/baf_logo.png'; ?>" alt="BAF logo">
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
        <?php include_once($docroot.'frontend/partials/nabbar.php');
        
        try {
          $stmt = $pdo->query("SELECT * FROM personnel_info");
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
          // dd($rows);
          $serNo = 1;

          } catch (PDOException $e) {
              echo "Query failed: " . $e->getMessage();
          }      
        ?>

        <div class="row">
          <div class="col-6">
            <h6>Personnel Information</h6>
          </div>
          <div class="col-6"></div>
        </div>

<div class="row">
  <div class="col">
      <table class='table table-bordered table-striped'>
        <tr>
          <td width="10%">Ser No</td>
          <td width="15%">Service Number</td>
          <td width="10%">Rank</td>
          <td width="40%">Name</td>
          <td width="10%">Trade</td>
          <td width="15%">Action</td>
        </tr>
        <?php foreach ($rows as $row) {?>
          <tr>
            <td><?php echo $serNo; ?></td>
            <td><?php echo $row['service_number']; ?></td>
            <td><?php echo $row['rank']; ?></td>
            <td><?php echo $row['person_name']; ?></td>
            <td><?php echo $row['branch_trade']; ?></td>
          </tr>
        <?php $serNo++; }?>
      </table>
  </div>
</div>
        

          
     </div>
    <script src="../js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>