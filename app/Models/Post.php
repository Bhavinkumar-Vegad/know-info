<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_image', 'title', 'details', 'post_type', 'is_published', 'logo_url','tag_line','firstname_lastname','short_description','dob','address','email','phone','work_details' ,'education_details','extra_skills','resume_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
