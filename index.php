<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>ACtividad 2</title>
</head>

<body>
    <?php

    $header = array("Nombre", "Dirección", "Teléfono", "Color", "Significado");
    $jesus = array("Jesús", "Carrea 7B", "300214565", "Azul", "Cielo");
    $maria = array("Maria", "Carrea 8H", "321231567", "Amarillo", "Pollitos");
    $carlos = array("Carlos", "Carrea 0A", "465456465", "Amarillo", "Sol");
    $yamileth = array("yamileth", "Carrea 3C", "46565456654", "Verde", "Cesped");
    $juana = array("Juana", "Carrea 20Z", "654654564", "Azul", "Ojos");
    $jose = array("José", "Carrea 2B", "465645656", "Verde", "Hulk");
    $alfonso = array("Alfonso", "Carrea 54F", "466546546", "Rosa", "Fresas");
    $alfonsa = array("Alfonsa", "Carrea 55G", "577657657", "Rosa", "Flor");

    $personas = array($jesus, $maria, $carlos, $yamileth, $juana, $jose, $alfonso, $alfonsa);

    ?>
    <br>
    <h1 class="row justify-content-md-center">Actividad 2 by Jesús Rodríguez</h1>

    <br>
    <div class="container">
        <h2>Punto 1 y 2</h2>
        <!-- Start Table -->
        <table class="table table-hover container">
            <!-- Start Table Head -->
            <thead>
                <tr>
                    <?php
                foreach ($header as $head) {
                    echo '<th scope="row">', $head, '</th>';
                }
                ?>
                </tr>
            </thead>
            <!-- End Table Head -->
            <!-- Start Table Body -->
            <tbody>
                <tr>
                    <?php
                for ($i = 0; $i < count($personas); $i++) {
                    echo '<tr class="table-light">';
                    $persona = $personas[$i];
                    foreach ($persona as $info) {
                        echo "<td>$info</td>";
                    }
                    echo '</tr>';
                }
                ?>
                </tr>
            </tbody>
            <!-- End Table Body -->
        </table>
        <!-- End Table -->
    </div>

    <!-- Punto 3 -->
    <br><br>
    <h2 class="row justify-content-md-center">Punto 3</h2>
    <div class="container">
        <!-- Tabla 1-->
        <h3>Filtrado por color amarillo</h3>
        <!-- Table -->
        <table class="table table-hover container">
            <!-- Table head -->
            <thead>
                <tr>
                    <?php
                foreach ($header as $head) {
                    echo '<th scope="col">', $head, '</th>';
                }
                ?>
                </tr>
            </thead>
            <!-- End table head -->
            <!-- Table body -->
            <tbody>
                <tr>
                    <?php
                $penultimate_index = array_key_last($personas[0]) - 1;
                for ($i = 0; $i < count($personas); $i++) {
                    $persona = $personas[$i];
                    if ($persona[$penultimate_index] == "Amarillo") {
                        echo '<tr class="table-warning">';
                        foreach ($persona as $info) {
                            echo '<td>', $info, '</td>';
                        }
                        echo '<tr>';
                    }
                }
                ?>
                </tr>
            </tbody>
            <!-- End table body -->
        </table>
        <!-- End table -->
    </div>

    <!-- Tabla 2 -->
    <br><br>
    <div class="container">
        <h3>Filtrado por color verde</h3>
        <!-- Start table -->
        <table class="table table-hover container">
            <!-- Table head -->
            <thead>
                <tr>
                    <?php
                foreach ($header as $head) {
                    echo '<th scope="col">', $head, '</th>';
                }
                ?>
                </tr>
            </thead>
            <!-- End table head -->
            <!-- Table body -->
            <tbody>
                <tr>
                    <?php
                $penultimate_index = array_key_last($personas[0]) - 1;
                for ($i = 0; $i < count($personas); $i++) {
                    $persona = $personas[$i];
                    if ($persona[$penultimate_index] == "Verde") {
                        echo '<tr>';
                        foreach ($persona as $info) {
                            echo '<td class="table-success">', $info, '</td>';
                        }
                        echo '<tr>';
                    }
                }
                ?>
                </tr>
            </tbody>
            <!-- End table body -->
        </table>
        <!-- End table -->
    </div>
    <!-- tabla 3 -->
    <br><br>
    <div class="container">
        <h3>Filtrado por color Azul</h3>
        <table class="table table-hover container">
            <!-- Table head -->
            <thead>
                <tr>
                    <?php
            foreach ($header as $head) {
                echo "<th>$head</th>";
            }
            ?>
                </tr>
            </thead>
            <!-- End table head -->
            <!-- Table body -->
            <tbody>
                <tr>
                    <?php
            $penultimate_index = array_key_last($personas[0]) - 1;
            for ($i = 0; $i < count($personas); $i++) {
                $persona = $personas[$i];
                if ($persona[$penultimate_index] == "Azul") {
                    echo '<tr>';
                    foreach ($persona as $info) {
                        echo '<td class="table-primary">',$info,'</td>';
                    }
                    echo '<tr>';
                }
            }
            ?>
                </tr>
            </tbody>
        </table>
        <!-- End table body -->
    </div>

    <!-- Alert success-->
    <div id="alertSuccess" class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>¡Excelente!</strong> Me has puesto la mejor nota notariada.
    </div>
    <!-- End alert -->

    <!-- Button -->
    <div class="row justify-content-md-center">
        <div class="col col-md-auto">
            <button type="button" onclick="showAlert()" class="btn btn-outline-success">Colocar Máxima Nota</button>
        </div>
    </div>
    <!-- End button -->

    <script src="./scripts/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="./scripts/alert.js"></script>

</body>

</html>