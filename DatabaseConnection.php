<?php

class DatabaseConnection {

    static function connect() {
        $username = "meli_user";
        $password = "losluchos";
        $hostname = "localhost";
        $dbname = "meli_db";

        $dbhandle = mysqli_connect($hostname, $username, $password, $dbname)
                or die("Unable to connect to MySQL");
        //echo "Connected to MySQL<br>";
        mysqli_set_charset($dbhandle, 'utf8');
        return $dbhandle;
    }

    static function insertPreguntasMeli($dbhandle, $values) {

        $sql = "INSERT INTO preguntas_meli (articulo_meli_id, pregunta_meli_id, pregunta) VALUES('$values->item_id', '$values->id', '$values->text')";

        if (mysqli_query($dbhandle, $sql)) {
            //echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }
    }

    static function selectPreguntasMeli($dbhandle, $item_id) {
        $sql = "SELECT * FROM preguntas_meli WHERE articulo_meli_id='$item_id'";

        if ($result = mysqli_query($dbhandle, $sql)) {
            if ($result->num_rows > 0) {
                $array_preguntas = array();
                while ($row = $result->fetch_assoc()) {
                    $array_preguntas[] = $row["pregunta"];
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }

        return $array_preguntas;
    }

    static function selectKeywords($dbhandle, $item_id) {
        $sql = "SELECT pregunta_id FROM preguntas_meli WHERE articulo_meli_id = '$item_id'";

        if ($result = mysqli_query($dbhandle, $sql)) {
            if ($result->num_rows > 0) {
                $array_preguntas = array();
                while ($row = $result->fetch_assoc()) {
                    if ($row["pregunta_id"] != 0 && !isset($array_preguntas[$row["pregunta_id"]])) {
                        $array_preguntas[] = $row["pregunta_id"];
                    }
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }

        $dicc = array();
        foreach ($array_preguntas as $pregunta_id) {
            $ids = array();
            $sql = "SELECT keywords FROM preguntas_vendedor WHERE id = '$pregunta_id'";

            if ($result = mysqli_query($dbhandle, $sql)) {
                if ($result->num_rows > 0) {
                    $keywords = split(',', $result->fetch_assoc()["keywords"]);
                    //  print_r($ids);
                    foreach ($keywords as $keyword) {
                        if (!isset($dicc[$keyword])) {
                            $dicc[$keyword] = array();
                        }
                        $dicc[$keyword][] = $pregunta_id;
                        // print_r($ids);
                    }
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
            }
        }

        return $dicc;
    }

    static function insertPreguntasVendedor($dbhandle, $values) {
        $sql = "INSERT INTO preguntas_vendedor (pregunta, respuesta, hit, keywords) VALUES('$values->text', '$values->id')";

        if (mysqli_query($dbhandle, $sql)) {
            //echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }
    }

    static function selectPreguntasVendedor($dbhandle) {
        $sql = "SELECT * FROM preguntas_vendedor";

        if ($result = mysqli_query($dbhandle, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $array_preguntas = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $array_preguntas[] = $row;
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }

        return $array_preguntas;
    }

    static function getHit($dbhandle, $id_pregunta) {
        $sql = "SELECT hit FROM preguntas_vendedor WHERE id = '$id_pregunta'";

        if ($result = mysqli_query($dbhandle, $sql)) {
            if ($result->num_rows > 0) {
                $hit = $result->fetch_assoc()["hit"];
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
        }

        return $hit;
    }

    static function disconnect($db) {
        mysqli_close($db);
    }

    static function loadItemQuestions($db, $item) {

        $access_token = $_SESSION['access_token'];
        $meli = new Meli("2634203647737077", "RMR3lwj030Q66a6VNAfyPEWwRLdPhiwA", $access_token);

        $params = array("item" => $item);
        $result = $meli->get('/questions/search', $params);

        $questionsArray = $result["body"]->questions;
        $total = $result["body"]->total;
        $offset = $result["body"]->filters->offset;
        $limit = $result["body"]->limit;

        foreach ($questionsArray as $question) {
            self::insertPreguntasMeli($db, $question);
        }

        if ($total > $limit) {
            while ($offset < $total) {
                $offset += $limit;
                $params = array("item" => $item, "offset" => $offset);
                $result = $meli->get('/questions/search', $params);

                $questionsArray = $result["body"]->questions;

                foreach ($questionsArray as $question) {
                    DatabaseConnection::insertPreguntasMeli($db, $question);
                }
            }
        }
    }

}
