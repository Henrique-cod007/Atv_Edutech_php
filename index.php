<!-- <?php

include "conexao.php";

$nome_curso = "";
$area_tecnologica ="";
$quantidade_alunos ="";
$empresa_patrocinadora ="";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_curso = $_POST["nome_curso"];
    $area_tecnologica = $_POST["area_tecnologica"];
    $quantidade_alunos = $_POST["quantidade_alunos"];
    $empresa_patrocinadora = $_POST["empresa_patrocinadora"];

    if($nome_curso === "" || $area_tecnologica === "" || $quantidade_alunos === "" || $empresa_patrocinadora === "" ){

        $mensagem = "Preencha todos os campos";
    } else {
        $sql = "INSERT INTO cursos(nome_curso, area_tecnologica , quantidade_alunos, empresa_patrocinadora) VALUES ('$nome_curso', '$area_tecnologica', '$quantidade_alunos', '$empresa_patrocinadora')";
        $conexao -> query($sql);
        $mensagem = "Curso cadastrado com sucesso";
        $nome_curso = "";
        $area_tecnologica ="";
        $quantidade_alunos ="";
        $empresa_patrocinadora ="";
        $mensagem = "";
    }
}
?> -->
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
        position: absolute ;
        background-color: darkturquoise;
        width: 745px;
        height: 100vh;

        left: 40%;
        top: 0%;
    }
    #receber{
        width: 600px;
        height: 30px;
        margin-bottom: 10px;
    }
    #art_1_2{
        position: relative;
    }
    #div_01{
        position: absolute;
        top: 50;
        left: 50;

        transform: translate(15% ,70%);
    text-align: ;
    }
     #div_02{
        text-align: center;
    }
    


</style>
<body>
    <section id="box_01">
        <article id="art_01">
            <article id="art_1_2">
            <div id="div_01">
            <form action="index.php" method="post">
                <div id="div_02">
                <h2>Cadastra curso</h2>
                <p>informe os dados do curso para continuar.</p>
                </div>

                <input id="receber" type="text" name="nome_curso" placeholder="nome curso" required><br>
                <input id="receber" type="text" name="area_tecnologica" placeholder="área de tecnologia" required><br>
                <input id="receber" type="text" name="quantidade_alunos" placeholder="Quantidade de alunos" required><br>
                <input id="receber" type="text" name="empresa_patrocinadora" placeholder="Empresa patrocinadora" required><br>

                <button type="button" onclick="this.form.reset()">Limpar</button>
                <button type="submit">Cadastra curso</button>
            </form>
            </div>
            </article>
        </article>
    </section>
</body>
</html>

