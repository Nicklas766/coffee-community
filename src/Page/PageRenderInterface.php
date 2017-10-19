<?php

namespace Nicklas\Page;

/**
 * A sample class for routes dealing with error situations.
 */
interface PageRenderInterface
{
    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @return void
     */
    public function renderPage($data, $status = 200);
}
