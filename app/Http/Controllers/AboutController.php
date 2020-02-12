<?php


namespace App\Http\Controllers;


class AboutController
{
    public function about()
    {
        $about = "public function about()";
        return view('about', ['about' => $about]);
    }
}
