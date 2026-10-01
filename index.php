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
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color: rgb(221, 221, 221);
        margin: 0;
        padding: 0;
    
    }
    #box_01{
        background-color: #399a83;
        width: 90%;
        max-width: 1100px;
        height: 80vh;
        margin: 120px auto;
        border-radius: 20px;
        position: relative;
        padding: 20px;
        border-top-right-radius: 20px;
        border-bottom-right-radius:20px;
    }
    #art_01{
        position: absolute ;
        background-color: white;
        width: 60%;
        height: 100%;
        right: 0;
        top: 0;
        
        border-top-right-radius: 20px;
        border-bottom-right-radius:20px;
    }
    #receber{
        width: 100%;
        max-width: 600px;
        height: 35px;
        margin-bottom: 10px;
        border:none;
        border-radius: 10px;
        background-color: #e0dcdc;
        border-radius: 15px;
        padding: 5px;

    }
    @media(max-width: 768px){
        #box_01{
            margin-top: 60px;
            height: auto;
    }
        #art_01{
            position: relative;
            width: 100%;
            height: auto;
            margin-top: 20px;
    }
    }
    #art_1_2{
        position: relative;
    }
    #div_01{
        position: absolute;
        top: 50;
        left: 50;

        transform: translate(13% , 35%);
    }
     #div_02{
        text-align: center;
    }
    button{
        margin-top: 20px;
        height: 40px;
        padding: 10px;
        margin-left: 30px;
        border-radius: 30px;
    }
    #bot_cad{
        background-color: #399a83;
        border: none;
        height: 50px;
        width: 250px;
        color: white;
        font-size: 15px;
    }
    #bot_lim{
        background-color: white;
        color: #399a83;
        border: 1.5px solid #399a83;
        height: 50px;
        width: 190px;
        
    }
    #div_03{
        position: absolute;
        left: -430px;
        font-size: 20px;
        text-align: center;
        color: white;
    
    }
    
        



</style>
<body>
    <section id="box_01">
        <article id="art_01">
            <article id="art_1_2">
            <div id="div_01">
            <div id="div_03">
                <h1 style="font-size: 65px;padding">📖</h1>
                <h1>cadastra curso</h1>
                <p>preencha todos os dados para<br>registra um curso ao sistema</p>
            </div>
            <form action="index.php" method="post">
                <div id="div_02">
                <h2 style="font-size:40px;margin:0px;color:#399a83;">Cadastro de curso</h2>
                <p>informe os dados do curso <br> para continuar.</p>
                </div>

                <input id="receber" type="text" name="nome_curso" placeholder="nome curso" required><br>
                <input id="receber" type="text" name="area_tecnologica" placeholder="área de tecnologia" required><br>
                <input id="receber" type="text" name="quantidade_alunos" placeholder="Quantidade de alunos" required><br>
                <input id="receber" type="text" name="empresa_patrocinadora" placeholder="Empresa patrocinadora" required><br>

                <button id="bot_lim" type="button" onclick="this.form.reset()"> ↻ Limpar</button>
                <button id="bot_cad" type="submit"> Cadastra Curso</button>
            </form>
            </div>
            </article>
        </article>
    </section>
</body>
</html>

