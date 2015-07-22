<!DOCTYPE html>
<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css" rel="stylesheet">
  <link rel='stylesheet' href='style.css'/>
  <script>
    $(function(){
      $("#nav_top").load("templates/nav_top.html");
      $("#footer").load("templates/footer.html");
    });
  </script>
</head>

<body>
  
    <?php
      $servername = "orahosted01.srv.mst.edu";
      $username = "zahb83@scsp";
      $password = "Waaagh2400";

      // Create connection
      $conn = new mysqli($servername, $username, $password);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      echo "Connected successfully";
    ?>
  
  
  
  <div class="jumbotron">
    <div class="container"> 
      <h1 class="text-center"> Title Goes Here</h1>
    </div>
  </div>

  
  <div class="container"> 
    <div class="row text-center">
      <div class="col-sm-1"> </div>
      <div class="col-sm-4"> 
        <a class="btn btn-primary btn-block" href="Library.html" role="button">Temp Library</a>
      </div>
      <div class="col-sm-2"> </div>
      <div class="col-sm-4">      
        <a class="btn btn-warning btn-block" href="Tags.html" role="button">Temp Tags</a>
      </div>
      <div class="col-sm-1"> </div>
    </div> 
    
    <br>
    
    <div class="row"> 
      <div class="col-md-12">
        <div class="panel panel-default"> 
          <div class="panel-heading text-center"><h2>Who are we?</h2></div>
          <div class="panel-body"> blah blah super cool, blah blah almighty, blah blah the best, blah blah pinical of design, blah blah super cool, blah blah almighty, blah blah the best, blah blah pinical of design, blah blah super cool, blah blah almighty, blah blah the best, blah blah pinical of design, blah blah super cool, </div>
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
                <th>Tags</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Blah</td>
                <td>Blah</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Blah</td>
                <td>Blah</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Blah</td>
                <td>Blah</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Blah</td>
                <td>Blah</td>
              </tr>
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