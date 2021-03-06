<?php


namespace App\Controllers;


use App\Models\Movie;
use CodeIgniter\Controller;


class MoviesController extends Controller
{
    private $upload;

    public function index()
    {
        helper(['form']);
        $session = Session();
        $model = new Movie();

        $data['movies'] = $model->where('users_id', $session->get('id'))->findAll();


        echo view('shared/header', [
            'name' => $session->get('firstname') . ' ' . $session->get('lastname'),
            'email' => $session->get('email')
        ]);
        echo view('movies/index', $data);
        echo view('shared/footer');


    }

    public function view($id = null)
    {
        helper(['form']);
        $model = new Movie();
        $data['movie'] = $model->where('id', $id)->first();
        $session = Session();
        echo view('shared/header');
        echo view('movies/view', $data);
        echo view('shared/footer');
    }

    public function addMovieForm()
    {
        helper(['form']);
        $data = [];
        $session = Session();
//        echo view('movies/add');
        echo view('shared/header');
        echo view('movies/add', $data);
        echo view('shared/footer');
    }

    public function addMovie()
    {
        helper(['form']);
        $rules = [
            'title' => 'required|min_length[3]|max_length[100]',
            'desc' => 'required|min_length[3]|max_length[1000]',
            'release_date' => 'required',

            'thumbnail' => [
                'uploaded[thumbnail]',
                'mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'max_size[thumbnail,4096]',
            ],
            'video_file' => [
                'uploaded[video_file]',
                'mime_in[video_file,video/mp4, video/mkv]',
                'max_size[video_file,10240]',
            ],
//            'video_file' => 'required',

        ];


        if ($this->validate($rules)) {
            $thumbnail = $this->request->getFile('thumbnail');
            $imageName = $thumbnail->getRandomName();
            $thumbnail->move('uploads/', $imageName);

            $thumbnailData = [
                'name' => $thumbnail->getName(),
                'type' => $thumbnail->getClientMimeType(),
            ];

            $video = $this->request->getFile('video_file');
            $videoName = $video->getRandomName();
            $video->move('uploads/', $videoName);

            $videoData = [
                'name' => $video->getName(),
                'type' => $video->getClientMimeType(),
            ];


            $model = new Movie();
            $session = Session();
            $data = [
                'users_id' => (int)$session->get('id'),
                'title' => $this->request->getVar('title'),
                'desc' => $this->request->getVar('desc'),
                'release_date' => $this->request->getVar('release_date'),
                'thumbnail' => $thumbnailData['name'],
                'video' => $videoData['name'],
            ];

            $model->save($data);
            $locale = $session->get('lang');
            return redirect()->to('../' . $locale . '/movies');

        } else {
            $data['validation'] = $this->validator;
            echo view('shared/header');
            echo view('movies/add', $data);
            echo view('shared/footer');

        }

    }

    public function edit($id = null)
    {
        $model = new Movie();
        $data['movie'] = $model->where('id', $id)->first();
//        return view('movies/edit', $data);

        echo view('shared/header');
        echo view('movies/edit', $data);
        echo view('shared/footer');
    }

    public function update()
    {
        helper(['form', 'url']);
        $model = new Movie();
        $id = $this->request->getVar('id');

        $data = [
            'title' => $this->request->getVar('title'),
            'desc' => $this->request->getVar('desc'),
            'release_date' => $this->request->getVar('release_date'),
        ];


        if (!empty($_FILES['thumbnail']['name'])) {
            $thumbnail = $this->request->getFile('thumbnail');
            $imageName = $thumbnail->getRandomName();
            $thumbnail->move('uploads/', $imageName);

            $thumbnailData = [
                'name' => $thumbnail->getName(),
                'type' => $thumbnail->getClientMimeType(),
            ];

            $data['thumbnail'] = $thumbnailData['name'];


        }


        if (!empty($_FILES['video_file']['name'])) {
            $video = $this->request->getFile('video_file');
            $videoName = $video->getRandomName();
            $video->move('uploads/', $videoName);

            $videoData = [
                'name' => $video->getName(),
                'type' => $video->getClientMimeType(),
            ];
            $data['video'] = $videoData['name'];
        }


        $model->update($id, $data);

        $session = Session();
        $locale = $session->get('lang');
        return redirect()->to('../' . $locale . '/movies');
    }

    public function delete($id = null)
    {
        $model = new Movie();
        $data['movie'] = $model->where('id', $id)->delete();
        $session = Session();
        $locale = $session->get('lang');
        return redirect()->to('../' . $locale . '/movies');
    }
}