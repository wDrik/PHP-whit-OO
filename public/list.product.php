<table>

    <tr>
        <td>Id:</td>
        <td>Name:</td>
        <td>Desc:</td>
    </tr>

    <?php foreach ($list as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['description'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>