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
            "info" => "Question index page",
            "requestMethod" => "get|post",
            "path" => "{id:digit}",
            "callable" => ["commentFrontController", "getPostQuestionAnswer"],
        ],
        // Sort by alphanum
        [
            "info" => "Sorts question by alphanum",
            "requestMethod" => "get|post",
            "path" => "{id:digit}/{dataset:alphanum}",
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
        // vote and accept answer
        [
            "info" => "Make a vote for the post or comment",
            "requestMethod" => "post",
            "path" => "vote",
            "callable" => ["commentFrontController", "postVote"],
        ],
        [
            "info" => "Accept post as valid answer",
            "requestMethod" => "get|post",
            "path" => "accept/{id:digit}",
            "callable" => ["commentFrontController", "postAcceptedAnswer"],
        ],
    ]
];
