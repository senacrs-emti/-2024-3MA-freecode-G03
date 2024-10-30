    <?php
$servername = "localhost";
$username = "root"; 
$password = "";      
$dbname = "BD";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para obter os dados de localização
$sql = "SELECT nome_local, latitude, longitude, descricao FROM Localizacoes";
$result = $conn->query($sql);

$locais = array();

if ($result->num_rows > 0) {
    // Armazena os dados em um array
    while ($row = $result->fetch_assoc()) {
        $locais[] = $row;
    }
}

// Retorna os dados em formato JSON
echo json_encode($locais);

$conn->close();


if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "createMarker(" . $row["latitude"] . ", " . $row["longitude"] . ", '" . $row["descricao"] . "');";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?> 
?>