<?php

namespace App\GraphQL\Mutations;

use App\GraphQL\GraphQLHelper;
use App\Models\ShippingAddress;

class ShippingAddressMutator
{

    public function insert($root, array $args, $context)
    {
        $requests = $args['address'];

        $shipping_address = new ShippingAddress();

        $shipping_address->firstname = $requests['name'];
        $shipping_address->address = $requests['address'];
        $shipping_address->phone = $requests['phone'];
        $shipping_address->city = $requests['city'];
        $shipping_address->state = $requests['state'];
        $shipping_address->country = $requests['country'];
        $shipping_address->zipcode = $requests['zipcode'];

        $shipping_address->save();

        return [
            'id' => $shipping_address->id,
            'message' => 'Address Successfully Added.'
        ];
    }

    public function update($root, array $args, $context)
    {
        $requests = $args['address'];
        $shipping_address = ShippingAddress::where('id', $requests['id'])->first();

        $shipping_address->firstname = $requests['name'];
        $shipping_address->address = $requests['address'];
        $shipping_address->phone = $requests['phone'];
        $shipping_address->city = $requests['city'];
        $shipping_address->state = $requests['state'];
        $shipping_address->country = $requests['country'];
        $shipping_address->zipcode = $requests['zipcode'];

        $shipping_address->save();

        return [
            'id' => $shipping_address->id,
            'message' => 'Address Successfully Updated.'
        ];
    }




}
