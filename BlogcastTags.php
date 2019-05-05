<?php

namespace Statamic\Addons\Blogcast;

use Statamic\Extend\Tags;

class BlogcastTags extends Tags
{
    /**
     * The {{ blogcast }} tag
     *
     * @return string|array
     */
    public function index($id = null)
    {
        if (is_null($this->getParam('id', $id))) {
            $url = urlencode(request()->fullUrl());

            return "<div id=\"blogcast\" data-blogcast-show style=\"display:none\"></div><script src=\"https://blogcast.host/embed.js?url=$url\"></script>";
        }

        return "<iframe src=\"https://blogcast.host/embed/{$this->getParam('id', $id)}\" frameborder=\"0\" scrolling=\"no\" style=\"width:100%;min-height:132px;overflow:hidden;\"></iframe>";
    }

    /**
     * The {{ blogcast:id }} tag
     *
     * @return string|array
     */
    public function __call($method, $params)
    {
        return $this->index($method);
    }
}
