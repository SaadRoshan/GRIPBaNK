<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Customers</title>
</head>
<body>
    <section id="customers">   
    <?php include'navbar.php'?>
    <h1>Our Customers</h1>
    <?php include 'config.php';
$sql="SELECT * FROM customers";
$result=$conn->query($sql);
?>
<table>
    <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Account Balance</th>
        <th>Operation</th>
    <tr>
  <?php
  if($result->num_rows>0)
  {
      //output data of each row
      while($row=$result->fetch_assoc()){
   ?>
   <tr>
       <td><?php echo $row["Sr.No"];?></td>
       <td><?php echo $row["Name"];?></td>
       <td><?php echo $row["E-Mail ID"];?></td>
       <td><?php echo $row["Account Balance"];?></td>
       <td><a href="transfer.php"><button>Transfer</button></a></td>
   </tr>
   <?php
      } ?>
</table>
</section>
 <?php }
  ?>
    
</body>
</html>