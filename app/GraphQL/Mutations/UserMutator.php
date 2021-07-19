<?php

namespace App\graphql\Mutations;
use App\Models\User;

class UserMutator{
   public function create($root ,array $args)
   {
      return \App\Models\User::create($args);
   } 
}