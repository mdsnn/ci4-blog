<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    // List all news
    public function index()
    {
        $model = new NewsModel();
        $data['news'] = $model->findAll(); // Get all news from the database
        return view('news/index', $data); // Load the view and pass the data
    }

    // Show a single news item
    public function view($slug = null)
    {
        $model = new NewsModel();
        $data['news_item'] = $model->where('slug', $slug)->first();

        if (empty($data['news_item'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        return view('news/view', $data); // Load the view for a single article
    }
}
