<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioComment extends Model
{
    protected $fillable = [
        'portfolio_id',
        'user_id',
        'user_email',
        'user_role',
        'comment',
    ];

    public function project() {
        return $this->belongsTo(Project::class, 'portfolio_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}


