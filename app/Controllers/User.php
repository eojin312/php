<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function hello($pathVariable)
    {
        $data['pathVariable'] = $pathVariable;
        $data['abc'] = 'abcdef';
        return view('hello', $data);
    }

    public function index()
    {

        return view('hello');
    }
}

