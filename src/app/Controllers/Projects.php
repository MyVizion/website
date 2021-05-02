<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Projects extends BaseController
{
    public function index()
	{
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];
        var_dump($data['projects']);
        exit(1);

        echo view('site/header');
        echo view('site/overview', $data);
        #echo view('site/footer', $data);
	}

    public function view($slug = false)
    {
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];

        if (empty($data['projects']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the project item: '. $slug);
        }
        
        echo view('site/create', $data);
    }

    public function create()
    {
        $model = new ProjectModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'info'  => 'required',
                'image' => 'required',
            ]))
        {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'info'  => $this->request->getPost('info'),
                'image' => $this->request->getPost('image'),
            ]);

            #echo view('project/success');

        }
        else
        {
            echo view('site/header');
            echo view('site/create');
            #echo view('templates/footer');
        }
    }
}