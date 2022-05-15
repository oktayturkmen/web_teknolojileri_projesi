<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hakkimda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WEB SİTEM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              
              <a class="nav-link" href="hakkimda.html">hakkımda</a>
              <a class="nav-link" href="sehrim.html">şehrim</a>
              <a class="nav-link" href="mirasimiz.html">mirasimiz<a>
              <a class="nav-link" href="ozgecmis.html">özgeçmiş</a>
              <a class="nav-link" href="iletisim.html">iletisim</a>
              <a class="nav-link" href="login.html">login</a>
              
            </div>
          </div>
        </div>
      </nav>
      <main>
        <div class="container">
    
    

            <?php

                if(isset($_POST['submit']))
                {
                    $user = $_POST['adi'];
                    $sifre = $_POST['sifre'];
                    if($user=="oktay@sakarya.edu.tr" && $sifre=="12345")
                        echo "Başarılı hoşgeldiniz $user ";

                    else
                    {
                        echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "Lütfen tekrar giriş yapın !";
			            header("Refresh: 1; url=login.html");
                    }

                }

    
            ?>
    
        </div>   
            
       </main>   
       <footer class="py-4  bg-dark text-white text-center">
        Web-Teknolojileri-Projesi © oktay türkmen 2022
      </footer>
</body>
</html>        



        