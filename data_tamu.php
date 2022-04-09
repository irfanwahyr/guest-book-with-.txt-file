<!-- PHP UNTUK MEMPROSES DATA TAMU -->
<!DOCTYPE html>
<html>
<head>
    <title>MENU UTAMA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        #tamu {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #tamu td, #tamu th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #tamu tr:nth-child(even){
                background-color: #f2f2f2;
            }
            #tamu tr:hover {
                background-color: #ddd;
            }
            #tamu th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
    </style>
</head>
<body>
<?php
    $nam=$_POST['nam'];
    $ema=$_POST['ema'];
    $desti=$_POST['desti'];
    $pes=$_POST['pes'];
?>
<?php
    $file = fopen("data_tamu.txt","a");

    fwrite($file, "\nnama : ");
    fwrite($file, $nam . "\n");
    fwrite($file,"\nemail : ");
    fwrite($file, $ema . "\n");
    fwrite($file, "\ndestinasi : ");
    fwrite($file, $desti . "\n");
    fwrite($file, "\npesan : ");
    fwrite($file, $pes . "\n");
    fclose($file);

    echo "<div class='alert alert-success' role='alert'>
    Respon Anda Telah Kami Catat. <a href='wisataPati.html'><button class='btn-primary'>Kembali</button></a>
  </div>"
?>
<?php
                    if (isset($_POST['nam'])){
                        $nam=$_POST['nam'];
                        $ema=$_POST['ema'];
                        $desti=$_POST['desti'];
                        $pes=$_POST['pes'];

                        echo "Daftar Tamu";
                        echo "<table id='tamu'>";
                        echo "<tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Destinasi</th>
                                <th>Pesan</th>";
                        echo "<tr>
                                <td>1.</td>
                                <td>$nam</td>
                                <td>$ema</td>
                                <td>$desti</td>
                                <td>$pes</td>";
                    }
                ?>
</body>
</html>