<html>
  <head>
   <title>Ulmeiro</title>
  </head>
 <body>

<h1>Livros</h1>

<?php

 $servidor = “sql7.freemysqlhosting.net”; /*maquina a qual o banco de dados está*/
 $usuario = “sql7109842”; /*usuario do banco de dados MySql*/
 $senha = “LXkZMxc2Sx”; /*senha do banco de dados MySql*/
 $banco = “sql7109842”; /*seleciona o banco a ser usado*/

$conexao = mysql_connect($servidor,$usuario,$senha);  /*Conecta no bando de dados MySql*/

mysql_select_db($banco); /*seleciona o banco a ser usado*/

$res = mysql_query(”select * from livros”); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

echo “<table><tr><td>id</td><td>referencia</td><td>produto</td><td>pvp</td><td>familia</td><td>familia_completa</td><td>autor</td><td>editora</td><td>coleccao</td><td>cod_barras</td></tr>”;

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
 while($escrever=mysql_fetch_array($res)){

/*Escreve cada linha da tabela*/
 echo “<tr><td>” . $escrever[’id’] . “</td><td>” . $escrever[’referencia’] . “</td><td>” . $escrever[’produto’] . “</td></tr>”. $escrever[’pvp’] . “</td><td>”. $escrever[’familia’] . “</td><td>”. $escrever[’familia_completa’] . “</td><td>" . $escrever[’autor’] . “</td><td>”. $escrever[’editora’] . “</td><td>”. $escrever[’colecao’] . “</td><td>”. $escrever[’cod_barras’] . “</td><td>”;

}/*Fim do while*/

echo “</table>”; /*fecha a tabela apos termino de impressão das linhas*/

mysql_close(conexao);

?>

</body>
 </html>
