<?php

namespace Statamic\Addons\Blogcast;

use Statamic\Extend\Controller;

class BlogcastController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
