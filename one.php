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

      
    <form action="proses1.php" method="post">
    <center>
    <br>
                <table>
    <tr>
                    <th style="text-align:left"></th>
                    <td></td>
                    <td>
                        1. Pengulangan While Ganjil<br>
                        2. Pengulangan While Genap<br>
                        3. Pengulangan While Berurutan<br>
                        4. Pengulangan Do While Berurutan<br>
                        5. Pengulangan Do While Ganjil<br>
                        6. Pengulangan Do While Genap<br>
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
    </center>
    
</form>


</body>
</html>
