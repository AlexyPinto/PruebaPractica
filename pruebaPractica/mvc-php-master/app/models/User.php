<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new DB;
  }

   public function users()
   {
      $this->db->query('SELECT idUsuario,firstname,lastname,age FROM usuarios ORDER BY idUsuario DESC ');

      $records = $this->db->records();

      return $records; 
   }

   public function sinc(){
    $val = json_decode( file_get_contents('https://dummyjson.com/users'), true );
    return $val;

   }

   public function add($data)
   {
    
    

    $this->db->query('INSERT INTO usuarios (firstName, lastName, age,email,image,status) VALUES (:firstName, :lastName, :age, :email, :image, :status)');

     $this->db->bind(':firstName', $data['firstName']);
     $this->db->bind(':lastName', $data['lastName']);
     $this->db->bind(':age', $data['age']);
     $this->db->bind(':email', $data['email']);
     $this->db->bind(':image', $data['image']);
     $this->db->bind(':status', $data['status']);

     if ( $this->db->execute() ) {
       return true;
     } else {
       return false;
     }
   }

   public function user($id)
   {
      $this->db->query('SELECT * FROM usuarios WHERE idUsuario = :idUsuario');
      $this->db->bind(':idUsuario', $id);

      $record = $this->db->record();

      return $record;
   }

   public function updateUser($data)
   {
      $this->db->query('
        UPDATE 
          usuarios 
        SET 
        firstname = :firstname, 
        lastname = :lastname, 
        age = :age
        image = :image
        status = :status
        WHERE
        idUsuario = :idUsuario;'
      );

      $this->db->bind(':idUsuario', $data['idUsuario']);
      $this->db->bind(':firstname', $data['firstname']);
      $this->db->bind(':lastname', $data['lastname']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':status', $data['status']);

      if( $this->db->execute() ) {
        return true;
      } else {
        return false;
      }
   }

   public function deleteUser($data)
   {
      $this->db->query('
        Update FROM
        usuarios 
        set
        status = :status
        WHERE
        idUsuario = :idUsuario;'
      );

      $this->db->bind(':idUsuario', $data['idUsuario']);
      
      if( $this->db->execute() ) {
        return true;
      } else {
        return false;
      }
   }

  public function existUser($data)
  {
    $this->db->query("SELECT lastName,firstName,age,email FROM usuarios WHERE lastName =:lastName and firstName = :firstName and email= :email and age =:age");
    $this->db->bind(':firstName', $data['firstName']);
    $this->db->bind(':lastName', $data['lastName']);
    $this->db->bind(':age', $data['age']);
    $this->db->bind(':email', $data['email']);


    $record = $this->db->recordsCount();

    return $record;
  }
}
