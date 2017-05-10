<?php namespace App\Http\Controllers;
class PagesController  extends Controller
{
  public function home()
  {
    return view('myfile');
  }
  public function about()
  {
    return view('about');
  }
  public function contact()
  {
    return view('contact');
  }
}

 ?>
