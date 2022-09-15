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
<body class="bg-whitesmoke">
    <div class="container p-5 justify-items-center">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-4 border rounded-3 p-3 bg-white">
                <h1 class="bg-primary p-2 rounded-3 text-white text-center mb-3">Adicionar</h1>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
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
                    <label for="" class="mb-1 mt-2">Permitir arq. compactados:</label><select name="veto" id="veto" class="form-select mb-3">
                    <option value="no">Não</option>
                    <option value="yes">Sim</option>
                    </select>
                    <input type="submit" value="OK" name="validar" id="validar" class="form-control btn btn-primary">
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
        $rule = $_POST['rule'];
        $veto = $_POST['veto'];
            switch ($veto){
                case 'no':
                    $veto = "--no-hidden";
                    break;
                case 'yes':
                    $veto = "--hidden";
                    break;
            }

            $shell = shell_exec("sudo -u www-data sudo cid share add mode=common name='$name' path='$path' rule='$oprule$rule$rulefr$oprule2$rule2$rulefr2$oprule3$rule3$rulefr3$oprule4$rule4$rulefr4$oprule5$rule5$rulefr5$oprule6$rule6$rulefr6$oprule7$rule7$rulefr7' $veto");
            if($shell) {
                echo "Feito.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name='$name' path='$path' rule='$oprule$rule$rulefr$oprule2$rule2$rulefr2$oprule3$rule3$rulefr3$oprule4$rule4$rulefr4$oprule5$rule5$rulefr5$oprule6$rule6$rulefr6$oprule7$rule7$rulefr7' $veto";
            } else {
                echo "Erro.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name=$name path=$path rule=$oprule$rule $veto";
            }
    }
?>
</div>
</body>
</html>
<script src="./js/sweetalert2.all.min.js"></script>
<script src="./js/index.js"></script>