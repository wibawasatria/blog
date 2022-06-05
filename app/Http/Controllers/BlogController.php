<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $BlogService;
    function __construct(
        BlogService $BlogService
    ) {
        $this->BlogService = $BlogService;
    }

    public function index()
    {
        $blogs = $this->BlogService->getData();
        return view('blog.index',[
            'data_blogs' => $blogs
        ]);
    }

    public function create()
    {
        $form_data = [
            'title' => 'Ini Blog',
            'description' => 'Namun, dalam contoh ini, saya akan memberi Anda 2 cara untuk menampilkan image Anda di file blade.',
            'created_user_id' => 1
        ];
        $blog = $this->BlogService->create($form_data);
        return $blog;
    }
}
