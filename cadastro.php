<?php
require_once "includes/header.php";
?>
<link href="css/cadastro.css" rel="stylesheet" type="text/css">
<div class="container">
        <div class="title">Faça seu cadastro</div>
        <div class="content">
            <form method="POST" action="cadastro.php">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nome</span>
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Sobrenome</span>
                        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Telefone</span>
                        <input type="tel" name="fone" placeholder="Ex: 5199999-9999" pattern="[0-9]{2}[0-9]{5}-[0-9]{4}"required>
                    </div>
                    <div class="input-box">
                        <span class="details">Data de nascimento</span>
                        <input type="date" name="dataani" required>
                    </div>
                    <div class="input-box">
                        <span class="details">E-mail</span>
                        <input type="text" name="email" placeholder="Endereço de e-mail" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" class="submit" value="Cadastrar">
                    <a href="lista.php" class="btn green"> Lista de clientes </a>
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
    ?>