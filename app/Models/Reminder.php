<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reminder extends Model
{
    use HasFactory, SoftDeletes;

    const APPOINTMENT = 1;
    const BIRTHDAY = 2;
    const TODOLIST = 3;
    const ANNIVERSARY = 4;
    const CHORES = 5;

    const NOTIMPORTANT = 1;
    const SLIGHTLYIMPORTANT = 2;
    const MODERATELYIMPORTANT = 3;
    const HIGHLYIMPORTANT = 4;

    const FATHER = 1;
    const FAMILY = 2;
    const FRIENDS = 3;
    const ME = 4;

    const OTHERS = 0;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date_start',
        'date_end',
        'priority_level',
        'type',
        'relationship',
        'remarks',
    ];
}