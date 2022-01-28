<?php

namespace App\Http\Controllers;

    class BlogController extends Controller{

        public function getAllBlogs(){

            return view("index");

        }

    }

?>