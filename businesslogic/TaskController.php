<?php
//Business Controller - Logic Layer
require_once __DIR__.'/../database/Task.php';
class TaskController {
    private $taskModel;
    public function __construct($db){
        $this->taskModel = new Task($db);
        // $this->taskModel->createTable(); //create db 
    }
    public function index(){
        require_once __DIR__.'/../presentation/layout.php';
    }
    public function create(){
        require_once __DIR__.'/../presentation/layout.php';
       }

    public function store(){}

    public function edit($id){}

    public function update(){}

    public function delete($id){}
}
?>