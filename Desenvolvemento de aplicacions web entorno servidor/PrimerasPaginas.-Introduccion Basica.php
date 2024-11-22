<?php
print "<p>Hola</p>"
?>

//Estrctura con variables PHP
<?php
$saludo = "Hola"; //Como se da de alta unha variable PHP
print "<p> Bos días </p>";
?>

//Fragmentos PHP con HTML
<?php
print "<p>HTML con PHP</p";
?>
<p>Hola mundo</p>

//Cabe matizar que non podemos utilizar etiquetas de
//HTML dentro de PHP e aplicase da mesma forma o contrario.

//As instruccions de PHP é aconsellable que leven ";" 
//o final de cada instruccion para evitar erros.

<?php
print "<p>Hola</p>";
print "<p>Chao</p>"
?>
//Non esta mal pero non é aconsellable nn poñelos
//Igual que se pode poñer nunha mesma liña varias instruccions
//Non é recomendable, porque pode provocar confusións.

<?php
print "<p>Hola</p>"; "<p>Chao</p>"
?>

//PHP pode incluir numerosas lineas de HTML nunha sola instruccion
//ainda que podese asginar a cada linea un print

<?php
print "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
  <title>Página HTML válida</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>

<body>
  <p>Esta página es una página HTML válida.</p>
</body>
</html>";
?>
//Exemplo de multiples "print" asignados a cada linea do HTML.
<?php
print "<!DOCTYPE html>\n";
print "<html lang=\"es\">\n";
print "<head>\n";
print "  <meta charset=\"utf-8\">\n";
print "  <title>Página HTML válida</title>\n";
print "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
print "</head>\n";
print "\n";
print "<body>\n";
print "  <p>Esta página es una página HTML válida.</p>\n";
print "</body>\n";
print "</html>\n";
?>

//Para enlazar un ficheiro CSS mediante PHP
//Un exemplo:

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Página HTML válida</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
print "  <link rel=\"stylesheet\" href=\"estilo.css\" title=\"Color\">\n";
?>
</head>

 <body>
<?php
print "  <p>Esta página es una página HTML válida.</p>\n";
?>
</body>
</html>