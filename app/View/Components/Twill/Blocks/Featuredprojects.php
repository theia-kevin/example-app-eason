<?php

namespace App\View\Components\Twill\Blocks;

use App\Models\Project;
use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Form;
use Illuminate\Contracts\View\View;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;

class Featuredprojects extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.featuredprojects');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable(),
            Wysiwyg::make()->name('text')->translatable(),
            Browser::make()
                ->name('projects')
                ->modules([Project::class])
                ->max(9999),
        ]);
    }

    public static function getBlockTitle(?Block $block = null): string
    {
        return "Featured Projects";
    }
}
