<?php

namespace App\graphql\Mutations;
use App\Models\Deliver;

class DeliverMutator{
   // public function create($root ,array $args)
   // {
   //    return \App\Models\Deliver::create($args);
   // }  


    public function insertAddress($root, array $args, $context)
    {
        $requests = $args['address'];

        $deliver_address = new Deliver();

        $deliver_address->firstname = $requests['name'];
        $deliver_address->address = $requests['address'];

        $deliver_address->save();

        return [
            'id' => $deliver_address->id,
            'message' => 'Address Successfully Added.'
        ];
    }
}