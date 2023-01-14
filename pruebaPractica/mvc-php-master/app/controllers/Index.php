<?php

class Index extends Controller
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    $users = $this->userModel->users();

    $data = [
      'usuarios'     => $users,
    ];

    $this->view('pages/index', $data);
  }

  public function sincronizar(){
    $data = json_decode( file_get_contents('https://dummyjson.com/users'), true );
    /*echo $data["users"][0]["firstName"];
    echo $data["users"][1]["firstName"];*/
   // print_r($data);

    $data_insertar = array();
    
    foreach ($data["users"] as $value) {
      $data_insertar = [
        'firstName'  => trim( $value['firstName'] ),
        'lastName'  => trim( $value['lastName'] ),
        'age'  => trim( $value['age'] ),
        'email'  => trim( $value['email'] ),
        'image'  => trim( $value['image'] ),
        'status'  => '1',
        
      ];

      //var_dump($this->userModel->existUser($data_insertar));

      if ($this->userModel->existUser($data_insertar)<=0) {
        echo "Inserte el valor";
        if ( $this->userModel->add( $data_insertar ) ) {
          redirection('/pages');
        } else {
          die('Something went Wrong...');
        }
      }




      /*if ( $this->userModel->add( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }

     $users = $this->userModel->users();

      $data = [
        'usuarios'     => $users,
      ];*/
    }

    //$this->view('pages/index', $data);
     
   
   
    //echo $data['users'];
    /*
    foreach ($data as $value) {
      $cadena = "El nombre de la provincia es: '". $value['name'] ."', y su puntuación es: ". $value['y'] ."},";
      print ($cadena);
   }
   */


  }

  public function add()
  {
   /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'name'  => trim( $_POST['name'] ),
        'email'  => trim( $_POST['email'] ),
        'phone'  => trim( $_POST['phone'] ),
      ];

      if ( $this->userModel->add( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } else {
      $data = [
        'name'  => '',
        'email'  => '',
        'phone'  => '',
      ];

      $this->view('pages/add', $data);
    }*/
  }

  public function edit($id)
  {
   /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id'      => $id,
        'name'    => trim( $_POST['name'] ),
        'email'   => trim( $_POST['email'] ),
        'phone'   => trim( $_POST['phone'] ),
      ];

      if ( $this->userModel->updateUser( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } else {
      $user = $this->userModel->user($id);

      $data = [
        'id'      => $user->id,
        'name'    => $user->name,
        'email'   => $user->email,
        'phone'   => $user->phone,
      ];

      $this->view('pages/edit', $data);
    }*/
  }

  public function delete($id)
  {
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'idUsuario'      => $id,
        'status'         => trim( $_POST['status'] ),
        
      ];

      if ( $this->userModel->updateUser( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } 
    /* $user = $this->userModel->user($id);
    $data = [
    'id'      => $user->id,
    'name'    => $user->name,
    'email'   => $user->email,
    'phone'   => $user->phone,
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
    'id'      => $id,
    ];
    if ( $this->userModel->deleteUser( $data ) ) {
    redirection('/pages');
    } else {
    die('Something went Wrong...');
    }
    } 
    
    $this->view('pages/delete', $data);
    }*/
  }
}