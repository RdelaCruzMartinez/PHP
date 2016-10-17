<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci</title>
</head>
<body>
<div>
    <form name="form_serie" method="GET" >
        <label>Introduce cuanto quieres que dure la serie Fibonacci:</label>
        <input type="number" name="serie" min="0">
        <input type="submit">
        <?php echo var_dump($_GET);?>
    </form>
</div>
<?php

if(isset($_GET['serie'])){
    $total = $_GET['serie'];
    $fibo_1 = 0;
    $fibo_2 = 1;
    $nuevo_fibo = 0;

    echo "$fibo_1".'<br/>';
    echo "$fibo_2".'<br/>';
    for ($i = 3; $i <= $total; $i++) {
        $nuevo_fibo = $fibo_1 + $fibo_2;
        $fibo_1 = $fibo_2;
        $fibo_2 = $nuevo_fibo;
        echo "$nuevo_fibo". '<br>';
    }
}


?>
</body>
</html>


