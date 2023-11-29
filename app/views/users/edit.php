<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password" value="<?php echo $data['row']['user_password']; ?>" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="user_name" value="<?php echo $data['row']['user_name']; ?>" required></td>
        </tr>
        <tr>
            <td>Masa Aktif</td>
            <td>
            <select name="user_aktif">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>