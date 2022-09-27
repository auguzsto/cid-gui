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
        <a href="#" class="btn btn-danger">Logs</a>
    </form>
  </div>
</nav>
<body class="bg-whitesmoke">
    <div class="container p-5 justify-items-center">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-xl border rounded-3 p-3 bg-white">
            <div class="d-flex justify-content-between"><h1>Auditoria</h1><a href="./index.php" class="btn btn-primary p-2 mb-3"> Voltar</a></div>
            <div class="d-flex justify-content-between">Por enquanto apenas: Pasta criada, renomeação de objeto, remoção de objeto. Isso é um teste.</div>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="mt-3">
                    <label for="" class="mb-1">Filtros:</label>
                    <div class="input-group mb-3">
                        <input type="date" id="data" name="data" placeholder="Data" class="form-control" required>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome do compartilhamento" required>
                        <input type="submit" value="OK" name="validar" id="validar" class="form-control btn btn-primary">
                    </div>
                   
                </form>
                <?php 
                    if(isset($_POST['validar'])) {
                        $name = $_POST['name'];
                        $formatDate = array("2022-", "01-", "02-", "03-", "04-", "05-", "06-", "07-", "08-", "09-", "10-", "11-", "12-");
                        $replaceDate = array("","Jan (","Fab (","March (","Apr (","May (","Jun (","Jul (","Aug (", "Sep (", "Oct (", "Nov (", "Dec (");
                        $data = str_replace($formatDate, $replaceDate,$_POST['data']);
                        $shell = exec("sudo -u www-data sudo  cat /lab/logs/audit.log | grep -E '$data).*$name'", $output, $return);
                        echo "<b>debug</b> sudo -u www-data sudo  cat /lab/logs/audit.log | grep -E '$data).*$name'";
                        foreach($output as $rows) {
                            $strings = array('cid-lab smbd_audit:', 'ok|', 'mkdirat|', '_laboratorio.local', 'renameat|', 'unlinkat|', '|/', '|');
                            $replace = array("", "", "<span class='border rounded bg-warning text-light p-1'><b> Criou uma pasta </b></span>", "", "<span class='border rounded bg-success text-light p-1'> <b>Renomeou</b> </span> ", "<span class='border rounded bg-danger text-light p-1'> <b>Deletou</b> </span>", " <span class='border rounded bg-secondary p-1 text-light'>para</span>
                             /", " - ");
                            echo "<pre class='btn btn-light container border text-center'>".str_replace($strings, $replace, $rows)."</pre>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
