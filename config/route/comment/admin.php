<?php
/**
 * Routes for the commentController
 */
return [
    "routes" => [
        [
            "info" => "Check if user is admin on all /admin/ routes",
            "requestMethod" => null,
            "path" => "**",
            "callable" => ["commentFrontController", "checkIsAdmin"]
        ],
        [
            "info" => "Show table of users",
            "requestMethod" => null,
            "path" => "user",
            "callable" => ["commentFrontController", "getUsersIndex"]
        ],
        [
            "info" => "Edit users",
            "requestMethod" => "get|post",
            "path" => "user/{id:digit}",
            "callable" => ["commentFrontController", "getPostAdminEditUser"]
        ],
        [
            "info" => "Create users",
            "requestMethod" => "get|post",
            "path" => "user/create",
            "callable" => ["commentFrontController", "getPostAdminCreateUser"]
        ],
    ]
];
