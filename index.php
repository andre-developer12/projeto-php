<?php include('pages/header.php') ?>
    
<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = 18;


if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo "O nadador" ,$nome, "compete na categora infantil.";
    }
}else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo "O nadador" ,$nome, "compete na categora adolescente.";
    }
}else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O nadador" ,$nome, "compete na categora adulto.";
    }
}
?>








<?php include('pages/footer.php') ?>