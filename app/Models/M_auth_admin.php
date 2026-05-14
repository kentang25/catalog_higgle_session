<?php
    namespace App\Models;
    use CodeIgniter\Model;

    Class M_auth_admin extends Model{
        protected $table = 'tb_auth_admin';
        protected $primaryKey = 'id_auth_admin';
        protected $allowedFields = ['username', 'password'];

        public function getAdmin($id = false)
        {
            if($id == false){
                return $this->findAll();
            }

            return $this->where(['id_auth_admin' => $id])->first();
        }
    }
?>