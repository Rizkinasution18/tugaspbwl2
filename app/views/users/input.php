<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="user_name" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="user_role" required></td>
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
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>