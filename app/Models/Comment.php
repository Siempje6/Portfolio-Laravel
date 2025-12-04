<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'project_id',
        'user_id',
        'user_email',
        'user_role',
        'comment',
    ];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
