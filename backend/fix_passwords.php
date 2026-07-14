<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Find users with plain text passwords (not starting with $2y$)
$users = User::all();

foreach ($users as $user) {
    // Check if password is already hashed (bcrypt starts with $2y$)
    if (!str_starts_with($user->password, '$2y$')) {
        echo "Updating password for user: {$user->email}\n";
        $user->update([
            'password' => Hash::make($user->password)
        ]);
        echo "Password updated successfully!\n";
    } else {
        echo "Password for {$user->email} is already hashed.\n";
    }
}

echo "Password fix complete!\n";
