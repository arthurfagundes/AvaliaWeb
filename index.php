<?php 
require_once 'includes/header.php';
?>
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
    position: fixed;
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
</style>
<html>
<body>
<div id="fundo-externo">
    <div id="fundo">
        <img src="icons/background.jpg" alt="fundo" />
    </div>
</div>
</body>
<?php
include_once 'includes/footer.php';
?>


