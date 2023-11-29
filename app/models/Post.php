<?php

namespace App\Models;

use App\Core\Model;

class Post extends Model
{

     public function show()
     {
          $query = "SELECT p.*, g.* FROM tb_pelanggan p
          INNER JOIN tb_golongan g
          ON p.pel_id_gol=g.gol_id ORDER BY pel_id";

          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function optCat()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $pel_id_gol = $_POST['pel_id_gol'];
          $pel_no = $_POST['pel_no'];
          $pel_name = $_POST['pel_name'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_seri = $_POST['pel_seri'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_id_user = $_POST['pel_id_user'];

          $sql = "INSERT INTO tb_pelanggan
            SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_name=:pel_name, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_id_user=:pel_id_user";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $pel_id_gol);
          $stmt->bindParam(":pel_no", $pel_no);
          $stmt->bindParam(":pel_name", $pel_name);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $pel_seri);
          $stmt->bindParam(":pel_meteran", $pel_meteran);
          $stmt->bindParam(":pel_id_user", $pel_id_user);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $pel_name = $_POST['pel_name'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_id_user = $_POST['pel_id_user'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_pelanggan
                  SET pel_name=:pel_name, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_meteran=:pel_meteran, pel_id_user=:pel_id_user
                  WHERE pel_id=:pel_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_name", $pel_name);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_meteran", $pel_meteran);
          $stmt->bindParam(":pel_id_user", $pel_id_user);
          $stmt->bindParam(":pel_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();
     }
}
