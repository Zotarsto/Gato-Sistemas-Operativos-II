<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12"></div>
            <div class="col-sm-4 col-12 mt-3 d-grid">
                <button type="button" class="btn btn-primary" onclick="btn1()"> Crear Partida </button>
            </div>
            <div class="col-sm-4 col-12"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jugador 1</th>
                            <th scope="col">Jugador 2</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Juan</td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-warning"><img src="icon.svg"></button>
                            </td>   
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Daniel</td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-warning"><img src="icon.svg"></button>
                            </td> 
                        </tr>
                    </tbody>
                </table>

            </div>

            <script>
                function btn1() {
                    location.href = "http://localhost/gato/jugador.php?r=" + Math.random();
                }
            </script>    
</body>

</html>