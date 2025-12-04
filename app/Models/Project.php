<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'subtext',
        'info_project',
        'category',
        'image_highlighted', 
    ];

    // Relaties
    public function images() {
        return $this->hasMany(Image::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function portfolioComments() {
        return $this->hasMany(PortfolioComment::class, 'portfolio_id');
    }
}
