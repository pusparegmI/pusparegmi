!doctype html>
<html lang="en">
<body>

<h1>List of ALL my games!!!</h1>

<?php
include("game.php");

// Run SQL query
$sql = "SELECT * FROM Games ORDER BY release_date";
$results = mysqli_query($mysqli, $sql);

// Check for query error
if (!$results) {
    die("Query failed: " . mysqli_error($mysqli));
}
?>

<table border="1">
<tr>
    <th>Game Name</th>
    <th>Description</th>
    <th>Release Date</th>
    <th>Rating</th>
</tr>

<?php while($a_row = mysqli_fetch_assoc($results)): ?>
<tr>
    <td><?= $a_row['game_name'] ?></td>
    <td><?= $a_row['description'] ?></td>
    <td><?= $a_row['release_date'] ?></td>
    <td><?= $a_row['rating'] ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>