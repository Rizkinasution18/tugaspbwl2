<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/posts/save" method="post">
    <table>
        <tr>
            <td>KATEGORI</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>KODE PELANGGAN</td>
            <td><input type="varchar" name="pel_no" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="pel_name" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="varchar" name="pel_alamat" required></td>
        </tr>
        <tr>
            <td>NO.HP</td>
            <td><input type="varchar" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>
            <input type="text" name="pel_ktp" required>
            </td>
        </tr>
        <tr>
            <td>Seri</td>
            <td>
            <input type="text" name="pel_seri" required>
            </td>
        </tr>
        <tr>
            <td>Meteran</td>
            <td>
            <input type="varchar" name="pel_meteran" required>
            </td>
        </tr>
        <tr>
            <td>User</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optUser'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>