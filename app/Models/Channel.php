<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $table = "Channel";
    protected $fillable = [
        'ChannelID',
        'ChannelName',
        'Description',
        'SubcribersCount',
        'URL',
        'Created_At',
        'Updated_At',
    ];
}
