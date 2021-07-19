<?php

// namespace App\GraphQL\Mutations;

// use App\Models\Deliver;

// class CreateUser
// {
//     /**
//      * @param  null  $_
//      * @param  array<string, mixed>  $args
//      */
 
//     public function insertAddress($root, array $args, $context)
//     {
//         $requests = $args['address'];

//         $deliver_address = new Deliver();

//         $deliver_address->name = $requests['name'];
//         $deliver_address->address = $requests['address'];

//         $deliver_address->save();

//         return [
//             'id' => $deliver_address->id,
//             'message' => 'Address Successfully Added.'
//         ];
//     }
// }
