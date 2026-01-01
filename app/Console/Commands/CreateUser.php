<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
    /**
     * Die Signatur wurde um {role} erweitert
     */
    protected $signature = 'dns:create-user {username} {email} {password} {role=user}';

    protected $description = 'Make a DNS user with a specific role, ROLES: admin or by default user';

    public function handle()
    {
        $username = $this->argument('username');
        $email    = $this->argument('email');
        $password = $this->argument('password');
        $role     = $this->argument('role');

        $this->info("Erstelle Benutzer: {$username}...");

        try {
            $user = \App\Models\User::create([
                'name'     => $username,
                'email'    => $email,
                'password' => \Illuminate\Support\Facades\Hash::make($password),
                'role'     => $role,
            ]);

            $this->info("Benutzer {$username} wurde erfolgreich als '{$role}' angelegt!");

        } catch (\Exception $e) {
            $this->error("Fehler beim Erstellen: " . $e->getMessage());
        }
    }
}
