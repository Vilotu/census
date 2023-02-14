<?php

return [
    '~^$~' => [\Project\Controllers\MainController::class, 'main'],
    '~^person/add$~' => [\Project\Controllers\MainController::class, 'create'],
    '~^person/(\d+)/delete$~' => [\Project\Controllers\MainController::class, 'delete'],
    '~^person/(\d+)/edit$~' => [\Project\Controllers\MainController::class, 'edit']
];