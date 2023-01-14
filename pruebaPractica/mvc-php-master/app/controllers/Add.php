<?php
class add extends Controller
{
  private $addModel;

  public function __construct()
  {
    $this->addModel = $this->model('add');
  }

  public function add()
  {
    $users = $this->addModel->users();

    $data = [
      'usuarios'     => $users,
    ];

    $this->view('pages/add', $data);
  }

 
}
?>