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
    
    <div class="row"> 
      <div class="col-md-12">
        <table class="table table-striped">
          <tr>
            <th>Start</th>
            <th>Title</th>
            <th>Tags</th>
            <th>Time Used</th>
            <th>Review</th>
          </tr>
          <tr>
            <td><a class="btn btn-success btn-xs" href="#" role="button" id="btn-start">-----></a></td>
            <td>~~~~~~~~~~~~</td>
            <td>~~~~~~~~~~~~</td>
            <td>Hrs: 00.00</td>
            <td class="success">DONE</td>
          </tr>
          <tr>
            <td><a class="btn btn-success btn-xs" href="#" role="button" id="btn-start">-----></a></td>
            <td>~~~~~~~~~~~~</td>
            <td>~~~~~~~~~~~~</td>
            <td>Hrs: 00.00</td>
            <td class="danger">Write One</td>
          </tr>
          <tr>
            <td><a class="btn btn-success btn-xs" href="#" role="button" id="btn-start">-----></a></td>
            <td>~~~~~~~~~~~~</td>
            <td>~~~~~~~~~~~~</td>
            <td>Hrs: 00.00</td>
            <td class="success">DONE</td>
          </tr>
          <tr>
            <td><a class="btn btn-success btn-xs" href="#" role="button" id="btn-start">-----></a></td>
            <td>~~~~~~~~~~~~</td>
            <td>~~~~~~~~~~~~</td>
            <td>Hrs: 00.00</td>
            <td class="danger">Write One</td>
          </tr>

        </table>        
      </div>
    </div>
    
  </div>
</body>
</html>