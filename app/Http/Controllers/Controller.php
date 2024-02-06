<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('frontend.page.home', [
            'title' => 'Home',
        ]);
    }

    public function about()
    {
        return view('frontend.page.about', [
            'title' => 'About',
        ]);
    }

    public function service()
    {
        return view('frontend.page.service', [
            'title' => 'Service',
        ]);
    }

    public function product()
    {
        return view('frontend.page.product', [
            'title' => 'Produk',
        ]);
    }

    public function contact()
    {
        return view('frontend.page.contact', [
            'title' => 'Contact',
        ]);
    }
}
