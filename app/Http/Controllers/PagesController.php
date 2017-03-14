<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
  return view('pages.welcome');
  }

  public function getAbout(){
    $first = "Njeru";
    $last = "Cyrus";
    $fullname = $first . " ".$last;
    $email = "njerucyrusdev@gmail.com";
    $data = [];
    $data['fullname'] = $fullname;
    $data['email'] = $email;
  //  return view('pages.about')->with('fullname', $full);
    return view('pages.about')->withData($data);
  }

  public function getContact(){
   return view('pages.contact');
  }

  // public function postContact(){
  //
  // }


}



 ?>
