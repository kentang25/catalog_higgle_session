<?php

    namespace App\Models;
    use CodeIgniter\Model;

    Class M_product_gallery extends Model{
        protected $table            = 'tb_gambar';
        protected $primaryKey       = 'id_gambar';
        protected $allowedFields    = ['nama_gambar', 'gambar', 'id_collection'];
        
        public function getGambar($id = false)
        {
            if($id == false){
                return $this->findAll();
            }else{
                return $this->where(['id_gambar' => $id])->first();
            }
        }
    }

?>