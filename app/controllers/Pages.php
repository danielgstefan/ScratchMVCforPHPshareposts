<?php
class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }

        $data = [
            'title' => 'DanielPosts',
            'description' => 'Social network for Posts'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts with other users'
        ];

        $this->view('pages/about', $data);
    }
}