<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>CID-GUI</title>
</head>
<body class="bg-whitesmoke">
    <div class="container p-5 justify-items-center">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6 border rounded-3 p-3 bg-white">
            <div class="d-flex justify-content-between"><h1>Atualizar</h1><a href="./index.php" class="btn btn-primary p-2 mb-3"> Adicionar</a></div>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <label for="" class="mb-1">Nome:</label><input type="text" name="name" id="name" class="form-control mb-3" placeholder="Nome do compartilhado" required>
                    <label for="" class="mb-1">Regras:</label>
                    <div class="input-group mb-3">
                        <select name="op-rule" id="op-rule" class="form-select">
                                    <option value="none">Escolher</option>
                                    <option value="adduser">+ Usuário</option>
                                    <option value="addgroup">+ Grupo</option>
                                    <option value="remuser">- Usuário</option>
                                    <option value="remgroup">- Grupo</option>
                                </select>
                            <input type="text" name="rule" id="rule" class="form-control" placeholder="usuário/grupo">
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" id="radio1" name="rulefr" value=":f"> Leitura e gravação :f
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" id="radio2" name="rulefr" value=":r"> Apenas leitura :r
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                    <hr>
                    <div>Restrição de arquivos:</div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="pveto" value="deny-padrao" id="deny-padrao" >
                        <label class="form-check-label">Padrão</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="cveto" value="deny-compactados" id="deny-compactados" >
                        <label class="form-check-label">Compactados</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="iveto" value="deny-imagens" id="deny-imagens" >
                        <label class="form-check-label">Imagens</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="mveto" value="deny-macros" id="deny-macros" >
                        <label class="form-check-label">Macros</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="vveto" value="deny-video" id="deny-video" >
                        <label class="form-check-label">Vídeos</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="aveto" value="deny-audio" id="deny-audio" >
                        <label class="form-check-label">Áudios</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="eveto" value="deny-executaveis" id="deny-executaveis" >
                        <label class="form-check-label">Executáveis</label>
                    </div>
                    <div class="form-check form-switch form-check-inline mt-2">
                        <input class="form-check-input" type="checkbox" name="atveto" value="deny-atalhos" id="deny-atalhos" >
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
        $oprule = $_POST['op-rule'];
            switch ($oprule) {
                case 'none':
                    $oprule = NULL;
                    break;
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
                $allowfiles = '';
        
                $rule = $_POST['rule'];
                if(isset($_POST['pveto']) == 'deny-padrao') {
                    $padrao = $vetopadrao;
                } elseif (isset($_POST['pveto']) == NULL) {
                    $padrao = NULL;
                }
                
                if(isset($_POST['cveto']) == 'deny-compactados') {
                    $compactados = $vetocompactados;
                } elseif (isset($_POST['cveto']) == NULL) {
                    $compactados = NULL;
                }

                if(isset($_POST['iveto']) == 'deny-imagens') {
                    $imagens = $vetoimagens;
                } elseif (isset($_POST['iveto']) == NULL) {
                    $imagens = NULL;
                }

                if(isset($_POST['mveto']) == 'deny-macros') {
                    $macros = $vetomacros;
                } elseif (isset($_POST['mveto']) == NULL) {
                    $macros = NULL;
                }

                if(isset($_POST['aveto']) == 'deny-audio') {
                    $audio = $vetoaudio;
                } elseif (isset($_POST['aveto']) == NULL) {
                    $audio = NULL;
                }

                if(isset($_POST['vveto']) == 'deny-video') {
                    $video = $vetovideo;
                } elseif (isset($_POST['vveto']) == NULL) {
                    $video = NULL;
                }

                if(isset($_POST['eveto']) == 'deny-executaveis') {
                    $executaveis = $vetoexecutaveis;
                } elseif (isset($_POST['eveto']) == NULL) {
                    $executaveis = NULL;
                }
                
                if(isset($_POST['atveto']) == 'deny-atalhos') {
                    $atalhos = $vetoatalhos;
                } elseif (isset($_POST['atveto']) == NULL) {
                    $atalhos = NULL;
                }

        if($oprule == NULL) {
            $shell = exec("sudo -u www-data sudo cid share add mode=common name='$name' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos'");
        } 
        
        elseif($padrao == NULL && $compactados == NULL && $imagens == NULL && $macros == NULL && $audio == NULL && $video == NULL && $executaveis == NULL && $atalhos == NULL) {
            $shell = exec("sudo -u www-data sudo cid share add mode=common name='$name' rule='$oprule$rule$rulefr'");
        }
        else {
            $shell = exec("sudo -u www-data sudo cid share add mode=common name='$name' rule='$oprule$rule$rulefr' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos'");
        }
            if($shell) {
                echo "Feito.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name='$name' rule='$oprule$rule$rulefr' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos'";

                echo "
                <script src='./js/jquery-3.6.1.min.js'></script>
                <script src='./js/sweetalert2.all.min.js'></script>
                <script type='text/javascript'>
                    $(document).ready(function(){
                        Swal.fire({
                            position: 'top-end',
                            title: 'Feito.',
                            text: 'A pasta $name foi atualizada.',
                            icon: 'success',
                            showConfirmButton: false
                        })
                    });
                    </script>
                ";
            } else {
                echo "Erro.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name='$name' rule='$oprule$rule$rulefr' comment='$padrao$compactados$imagens$macros$audio$video$executaveis$atalhos'";

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
<script src='./js/jquery-3.6.1.min.js'></script>
<script src="./js/upshare.js"></script>