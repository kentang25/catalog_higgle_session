<?php

    namespace App\Controllers;
    use App\Models\M_about_higgle;
    use App\Controllers\BaseController;

    Class About_higgle extends BaseController{
        protected $aboutModel;

        public function __construct()
        {
            $this->aboutModel = new M_about_higgle();
        }

        public function index()
        {
            $data = [
                'title' => 'About Higgle',
                'about_higgle' => $this->aboutModel->getAbout()
            ];

            return view('admin/v_about_higgle', $data);
        }

        public function save()
        {
            $rules = [
                'judul' => 'required',
                'about' => 'required',
                // 'gambar' => ''
            ];

            if($this->validate($rules) == false){
                return redirect()->to('/admin/about')->withInput();
            }else{
                $fileGambar = $this->request->getFile('gambar');
                $namaGambar = $fileGambar->getRandomName();

                $fileGambar->move('about/img_upload', $namaGambar);

                    $this->aboutModel->save([
                        'judul'     => $this->request->getPost('judul'),
                        'about'     => $this->request->getPost('about'),
                        'gambar'    => $namaGambar
                    ]);

                return redirect()->to('/admin/about');
            }
        }

        public function edit($id)
        {
            $data = [
                'title' => 'Edit About Higgle',
                'edit_about' => $this->aboutModel->getAbout($id)
            ];

            return view('admin/v_edit_about', $data);
        }

        public function update($id)
        {
            $rules = [
                'judul' => 'required',
                'about' => 'required'
            ];

            if($this->validate($rules) == false){
                return redirect()->to('/admin/about/edit/' . $id)->withInput();
            }else{
                $fileGambar = $this->request->getFile('gambar');

                if($fileGambar->isValid() && !$fileGambar->hasMoved()){
                    $namaGambar = $fileGambar->getRandomName();
                    $fileGambar->move('about/img_upload', $namaGambar);

                    $this->aboutModel->save([
                        'id_about'  => $id,
                        'judul'     => $this->request->getPost('judul'),
                        'about'     => $this->request->getPost('about'),
                        'gambar'    => $namaGambar
                    ]);

                }

                return redirect()->to('/admin/about');
            }
        }
    }

?>