<?php
require_once 'includes/header.php';
?>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
* {
    margin: 0;
    padding:0;
}
body, html {
    width: 100%;
    height: 100%;
}
#fundo-externo {
    overflow: hidden;
    width: 100%;
    height: 100%;
    position: relative;
}
#fundo {
    position: relative;
    width: 100%;
    height: 100%;
}
#fundo img {
    width: 100%;
    height: 100%;
    position: absolute;
}
#site {
    position: absolute;
    top: 40px;
    left: 50%;
    width: 560px;
    padding: 20px;
    margin-left: -300px;
    background: #FFF;
    background: rgba(255,255,255,0.8);
}
p {
    margin-bottom: 1.5em;
}
.saudacao{
    text-align: center;
    padding: 100px;
    font-size: 70pt;
}
.dataatual{
    text-align: center;
    padding: 100px;
    font-size: 50pt;
}
</style>
<body>
<div id="fundo-externo">
    <div id="fundo">
        <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hora_do_dia=date("H");
    
    if ($hora_do_dia<6) echo '<div class="saudacao">Boa madrugada! Bem-vindo a sua agenda de contatos.</div>';
    elseif ($hora_do_dia<12) echo '<div class="saudacao">Bom dia! Bem-vindo a sua agenda de contatos.</div>';
    elseif ($hora_do_dia<18) echo '<div class="saudacao">Boa tarde! Bem-vindo a sua agenda de contatos.</div>';
    elseif ($hora_do_dia<24) echo '<div class="saudacao">Boa noite! Bem-vindo a sua agenda de contatos.</div>';

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    echo strftime('<div class="dataatual">%A, %d de %B de %Y</div>');

    ?>
    </div>
</div>
</body>
</html>

<?php
include_once 'includes/footer.php';
?>