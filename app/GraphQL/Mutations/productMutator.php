<?php

namespace App\GraphQL\Mutations;

use App\GraphQL;
use App\Models\Product;
class productMutator
{

    public function insert($root, array $args, $context)
    {
        $requests = $args['name'];

        $product = new Product();

        $product->name = $requests['name'];
        $product->address = $requests['numItems'];
        $product->time = $requests['time'];
        $product->save();

        return [
            'id' => $product->id,
            'message' => 'Product Successfully Added.'
        ];
    }
   }