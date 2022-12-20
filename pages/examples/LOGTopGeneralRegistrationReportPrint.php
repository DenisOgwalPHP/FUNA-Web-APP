<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Funa | Shop Registration Registration</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

  
  </head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> FUNA, Inc.
              <small class="pull-right">Date: <?php echo"". date("Y/m/d");?></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row">
       <h3 align="center">A Full registration List For Shops</h3>
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
             <table class="table table-striped">
              <thead>
                <tr>
                <th style="width: 10px">#</th>
                 <th>Date</th>
                  <th>Shop Name</th>
                  <th>Region</th>
                </tr>
              </thead>
              <tbody>
               <?php
require_once('../../connect/connect.php');
$sales9 ="SELECT Date,ShopName,Region FROM `shopmapping`";
$result9=mysqli_query($link,$sales9);
$counter5=1;
while($row9=mysqli_fetch_assoc($result9)){
	
                    echo" <tr>";
                     echo "<td>".$counter5."</td>";
                     echo  "<td>".$row9['Date']."</td>";
                     echo  "<td>".$row9['ShopName']."</td>";
					 echo  "<td>".$row9['Region']."</td>";
                   echo" </tr>" ;
				   $counter5++;
}
					?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Total Shops No.</th>
                        <th> <?php $Actual=$counter5-1; echo"".$Actual; ?></th>
                      </tr>
                    </tfoot>
                  </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

       
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>