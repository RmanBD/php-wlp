<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    protected $firstName = 'Habibur';
    protected $lastlName = 'Rahman';

    public function index()
    {
        return $this->firstName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastlName;
        return view('full-name', [
            'firstName' => $this->firstName,
            'lastName' => $this->lastlName,
        ]);
//        $firstName = $this->firstName;
//        $lastName = $this->lastName;
//        return view('full-name', compact(['firstName','lastName']));
    }
}
