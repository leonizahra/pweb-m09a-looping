<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09b</title>
</head>
<body>
    <h2>Mesin Pencari Faktor Bilangan</h2>

    <!-- TODO 1: Tambahkan atribut form ini sehingga data dikirim ke file ini dengan method POST -->
    <form action="index2.php"  method="post">
        
        Bilangan
        <!-- TODO 2: Tambahkan input berupa text bernama `bilangan` -->
        <input type="text" name="bilangan">
        <button type="submit" name="Send</button>
    </form>
                                    
    <?php
        //TODO 3 : Lakukan pencarian faktor bilangan disini dan tampilkan 
    if(isset($_POST['Send){
        $first=$_POST['bilangan'];
        $c=1;
        echo "Faktor $first : ";
    while($c<$first){
        if($first%$c==0){
           $k=$c;
           echo "$k ";
            }
           $c++;
            }
           echo "$first";
            }
    ?>
</body>
</html>
