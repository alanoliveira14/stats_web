<?php
include ("includes/header.php");
$ch = curl_init('http://localhost:8080/apistats/jogador/meias');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8',
        'Authorization:' . $_SESSION['uToken']
    ));

$result = curl_exec($ch);
$resultado = json_decode($result, true);

?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <br/>
        <div class="row">
            <center>
                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Nome Completo</th>
                            <th>Nome Camisa</th>
                            <th>Clube</th>
                            <th>Posição</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>Pé</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                                <td><img src="<?=$res['imgOficial']?>" height="100px" width="100px"/></a></td>
                                <td><?=$res['nome']?></td>
                                <td><?=$res['nomeCamisa']?></td>
                                <td><img src="<?=$res['imgClube']?>" height="23px" width="20px"/> &nbsp;<?=$res['clube']?></td>
                                <td><?=$res['posicao']?></td>
                                <td><?=$res['altura']?>cm</td>
                                <td><?=$res['peso']?>kg</td>
                                <td><?=$res['peFavorito']?></td>

                            </tr>
                            <?php
                        endforeach
                        ?>
                        </tbody>
                    </table>
                </div>
            </center>

            <?php
            include ("includes/footer.php");
            ?>
