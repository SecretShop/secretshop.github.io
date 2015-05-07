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
  <a class="btn btn-warning btn-block" href="data.php" role="button">INSERT DATA</a>
  
  <div class="jumbotron">
    <div class="container"> 
      <h1 class="text-center">Caveman Software</h1>
    </div>
  </div>

  <div class="container"> 
    <div class="row text-center">
      <div class="col-sm-1"> </div>
      <div class="col-sm-4"> 
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#Lib_SignIn">Temp Library</button>
        
        <!-- Modal -->
        <div class="modal fade" id="Lib_SignIn" tabindex="-1" role="dialog" aria-labelledby="Lib_SignIn" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please Sign in Below</h4>
              </div>
              <div class="modal-body">
                <form action="Library.php" method="get">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" id="username" placeholder="Enter username" name="name">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>  
        
      </div>
      <div class="col-sm-2"> </div>
      <div class="col-sm-4">      
        <a class="btn btn-warning btn-block" href="Tags.php" role="button" data-target="signIn">Temp Tags</a>
        
      </div>
      <div class="col-sm-1"> </div>
    </div> 
    
    <br>
    
    <div class="row"> 
      <div class="col-md-12">
        <div class="panel panel-default"> 
          <div class="panel-heading text-center"><h2>Who are we?</h2></div>
          <div class="panel-body">
            <h3>Founded before the dawn of time, Caveman software group is your rock for high quality software in the modern age.</h3>
            <?php
              mysql_connect("localhost:3306","zach","");
              @mysql_select_db("test") or die( "Unable to select database");
          
             // $query="CREATE TABLE `test`.`Programs` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`) ) ENGINE = InnoDB";
              // mysql_query($query);
              
            
              //$query = "INSERT INTO Programs VALUES ('','Hue Hue')";
              //mysql_query($query);
              $query="SELECT * FROM Program";
              $result=mysql_query($query);
              $num=mysql_numrows($result);
              mysql_close();
            ?>
            
        </div>
        
      </div>
    </div>
    
  
    
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="text-center">Top Selling Programs</h3></div>
          <div class="panel-body">
            <table class="table table-condensed">
              <tr>
                <th>#</th>
                <th>Program Name</th>
                <th>Price</th>
              </tr>
              <?php
                $i=0;
                while ($i < $num) {
                  $id=mysql_result($result,$i,"Prog_Id");
                  $name=mysql_result($result,$i,"Prog_Name");
                  $price=mysql_result($result,$i,"Price");
                    echo "<tr><td>$id</td> <td>$name</td> <td>$price</td></tr>";
                  $i++;
                }
              ?>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="text-center">Search our Programs</h3></div>
          <div class="panel-body">
            <!-- FOR SHOW -->
            <div class="row"> 
                <div class="col-sm-6"> 
                  <a class="btn btn-default btn-block" href="#" role="button" Style="margin-top:5px;">Tag</a>
                </div>
                <div class="col-sm-6">      
                  <a class="btn btn-default btn-block" href="#" role="button" Style="margin-top:5px;">Tag</a>
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-6"> 
                  <a class="btn btn-default btn-block" href="#" role="button">Tag</a>
                </div>
                <div class="col-sm-6">      
                  <a class="btn btn-default btn-block" href="#" role="button">Tag</a>
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-6"> 
                  <a class="btn btn-default btn-block" href="#" role="button">Tag</a>
                </div>
                <div class="col-sm-6">      
                  <a class="btn btn-default btn-block" href="#" role="button">Tag</a>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
</body>
</html>