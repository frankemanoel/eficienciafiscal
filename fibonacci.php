<form method="get" enctype="multipart/form-data" action="fib.php">
    
        <label for="escolha">Escolha uma posição para encontrar o fibonacci relativo:</label>
        <input type="number" id="escolha" name="escolha" />
        <button type="submit">Mostrar</button>
    
</form>

<?php
//Escolher posicao


$posicao =  $_GET['escolha'];
if ($posicao > 0) { $positivo = true; } else {
        $positivo = false;
        $posicao = abs($posicao);
}

function fbnnega($n,$pn = 0,$sn = -1)
{
    $fib = [$pn,$sn];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    global $posicao;
    return $fib[$posicao];
}

function fbnposi($n,$pn = 0,$sn = 1)
{
    $fib = [$pn,$sn];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    global $posicao;
    return $fib[$posicao];
}
if ($positivo == false) {
echo "<pre>";
print_r (fbnnega(50));
}

if ($positivo == true) {
echo "<pre>";
print_r (fbnposi(50));
}

?>
