<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-brand  bg-dark">
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
            <h3 class="tab-header">Bilgiler</h3>
            <div class="tab">
                <table class="table">
                    <tr>
                        <td>Ad-Soyad</td>

                        <td>
                            <?php
                            echo $_POST["name"];
                            
                            ?>
                        </td>

                    </tr>

                    <tr>
                        <td>E-mail</td>

                        <td>
                            <?php
                            echo $_POST["email"];
                            
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td>cep telefonu</td>

                        <td>
                            <?php
                            echo $_POST["pass"];
                            
                            ?>
                        </td>

                    </tr>
                    
                    
                    
                    <tr>
                        <td>Cinsiyet</td>
                        <td> <?php
                            if($_POST["Cinsiyet"]=="erkek")
                                echo "Erkek";
                            else
                                echo "Kadın";
                            
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>doğum tarihi</td>

                        <td>
                            <?php
                            echo $_POST["myDate"];
                            
                            ?>
                        </td>


                    
                    <tr>
                        <td>Şehir</td>
                        <td>
                            <?php
                               if(isset($_POST["sehir"]))
                                    echo $_POST["sehir"];
       
                            ?>
                        </td>
                    </tr>

                   

                    <tr>
                        <td>Mesaj</td>

                        <td>
                            <?php
                               echo htmlspecialchars($_POST["mesaj"]);

                            
                            ?>
                        </td>

                        

                    </tr>
                </table>
            </div>            
        </div>
    </main>
    
    
    
</body>
</html>