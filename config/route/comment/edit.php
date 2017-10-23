<?php
/**
 * Routes for the commentController
 */
return [
    "routes" => [
        [
            "info" => "Edit a post text",
            "requestMethod" => "get|post",
            "path" => "post/{id:digit}",
            "callable" => ["commentFrontController", "getPostEditPost"],
        ],

        [
            "info" => "Edit a post text",
            "requestMethod" => "get|post",
            "path" => "comment/{id:digit}",
            "callable" => ["commentFrontController", "getPostEditComment"],
        ],
    ]
];
