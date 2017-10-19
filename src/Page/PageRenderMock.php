<?php

namespace Nicklas\Page;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A default page rendering class.
 */
class PageRenderMock implements PageRenderInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;


    public function add($data)
    {
        // if multiple views create indexes for them
        if (is_array($data[0])) {
            return array_map(function ($val) use ($data) {
                return ["view" => $val, "content" => $data[1], "region" => $data[2]];
            }, $data[0]);
        }
        // if multiple content (multideminsional) create indexes for them
        if (array_key_exists(0, $data[1])) {
            return array_map(function ($val) use ($data) {
                return ["view" => $data[0], "content" => $val, "region" => $data[2]];
            }, $data[1]);
        }
        return [["view" => $data[0], "content" => $data[1], "region" => $data[2]]];
    }

    public function setArray($array, $key)
    {
        return array_map(function ($val) use ($key) {
            return ["$key" => "$val"];
        }, $array);
    }

    /**
     * Render a standard web page using a specific layout.
     */
    public function viewify($views)
    {
        foreach ($views as $views) {
            foreach ($this->add($views) as $view) {
                $this->di->get("view")->add($view["view"], $view["content"], $view["region"]);
            }
        }
    }

    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @return void
     */
    public function renderPage($data, $status = 200)
    {
        // creates the views with viewify function
        array_key_exists("views", $data) && $this->viewify($data["views"]);

        $data["stylesheets"] = ["css/style.css"];
        $data["javascripts"] = ["js/index.js"];


        if ($data["title"] !== null) {
            return $data["title"];
        }
        return false;
    }
}
