<?php
    $blogs = [
        ["title" => "blog1", "content" => "contenu du blog 1", "user" => "user1", "date" => new DateTime()],
        ["title" => "blog2", "content" => "contenu du blog 2", "user" => "user2", "date" => new DateTime()],
        ["title" => "blog3", "content" => "contenu du blog 3", "user" => "user3", "date" => new DateTime()]
    ];


    foreach ($blogs as $blog) {
        echo "<h1>".$blog["title"]."</h1>";
    }