            <h1>Update existing user</h1>
            <form action="editsave" method="POST">
            <?php foreach ($results as $user_record) { ?>
                    <input readonly="true" type="text" name="user_id" placeholder="User ID" value="<?php echo $user_record['id']; ?>">
                    <input type="text" name="user_name" placeholder="User name" value="<?php echo $user_record['name']; ?>">
                    <input type="submit" name="submit" value="Save">
            <?php } ?>
            </form>            
