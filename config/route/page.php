<?php
/**
 * Routes for the commentController
 */
return [
    "routes" => [
        [
            "info" => "Home page",
            "requestMethod" => null,
            "path" => "",
            "callable" => ["pageController", "getHome"]
        ],
        [
            "info" => "Home page",
            "requestMethod" => null,
            "path" => "home",
            "callable" => ["pageController", "getHome"]
        ],
        [
            "info" => "Tags page",
            "requestMethod" => null,
            "path" => "tags",
            "callable" => ["pageController", "getTags"]
        ],
    ]
];
