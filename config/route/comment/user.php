<?php
/**
 * Routes for user controller.
 */
return [
    "routes" => [
        [
            "info" => "User Controller index.",
            "requestMethod" => "get",
            "path" => "",
            "callable" => ["commentFrontController", "getIndex"],
        ],
        [
            "info" => "Login a user.",
            "requestMethod" => "get|post",
            "path" => "login",
            "callable" => ["commentFrontController", "getPostLogin"],
        ],
        [
            "info" => "Reset password",
            "requestMethod" => "get|post",
            "path" => "reset",
            "callable" => ["commentFrontController", "getPostReset"],
        ],
        [
            "info" => "Create a user.",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["commentFrontController", "getPostCreateUser"],
        ],
        [
            "info" => "Logout a user",
            "requestMethod" => "get",
            "path" => "logout",
            "callable" => ["commentFrontController", "logout"],
        ],
        // Profile
        [
            "info" => "Render a profilepage",
            "requestMethod" => null,
            "path" => "profile",
            "callable" => ["commentFrontController", "renderProfile"],
        ],
        [
            "info" => "Edit a user.",
            "requestMethod" => "get|post",
            "path" => "edit",
            "callable" => ["commentFrontController", "getPostEditUser"],
        ],
        [
            "info" => "Edit profile security.",
            "requestMethod" => "get|post",
            "path" => "security",
            "callable" => ["commentFrontController", "getPostEditSecurity"],
        ],
    ]
];
