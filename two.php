<!doctype html>
<html lang="en">
    <style>
        .box {
            width: fit-content;
            margin: 0 auto;
        }  
    </style>
  <head>
      <body>
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="p.html">Wildan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/Wildan/Soal2/one.php">Soal 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/Wildan/Soal2/two.php">Soal 2</a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" data-bs-toggle="" data-bs-target=" " type="submit">Search</button>
                <button class="btn btn-primary" type="button" style="margin-left: 20px;" data-bs-toggle="modal" data-bs-target="#modalLogin" aria-expanded="false" aria-controls="collapseExample">
                  Login
                </button>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- Modal -->
      <div class="modal" tabindex="-1" id="modalLogin">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Clear</button>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Login</button>
            </div>
          </div>
        </div>
      </div>

      
<form action="" Method="post">
            <center>
                <br><br><br>
                <h4>Form Pengulangan</h4>
                <br>
                <table>
                <tr>
                    <th style="text-align:left"></th>
                    <td></td>
                    <td>
                        1. Segitiga Siku Siku<br>
                        2. Segitiga Sama Kaki Terbalik<br>
                        3. Segitiga Kebalik Dari No 1
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Pilih </th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="pilih">
                    </td>
                </tr>
                <tr>
                    <th style = "text-align: left">Masukkan Angka</th>
                    <td>:</td>
                    <td>
                        <input type="Number" name="angka">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td><button type="submit" name="Simpan">KIRIM</button></td>
                </tr>
            
            </table>
        </form>
        <br>
</center>
<div class="box">
<?php
if (isset($_POST['Simpan'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];
    if($pilih == 1){
        echo "Segitiga Siku Siku <br>";
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i ; $j++) {
                echo $j . " ";
            }
            echo '<br>';
        }
    
	}
 else if($pilih == 2){
     echo "<center>";
        echo "<br>";
        echo "Segitiga Sama Kaki Terbalik <br>";
        $d=$angka;
        for($a=1; $a<=$angka; $a++){
        for($b=1; $b<=$a; $b++){
            echo " ";
        }
        for($c=1; $c<=$d; $c++){
            echo $c ." ";
        }
        $d--;
        echo "<br>";
        }
        echo "</center>";
	}
    else if($pilih == 3){
        echo "<br>";
        echo "Segitiga Sama Kaki Terbalik dari No 1 <br>";
        for ($i=$angka; $i>=1; $i--){
            for ($j=5; $j>=$i; $j--){
                  echo $j . " ";
             }echo "<br>";
        }
       }
}
?>
</div>
            
            </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>