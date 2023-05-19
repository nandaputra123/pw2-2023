<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */


  $m_fruits = [
    ["id" => "201", "name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
    ["id" => "202", "name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
    ["id" => "203", "name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"],
    ["id" => "204", "name" => "Stawberry", "color" => "Merah", "stock" => 50, "price" => 15000, "description" => "Buah yang kaya akan serat dan vitamin C dan menyegarkan"],
    ["id" => "205", "name" => "Durian", "color" => "Kuning", "stock" =>12, "price" => 50000, "description" => "Buah yang sangat enak"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah di Saranjana</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Warna</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          
          

          foreach($m_fruits as $fruit){
            echo '<th>' . $fruit["id"] . '</th>';
            echo '<th>' . $fruit["name"] . '</th>';
            echo '<th>' . $fruit["price"] . '</th>';
            echo '<th>' . $fruit["stock"] . '</th>';
            echo '<th>' . $fruit["color"] . '</th>';
            echo '<th>' . $fruit["description"] . '</th>';
            echo '<tr>';
            
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>