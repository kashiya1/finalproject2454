
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Stores List</title>
            </head>
            <body>
                <table>
                    <tr>
                        <th>Stored ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Checked</th>
                        <th>Created</th>
                    </tr>
                    <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?php echo $items->get_store_id(); ?></td>
                         <td><?php echo $items->get_name(); ?></td>
                          <td><?php echo $items->get_quantity(); ?></td>
                           <td><?php echo $items->get_checked(); ?></td>
                            <td><?php echo $items->get_created_at(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <h2>Add or Update Stock</h2>
                <form action='store.php' method="post">
                    <label>Store Id</label>
                    <input type='text' name='store_id'/><br>
                    <label>Name</label>
                    <input type='text' name='name'/><br>
                    <label>Quantity</label>
                    <input type='text' name='quantity'/><br>
                    <label>Checked</label>
                    <input type='text' name='checked'/><br>
                    <label>Created at</label>
                    <input type='text' name='created_at'/><br>
                    <input type="radio" name='insert or update' value="update">Update</br>
                    <label>&nbsp;</label>
                    <input type='submit' value="submit"/>
                </form>
                <h2>Delete Store</h2>
                <form action="store.php" method="post">
                    <input type='hidden' name='action' value="delete"/>
                    <label>&nbsp;</label>
                    <input type="submit" value="Delete Store"/>
                </form>
            </body>
        </html>