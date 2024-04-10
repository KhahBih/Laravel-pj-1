<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; //Nếu tên model sai thì có thể dùng vầy để kết nối tới bảng
    protected $fillable = ['title', 'status', 'description', 'user_id', 'publish_date', 'category_id'];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag'/*Đối số thứ 2 để truyền pivot table nếu tên table có nhiều ký tự và ngược bảng chữ cái*/);
    }
}
