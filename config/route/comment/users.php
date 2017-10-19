<?php
/**
 * Routes for the commentController
 */
return [
    "routes" => [
        [
            "info" => "View all users",
            "requestMethod" => null,
            "path" => "",
            "callable" => ["commentFrontController", "getAllUsersIndex"],
        ],
        [
            "info" => "View specific user",
            "requestMethod" => null,
            "path" => "{dataset:alphanum}",
            "callable" => ["commentFrontController", "getUserIndex"],
        ],
    ]
];
