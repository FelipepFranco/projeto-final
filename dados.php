<head>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-sBlY7/1Wy90Orsnj3AZUPEK+7RZVccRBHGe+/TVUPXjGL7rdoR1d5zkD46pyeX7h" crossorigin="anonymous"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head> 

<?php
    session_start();

    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        // Redireciona para a página de login
        header('Location: http://localhost/projeto-final-main/login.php');
        exit;
    }
    include_once("config.php");

    $sql = "SELECT * FROM cadastro ORDER BY id DESC";

    $result = $conexao->query($sql);

    // print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dados</title>
</head>
<body class=" d-flex flex-column justify-content-center align-items-center vh-100" style="background-color: #212529;">
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
            </tr>
        </thead>
        <tbody>
        <?php
            
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['nome_empresa']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['mensagem']."</td>";
                echo "</tr>";
            }

        ?>
        </tbody>
    </table>








</body>
</html>

<script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                "ordering": false
            });
        });
</script>