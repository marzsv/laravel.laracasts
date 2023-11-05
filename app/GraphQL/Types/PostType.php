<?php

namespace App\GraphQL\Types;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'A type',
        'model' => Post::class, // define model for users type
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'The id of the post',
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of post',
                'alias' => 'title',
            ],
            'author' => [
                'type' => GraphQL::type('UserType'),
                'description' => 'The author of post',
            ],
            'category' => [
                'type' => GraphQL::type('Category'),
                'description' => 'The category of post',
            ],
            // 'content' => [
            //     'type' => Type::string(),
            //     'description' => 'The content of post',
            // ],
            // 'user_id' => [
            //     'type' => Type::int(),
            //     'description' => 'The user_id of post',
            // ],
            // 'user' => [
            //     'type' => GraphQL::type('User'),
            //     'description' => 'The user of post',
            // ],
            // 'created_at' => [
            //     'type' => Type::string(),
            //     'description' => 'The created_at of post',
            // ],
            // 'updated_at' => [
            //     'type' => Type::string(),
            //     'description' => 'The updated_at of post',
            // ],
        ];
    }
}
