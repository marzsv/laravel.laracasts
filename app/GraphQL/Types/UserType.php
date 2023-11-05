<?php

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'UserType',
        'description' => 'A type',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'The id of user',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of user',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of user',
            ],
            // 'posts' => [
            //     'type' => Type::listOf(\GraphQL::type('Post')),
            //     'description' => 'The posts of user',
            // ],
            // 'created_at' => [
            //     'type' => Type::string(),
            //     'description' => 'The created_at of user',
            // ],
            // 'updated_at' => [
            //     'type' => Type::string(),
            //     'description' => 'The updated_at of user',
            // ],
        ];
    }
}
