<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PRAK105 </title>
    </head>
<style>
    table, td {
    border:1px solid black;
    width : 300px;
    }
    th{
    border:1px solid black; 
    background: red;
    height : 50px;
    font-size : 22px;
    }
</style>
<body>
<?php
$tipe = array("model 1"=>"Samsung Galaxy S22", "model 2"=>"Samsung Galaxy S22+", "model 3"=>"Samsung Galaxy A03", "model 4"=>"Samsung Galaxy Xcover 5"); 
?>    
<table>
  <tr>
    <th> Daftar Smartphone Samsung </th>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe["model 1"] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe["model 2"] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe["model 3"] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe["model 4"] ?>
    </td>
  </tr>
</table>
</body>
</html>