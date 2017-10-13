<?php

namespace Anax\App;

/**
 * An App class to wrap the resources of the framework.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class App
{
    public function redirect($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }

    public function link($url)
    {
        return $this->url->create($url);
    }

    /**
     * Render a standard web page using a specific layout.
     */
    public function renderPage($data, $status = 200)
    {
        // creates the views with viewify
        array_key_exists("views", $data) && $this->viewify->render($data["views"], $this);

        $data["stylesheets"] = ["css/style.css"];
        $data["javascripts"] = ["js/index.js"];

        $this->view->add("components/header", [], "header");
        $this->view->add("components/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $this->view->add("wrappedApp", $data, "wrappedApp");
        $body = $this->view->renderBuffered("wrappedApp");
        $this->response->setBody($body)
                       ->send($status);
        exit;
    }
}
