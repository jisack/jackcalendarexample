<?php
    return [
        //AUTH USAGE
        "auth" => false,

        //prefix

        "prefix" => "admin/calendar",

        //middleware
        //middle will not use when auth == false

        "middleware" => ['web', 'auth:web'],

    ];