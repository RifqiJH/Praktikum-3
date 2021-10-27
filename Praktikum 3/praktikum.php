<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warung</title>
</head>
<body bgcolor="cornsilk">
<center> <h2>WAROENK MAS JOY</h2> </center>
<body>
    <table border="3" align="center">
        <tr style="background-color:pink; color:black;">
            <th>No</th>
            <th>nama barang</th>
            <th>berat (kg)</th>
            <th>berat (g)</th>
            <th>berat (mg)</th>
            <th>berat (l)</th>
            <th>stock</th>
        </tr>
        <?php 
      
      $barang = array('beras','indomie','telor','minyak');
      $berat = array(25,2,2,3);
      $stok = array(5,10,4,0)
      ?>
      
      <?php for($x=0;$x<count($barang);$x++) { ?>  
        
        <tr style="background-color :white;">
          <td ><?php echo $x+1?></td>
          <td> <?php echo $barang[$x]; ?> </td>
          <td> <?php echo $berat[$x]; ?></td>
          <td> <?php echo $berat[$x]*1000; ?></td>
          <td> <?php echo $berat[$x]*1000000; ?></td>
          <td> <?php echo $berat[$x]*0.753; ?></td>

          <?php if($stok[$x] != 0){?>
            <td> <?php echo $stok[$x]; ?></td>
          <?php }else{?>
            <td style="background-color: red; color: white;">kosong</td>
          <?php } ?>
          
        </tr>

      <?php } ?>
        
    </table>
</body>
</html>