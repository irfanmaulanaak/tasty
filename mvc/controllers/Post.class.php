<?php class Post extends Controller {

    public function index(){
        //Load model
        $postModel = $this->loadModel('PostModel');

        // Get data from the model
        $posts = $postModel->getAll();

        // Load the view
        $this->loadView('posts', ['posts'=>$posts]);
    }
}