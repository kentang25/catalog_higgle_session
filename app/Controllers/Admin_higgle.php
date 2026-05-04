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

            // dd($data['higgle_session']);

            return view('admin/v_admin', $data);
        }

        public function save()
        {
            $rules = [
                'nama_band' => 'required',
                // 'gambar'    => '',
                'kategori'  => 'required'
            ];

            if($this->validate($rules) == false){
                return redirect()->to('/admin')->withInput();
            }else{
                $fileGambar = $this->request->getFile('gambar');
                // dd($fileGambar);
                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img_upload', $namaGambar);

                $this->higgleModel->save([
                    'nama_band' => $this->request->getPost('nama_band'),
                    'gambar'    => $namaGambar,
                    'kategori'  => $this->request->getPost('kategori')
                ]);

                return redirect()->to('/admin');
            }
        }

        public function edit($id)
        {
            $data = [
                'title'         => "edit-higgle",
                'higgle_edit'   => $this->higgleModel->getHiggle($id)
            ];

            return view('admin/v_edit_admin', $data);
        }

        public function update($id)
        {
            $rules = [
                'nama_band' => 'required',
                // 'gambar'    => '',
                'kategori'  => 'required'
            ];

            if($this->validate($rules) == false){
                return redirect()->to('/admin')->withInput();
            }else{
                $fileGambar = $this->request->getFile('gambar');

                if($fileGambar->isValid() && !$fileGambar->hasMoved()){
                    $namaGambar = $fileGambar->getRandomName();
                    $fileGambar->move('img_upload', $namaGambar);
                }else{
                    $namaGambar = $this->request->getPost('gambarLama');
                }

                $this->higgleModel->save([
                    'id_collection' => $id,
                    'nama_band'     => $this->request->getPost('nama_band'),
                    'kategori'      => $this->request->getPost('kategori'),
                    'gambar'        => $namaGambar
                ]);

                return redirect()->to('/admin');
            }

        }

        public function delete($id)
        {
            $this->higgleModel->delete($id);
            return redirect()->to('/admin');
        }
    }

?>