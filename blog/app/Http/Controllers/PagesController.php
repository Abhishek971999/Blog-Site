<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {  $title='Welcome To Bloggers world';
       return view('pages.index',compact('title'));
    }


    public function about()
    {  $title='About Us';
       return view('pages.about',compact('title'));
    }


    public function services()
    {  $data=array(
        'title'=>'Services',
        'services'=>['web-design','competitive programming','seo']
    );
       
       return view('pages.services')->with($data);
    }
}
