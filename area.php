<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONHEÇA O PARTICIPANTE</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.cdnfonts.com/css/technology" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.cdnfonts.com/css/zuma" rel="stylesheet">
    <!-- ICONE MENU -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="global">
        <div class="topnav">
        <div class="titulo"><b>1º SENACKATHON</b><text>_</text></div>

            <div id="myLinks">
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()" >
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div class="titulo"><b>Partner's Skills</b><text>_</text></div>
        <div class="bio-container">
            <div class="bio1">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>

            <!-- APENAS PARA TEST DE QUANTIDADE -->
            <!-- DEPOIS LANÇAR UM WHILE TRAZENDO UM CARD COLORIDO PARA CADA SKILL E UM ICONE TAMBÉM -->
            <div class="bio2">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>
            <div class="bio3">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>
            <div class="bio4">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>
            <div class="bio5">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>
            <div class="bio6">
                <img src="icons/icon_skill.png">
                <label>SKILL 1</label>
                <text name='skill'>TEXTO PARA COLOCAR TODAS AS SKILLS DO PARTICIPANTE.</text>
            </div>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>

</body>

</html>