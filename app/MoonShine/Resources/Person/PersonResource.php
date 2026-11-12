<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Person;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\MoonShine\Resources\Person\Pages\PersonIndexPage;
use App\MoonShine\Resources\Person\Pages\PersonFormPage;
use App\MoonShine\Resources\Person\Pages\PersonDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Person, PersonIndexPage, PersonFormPage, PersonDetailPage>
 */
class PersonResource extends ModelResource
{
    protected string $model = Person::class;

    protected string $title = 'People';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PersonIndexPage::class,
            PersonFormPage::class,
            PersonDetailPage::class,
        ];
    }
}
