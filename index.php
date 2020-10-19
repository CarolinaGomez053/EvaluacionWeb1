<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto1</title>
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
                <form class="mt-5" action="index.php" method="POST">
                    <h4 class="text-center">Calculadora</h4>
                    <div class="row">
                        <div class="col">
                        <input type="number"  placeholder="numero1" name="numero1">
                        </div>
                        <div class="col">
                        <input type="number"  placeholder="numero2" name="numero2">
                        </div>
                        

                        <select name="operacion"  id="opr">

                        <option value="1">suma</option>
                        <option value="2">resta</option>
                        <option value="3">multiplicacion</option>
                        <option value="4">division</option>
                        
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="envio" value="calcular">Submit</button>


                </form>


                <?php if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])  ):?>

                  <h4> Resultado </h4>
                      
                  <?php 

                                            
                      $numero1 = $_POST["numero1"];
                      $numero2 = $_POST["numero2"];
                      $operacion=$_POST["operacion"];



            
                    /*php if (isset($_POST["envio"])):?>

                   <h4> Resultado </h4>
                       
                   <?php 

                                             
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];
                        $operacion=$_POST["operacion"];*/



                        switch ($operacion){

                            case 1:
                                    $resultado = $numero1 + $numero2;
                                    echo("la suma es ".$resultado);
                        break;  

                            case 2:
                            $resultado = $numero1 - $numero2;
                            echo("la resta es ".$resultado);
                        break;    

                            case 3:
                            $resultado = $numero1 * $numero2;
                            echo("la multiplicacion es ".$resultado);
                        break;     

                            case 4:
                            $resultado = $numero1 / $numero2;
                            echo("la division es ".$resultado);
                        break;     
                        }
                   
      
                   
                   
                   ?>

                    

                    <?php endif ?>




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