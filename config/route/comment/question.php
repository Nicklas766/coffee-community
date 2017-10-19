<?php
/**
 * Routes for the commentController
 */
return [
    "routes" => [
        [
            "info" => "Comments index page",
            "requestMethod" => null,
            "path" => "",
            "callable" => ["commentFrontController", "getIndex"],
        ],
        [
            "info" => "Comments index page",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["commentFrontController", "getPostCreateQuestion"],
        ],

        // View question, also post answer
        [
            "info" => "Comments index page",
            "requestMethod" => "get|post",
            "path" => "{id:digit}",
            "callable" => ["commentFrontController", "getPostQuestionAnswer"],
        ],
        // View questions based on tag
        [
            "info" => "View questions based on tag",
            "requestMethod" => null,
            "path" => "tagged/{dataset:alphanum}",
            "callable" => ["commentFrontController", "getTaggedQuestions"],
        ],
        [
            "info" => "On this route POST to comment, idea is ajax",
            "requestMethod" => "post",
            "path" => "comment/{id:digit}",
            "callable" => ["commentFrontController", "postComment"],
        ],
    ]
];
