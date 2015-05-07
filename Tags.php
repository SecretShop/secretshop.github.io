<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' href='style.css'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <script>
    $(function(){
      $("#nav_top").load("templates/nav_top.html");
      $("#footer").load("templates/footer.html");
    });
  </script>
</head>

<body>
  <div class="jumbotron">
    <div class="container"> 
      <h1 class="text-center"> Title Goes Here</h1>
    </div>
  </div>

  
  <div class="container"> 
    <div class="row text-center">
      <div class="col-sm-2"> </div>
      <div class="col-sm-8"> 
        <a class="btn btn-default btn-block" href="index.php" role="button">Back to Program Store</a>
      </div>
      <div class="col-sm-2"> </div>
    </div> 
    
    <br>
    
    <?php
      mysql_connect("localhost:3306","zach","");
      @mysql_select_db("test") or die( "Unable to select database");
      $query="SELECT * FROM Program";
      $result=mysql_query($query);
      $num=mysql_numrows($result);
      mysql_close();
    ?>
    
    <div class="row"> 
      <div class="col-md-12">
        <table class="table table-striped">
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sales</th>
            <th>Developer</th>
          </tr>
          <?php
            $i=0;
            while ($i < $num) {
              $Prog_Name=mysql_result($result,$i,"Prog_Name");
              $Desc=mysql_result($result,$i,"Desc");
              $Price=mysql_result($result,$i,"Price");
              $Sales=mysql_result($result,$i,"Sales");
              $Dev_Name=mysql_result($result,$i,"Dev_Name");

              echo "<td><a>$Prog_Name </a></td>";
              echo "<td>$Desc</td>";
              echo "<td>$Price</td>";
              echo "<td>$Sales</td>";
              echo "<td>$Dev_Name</td></tr>";
              echo "<td><a data-toggle='modal' data-target='#PopUp'>Sick ass Title</a></td>";
              $i++;
            }
          ?>
          <tr>
            <td><a data-toggle="modal" data-target="#PopUp">Sick ass Title</a></td>
            <td>~~~~~~~~~~~~</td>
            <td>~~~~~~~~~~~~</td>
            <td>~/10</td>
          </tr>

        </table>   
        
        <!-- Modal -->
        <div class="modal fade" id="PopUp" tabindex="-1" role="dialog" aria-labelledby="PopUp" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">TITLE OF PROGRAM</h4>
              </div>
              <div class="modal-body">
                <p> Lots of good information here </p>
              </div>
            </div>
          </div>
        </div>  
        
        
      </div>
    </div>
    
  </div>
</body>
</html>