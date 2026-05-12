<?php

    namespace App\Models;
    use CodeIgniter\Model;

    Class M_about_higgle extends Model{
        
        protected $table            = 'tb_about';
        protected $primaryKey       = 'id_about';
        protected $allowedFields    = ['judul', 'about', 'gambar'];

        public function getAbout($id = false)
        {
            if($id === False){
                return $this->findAll();
            }else{
                return $this->where(['id_about' => $id])->first();
            }
        }
    }

?>