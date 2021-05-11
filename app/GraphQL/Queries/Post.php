<?php

namespace App\GraphQL\Queries;

use App\Models\Post as ModelsPost;

class Post
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }
    public function lastetPost($_, array $args){
        return ModelsPost::all()->last();
    }
}