<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
 class item
 {
   public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
   {
      return [
           'name'=>'KFC ADAS',
           'numItems'=>'2',
           'time'=>'12:20'
      ];
   } 
 }