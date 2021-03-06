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
    
    use HasFactory;
}
