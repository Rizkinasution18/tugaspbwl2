<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/posts/input" class="btn">Input Pelanggan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>KODE</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>NO.HP</th>
                  <th>KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>USER ID</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['pel_no']; ?></td>
                        <td><?php echo $row['pel_name']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><?php echo $row['pel_seri']; ?></td>
                        <td><?php echo $row['pel_meteran']; ?></td>
                        <td><?php echo $row['pel_id_user']; ?></td>
                        <td><a href="<?php echo URL; ?>/posts/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/posts/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>