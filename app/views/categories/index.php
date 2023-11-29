<h2>Golongan</h2>

<a href="<?php echo URL; ?>/categories/input" class="btn">Input Golongan</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_name']; ?></td>
                  <td><a href="<?php echo URL; ?>/categories/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/categories/delete/<?php echo $row['gol_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>