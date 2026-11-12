<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Person\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Person\PersonResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use Throwable;
use MoonShine\UI\Fields\Checkbox;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;
use VI\MoonShineSpatieMediaLibrary\Fields\MediaLibrary;
use MoonShine\UI\Fields\Text;

/**
 * @extends FormPage<PersonResource>
 */
class PersonFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                MediaLibrary::make('Image', 'person')->multiple()->removable(),
                Translatable::make('Type', 'type')
                    ->priorityLanguages(['en', 'ru']),
                Translatable::make('Name', 'name')
                    ->priorityLanguages(['en', 'ru']),
                Translatable::make('Description', 'description')->tinyMce()->priorityLanguages(['en', 'ru']),
                Translatable::make('Content', 'content')->tinyMce()->priorityLanguages(['en', 'ru']),
                Text::make('Phone','phone'),
                Text::make('Email','email'),
                Text::make('LinkedIn','linkedin'),
                Checkbox::make('Published', 'published'),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [];
    }

    /**
     * @param  FormBuilder  $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
