<?php

    namespace App\Models;
    use CodeIgniter\Model;
    

    Class M_higgle_session extends Model{

        protected $table            = 'collections';
        protected $primaryKey       = 'id_collection';
        protected $allowedFields    = ['nama_band', 'kategori', 'gambar'];


        public function getHiggle($id = false)
        {
            if($id == False){
                return $this->findAll();
            }else{
                return $this->where(['id_collections' => $id])->first();
            }
        }
    }

?>