<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex() {
    	return view('pages.welcome');
    }

    public function getAbout() {

    	$first = 'Juan';
    	$last  = 'Justo';

    	$fullname = $first. "" .$last;
    	$email  = 'admin@kcres.net';
    	return view('pages.about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact() {
		return view('pages.contact');
    }

}
