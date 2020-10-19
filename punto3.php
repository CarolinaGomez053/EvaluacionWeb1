<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto3</title>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
    
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                <form class="mt-5" action="punto3.php" method="POST">
                    <h4 class="text-center"> Spring Step</h4>
                    <select name="Referencia" class="form-control" id="ref">
                    <option>Zapatos tipo 1 Dama</option>
                    <option>Zapatos tipo 2 Caballero</option>
                    <option>Zapatos tipo 3 Niño</option>
                    <option>Zapatos tipo 4 Niña</option>
                    </select>
                    <div class="row">
                        <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
                        </div>
                        <div class="col">
                        <input type="number" class="form-control" placeholder="Valor Unitario" name="valorUnitario">
                        </div>
                   </div>
                    <button type="submit" class="btn btn-primary mt-5" name="envio" value="calcular">Submit</button>


                </form>

                <?php if (isset($_POST["cantidad"]) && isset($_POST["valorUnitario"]) && is_numeric($_POST["cantidad"]) && is_numeric($_POST["valorUnitario"])):?> 
               

                  
                  <?php

                  $cantidad = $_POST["cantidad"];
                  $valorUnitario = $_POST["valorUnitario"];
                  
                    if ($cantidad <3) {
                      $valorTotal =  (($cantidad*$valorUnitario));
                      echo("Valor total: $".$valorTotal);
                    }


                      if ($cantidad == 3) {
                        $valorTotal =  (($cantidad*$valorUnitario) * 0.9);
                        echo("Valor total: $".$valorTotal);
                      }
                      
                      if ($cantidad >3 && $cantidad <= 8) {
                        $valorTotal =  (($cantidad*$valorUnitario) * 0.8);
                        echo("Valor total: $".$valorTotal);
                      }

                      
                      if ($cantidad >8) {
                        $valorTotal =  (($cantidad*$valorUnitario) * 0.5);
                        echo("Valor total: $".$valorTotal);
                      }

                  ?>


                  <?php endif ?></h4>




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