<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en', 'title_ar', 'content_en', 'content_ar'
    ];

    /**
     * Get the localized title based on app's current locale
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'en' ? $this->title_en : $this->title_ar;
    }

    /**
     * Get the localized content based on app's current locale
     *
     * @return string
     */
    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'en' ? $this->content_en : $this->content_ar;
    }
}
