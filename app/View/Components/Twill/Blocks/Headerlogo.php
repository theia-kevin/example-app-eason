<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Form;
use Illuminate\Contracts\View\View;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;

class Headerlogo extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.headerlogo');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()->name('cover')->label('Cover image')->translatable(),
        ]);
    }

    public static function getBlockTitle(?Block $block = null): string
    {
        return "Header Logo";
    }
}
