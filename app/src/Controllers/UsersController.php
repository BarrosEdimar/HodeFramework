<?php

namespace App\Controllers;
use Hode\Framework\CrudController;

class UsersController extends CrudController {
    protected function getModel(): string {
        return 'users_model';
    }
}