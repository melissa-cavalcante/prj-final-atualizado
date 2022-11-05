<?php include "verifica-logado-adm.php"; ?>
<?php include "../MODEL/Produto.php"; ?>

<?php
$produto = new Produto;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área admistrador</title>
    <!--link css do css-->
    <link rel="stylesheet" href="../css's/area-produto.css">
    <link rel="stylesheet" href="../css's/adm.css">

    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</head>

<body>
    <div class="side-menu">
        <header>

            <div class="brand-name">
                <img src="../img/logo2.svg" alt="">
            </div>
        </header>

        <ul>
            <a href="./adm.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/tbfrtmlu.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>dashboard</span>
                </li>
            </a>
            <a href="#">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>produtos</span>
                </li>
            </a>
            <a href="./area-produtos.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>categorias</span>
                </li>
            </a>
            <a href="./area-produtos.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>vendas</span>
                </li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#121331,secondary:#e74c4c" style="width:20px;height:20px"></lord-icon>
                    </button>
                </div>
                <div class="user">
                    <button id="sair"><a href="logout-adm.php">Sair</a></button>
                    <div class="img-case">
                        <img src="../img/user.png" width="40px" height="40px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content" id="content">
            <div class="cards" id="cards">
                <div class="card" id="card">
                    <div class="box" id="box">
                        <?php

                        $pdo = Conexao::conectar();
                        $stmt = $pdo->prepare("select cateegoria from tbcategoria");
                        $stmt->execute();

                        $query = "SELECT COUNT(idCategoria) AS qtd FROM tbcategoria";
                        $resultadoCategoria = $pdo->query($query);
                        $qtdCategoria = $resultadoCategoria->fetchAll(PDO::FETCH_COLUMN);

                        ?>
                        <h1><?php echo ($qtdCategoria[0]); ?></h1>
                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>


                        <?php } ?>

                        <h3>Categorias</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <form action="cadastra-produto.php" id="formCadastro" method="post">
                <label>Categoria</label>
                <input type="text" name="categoria" id="categoria" placeholder="Categoria">
                <input type="submit" value="cadastrar">
            </form>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Pagamentos Recentes</h2>
                        <a href="#" class="btn">Ver Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <td style="font-weight: bolder;">ID da Categoria</td>
                            <td style="font-weight: bolder;">Categoria</td>
                        </tr>
                        <?php

                        $pdo = Conexao::conectar();
                        $stmt = $pdo->prepare("select cateegoria, idCategoria from tbcategoria");
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                            <tr>
                                <td><?php echo ($row['idCategoria']) ?></td>
                                <td><?php echo ($row['cateegoria']) ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Novos Clientes</h2>
                        <a href="#" class="btn">Veja Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <th>Perfil</th>
                            <th>Nome</th>
                            <th>Opção</th>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>