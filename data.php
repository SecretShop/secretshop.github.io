<table>
  <tr>
    <th>Program ID</th>
    <th>Program Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Sales</th>
    <th>Developer</th>
  </tr>

<?php
  mysql_connect("localhost:3306","zach","");
  @mysql_select_db("test") or die( "Unable to select database");

 // $query="CREATE TABLE `test`.`Programs` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , PRIMARY KEY (`id`) ) ENGINE = InnoDB";
  // mysql_query($query);


  //$query = "INSERT INTO program VALUES ('', 'Minor Theft Bicycle', 'Live the life of a two-bit thief who obsesses about pedal powered transportation', '59.99', '39.99','Popstar Games')";
  //mysql_query($query);

  $query="SELECT * FROM program";
  $result=mysql_query($query);
  $num=mysql_numrows($result);

  $i=0;
  while ($i < $num) {
    $Prog_Id=mysql_result($result,$i,"Prog_Id");
    $Prog_Name=mysql_result($result,$i,"Prog_Name");
    $Desc=mysql_result($result,$i,"Desc");
    $Price=mysql_result($result,$i,"Price");
    $Sales=mysql_result($result,$i,"Sales");
    $Dev_Name=mysql_result($result,$i,"Dev_Name");
    
    echo "<tr><td>$Prog_Id</td>";
    echo "<td>$Prog_Name</td>";
    echo "<td>$Desc</td>";
    echo "<td>$Price</td>";
    echo "<td>$Sales</td>";
    echo "<td>$Dev_Name</td></tr>";
    $i++;
  }
    
  mysql_close();
?>
  
</table>

<!--

USER DATABASE QUERIES

 $query="SELECT * FROM user";
  $result=mysql_query($query);
  $num=mysql_numrows($result);

  $i=0;
  while ($i < $num) {
    $Acct_Name=mysql_result($result,$i,"Acct_Name");
    $Date_Joined=mysql_result($result,$i,"Date_Joined");
    $Password=mysql_result($result,$i,"Password");
    $Email=mysql_result($result,$i,"Email");
    $Name=mysql_result($result,$i,"Name");
    $Balance=mysql_result($result,$i,"Balance");
    
    echo "<tr><td>$Acct_Name</td>";
    echo "<td>$Date_Joined</td>";
    echo "<td>$Password</td>";
    echo "<td>$Email</td>";
    echo "<td>$Name</td>";
    echo "<td>$Balance</td></tr>";
    $i++;
  }
            