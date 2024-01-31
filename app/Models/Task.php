<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //this enables the use of the factory pattern to create model instances for tests.
    use HasFactory;


    //defines which attributes (or columns) of the model are mass assignable
    protected $fillable = ['title', 'description', 'long_description'];

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}
