<?php
session_start();
if($_SESSION){
  header("Location: main/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>POS - TWNC</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  <script type="text/javascript" src="/js/lib/dummy.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">


  <link rel="stylesheet" type="text/css" href="main/dist/css/adminlte.min.css">-->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="main/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

  <style id="compiled-css" type="text/css">
      :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  cursor: text;
  /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

    /* EOS */
  </style>

  <script id="insert"></script>


</head>
<body>
    <div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row login">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4" align="center">Kios AGP-TWNC</h3>
  <?php
     //Fungsi untuk mencegah inputan karakter yang tidak sesuai
     function input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      session_start();
      include "koneksi.php";
      $username = input($_POST["username"]);
      $p = input(md5($_POST["password"]));

      $sql = "select * from twnc_users where username='".$username."' and password='".$p."' limit 1";
      $hasil = mysqli_query ($kon,$sql);
      $jumlah = mysqli_num_rows($hasil);

      if ($jumlah>0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["nama"]=$row["nama"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["level"]=$row["level"];
    
    
        if ($_SESSION["level"]=$row["level"]==1)
        {
          header("Location:main/");
        } else if ($_SESSION["level"]=$row["level"]==2)
        {
          header("Location:main/");
        }else if ($_SESSION["level"]=$row["level"]==3){
          header("Location:main/");
        }
    
        
      }else {
        echo "<div class='alert alert-danger'>
        <strong>Error!</strong> Username dan password salah. 
        </div>";
      }

    }
  
  ?>

              <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <div class="form-label-group">
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                  <label for="username">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
                  <label for="inputPassword">Password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <!--<div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>-->
                  <div align="center" style="padding-top: 70px;"><strong>Point Of Sales</strong><br>CV. Gerbang Digital Anak Bangsa</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <script type="text/javascript">//<![CDATA[





  //]]></script>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "efvg9j7a"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>




</body></html>