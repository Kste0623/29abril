<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora k$te</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading " class = "color_fondo">
                        <form action="" method="GET">
                            <div class="form-group">
                                <label for="">Calculadora k$te
                                </label>
                                <div class="row">
                                    <div class="cold-md-4">
                                        <label for="">numero1</label>
                                        <input type="number" class= "form-control" name= "nume1" required>                            
                                    </div>

                                    <div class="cold-md-4">
                                        <label for="">numero2</label>
                                        <input type="number"class="form-control" name="nume2" required>                            
                                    </div>                                    

                                    <div class="col-md-4">
                                       <label for="">Operacion</label>
                                       <select name="operacion" id="operacion" class="form-control" required >
                                          <option value="seleccionar">seleccionar</option>
                                          <option value="sumar">+</option>
                                          <option value="restar">-</option>
                                          <option value="dividir">/</option>
                                          <option value="multiplicar">*</option>
                                      </select>                                      
                                   </div> 
                                   <button type="submit" class="btn btn-info pull-right">Ejecutar</button>                                                                   
                                </div>                                                                                       
                            </div>                                                                                                         
                        </form>                         
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
                            <?php
                            $numero1 = @$_GET['nume1'];
                            $numero2 = @$_GET['nume2'];
                            $operacion = @$_GET['operacion'];
                            $resultado = 0;

                            switch ($operacion)
                            {
                                case "sumar":
                                    $resultado=$numero1+$numero2;
                                 break;
                                 case "restar":
                                    $resultado=$numero1-$numero2;
                                 break;
                                 case "multiplicar":
                                    $resultado=$numero1*$numero2;
                                 break;
                                 case "dividir":
                                IF($numero2==0){
                                    echo "¡Error no es posible división por 0!";
                                }else{
                                        $resultado=$numero1/$numero2;
                                    }
                            
                                 break;

                            }
                            ?>
                            El resultado de <?php print($operacion)?> es: <strong><?php print($resultado) ?></strong>
        </div>
    </div>                                                         
</body>
</html>