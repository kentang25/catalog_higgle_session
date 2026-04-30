<?php

    namespace App\Controllers;
    use App\Models\M_higgle_session;
    use App\Controllers\BaseController;

    Class Admin_higgle extends BaseController{

        protected $higgleModel;

        public function __construct()
        {
            $this->higgleModel = new M_higgle_session();
        }

        public function index()
        {
            $data = [
                'title'             => "admin-higgle",
                'higgle_session'    => $this->higgleModel->getHiggle()
            ];

            return view('admin/v_admin', $data);
        }

        // public function save()
        // {

        // }
    }

?>