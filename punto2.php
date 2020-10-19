<?php
                   
                    
                    
                    if (isset($_POST["peso"]) && isset($_POST["altura"]) && is_numeric($_POST["peso"]) && is_numeric($_POST["altura"])  )
                      {
                        $peso = $_POST["peso"];
                        $altura = $_POST["altura"];
                        $imc =  $peso / ($altura*$altura);
                        $imc = round($imc,2);
                        
                                        

                        if ($imc  <18.5) {
                         $resultado= " Peso insuficiente";
                         $color="orange";
                        }
                    
                    
                        if ($imc >= 18.5 && $imc <= 24.9 ) {
                          $resultado= " Peso normal";
                          $color="green";
                    
                        }

                        if ($imc >= 25 && $imc <= 26.9) {
                          $resultado= " Sobrepeso grado I";
                          $color="yellow";
                        }
                    
                    
                        if ($imc >= 27 && $imc <= 29.9 ) {
                            
                          $resultado= " Sobrepeso grado II";
                          $color="orange";
                    
                        }

                        
                        if ($imc >= 30 && $imc <= 34.9 ) {
                          $resultado= " Obesidad tipo I";
                          $color="orange";
                  
                      }
                    
                    
                       if ($imc >= 35 && $imc <= 39.9 ) {
                            
                            $resultado= " Obesidad tipo II";
                            $color="red";
                    
                        }

                        
                        if ($imc >= 40 && $imc <= 49.9 ) {
                          $resultado= " Obesidad tipo III";
                            $color="red";
                  
                      }

                      
                      if ($imc >= 50 ) {
                        $resultado= " Obesidad tipo IV";
                            $color="red";
                  
                
                    }
                   
                    
                                              
                      }

                      

                     
                    ?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Punto1 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="punto2.php">Punto2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="punto3.php">Punto3</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="punto4.php">Punto4</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="punto5.php">Punto5</a>
              </li>        
          </ul>
          
        </div>
      </nav>
    </header>

    <main>
      <div class="container" style="max-width: 65%;" >

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#"><img src="images/imagen3.png" alt=""></a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              
                <li class="nav-item active">
                
                  <a class="nav-link" href="#">Planes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sedes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Blog</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>




           <div class = "row">            
              <div class="card bg-dark text-white" style="max-width: 100%;">

                <div class="row">
                  <div class="col-md-4">
                    <img src="images/image1.jpeg" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">


                   
                      <div class="row">
                   
                      <div class="col-6">
                            <form class="mt-5" action="punto2.php" method="POST">
                                    <h4 class="text-center">Calcula tu Indice de Masa Corporal</h4> <br>
                                    <div class="row">
                                        <div class="col">
                                        <input type="number" step=".01" class="form-control" placeholder="Peso kg" name="peso" require>
                                        </div>
                                        <div class="col">
                                        <input type="number" step=".01" class="form-control" placeholder="Altura mt" name="altura" require>
                                        </div>                 
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5" name="envio" value="calcular">Calcular</button>
                                   
                              
                              </form>
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-6">

                          <?php if (isset($imc)){?>
                          <?php echo("Tu IMC es de ".$imc); ?>
                          <div style= "color: <?php echo $color;?>"><h3>  <?php echo $resultado; ?></h3></div>

                          <?php } ?>
                      </div>
                      
                  </div>
                </div>
             </div>
            </div>
          </div>
        
         
                    
                                                          
          
               
      </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>