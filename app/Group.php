<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // Add relationship with projets to list all the project lead by a specific group getProjects()
    // Add relationship with users to list all the users whose belong to a specific group getUsers()
    // Add a function to get the owner of a specific group getOwner()
}
