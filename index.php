<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/sweetalert2.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>CID-GUI</title>
</head>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">CID-WEB</a>
    <form class="d-flex">
        <a href="./audit.php" class="btn btn-outline-danger">Logs</a>
    </form>
  </div>
</nav>
<body class="bg-whitesmoke">
    <div class="container p-5 justify-items-center">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6 border rounded-3 p-3 bg-white">
            <div class="d-flex justify-content-between"><h1>Adicionar</h1><a href="./upshare.php" class="btn btn-primary p-2 mb-3"> Atualizar</a></div>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="mt-3">
                    <label for="" class="mb-1">Nome:</label><input type="text" name="name" id="name" class="form-control mb-3" placeholder="Nome do usuário ou grupo" required>
                    <label for="" class="mb-1">Caminho da pasta:</label> <input type="text" name="path" id="path" class="form-control mb-3" placeholder="Caminho do diretório" required>
                    <label for="" class="mb-1">Regras:</label>
                    <div class="input-group">
                    <button type="button" class="btn btn-primary" id="addinput" onclick="addInput();">+</button>
                        <select name="op-rule" id="op-rule" class="form-select">
                            <option value="adduser">+ Usuário</option>
                            <option value="addgroup">+ Grupo</option>
                            <option value="remuser">- Usuário</option>
                            <option value="remgroup">- Grupo</option>
                        </select>
                        <input type="text" name="rule" id="rule" class="form-control" placeholder="usuário/grupo" required>
                    </div>
                    <div class="form-check-inline mt-3">
                        <input type="radio" class="form-check-input" id="radio1" name="rulefr" value=":f"> Leitura e gravação :f
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check-inline mt-3">
                        <input type="radio" class="form-check-input" id="radio2" name="rulefr" value=":r"> Apenas leitura :r
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                    <div class="input-group" id="adding"></div>
                    <div class="input-group" id="adding2"></div>
                    <div class="input-group" id="adding3"></div>
                    <div class="input-group" id="adding4"></div>
                    <div class="input-group" id="adding5"></div>
                    <div class="input-group" id="adding6"></div>
                    <div class="input-group" id="adding7"></div>
                    <hr>
                    <div>Restrição de arquivos:</div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="pveto" value="deny-padrao" id="deny-padrao"
                        checked>
                        <label class="form-check-label">Padrão</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="cveto" value="deny-compactados" id="deny-compactados" checked>
                        <label class="form-check-label">Compactados</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="iveto" value="deny-imagens" id="deny-imagens" checked>
                        <label class="form-check-label">Imagens</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="mveto" value="deny-macros" id="deny-macros" checked>
                        <label class="form-check-label">Macros</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="vveto" value="deny-video" id="deny-video" checked>
                        <label class="form-check-label">Vídeos</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="aveto" value="deny-audio" id="deny-audio" checked>
                        <label class="form-check-label">Áudios</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="eveto" value="deny-executaveis" id="deny-executaveis" checked>
                        <label class="form-check-label">Executáveis</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="atveto" value="deny-atalhos" id="deny-atalhos" checked>
                        <label class="form-check-label">Atalhos</label>
                    </div>
                    <input type="submit" value="OK" name="validar" id="validar" class="form-control btn btn-primary mt-2">
                </form>
            </div>
        </div>
