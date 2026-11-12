<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

class Person extends Model implements HasMedia
{
    use HasTranslations;
    use Sluggable;
    use InteractsWithMedia;

     public array $translatable = ['name', 'description', 'content', 'type'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('person')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('300x600')
                    ->fit(Fit::Crop, 640, 900)
                    ->format('webp');
            });

    }
}
