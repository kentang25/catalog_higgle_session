<?php

    namespace App\Controllers;
    use App\Models\M_higgle_session;
    use App\Models\M_product_gallery;
    use App\Models\M_about_higgle;
    use App\Controllers\BaseController;

    Class Higgle_session extends BaseController
    {
        protected $higgleModel;
        protected $gambarModel;

        protected $aboutModel;

        public function __construct()
        {
            $this->aboutModel  = new M_about_higgle();
            $this->gambarModel = new M_product_gallery();
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
                'higgle_collection' => $this->higgleModel->getHiggle(),
                'higgle_all_gambar' => $this->gambarModel->getGambar()
            ];

            return view('higgle/v_collection', $data);
        }

        public function about()
        {
            $data = [
                'title' => 'About Higgle',
                'about_higgle' => $this->aboutModel->getAbout()
            ];

            return view('higgle/v_about', $data);
        }
    }

?>