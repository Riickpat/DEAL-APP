<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
        return view ('pagesadmin.tableau');
    }
    public function mailbox(){
        return view ('pagesadmin.messagerie');
    }
    public function search(){
        return view ('pagesadmin.recherche');
    }
    public function addtroc(){
        return view ('pagesadmin.partage');
    }
    public function modifierprofil(){
        return view ('pagesadmin.editprofil');
    }
}
