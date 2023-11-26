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
    public function viewprofil(){
        return view ('pagesadmin.monprofil');
    }
    public function paiement(){
        return view ('pagesadmin.premium');
    }
    public function login(){
        return view ('pagesadmin.login');
    }
    public function register(){
        return view ('pagesadmin.register');
    }
    public function viewprod(){
        return view ('pagesadmin.detailsproduit');
    }
}
