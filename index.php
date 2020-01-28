<?php
    $con = new mysqli('localhost', 'root', '', 'personal');

    $sql = "SELECT * from datos";

    $res = $con->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            
            <h1>Ejemplo</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
            </button>

        <div class="table-responsive">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($res as $key) {   
                ?>
                        <tr>
                            <th scope="row"><?php echo $key['id'];?></th>
                            <td><?php echo $key['nombre'];?></td>
                            <td><?php echo $key['apellido'];?></td>
                            <td><?php echo $key['edad'];?></td>
                            <td><a href="#" class="modificar" id="<?php echo $key['id'];?>">Modificar</a></td>
                        </tr>

                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>



<!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formulario">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre"  placeholder="Nombre" id="nombre">
                            </div>
                            <div class="form-group">
                            <label for="nombre">Apellido</label>
                                <input type="text" class="form-control" id="apellido"  placeholder="Apellido" id="apellido">
                            </div>
                            <div class="form-group form-check">
                                <label for="nombre">Edad</label>
                                <input type="text" class="form-control" id="edad"  placeholder="Edad" id="edad">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div id="res">

        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="main.js"></script>

</body>
</html>