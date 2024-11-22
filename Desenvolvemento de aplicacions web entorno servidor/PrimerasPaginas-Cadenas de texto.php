//As candenas de texto se van delimitar con
//comillas doble ("") sirven as simples,pero
//debemos utilizar solo un tipo , se poñemos
// diferentes en ambos extremos pode fallar

<?php
print "<p>Esto es una cadena.</p>\n";
?>

//Dentro de unha cadea podese delimitar por ("")
//pero tamen pode haber comillas simples ('') no interior 
//de esta.
//Si no interior de unha cadea se atopa
// o mesmo tipo de comilla vai dar un erro.

<?php
print '<p>Esto es una comilla doble: "</p>';
?>

//Si queremos poñer o mismo tipo de comillas, dentro
//de unha cadea,debe ir acompañado de unha (\)
//funciona tanto para ('') como para ("")
//(\) este caracter especial non se pode utilizar
//para delimitar cadeas de texto

<?php
print "<p>Esto es una comilla simple: ' y esto una comilla doble: \"</p>";
?>

//A diferencia principal entre comillas ("") e ('')
//e que nos carateres especiales e nas variables non
//non as sustitue polo seu ti


<!----CONTINUAR CON CARACTERES ESPECIALES ----->!


//Para concatenar unha ou mais cadeas utilizamos un (.)
//Sirve como para concatenar texto como para varaibles,funcions...
//NOTA IMP: Cando se concantena SIMEPRE hai que respetar
//os espacio si non pode dar a error

<?php
print "<p>A suma de 3+2x2 é " . 3 + 2 * 2 ."</p>";
?>
