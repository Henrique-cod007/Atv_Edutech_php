<?php
include "conexao.php";
$nome_curso = "";
$área_tecnologia ="";
$Quantidade_alunos ="";
$Empresa_patrocinadora ="";

if($_SERVER("REQUEST_METHOD") === "POST"){
    $nome_curso = "";
    $area_tecnologia = [""];
    $quantidade_alunos ="";
    $empresa_patrocinadora ="";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: rgb(249, 249, 249)
    }
    #box_01{
        background-color: rgb(47, 255, 179);
        height: 100vh;
        position: relative;
    }
    #art_01{
        position: absolute;
        background-color: darkturquoise;
        width: 745px;
        height: 588px;

        left: 40%;
        top: 0%;
    }
    #receber{
        width: 600px;
        height: 30px;
        margin-bottom: 10px;
    }

</style>
<body>
    <section id="box_01">
        <article id="art_01">
            <form action="index.php" method="post">
                <input id="receber" type="text" name="nome_curso" placeholder="nome curso" required><br>
                <input id="receber" type="text" name="area_tecnologia" placeholder="área de tecnologia" required><br>
                <input id="receber" type="text" name="quantidade_aluno" placeholder="Quantidade de alunos" required><br>
                <input id="receber" type="text" name="empresa_patrocinadora" placeholder="Empresa patrocinadora" required><br>

                <button type="button" onclick="this.form.reset()">Limpar</button>
                <button type="submit">Cadastra curso</button>
            </form>
        </article>
    </section>
</body>
</html>