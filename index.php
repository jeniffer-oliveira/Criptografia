<?php

$senha = $_POST["Cripto"];
$senhaDesc = $_POST["descripto"];

$novasenha = base64_encode($senha);

$descrip = base64_decode($senhaDesc);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criptografia</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="index.php">
            <fieldset>
                <label for="criptografar">Mensagem para criptografar</label>
                <textarea id="criptografar" cols="70" rows="10" class="input" placeholder="Digite a mensagem a ser criptografada." name="Cripto"></textarea>

                <div>
                    <input type="submit" value="Criptografar" class="enviar">
                </div>

                <label for="mensagemCript">Mensagem criptografada</label>
                <textarea id="mensagemCript" cols="70" rows="10" class="input" placeholder="Aqui aparece a sua mensagem criptografada." name="criptografada">
                    <?php
                        echo $novasenha;
                    ?></textarea>
                <label for="descriptografar">Mensagem para descriptografar</label>
                <textarea id="descriptografar" cols="70" rows="10" class="input" placeholder="Insira o texto a ser descriptografado." name="descripto"></textarea>
                <div>
                    <input type="submit" value="Descriptografar" class="enviar">
                </div>

                <label for="mensagemDescripto">Mensagem descriptografada</label>
                <textarea id="mensagemDescripto" cols="70" rows="10" class="input" placeholder="Aqui aparece a mensagem descriptografada.">
                    <?php
                        echo $descrip;
                    ?>
                </textarea>
            </fieldset>
        </form>
    </main>
</body>
</html>
