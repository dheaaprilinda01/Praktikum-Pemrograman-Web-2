<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PRAK104 </title>
    </head>
<style>
    table, th, td {
    border:1px solid black;
    }
</style>
<body>
<?php
$tipe = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"); 
?>    
<table>
  <tr>
    <th> Daftar Smartphone Samsung </th>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe[0] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe[1] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe[2] ?>
    </td>
  </tr>
  <tr>
    <td> 
        <?php echo $tipe[3] ?>
    </td>
  </tr>
</table>
</body>
</html>