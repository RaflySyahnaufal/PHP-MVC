<?php

class Blog extends Controller
{
    public function index(){
        $data['title'] = 'Blog';
        $data['blog'] = $this->model('Blog_model')->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['title'] = 'Blog';
        $data['blog'] = $this->model('Blog_model')->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }
}
