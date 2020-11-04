 
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <title>ayu ekayanti</title>
</head>
<body>
<a href="index.php">Halaman Utama</a>
    <table>
        
    <tr>
            <td>Mean x : </td>
            <td></td>
            <td>
            <?php 
            
            $bagi = count($_POST['nilaix']);
            $jumlah = array_sum($_POST['nilaix']);
            $hasil = $jumlah/$bagi;

            echo $hasil;

           
            ?>
            </td>
        </tr>
        <tr>
            <td>Mean y : </td>
            <td></td>
            <td>
            <?php 
            
            $bagi = count($_POST['nilaiy']);
            $jumlah = array_sum($_POST['nilaiy']);
            $hasil = $jumlah/$bagi;

            echo $hasil;

           
            ?>
            </td>
        </tr>


            <tr>
            <td>Nilai Maxsimal x : </td>
            <td></td>
            <td>
            <?php 
            
           
            $max = max ($_POST['nilaix']);
          
            echo $max ;
          
            ?>
            </td>
        </tr>
          <tr>
            <td>Nilai Maxsimal y : </td>
            <td></td>
            <td>
            <?php 
            
           
            $max = max ($_POST['nilaiy']);
          
            echo $max ;
          
            ?>
            </td>
        </tr>
          <tr>
            <td>Nilai Minimal x : </td>
            <td></td>
            <td>
            <?php 
            
           
            $min = min($_POST['nilaix']);
          
            echo $min ;

           
            ?>
            </td>
        </tr>
       
     </tr>
      <tr>
            <td>Nilai Minimal y : </td>
            <td></td>
            <td>
            <?php 
            
           
            $min = min($_POST['nilaiy']);
          
            echo $min ;

           
            ?>
            </td>
        </tr>
       
        <tr>
            <td>Deviasi x : </td>
           
            <td></td>
            <td>
            <?php
            function Hina ($baksi){
            $nilaix=$_POST['nilaix']; 
            $bagi = count($nilaix);
            $jumlah = array_sum($_POST['nilaix']);
            $rata= $jumlah/$bagi;
            $datx = count($nilaix)-1;


            $a = $_POST['nilaix']; 
            $var = 0.0;

            foreach($nilaix as$i) 
               {
                  $var += pow(($i - $rata), 2);
               }
               return (float)sqrt($var/$datx);
            }

            $baksi = $_POST['nilaix']; 
            print_r (Hina($baksi));



            ?>


            </td>
            <tr>
            <td>Deviasi y : </td>
           
            <td></td>
            <td>
            <?php
            function Hit ($baksi){
            $nilaiy=$_POST['nilaiy']; 
            $bagi = count($nilaiy);
            $jumlah = array_sum($_POST['nilaiy']);
            $rata= $jumlah/$bagi;
            $daty = count($nilaiy)-1;


            $a = $_POST['nilaiy']; 
            $var = 0.0;

            foreach($nilaiy as$i) 
               {
                  $var += pow(($i - $rata), 2);
               }
               return (float)sqrt($var/$daty);
            }

            $baksi = $_POST['nilaiy']; 
            print_r (Hit($baksi));



            ?>


            </td>
        </tr>

        

      

    </table>
</body>
</html>