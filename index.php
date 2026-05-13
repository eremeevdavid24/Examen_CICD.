<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionare Utilizatori</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Adăugare Utilizatori</h1>

    <?php
    if (isset($_GET['success'])) {
        echo "<p class='success'>Utilizator adăugat cu succes!</p>";
    }
    ?>

    <form action="add_user.php" method="POST">
        <input type="text" name="username" placeholder="Nume utilizator" required>

        <input type="email" name="email" placeholder="Email" required>

        <button type="submit">Adaugă</button>
    </form>

    <h2>Lista Utilizatorilor</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Email</th>
            <th>Data</th>
        </tr>

        <?php
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
            }
        }
        ?>

    </table>

</div>

</body>
</html>