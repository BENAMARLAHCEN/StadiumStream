<?php

namespace App\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $this->ClientView('profile');
    }
}
