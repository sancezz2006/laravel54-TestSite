<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $portfolioRepositiry;
    protected $sliderRepostitory;
    protected $articleRepository;
    protected $menuRepository;

    protected $template;
    protected $vars = array();
    protected $contentRightBar = FALSE;
    protected $contentLeftBar = FALSE;
    protected $bar = FALSE;

    public function __construct()
    {
    }

    protected function renderOutput(){
        return view($this->template)->with($this->vars);
    }
}
