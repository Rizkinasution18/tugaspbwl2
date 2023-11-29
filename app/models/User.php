<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_name = $_POST['user_name'];

            $sql = "INSERT INTO tb_users
            SET user_email=:user_email, user_password=PASSWORD(:user_password), user_name=:user_name";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_name", $user_name);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_name = $_POST['user_name'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_name=:user_name
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_name=:user_name
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $user_email);
            if (!empty($password)) {
                  $stmt->bindParam(":user_password", $user_password);
            }
            $stmt->bindParam(":user_name", $user_name);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
