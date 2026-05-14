<?php

    namespace App\Controllers;
    use App\Models\M_auth_admin;
    use App\Controllers\BaseController;

    Class Admin_auth extends BaseController{

        protected $authModel;

        public function __construct()
        {
            $this->authModel = new M_auth_admin();
        }

        public function index()
        {
            $data = [
                'title' => 'Admin Login',
                'validation' => \Config\Services::validation()->getErrors()
            ];
            return view('layout_admin/template_login', $data);
        }
    }

?>