<?php 
    if(isset($_POST['validar'])) {
        $name = $_POST['name'];
        $path = $_POST['path'];
        $rulefr = $_POST['rulefr'];
            switch ($rulefr) {
                case ':f':
                    $rulefr = ":f";
                    break;
                case ':r':
                    $rulefr = ":r";
                    break;
            }
        if(isset($_POST['rulefr2'])) {
            $rulefr2 = $_POST['rulefr2'];
            switch ($rulefr2) {
                case ':f':
                    $rulefr2 = ":f";
                    break;
                case ':r':
                    $rulefr2 = ":r";
                    break;
            }
        }
        if(isset($_POST['rulefr3'])) {
            $rulefr3 = $_POST['rulefr3'];
            switch ($rulefr3) {
                case ':f':
                    $rulefr3 = ":f";
                    break;
                case ':r':
                    $rulefr3 = ":r";
                    break;
            }
        }
        if(isset($_POST['rulefr4'])) {
            $rulefr4 = $_POST['rulefr4'];
            switch ($rulefr4) {
                case ':f':
                    $rulefr4 = ":f";
                    break;
                case ':r':
                    $rulefr4 = ":r";
                    break;
            }
        }
        if(isset($_POST['rulefr5'])) {
            $rulefr5 = $_POST['rulefr5'];
            switch ($rulefr5) {
                case ':f':
                    $rulefr5 = ":f";
                    break;
                case ':r':
                    $rulefr5 = ":r";
                    break;
            }
        }
        if(isset($_POST['rulefr6'])) {
            $rulefr6 = $_POST['rulefr6'];
            switch ($rulefr6) {
                case ':f':
                    $rulefr6 = ":f";
                    break;
                case ':r':
                    $rulefr6 = ":r";
                    break;
            }
        }
        if(isset($_POST['rulefr7'])) {
            $rulefr7 = $_POST['rulefr7'];
            switch ($rulefr7) {
                case ':f':
                    $rulefr7 = ":f";
                    break;
                case ':r':
                    $rulefr7 = ":r";
                    break;
            }
        }
        $oprule = $_POST['op-rule'];
            switch ($oprule) {
                case 'adduser':
                    $oprule = "+u:";
                    break;
                case 'addgroup':
                    $oprule = "+g:";
                    break;
                case 'remuser':
                    $oprule = "-u:";
                    break;
                case 'remgroup':
                    $oprule = "-g:";
                    break;
            }
            if(isset($_POST['op-rule2'])) {
                $oprule2 = $_POST['op-rule2'];
                    switch ($oprule2) {
                        case 'adduser2':
                            $oprule2 = ";u:";
                            break;
                        case 'addgroup2':
                            $oprule2 = ";g:";
                            break;
                }
                $rule2 =  $rule2 = $_POST['rule2'];
            }
            if(isset($_POST['op-rule3'])) {
                $oprule3 = $_POST['op-rule3'];
                    switch ($oprule3) {
                        case 'adduser3':
                            $oprule3 = ";u:";
                            break;
                        case 'addgroup3':
                            $oprule3 = ";g:";
                            break;
                }
                $rule3 =  $rule3 = $_POST['rule3'];
            }
            if(isset($_POST['op-rule4'])) {
                $oprule4 = $_POST['op-rule4'];
                    switch ($oprule4) {
                        case 'adduser4':
                            $oprule4 = ";u:";
                            break;
                        case 'addgroup4':
                            $oprule4 = ";g:";
                            break;
                }
                $rule4 =  $rule4 = $_POST['rule4'];
            }
            if(isset($_POST['op-rule5'])) {
                $oprule5 = $_POST['op-rule5'];
                    switch ($oprule5) {
                        case 'adduser5':
                            $oprule5 = ";u:";
                            break;
                        case 'addgroup5':
                            $oprule5 = ";g:";
                            break;
                }
                $rule5 =  $rule5 = $_POST['rule5'];
            }
            if(isset($_POST['op-rule2'])) {
                $oprule6 = $_POST['op-rule6'];
                    switch ($oprule6) {
                        case 'adduser6':
                            $oprule6 = ";u:";
                            break;
                        case 'addgroup6':
                            $oprule6 = ";g:";
                            break;
                }
                $rule6 =  $rule6 = $_POST['rule6'];
            }
            if(isset($_POST['op-rule7'])) {
                $oprule7 = $_POST['op-rule7'];
                    switch ($oprule7) {
                        case 'adduser7':
                            $oprule7 = ";u:";
                            break;
                        case 'addgroup7':
                            $oprule7 = ";g:";
                            break;
                }
                $rule7 =  $rule7 = $_POST['rule7'];
            }
        #Vetos. 
        $vetopadrao = "/*.bat/*.cmd/*.nds/*.pif/*.com/*.scr/*.dll/*.msp/*.msu/*.ini/*.inf/*.jad/*.jar/*.reg/*.vbs/*.dat/*.cab/*.html/*.php/*.ps1/*.scr/*.ws/*.GADGET/*.msp/*.com/*.cpl/*.msc/*.etc/*.vbe/*.js/*.se/*.wsf/*.wsc/*.ps2/*.ps2xml/*.psc1/*.psc2/*.msh/*.msh1/*.msh1xml/*.mshxml/*.scf/*.inf/*.DOCM/*.DOTM/*.XLTM/*.XLAM/*.PPTM/*.POTM/*.PPAM/*.PPSM/*.SLDM/*.mkv/*.webp/*.xdvi/*.gz/*.ARC/*.arj/*.bin/*dmg/*.gzip/*.hqx/*.sit/*.sitx/*.se/*.ace/*.uu/*.uue/*.7z/";
        $vetocompactados = "*.rar/*.zip/";
        $vetoimagens = "*.png/*.bmp/*.jpg/";
        $vetomacros = "*.xlsm/";
        $vetoaudio = "*.mp3/";
        $vetovideo = "*.mp4/";
        $vetoexecutaveis = "*.exe/*.msi/";
        $vetoatalhos = "*.lnk/";

        $rule = $_POST['rule'];
        
        if(isset($_POST['pveto']) == 'deny-padrao') {
            $padrao = $vetopadrao;
        }
        if(isset($_POST['cveto']) == 'deny-compactados') {
            $compactados = $vetocompactados;
        }
        if(isset($_POST['iveto']) == 'deny-imagens') {
            $imagens = $vetoimagens;
        }
        if(isset($_POST['mveto']) == 'deny-macros') {
            $macros = $vetomacros;
        }
        if(isset($_POST['aveto']) == 'deny-audio') {
            $audio = $vetoaudio;
        }
        if(isset($_POST['vveto']) == 'deny-video') {
            $video = $vetovideo;
        }
        if(isset($_POST['eveto']) == 'deny-executaveis') {
            $executaveis = $vetoexecutaveis;
        }
        if(isset($_POST['atveto']) == 'deny-atalhos') {
            $atalhos = $vetoatalhos;
        }
            $shell = exec("sudo -u www-data sudo cid share add mode=common name='$name' path='$path' rule='$oprule$rule$rulefr$oprule2$rule2$rulefr2$oprule3$rule3$rulefr3$oprule4$rule4$rulefr4$oprule5$rule5$rulefr5$oprule6$rule6$rulefr6$oprule7$rule7$rulefr7' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos' && sudo -u www-data sudo chmod -R 771 '$path' && sudo -u www-data sudo chgrp 'domain admins' -R '$path'");
            if($shell == "$name share added!" || $shell == "$name share updated!") {
                echo "Feito.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name='$name' path='$path' rule='$oprule$rule$rulefr$oprule2$rule2$rulefr2$oprule3$rule3$rulefr3$oprule4$rule4$rulefr4$oprule5$rule5$rulefr5$oprule6$rule6$rulefr6$oprule7$rule7$rulefr7' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos'";

                echo "
                <script src='./js/jquery-3.6.1.min.js'></script>
                <script src='./js/sweetalert2.all.min.js'></script>
                <script type='text/javascript'>
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            title: 'Feito.',
                            text: 'A pasta $name foi compartilhada.',
                            icon: 'success',
                            showConfirmButton: false
                        })
                    });
                    </script>
                ";
            } else {
                echo "Erro.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name=$name path=$path rule=$oprule$rule $veto";

                echo "
                <script src='./js/jquery-3.6.1.min.js'></script>
                <script src='./js/sweetalert2.all.min.js'></script>
                <script type='text/javascript'>
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            title: 'Ocorreu um erro.',
                            text: 'Verifique se não há alguma informação incorreta nos campos.',
                            icon: 'error',
                            showConfirmButton: false
                        })
                    });
                    </script>
                ";
            }
    }
?>
</div>
</body>
</html>
<script src="./js/jquery-3.6.1.min.js"></script>
<script src="./js/index.js"></script>