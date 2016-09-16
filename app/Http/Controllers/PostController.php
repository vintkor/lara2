<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Artesaos\SEOTools\Facades\SEOMeta;
use Auth;

class PostController extends Controller
{
    public $data = [];

    public function showCategorySlug($slug)
    {
        $this->data['name'] = $slug;

        SEOMeta::setTitle($this->data['name']);
        SEOMeta::setDescription($this->data['name']);

        return view('postsInCategory', $this->data);
    }
}
