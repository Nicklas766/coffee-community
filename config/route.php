<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // These are for internal error handling and exceptions
            "mount" => null,
            "file" => __DIR__ . "/route/internal.php",
        ],
        [
            // Routers for the user parts mounts on user/
            "mount" => null,
            "file" => __DIR__ . "/route/page.php",
        ],
        [
            // Routers for the user parts mounts on user/
            "mount" => "user",
            "file" => __DIR__ . "/route/comment/user.php",
        ],
        [
            // Routers for the user parts mounts on user/
            "mount" => "users",
            "file" => __DIR__ . "/route/comment/users.php",
        ],
        [
            // Routers for the user parts mounts on comment/
            "mount" => "question",
            "file" => __DIR__ . "/route/comment/question.php",
        ],
        [
            // Routers for the user parts mounts on admin/
            "mount" => "admin",
            "file" => __DIR__ . "/route/comment/admin.php",
        ],
        [
            // For debugging and development details on Anax
            "mount" => "debug",
            "file" => __DIR__ . "/route/debug.php",
        ],
        [
            // To read flat file content in Markdown from content/
            "mount" => null,
            "file" => __DIR__ . "/route/flat-file-content.php",
        ],

        [
            // Keep this last since its a catch all
            "mount" => null,
            "file" => __DIR__ . "/route/404.php",
        ],
    ],

];
