<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Practice;

use Illuminate\Database\Eloquent\Model;
use App\Models\Practice;
use App\MoonShine\Resources\Practice\Pages\PracticeIndexPage;
use App\MoonShine\Resources\Practice\Pages\PracticeFormPage;
use App\MoonShine\Resources\Practice\Pages\PracticeDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Practice, PracticeIndexPage, PracticeFormPage, PracticeDetailPage>
 */
class PracticeResource extends ModelResource
{
    protected string $model = Practice::class;

    protected string $title = 'Practices';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PracticeIndexPage::class,
            PracticeFormPage::class,
            PracticeDetailPage::class,
        ];
    }
}
