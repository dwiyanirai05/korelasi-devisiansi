 <!DOCTYPE html>
<html lang="en">
<head>
        <title>ayu ekayanti</title>
</head>
<body>
<?php

$jum_data = $_POST['jumdata'];
            if ($jum_data>=21) {
              
            }else{
?>
<a href="index.php">Kembali</a>
<form action="output.php" method="post">

<br>
    <table>
        <tr>
            <th>No</th>
            <th>Nilai x</th>
           <th>Nilai y</th>
        </tr>
        <?php
            
            $no = 1;
            for ($i=0; $i < $jum_data; $i++) { 
                ?>
                <tr>
                    <td><?=$no++?></td>
                   
                    <td><input type="number" name="nilaix[]" required></td>
                    <td><input type="number" name="nilaiy[]" required></td>
                </tr>
                <?php
            }
       
        
        ?>
    </table>
    <input type="submit" name="hitung" value="hitung">
</form>
    <?php
            }
            ?>
</body>
</html>
