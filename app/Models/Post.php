<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['enrol_code', 'dob', 'hometown', 'guardian', 'occupation', 'contact', 'email'];

    protected $table = 'posts';

    protected $primaryKey = 'id';

    // public static $rules = [
    //     'index_num' => 'required|digits:10'
    // ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('index_num', 'like', '%' . request('search') . '%');
        }
    }
}
