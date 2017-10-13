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
            "info" => "About page",
            "requestMethod" => null,
            "path" => "about",
            "callable" => ["pageController", "getAbout"]
        ],
        [
            "info" => "Services page",
            "requestMethod" => null,
            "path" => "services",
            "callable" => ["pageController", "getServices"]
        ],
        [
            "info" => "Contact page",
            "requestMethod" => null,
            "path" => "contact",
            "callable" => ["pageController", "getContact"]
        ],
        [
            "info" => "Gallery page",
            "requestMethod" => null,
            "path" => "gallery",
            "callable" => ["pageController", "getGallery"]
        ],
    ]
];
