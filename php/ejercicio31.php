<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";

$txtComentario="";

if($_POST ){
    // si hay informacion en (isset($_POST['$txtNombre'])) "txtNombre" asignale '?' propiamnete a txtNombre : de lo contrario " " lo que esta vacio quedda vacio  este es un if ternario

    $txtNombre= (isset ($_POST['txtNombre']))?$_POST['txtNombre']:" ";
    $rdgLenguaje= (isset ($_POST['lenguaje']))?$_POST['lenguaje']:" ";

    // para pruebas
    print_r($rdgLenguaje);


    $chkphp=(isset ($_POST['chkphp'])=="si")?"checked":" ";
    $chkhtml=(isset ($_POST['chkhtml'])=="si")?"checked":" ";
    $chkcss=(isset ($_POST['chkcss'])=="si")?"checked":" ";


    $lsAnime=(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";
    print_r($lsAnime);

    $txtComentario= (isset ($_POST['txtComentario']))?$_POST['txtComentario']:" ";

//    instruccion de insercion

}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  if($_POST){?>
    <strong> Hola </strong>: <?php echo $txtNombre;?><br>
    <strong> tu lenguaje es </strong>: <?php echo $rdgLenguaje;?><br>

    <strong> estas aprendiendo </strong>: <br>
    - <?php echo ($chkphp=="checked")?"php":""?> <br>
    - <?php echo ($chkhtml=="checked")?"html":""?> <br> 
    - <?php echo ($chkcss=="checked")?"css":""?>   <br>
    <br>
    <strong> tu anime favorito es </strong>: <?php echo $lsAnime;?><br><br>

    <strong> Tu mensaje es  </strong>:<?php echo $txtComentario;?><br>

    <?php  }?>

    <form action="ejercicio31.php" method="post">
        Nombre:
        <!-- el value se utiliza para mantener la vista de lo que contiene este input de texto -->
        <input type="text" value="<?php echo $txtNombre;?>" name="txtNombre" id="">
        <br>
        <!-- input de tipo radio -->
        ¿Te gusta?: <br>
        <br>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":" "?> name="lenguaje" value="php" id=""><br>
        <br>html:<input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":" "?> name="lenguaje" value="html" id=""><br>
        <br>css:<input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":" "?> name="lenguaje" value="css" id=""><br>
<br>
        <!-- checkbox -->
        Estas aprendiendo... <br>
        <br>php: <input type="checkbox" <?php echo $chkphp?> name="chkphp" value="si" id="">
        <br>html: <input type="checkbox" <?php echo $chkhtml?> name="chkhtml" value="si" id="">
        <br>css: <input type="checkbox" <?php echo $chkcss?> name="chkcss" value="si" id="">

        <br>
        <br>

        <!-- select -->
        ¿Que anime te gusta?... <br>
        <br>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="naruto"  <?php echo ($lsAnime=="naruto")?"selected":" " ?> >Naruto</option>
            <option value="goku" <?php echo ($lsAnime=="goku")?"selected":" " ?> >Goku</option>
            <option value="kimetsu" <?php echo ($lsAnime=="kimetsu")?"selected":" " ?> >Kimetsu no yaiba</option>
        </select>

        <!-- valores textarea -->
        <br>
        <br>
        ¿Tienes alguna duda?<br>
        <br>
        <textarea name="txtComentario" id="" cols="30" rows="10">
        <?php echo $txtComentario;?>
        </textarea>


        <br>
        <br>
        <input type="submit" value="Enviar informacion">


    </form>



</body>

</html>