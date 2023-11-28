<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Repositories\PageRepository;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.page', ['item' => $page]);
    }
}
