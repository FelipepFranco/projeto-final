<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-sBlY7/1Wy90Orsnj3AZUPEK+7RZVccRBHGe+/TVUPXjGL7rdoR1d5zkD46pyeX7h" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <style>
         #editarModal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            overflow: hidden;
            z-index: 9999;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <title>Dados</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-100" style="background-color: #212529;">
    <div class='d-flex p-2 bd-highlight border-bottom border-white'>
        <h2 class='text-white fs-2 fw-semibold w-100'>Dados Clientes</h2>
    </div>
    <table class='table table-dark table-striped' id="tabela">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">nome_empresa</th>
                <th scope="col">telefone</th>
                <th scope="col">email</th>
                <th scope="col">mensagem</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once("config.php");

            $sql = "SELECT * FROM cadastro ORDER BY id DESC";
            $result = $conexao->query($sql);

            while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['nome_empresa']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['mensagem']."</td>";
                echo "<td>";
                echo "<button class='btn btn-primary btn-sm' onclick='preencherEditarModal(" . $user_data['id'] . ", \"" . $user_data['nome'] . "\", \"" . $user_data['nome_empresa'] . "\", \"" . $user_data['telefone'] . "\", \"" . $user_data['email'] . "\", \"" . $user_data['mensagem'] . "\")'><i class='bi bi-pencil-square'></i></button>";
                echo "<button class='btn btn-danger btn-sm' onclick='excluirCliente(" . $user_data['id'] . ")'><i class='bi bi-trash3'></i></button>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Modal para editar dados do cliente -->
    <div id="editarModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Cliente</h2>
            <form id="editarForm">
                <input type="hidden" id="editClientId" name="id">
                <div class="mb-3">
                    <label for="editNome" class="form-label">Nome:</label>
                    <input type="text" id="editNome" name="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="editNomeEmpresa" class="form-label">Nome da Empresa:</label>
                    <input type="text" id="editNomeEmpresa" name="nome_empresa" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="editTelefone" class="form-label">Telefone:</label>
                    <input type="text" id="editTelefone" name="telefone" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="editEmail" class="form-label">Email:</label>
                    <input type="email" id="editEmail" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="editMensagem" class="form-label">Mensagem:</label>
                    <textarea id="editMensagem" name="mensagem" class="form-control"></textarea>
                </div>
                <button type="button" class="btn btn-success" onclick="atualizarCliente()">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                "ordering": false
            });
        });

        function excluirCliente(id) {
            if(confirm("Tem certeza que deseja excluir este cliente?")) {
                $.ajax({
                    url: 'excluir_cliente.php', 
                    method: 'POST',
                    data: { id: id },
                    success: function(response) {
                        if(response == 'success') {
                            $('#tabela').DataTable().row($(`button[onclick="excluirCliente(${id})"]`).closest('tr')).remove().draw();
                            console.log("Cliente excluído com sucesso.");
                        } else {
                            console.log("Erro ao excluir cliente.");
                        }
                    }
                });
            }
        }

        function preencherEditarModal(id, nome, nomeEmpresa, telefone, email, mensagem) {
            document.getElementById("editClientId").value = id;
            document.getElementById("editNome").value = nome;
            document.getElementById("editNomeEmpresa").value = nomeEmpresa;
            document.getElementById("editTelefone").value = telefone;
            document.getElementById("editEmail").value = email;
            document.getElementById("editMensagem").value = mensagem;
            var modal = document.getElementById("editarModal");
            modal.style.display = "block";
        }

        function atualizarCliente() {
            var id = document.getElementById("editClientId").value;
            var nome = document.getElementById("editNome").value;
            var nomeEmpresa = document.getElementById("editNomeEmpresa").value;
            var telefone = document.getElementById("editTelefone").value;
            var email = document.getElementById("editEmail").value;
            var mensagem = document.getElementById("editMensagem").value;

            $.ajax({
                url: 'atualizar_cliente.php',
                method: 'POST',
                data: {
                    id: id,
                    nome: nome,
                    nome_empresa: nomeEmpresa,
                    telefone: telefone,
                    email: email,
                    mensagem: mensagem
                },
                success: function(response) {
                    if (response == 'success') {
                        console.log("Cliente atualizado com sucesso.");
                        var modal = document.getElementById("editarModal");
                        modal.style.display = "none";
                        location.reload(); // Adicione esta linha para recarregar a página
                    } else {
                        console.log("Erro ao atualizar cliente.");
                    }
                }
            });
        }

        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function() {
            var modal = document.getElementById("editarModal");
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("editarModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
