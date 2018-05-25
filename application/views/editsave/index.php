            <h1>Saving existing user</h1>

            <form action="editsave" method="POST">
                <input readonly="true" type="text" name="user_id" placeholder="User ID" value="<?php echo $result_array['user_id']; ?>">
                <input readonly="true" type="text" name="user_name" placeholder="User name" value="<?php echo $result_array['user_name']; ?>">
                <xinput type="submit" name="submit" value="Save">
            </form>            
