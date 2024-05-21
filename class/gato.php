<?php
class gato
{
    public $conn;

    public function __construct()
    {
        $this->conn = new sql();
    }

    function crearJugador1($nom)
    {
        $sql = "insert into gato(jugador1, estado) values('" .$nom . "','1')";
        $this->conn->ejecutar($sql);
        $max= 0;
        $sql = "select max(id) max from gato";
        $result = $this->conn->ejecutar($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $max= $row["max"];
            }
        }
        return $max;
    }

    function crearJugador2($id ,$nom )
    {
        $sql = "update gato set jugador2 = '" . $nom . "' where id= '" . $id . "'";
        $this->conn->ejecutar($sql);
    }

    function tiro($id, $nom, $valor, $index)
    {
        $estado = $valor == "x"? 0 : 1; 
        $sql = "update gato set estado= '" . $estado . "', g" . $index. "= '" . $valor . "' where id = '" . $id . "'";
        $this->conn->ejecutar($sql);
    }

    function mostrar($id)
    {
        
        
        $sql = "select * from gato where id = '" . $id . "'";
        $result = $this->conn->ejecutar($sql);

        
        $g1 = "";
        $g2 = "";
        $g3 = "";
        $g4 = "";
        $g5 = "";
        $g6 = "";
        $g7 = "";
        $g8 = "";
        $g9 = "";
        $jugador1 = "";
        $jugador2 = "";

        $estado = 0;


        $line = "";
        
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                
                $g1 = $row["g1"];
                $g2 = $row["g2"];
                $g3 = $row["g3"];
                $g4 = $row["g4"];
                $g5 = $row["g5"];
                $g6 = $row["g6"];
                $g7 = $row["g7"];
                $g8 = $row["g8"];
                $g9 = $row["g9"];

                $jugador1 = $row["jugador1"];
                $jugador2 = $row["jugador2"];
                $estado = $row["estado"];
                
            }
        }

        
        $ganador = $this->verificarGanador($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9);

        $ganador = $this->verificarGanador($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9);
        $esEmpate = $this->esEmpate($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9);

        // Lógica para mostrar al ganador o empate
        if ($ganador != '') {
            $mensajeGanador = '¡El ganador es el Jugador ' . ($ganador == 'x' ? '1' : '2') . '!';
            echo "<script>
                alert('$mensajeGanador');
                window.location.href = 'index.php'; // Redireccionar al inicio
                </script>";
        } elseif ($esEmpate) {
            $mensajeEmpate = '¡Es un empate!';
            echo "<script>
                alert('$mensajeEmpate');
                window.location.href = 'index.php'; // Redireccionar al inicio
                </script>";
        }


        $line = '
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-3">
                <div class="row">
                    '. $this->estaBoton(1, $g1). '
                    '. $this->estaBoton(2, $g2). '
                    '. $this->estaBoton(3, $g3). '
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-3">
                <div class="row">
                '. $this->estaBoton(4, $g4). '
                '. $this->estaBoton(5, $g5). '
                '. $this->estaBoton(6, $g6). '
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-3">
                <div class="row">
                '. $this->estaBoton(7, $g7). '
                '. $this->estaBoton(8, $g8). '
                '. $this->estaBoton(9, $g9). '
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        ';
        
        return $line;
    }

    function estaBoton($id, $estado)
    {
        
        $linea = "";
        if($estado == "")
        {

            $linea = '
            <div class="col-4 text-center">
                <button class="btn btn-primary" type="button" id="btn' . $id. '">
                    <div class="f"></div>
                </button>
            </div>';
        }
        else 
        {
            $linea = '
            <div class="col-4 text-center">
                <button class="btn btn-primary" type="button" id="btn'. $id. '" disabled=""> 
                    <img src="img/' . ($estado == "x"?"x": "0") .'.svg" class="f">
                </button>
            </div>
            ';
        }

        
        return $linea;
    }

    function metodEstado($id)
    {
        $sql = "select estado from gato where id = '" . $id . "'";
        $result = $this->conn->ejecutar($sql);
        $aux = 0;
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $aux = $row["estado"];
            }
        }

        return $aux;
    }
    function listarPartidas()
    {
        $sql = "select * from gato ";
        $result = $this->conn->ejecutar($sql);
        $aux = '<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jugador 1</th>
                <th scope="col">Jugador 2</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>';
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $aux .= '
                    <tr>
                        <th scope="row">' . $row["id"]. '</th>
                        <td>' . $row["jugador1"]. '</td>
                        <td>' . $row["jugador2"]. '</td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="abrirPartida(\'' . $row["id"]. '\')">
                            <img src="img/controller.svg" alt=""></button>
                        </td>
                    </tr>
                    ';
            }

            $aux .= '
                </tbody>
            </table>';

            return $aux;
        }
    }

    function verificarGanador($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9)
    {
        // Verificar filas
        if ($g1 == $g2 && $g2 == $g3 && $g1 != "") {
            return $g1;
        } elseif ($g4 == $g5 && $g5 == $g6 && $g4 != "") {
            return $g4;
        } elseif ($g7 == $g8 && $g8 == $g9 && $g7 != "") {
            return $g7;
        }
        
        // Verificar columnas
        if ($g1 == $g4 && $g4 == $g7 && $g1 != "") {
            return $g1;
        } elseif ($g2 == $g5 && $g5 == $g8 && $g2 != "") {
            return $g2;
        } elseif ($g3 == $g6 && $g6 == $g9 && $g3 != "") {
            return $g3;
        }
        
        // Verificar diagonales
        if ($g1 == $g5 && $g5 == $g9 && $g1 != "") {
            return $g1;
        } elseif ($g3 == $g5 && $g5 == $g7 && $g3 != "") {
            return $g3;
        }
        
        return ""; // Si no hay ganador
    }
    function esEmpate($g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9)
    {
        // Verificar si todas las casillas están ocupadas
        $casillas = [$g1, $g2, $g3, $g4, $g5, $g6, $g7, $g8, $g9];
        foreach ($casillas as $casilla) {
            if ($casilla == "") {
                return false;
            }
        }
        // Si todas las casillas están llenas y no hay ganador, es un empate
        return true;
    }
}
