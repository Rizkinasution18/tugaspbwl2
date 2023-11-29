<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/categories/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_name" required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>