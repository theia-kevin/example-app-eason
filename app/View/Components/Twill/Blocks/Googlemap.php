<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Form;
use Illuminate\Contracts\View\View;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;

class Googlemap extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.googlemap');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable(),
            Wysiwyg::make()->name('text')->translatable(),
            Input::make()->name('google_maps_api_key'),
            Medias::make()->name('cover')->label('Cover image')->translatable(),
        ]);
    }

    public static function getBlockTitle(?Block $block = null): string
    {
        return "Google Map";
    }
}
