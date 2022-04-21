<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Variables Ambientales</title>

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
                            <span>Fecha Inicial:</span>
                            <input class="table-opt btn btn-secondary" type="datetime-local" name="fecha" id="">
                        </label>
                        <label for="calendar">
                            <span>Fecha Final:</span>
                            <input class="table-opt btn btn-secondary" type="datetime-local" name="fecha" id="">
                        </label>
                        <input type="submit" class="table-opt btn btn-secondary" value="Buscar">
                    </form>



                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="data-table table-responsive table-hover table-striped">
                        <table class="table">
                            <caption>Variables Ambientales</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Fecha Hora</th>
                                    <th scope="col">Humedad Ambiental</th>
                                    <th scope="col">Temperatura</th>
                                    <th scope="col">Flujo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-toggle="modal" data-target="#opciones">
                                    <th scope="row">27/03/2022 19:44:35</th>
                                    <td>100%</td>
                                    <td>15.5°C</td>
                                    <td>0L/min</td>
                                </tr>
                                <tr data-toggle="modal" data-target="#opciones">
                                    <th scope="row">27/03/2022 19:44:35</th>
                                    <td>100%</td>
                                    <td>15.5°C</td>
                                    <td>0L/min</td>
                                </tr>
                                <tr data-toggle="modal" data-target="#opciones">
                                    <th scope="row">27/03/2022 19:44:35</th>
                                    <td>100%</td>
                                    <td>15.5°C</td>
                                    <td>0L/min</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <a href="MenuView.php"><button type="button"
                            class="btn btn-outline-primary">Regresar</button></a>
                <button type="button" class="table-back btn btn-outline-primary" data-toggle="modal"
                        data-target="#funciones">Funciones</button>

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
</body>

</html>