<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Repositories\PageRepository;
use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\ProjectRepository;

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

    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $frontPage */
            $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();
 
            if ($frontPage->published) {
                return view('site.page', ['item' => $frontPage]);
            }
        }
 
        abort(404);
    }

    public function project(string $slug, ProjectRepository $projectRepository): View
    {
        $project = $projectRepository->forSlug($slug);

        if (!$project) {
            abort(404);
        }

        return view('site.project', ['item' => $project]);
    }
}
