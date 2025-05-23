<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 - PHP</title>
</head>
<body>
    <h1>Latihan 1</h1>
    <h3>Menampilkan 1 - 10</h3>
    <p>
        <?php 
            for ($i=1; $i <= 10; $i++) { 
                echo $i." ";
            }
        ?>
    </p>
    <h3>Menampilkan data yang bernilai genap</h3>
    <p>
        <?php 
            for ($i=1; $i <= 10; $i++){
                if ($i % 2 == 0) {
                    echo $i." ";
                }
            }
        ?>
    </p>
    <h1>Latihan 2</h1>
    <table border="1">
        <tr>
            <td>bilangan</td>
            <?php 
                for ($i=1; $i <= 10; $i++) {
                    echo '<td style="background-color: lime;">'.$i.'</td>';
                }
            ?>
        </tr>
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <tr>
        <?= '<td style="background-color: lime;">'.$i.'</td>' ?>
            <?php for ($j=1; $j <= 10; $j++) {
                if ($j % 2 == 1 && $i % 2 == 1) {
                    echo '<td style="background-color: yellow;">'.$i*$j.'</td>';
                } else {
                    echo '<td style="background-color: cyan;">'.$i*$j.'</td>';
                }
            } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>