<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Stores List</title>
            </head>
            <body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created</th>
                    </tr>
                    <?php foreach ($stores as $store) : ?>
                    <tr>
                        <td><?php echo $stores->get_id(); ?></td>
                         <td><?php echo $stores->get_name(); ?></td>
                            <td><?php echo $stores->get_created_at(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <br>
                <h2>Add or Update Stock</h2>
                <form action='store.php' method="post">
                    <label> Id</label>
                    <input type='text' name='id'/><br>
                    <label>Name</label>
                    <input type='text' name='name'/><br>
                    <label>Created at</label>
                    <input type='text' name='created_at'/><br>
                    <input type="radio" name='insert or update' value="update">Update</br>
                    <label>&nbsp;</label>
                    <input type='submit' value="submit"/>
                </form>

