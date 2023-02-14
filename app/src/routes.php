<?php

return [
    '~^$~' => [\Project\Controllers\MainController::class, 'main'],
    '~^person/add$~' => [\Project\Controllers\MainController::class, 'create'],

//    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
//    '~^articles/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
//    '~^articles/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create'],
//    '~^articles/(\d+)/destroy$~' => [\MyProject\Controllers\ArticlesController::class, 'destroy'],
//
//    '~^users/register$~' => [\MyProject\Controllers\UsersController::class, 'signUp'],
//    '~^users/(\d+)/activate/(.+)$~' => [\MyProject\Controllers\UsersController::class, 'activate'],
//    '~^users/login$~' => [\MyProject\Controllers\UsersController::class, 'login'],
//    '~^users/logout$~' => [\MyProject\Controllers\UsersController::class, 'logout'],
//
//    '~^articles/(\d+)/comment$~' => [\MyProject\Controllers\CommentsController::class, 'create'],
//    '~^comments/(\d+)/edit$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
//    '~^comments/(\d+)/delete$~' => [\MyProject\Controllers\CommentsController::class, 'delete'],
//
//    '~^admin/articles$~' => [\MyProject\Controllers\AdminController::class, 'lastArticles'],
//    '~^admin/comments$~' => [\MyProject\Controllers\AdminController::class, 'lastComments'],
//    '~^avatar/create$~' => [\MyProject\Controllers\ImageConrtoller::class, 'create'],

];