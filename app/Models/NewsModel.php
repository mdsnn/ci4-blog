<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    // Define the table, primary key, and allowed fields for mass assignment
    protected $table      = 'news';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['title', 'slug', 'body'];

    // Optionally, you can add validation rules
    protected $validationRules    = [
        'title' => 'required|min_length[3]|max_length[128]',
        'slug'  => 'required|alpha_dash|min_length[3]|max_length[128]|is_unique[news.slug,id,{id}]',
        'body'  => 'required|min_length[3]',
    ];

    // Define other properties, like validation messages, if needed
    protected $validationMessages = [
        'title' => [
            'required' => 'Title is required',
            'min_length' => 'Title should be at least 3 characters long',
            'max_length' => 'Title cannot be longer than 128 characters',
        ],
        'slug' => [
            'required' => 'Slug is required',
            'alpha_dash' => 'Slug should contain only letters, numbers, dashes, and underscores',
            'is_unique' => 'Slug must be unique',
        ],
        'body' => [
            'required' => 'Body is required',
            'min_length' => 'Body should be at least 3 characters long',
        ],
    ];

    // Optionally, define custom timestamps (if applicable)
    protected $useTimestamps = false;
}
