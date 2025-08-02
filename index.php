<h1>Codigo HTML</h1>

<?php
// This is a simple PHP script that outputs "Hola Mundo" in HTML format
    echo "<p>Hola Mundo PHP, la manera mas comun de imprimir a pantalla en
     PHP es usando la palabra reservada 'echo'</p>";
    print "<p>Se puede imprimir PHP usando la palabra reservada 'print'</p>";


    # usos de variables y opreadores

    /* 
    
    este bloque de codigo muestra warning porque las variables no estan definidas
    $var_1 = 0;
    $var_2 = 0;
    
    $var_1 = $_GET['valo1'];
    $var_2 = $_GET['valo2'];
    */

    /* $var_1 = isset($_GET['valor1']) ? $_GET['valor1'] : 0;
    $var_2 = isset($_GET['valor2']) ? $_GET['valor2'] : 0;

    echo "<h1>La suma de $var_1 + $var_2 es igual a".($var_1 + $var_2)."</h1>";
    echo "<h1>La resta de $var_1 - $var_2 es igual a".($var_1 - $var_2)."</h1>";
    */

    # Como recibir valores desde la URL usando $_GET

    echo $nombre = nameValidation(). "<br>";
    echo $apellido = apellidoValidation("apellido"). "<br>";
    valoresIniciales();

    #funciones
    function valoresIniciales() {
        $var_1 = isset($_GET['valor1']) ? $_GET['valor1'] : 0;
        $var_2 = isset($_GET['valor2']) ? $_GET['valor2'] : 0;

        echo "<h1>La suma de $var_1 + $var_2 es igual a".($var_1 + $var_2)."</h1>";
        echo "<h1>La resta de $var_1 - $var_2 es igual a".($var_1 - $var_2)."</h1>";
    }

    function nameValidation() {
        if(isset($_GET["nombre"])){
            $nombre = $_GET["nombre"];            
        }else {
            $nombre = "Pedro Emiliano";
        }
        return $nombre;
    }

    function apellidoValidation($apellido) {
        if(isset($_GET["apellido"])){
            $apellido = $_GET["apellido"];            
        }else {
            $apellido = "Gonzalez";
        }
        return $apellido;
    }
?>