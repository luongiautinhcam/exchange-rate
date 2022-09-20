<?php
include 'connect.php';
$stm = $pdo->query('select * from exrate');
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
    <?php
    foreach($data as $nt)
    {
        ?>
        <tr>
            <td><?php echo $nt['CurrencyCode']?></td>
            <td><?php echo $nt['CurrencyName']?></td>
            <td><?php echo $nt['Buy']?></td>
            <td><?php echo $nt['Sell']?></td>
        </tr>
        <?php
    }
    ?>
</table>