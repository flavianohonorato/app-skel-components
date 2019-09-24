<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
  public function index()
  {
    $users = User::all();
    $templates = new \League\Plates\Engine(__DIR__ . '/../../views/users');

    $users = $users->toArray();

    return $templates->render('index', ['users' => $users]);
  }

  public function store()
  {
      $options = [
          'cost' => 12,
      ];

      $user = User::create([
        'name'      => "Admin",
        'email'     => "admino@email.com",
        "password"  => password_hash("123456789", PASSWORD_DEFAULT, $options)
    ]);

    return $user;
  }
}
