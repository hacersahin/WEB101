<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "100ky";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

//$sql = "INSERT INTO kullanici VALUES('1','mert.ecevit@khas.edu.tr', '123456')";

//if($conn->query($sql) == TRUE){
  //  echo "Yeni kayıt oluşturuldu.";
//}
//else{
   // echo "Hata!". $conn->error; 
//}



$conn->close();
?>






<html>
<head>
    <meta charset="utf-8" />
    <title>100KY Hesap Oluşturma</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/df4ff89c1f.js" crossorigin="anonymous"></script>

    <script>
        function sifreKontrol() {

            var kullanici =
                [(document.getElementById("email").value), (document.getElementById("sifre").value)];

            
            var sifre2 = document.getElementById("reSifre").value;



            var yazi = document.getElementById("sonuc");

            if (kullanici[1] == sifre2) {

                yazi.innerHTML = "Hesap Oluşturuldu!";
                yazi.style.color = "green";

                sessionStorage.setItem("user", kullanici);

            }
            else {
                yazi.innerHTML = "Şifreler Eşleşmiyor.";
                yazi.style.color = "red";
            }
        }
    </script>

</head>
<body>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="bootstrap_exp_site.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="fa-solid fa-compass-drafting fa-2xl"></i>

                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="bootstrap_exp_site.html" class="nav-link px-2 text-secondary">Ana Sayfa</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Eğitimler</a></li>
                    <li><a href="bootstrap_form.html" class="nav-link px-2 text-white">Hemen Başvur</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">S.S.S.</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Hakkımızda</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Ara..." aria-label="Search">
                </form>

                <div class="text-end">
                    <a href="signin_page.html"><button type="button" class="btn  btn-outline-light me-2">Giriş</button></a>
                    <button type="button" class="btn btn-warning">Kayıt Ol</button>
                </div>
            </div>
        </div>
    </header>

    <hr />
    <div class="row justify-content-center">
        <div class="col-4">

            <form name="kayit_formu" action="form.php" method="post">
                <i class="fa-solid fa-pen-nib fa-4x"></i>
                <h1 class="h3 mb-3 fw-normal">Hesap Oluşturma</h1>

                <div class="form-floating py-2">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email adresi</label>
                </div>
                <div class="form-floating py-2">
                    <input type="password" class="form-control" name="sifre" id="sifre" placeholder="Şifrenizi Giriniz">
                    <label for="floatingPassword">Şifrenizi Giriniz</label>
                </div>
                <div class="form-floating py-2">
                    <input type="password" class="form-control" name="sifre2" id="reSifre" placeholder="Tekrar Şifrenizi Giriniz">
                    <label for="floatingPassword">Tekrar Şifrenizi Giriniz</label>
                </div>

                <p id="sonuc"></p>
                <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="">Hesap Oluştur</button>

            </form>
            

        </div>
    </div>
    


    <hr />
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-4 mb-3">
                    <h5>Menü</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="bootstrap_exp_site.html" class="nav-link p-0 text-muted">Ana Sayfa</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Eğitimler</a></li>
                        <li class="nav-item mb-2"><a href="bootstrap_form.html" class="nav-link p-0 text-muted">Hemen Başvur</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">S.S.S.</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hakkımızda</a></li>
                    </ul>
                </div>





                <div class="col-8 mb-3">
                    <form>
                        <h5>Size ulaşmamızı ister misiniz?</h5>
                        <p>Mail adresinizi bizimle paylaşarak size ulaşmamız için istek oluşturabilirsiniz.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button" style="width: 120px">Bana Ulaş</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2023 100KY, Tüm hakları saklıdır.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter" /></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram" /></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook" /></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>





</body>

</html>