<h2>Edit Post</h2>

<form action="<?php echo URL; ?>/posts/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>KATEGORI</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>" <?php echo $opt['gol_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_name" value="<?php echo $data['row']['pel_name']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>No.HP/td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>
            <input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Meteran</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>