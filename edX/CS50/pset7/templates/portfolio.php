<?php
include 'common.php';
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th colspan="1">Symbol</th>
        <th colspan="1">Name</th>
        <th colspan="1">Shares</th>
        <th colspan="1">Price</th>
        <th colspan="1">Total</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($positions as $position)
    {
        echo("<tr>");
        echo("<td>" . $position["symbol"] . "</td>");
        echo("<td>" . $position["name"] . "</td>");
        echo("<td>" . $position["shares"] . "</td>");
        echo("<td>$" . number_format($position["price"], 2) . "</td>");
        echo("<td>$" . number_format($position["total"], 2) . "</td>");
        echo("</tr>");
    }
    $total = 0;
    foreach ($positions as $position)
    {
        $total = $total + ( $position["shares"] * $position["price"]);
    }
    ?>
    <tr>
        <td colspan="4">Grand Total</td>
        <td colspan="4">$<?=number_format($total, 2)?></td>
    </tr>
    <tr>
        <td colspan="4">Balance Cash</td>
        <td colspan="4">$<?=number_format($users[0]["cash"], 2)?></td>
    </tr>
    </tbody>
</table>

<script>
    $(“img”).hide();
</script>
