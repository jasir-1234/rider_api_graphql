<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Outlet
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        // TODO implement the resolver
            /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */
    
        return [
            'maximum_order_days' => 6,
            'opening_time' => '08:00 AM',
            'closing_time' => '01:30 AM',
            'name' => 'Dum Handi Biryani',
            'latitude' => 13.732674,
            'longitude' => 100.564971,
            // 'latitude' => 10.9760,
            // 'longitude' => 76.2254,
            // 'currency_symbol' => QueriesGraphQLHelper::currencySymbol(),
            'delivery_charge_by_km' => 12,
            'free_delivery_km' => 2,
            'maximum_delivery_km' => 100,
            'default_delivery_time_in_minuts' => 45,
            'delivery_area_exceed_message' => 'Delivery option available within 100km only',
            'address' => 'No 6 Soi Sukhumvit 22, Khwaeng Khlong Toei, Khlong Toei, Bangkok 10110, Thailand',
            // 'image' => [
            //     'url' => 'https://lh5.googleusercontent.com/p/AF1QipP2dxN-J5zfM7EMvmEENb85Q6xEzzh5UU0E-xYx=w408-h306-k-no'
            // ]
        ];
    }
}
