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
            <div class="col-sm-4 border rounded-3 p-3 bg-white">
                <h1 class="bg-primary p-2 rounded-3 text-white text-center mb-3">Adicionar</h1>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <label for="" class="mb-1">Nome:</label><input type="text" name="name" id="name" class="form-control mb-3" placeholder="Nome do usuário ou grupo" required>
                    <label for="" class="mb-1">Caminho da pasta:</label> <input type="text" name="path" id="path" class="form-control mb-3" placeholder="Caminho do diretório" required>
                    <label for="" class="mb-1">Regras:</label>
                    <div class="input-group mb-3">
                        <select name="op-rule" id="op-rule" class="form-select">
                                    <option value="adduser">+ Usuário</option>
                                    <option value="addgroup">+ Grupo</option>
                                    <option value="remuser">- Usuário</option>
                                    <option value="remgroup">- Grupo</option>
                                </select>
                            <input type="text" name="rule" id="rule" class="form-control" placeholder="usuário/grupo:f" required>
                    </div>
                    <label for="" class="mb-1">Permitir arq. compactados:</label><select name="veto" id="veto" class="form-select mb-3">
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
        $shell = shell_exec("sudo -u www-data sudo cid share add mode=common name=$name path=$path rule=$oprule$rule $veto");
            if($shell) {
                echo "Feito.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name=$name path=$path rule=$oprule$rule $veto";
            } else {
                echo "Erro.</br>$shell</br></br>sudo -u www-data sudo cid share add mode=common name=$name path=$path rule=$oprule$rule $veto";
            }
    }
?>
    </div>
</body>
</html>