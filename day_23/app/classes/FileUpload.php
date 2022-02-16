<?php


namespace App\classes;


class FileUpload
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $result;
    protected $imageName;
    protected $imageFile;
    protected $imageDirectory;
    protected $imagePath;
    protected $filePath;
    protected $file;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post=null, $file=null)
    {
        if ($post)
        {
            $this->name  = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->value = $post;
        }
        if ($file)
        {
            $this->imageFile = $file['image'];
        }
    }

    public function index()
    {
        $this->imagePath = $this->imageUpload();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath,'a');
        $this->data = "$this->name,$this->email,$this->phone,$this->imagePath".PHP_EOL;
//       foreach ($this->value as $item)
//       {
//           fwrite($this->file, $item.',');
//       }
        fwrite($this->file, $this->data);
        fclose($this->file);
//        echo "success";
        return 'data saved sucess';

    }

    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllStudentInfo()
    {
        $this->filePath = 'db/db.txt';
        $this->data = file_get_contents($this->filePath);
        $this->array = explode('$', $this->data);
        echo '<pre>';
        print_r($this->array);
    }
}