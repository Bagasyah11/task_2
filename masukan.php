<!DOCTYPE html>
<html>
    <head>
        <title>Jual Beli</title>

    </head>
    <body>

<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "Realme Narzo" ,
            "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/6/22/f5bba72f-fdbf-4125-a65c-fb38580bf74e.jpg.webp?ect=4g" ,
            "harga" => "Rp1.475.000" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "Xiaomi Redmi Note 10S " ,
            "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/1/26/01ce08d9-32ff-42af-8272-51b036499cd9.png.webp?ect=4g" ,
            "harga" => "Rp2.506.000" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "OPPO A53" ,
            "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/7/11/c3457b62-3fcc-4c6c-bb31-fffecb6b22bc.jpg.webp?ect=4g" ,
            "harga" => "Rp2.099.000" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "OPPO A53" ,
            "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/7/11/c3457b62-3fcc-4c6c-bb31-fffecb6b22bc.jpg.webp?ect=4g" ,
            "harga" => "Rp2.099.000" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "Samsung Galaxy A03s" ,
            "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2021/9/9/f5a879d4-149d-4a45-a09d-78551a2e430b.jpg.webp?ect=4g" ,
            "harga" => "Rp2.099.000" ,
        ),
    ) ;
?>

        <center><h1>Toko Elektronik Bagasyah</h1></center>
    

            <form action="keluaran.html" method="GET">
            <label for="fname">Nama:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" value=""><br><br>

            <label for="nama-barang">Kategori :</label>
            <select id="barang" name="barang">
                <option value="tas">Laptop</option>
            </select>
            <p></p>
            <button type="submit">lihat detail</button>
            </form>  
            <div class="gambar">
       <p><center><h3>Rekomendasi Untuk Anda  : </h3></center><p>
           
        <style>
            .box {
                    border: 1px solid;
                    
            }
            .desain-layout {
                width: 210px;
                margin: 20px;
                
            }
            .gambar {
                display: flex;
            }
            .teks {
                padding: 30px;
            }
        </style>

            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <h3><?= $produk[$i]["nama"] ?></h3>
                    <h4><?= $produk[$i]["harga"] ?></h4>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>

        

    </body>
</html>