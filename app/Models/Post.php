<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'publish_at' => 'datetime'
    ];

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function shortBody():string
    {
        return Str::words(strip_tags($this->body), 30);
    }

    public function getFormattedDate():string
    {
        return $this->publish_at->format('F JS Y');
        //F => name of the month, J => day of the month, S => suffix for the day of the month, Y => year
    }

    public function getThumbnail():string
    {
        if(str_starts_with($this->thumbnail, 'http')){
            return $this->thumbnail;
        }
        return 'storage/'.$this->thumbnail;
    }
}
