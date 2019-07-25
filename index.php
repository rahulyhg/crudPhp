<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags and links to bootstrap and css -->
    <title>CRUD using PHP and MYSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- -->
</head>
<!--  php include("php/conexao.php");    -->

<body>
    <div class="menu">
        <h2>Cadastro de funcionário</h2>
        <div class="btns">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastrar" data-whatever="@cadastrar">CADASTRAR</button>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#visualizar" data-whatever="@visualizar">VISUALIZAR</button>
        </div>

        <!-- Cadastrar -->

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="cadastrarLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cadastrarLabel">CADASTRO </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="php/recebeIndex.php">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input name="nome" type="text" class="form-control" id="recipient-name" autofocus required>

                                <label for="recipient-email" class="col-form-label">E-mail</label>
                                <input name="email" type="email" class="form-control" id="recipient-email" required>

                                <label for="recipient-estado" class="col-form-label">Estado:</label>
                                <input name="estado" type="text" class="form-control" id="recipient-estado" required>

                                <label for="recipient-sexo" class="col-form-label">Sexo:</label> </br>
                                <input type="radio" name="radio" value="f">
                                <label name="f"> Feminino </label>

                                <input type="radio" name="radio" id="checkM" value="m">
                                <label name="m"> Masculino </label> </br>


                                <label for="select" required>Data de Nascimento:</label> </br>

                                <!-- Dia --> <select class="form-control" name="dia" id="selectDia" required>
                                    <?php
                                    $dia;
                                    for ($dia = 0; $dia <= 31; $dia++) {
                                        echo " <option required> $dia </option>   ";
                                    }
                                    ?>
                                </select>

                                <!-- Mês --> <select class="form-control" name="mes" id="selectMes" required>
                                    <option> Janeiro </option>
                                    <option> Fevereiro </option>
                                    <option> Março </option>
                                    <option> Abril </option>
                                    <option> Maio </option>
                                    <option> Junho </option>
                                    <option> Julho </option>
                                    <option> Agosto </option>
                                    <option> Setembro </option>
                                    <option> Outubro </option>
                                    <option> Novembro </option>
                                    <option> Dezembro </option>
                                </select>

                                <!-- Ano --> <select class="form-control" name="ano" id="selectAno" required>
                                    <?php
                                    $ano;
                                    for ($ano = 1925; $ano <= 2019; $ano++) {
                                        echo " <option> $ano </option>   ";
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-dark" name="apagar" type="reset" value="Apagar">
                        <input class="btn btn-dark" name="enviar" type="submit" value="Enviar" href="php/recebeIndex.php">
                    </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Visualizar -->

        <div class="modal fade bd-example-modal-lg" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="larguraTabela">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cadastrarLabel">FUNCIONÁRIOS </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-md table-hover">
                            <caption>Lista de Funcionários</caption>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">E-MAIL</th>
                                    <th scope="col">ESTADO</th>
                                    <th scope="col">DATA DE NASCIMENTO</th>
                                    <th scope="col">SEXO: </th>
                                    <th scope="col">ATUALIZAR</th>
                                    <th scope="col">APAGAR</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row disable">1</th>
                                    <td>Vitor Rubim Passos </td>
                                    <td>Vitorrubim1@hotmail.com</td>
                                    <td>São Paulo</td>
                                    <td>11 de Junho de 2002</td>
                                    <td>Masculino</td>
                                    <td><a type="button" class="btn btn-dark" href="php/update.php">ATUALIZAR</a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAlert">APAGAR </button></td>
                                </tr>
                                <tr>
                                    <th scope="row disable">2</th>
                                    <td>Thiago Melo</td>
                                    <td>ThiagoMelo@gmail.com</td>
                                    <td>Bahia</td>
                                    <td>20 de Maio de 1987</td>
                                    <td>Masculino</td>
                                    <td><a type="button" class="btn btn-dark" href="php/update.php">ATUALIZAR</a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAlert">APAGAR </button></td>
                                </tr>
                                <tr>
                                    <th scope="row disable">3</th>
                                    <td>Marco Silva</td>
                                    <td>MarcoSales@ig.com.br</td>
                                    <td>Rio de Janeiro</td>
                                    <td>17 de Abril de 1975</td>
                                    <td>Masculino</td>
                                    <td><a type="button" class="btn btn-dark" href="php/update.php">ATUALIZAR</a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAlert">APAGAR </button></td>
                                </tr>
                                <tr>
                                    <th scope="row disable">4</th>
                                    <td>Marilene Almeida</td>
                                    <td>Lene123@gmail.com.br</td>
                                    <td>Santa Catarina</td>
                                    <td>30 de Julho de 1995</td>
                                    <td>Feminino </td>
                                    <td><a type="button" class="btn btn-dark" href="update.php">ATUALIZAR</a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalAlert">APAGAR </button></td>
                                </tr>



                                <!-- MODAL ALERT FOR EXCLUSION -->
                                <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Mudanças feitas serão Permanentes!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="delete.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $idFuncionario; ?>" />
                                                    <div class="alert alert-danger"> Deseja realmente excluir este Funcionário?
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <a type="submit" href="php/delete.php" class="btn btn-danger">Sim</a>
                                                <button type="button" class="btn btn-dark" data-dismiss="modal"> Não </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background"></div>


    <!-- JavaScript and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>