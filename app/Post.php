<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Storage;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'content', 'image', 'published_at', 'category_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Delete post image from storage
    *
    * @return void
    */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
}
