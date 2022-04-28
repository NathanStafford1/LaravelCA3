<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function up()
{
    Schema::create('comments', function (Blueprint $table) {
       $table->increments('id');
       $table->integer('user_id')->unsigned();
       $table->integer('parent_id')->unsigned();
       $table->text('body');
       $table->integer('commentable_id')->unsigned();
       $table->string('commentable_type');
       $table->timestamps();
    });
}
public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    
    use HasFactory;
}
