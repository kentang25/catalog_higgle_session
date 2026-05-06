<?php

    namespace App\Controllers;
    use App\Models\M_higgle_session;
    use App\Controllers\BaseController;

    Class Higgle_session extends BaseController
    {
        protected $higgleModel;

        public function __construct()
        {
            $this->higgleModel = new M_higgle_session();
        }

        public function index()
        {
            $data = [
                'title' => 'Higgle Session',
                'higgle_session' => $this->higgleModel->getHiggle()
            ];

            return view('higgle/v_home', $data);
        }

        public function collection()
        {
            $data = [
                'title' => 'Collection',
                'higgle_collection' => $this->higgleModel->getHiggle()
            ];

            return view('higgle/v_collection', $data);
        }
    }

?>