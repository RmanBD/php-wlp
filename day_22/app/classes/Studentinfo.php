<?php


namespace App\classes;


class Studentinfo
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $result;
    protected $imageName, $imageDirectory, $imageFile;

    public function __construct($post=null, $file=null)
    {
        if ($post) {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->value = $post;
        }
        if ($file) {
            $this->imageFile = $file['image'];
        }
    }

    public function index()
    {
//        $this->imageName = $_FILES['image']['name'];
//        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
//        move_uploaded_file($_FILES['image']['tmp_name'], $this->imageDirectory);
//        echo 'sucess';
        $this->imageUpload();

        $db = 'db.txt';
        $file = fopen($db, 'a');
        echo $file;
        exit();
//        fwrite($file, 'hello world');
//        fclose($file);
//        echo 'sucess';
    }

    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imageDirectory = 'assets/img/upload/' . $this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
//        echo 'sucess';
    }
}