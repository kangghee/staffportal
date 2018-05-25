            <h1>Users List</h1>
            <form action="Users" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Created date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $user) { ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="user_id[]" value="<?php echo $user['id']; ?>" />
                            </td>
                            <td>
                                <a href="<?php echo "edit?user_id=".$user['id']; ?>">Edit</a>
                            </td>
                            <td>
                                <?php echo $user['name']; ?>
                            </td>
                            <td>
                                <?php echo $user['created_date']; ?>
                            </td>
                            <td>
                                <a href="<?php echo "delete?user_id=".$user['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <button type="submit" name="delete" value="delete">Delete</button>
                <br>
                This button should be made accessible only to administrators.<br>
                <button type="submit" name="deletepermanently" value="deletepermanently">Delete Permanently</button>
            </form>
