<?php
//conectar com o banco
$servername="localhost";
$username="root";
$password="usbw";
$dbname="imobiliaria";
 
$conn=mysqli_connect($servername, $username,$password, $dbname);
//verificar a conexão
if(!$conn){
    die ("erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
    //Recuperar as informações do banco
    $sql = "SELECT *FROM imoveis";
    $resultado = mysqli_query($conn,$sql);
?>
 
 
 
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 <h1 class="titulo"> Imobiliaria</h1>
 <?php include 'cabecalho.php';?>
 <h1>Imoveis</h1>
 <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Tipo</th>
    <th>Transação</th>
    <th>Descrição</th>
    <th>Endereço</th>
    <th>Preço</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM imoveis";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["tipo"] . "</td>";
                echo "<td>" . $row["transacao"] . "</td>";
                echo "<td>" . $row["descricao"] . "</td>";
                echo "<td>" . $row["endereco"] . "</td>";
                echo "<td>R$ " . $row["preco"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum imóvel cadastrado.</td></tr>";
        }
        ?>
        </tbody>
 
    </table>
 
 
 </div>
 
 
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
mysqli_close($conn);
?>