<?php
include('config.php');
$sql = "SELECT height.Date AS 'Fecha', beds.ID as 'Cama', plants.ID AS 'Plántula', height.Value AS 'Altura', diameter.Value AS 'Diámetro', num_sheets.Value AS 'Número de Hojas', aphidoidea.Value AS 'Áfidos' FROM beds, plants, height, diameter, num_sheets, aphidoidea WHERE plants.ID_Bed = beds.ID && plants.ID = height.ID_Plant && plants.ID = diameter.ID_Plant && plants.ID = num_sheets.ID_Plant && plants.ID = aphidoidea.ID_Plant  LIMIT 10;";
$result = mysqli_query($db,$sql);
echo "Returned rows are: " . mysqli_num_rows($result) . '<br>';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="alertify/css/themes/default.css">
        <link rel="stylesheet" href="alertify/css/alertify.css">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <script src="functions.js"></script>
        <script src="jQuery.js"></script>
        <script src="bootstrap/dist/js/bootstrap.js"></script>
    <title>Variables Agronómicas</title>

</head>

<body>
    <div class="container container-view">
        <div class="row title-view_row">
            <div class="col-10">Sistema de Información para Invernadero Automatizado</div>
        </div>
        <div class="container-fluid body-view">
            <div class="row ">
                <div class="col-10">
                    <form action="" method="get">
                        <label for="calendar">
                            <span>Fecha:</span>
                            <input class="table-opt btn btn-secondary" type="datetime-local" name="fecha" id="">
                        </label>
                        <!-- <label for="calendar">
                            <span>Fecha Final:</span>
                            <input class="table-opt btn btn-secondary" type="datetime-local" name="fecha" id="">
                        </label> -->
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="table-opt btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Número de Cama
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <button class="dropdown-item">1</button>
                                <button class="dropdown-item">2</button>
                                <button class="dropdown-item">3</button>
                                <button class="dropdown-item">4</button>
                                <button class="dropdown-item">5</button>
                                <button class="dropdown-item">6</button>
                            </div>
                            <!-- <button id="btnGroupDrop1" type="button" class="table-opt btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Número de Plántula
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <button class="dropdown-item">1</button>
                                <button class="dropdown-item">2</button>
                                <button class="dropdown-item">3</button>
                                <button class="dropdown-item">4</button>
                                <button class="dropdown-item">49</button>
                                <button class="dropdown-item">50</button>
                            </div> -->
                        </div>
                        <input type="submit" class="table-opt btn btn-secondary" value="Buscar">
                    </form>


                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="data-table table-responsive table-hover table-striped">
                        <table class="table">
                            <caption>Variables Agrícolas</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">N° Cama</th>
                                    <th scope="col">N° Plántula</th>
                                    <th scope="col">Altura</th>
                                    <th scope="col">Diámetro</th>
                                    <th scope="col">N° Hojas</th>
                                    <th scope="col">N° Áfidos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $value) { ?>
                                <tr data-toggle="modal" data-target="#opciones">
                                    <th scope="row"><?php echo $value['Fecha']; ?></th>
                                    <td><?php echo $value['Cama']; ?></td>
                                    <td><?php echo $value['Plántula']; ?></td>
                                    <td><?php echo $value['Altura'] . 'cm'; ?></td>
                                    <td><?php echo $value['Diámetro'] . 'cm'; ?></td>
                                    <td><?php echo $value['Número de Hojas']; ?></td>
                                    <td><?php echo $value['Áfidos']; ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <a href="MenuView.php"><button type="button"
                            class="btn btn-outline-primary">Regresar</button></a>
                        <!-- <button type="button" class="table-back btn btn-outline-primary" data-toggle="modal"
                        data-target="#ingresarDatos">Ingresar Datos</button> -->
                        <!-- <button type="button" class="table-back btn btn-outline-primary" data-toggle="modal"
                        data-target="#opciones">Modificar Datos</button> -->
                
                        <!-- <button type="button" class="table-back btn btn-outline-primary" data-toggle="modal"
                        data-target="#funciones">Funciones</button> -->

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ingresar Datos -->
    <div class="modal fade" id="ingresarDatos" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° de Cama:</label>
                            <input type="text" id="cama" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Plántula:</label>
                            <input type="text" id="planta"  class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Altura:</label>
                            <input type="text" id="altura"  class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Diámetro:</label>
                            <input type="text" id="diametro"  class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Hojas:</label>
                            <input type="text" id="hojas" class="form-control input-sm" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Áfidos</label>
                            <input type="text" id="afidos" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="guardarNuevo" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Funciones -->
    <div class="modal fade" id="funciones" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Funciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h1>Proximamente por definir!</h1>
                            <button type="button" class="btn btn-secondary" data-toggle="modal"
                                data-target="#modificarDatos">Función 1</button>
                            <button type="button" id="Iniciar" class="btn btn-primary">Función 2</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Opciones -->
    <div class="modal fade" id="opciones" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Opciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-secondary" data-toggle="modal"
                                data-target="#modificarDatos">Modificar Datos</button>
                            <button type="button" id="Iniciar" class="btn btn-primary">Eliminar Registro</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modificarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modificar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° de Cama:</label>
                            <input type="text" id="usuario" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Plántula:</label>
                            <input type="text" id="usuario" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Altura:</label>
                            <input type="text" id="usuario" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Diámetro:</label>
                            <input type="text" id="usuario" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Hojas:</label>
                            <input type="text" id="usuario" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>N° Áfidos</label>
                            <input type="text" id="pass" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('guardarNuevo').click(function(){
                    cama = $('#cama').val();
                    planta = $('#planta').val();
                    altura = $('#altura').val();
                    diametro = $('#diametro').val();
                    hojas = $('#hojas').val();
                    afidos = $('#afidos').val();
                    agregarDatos(cama, planta, altura, diametro, hojas, afidos);

                })
            });
        </script>
</body>

</html>