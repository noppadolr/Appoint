<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::query()->create([
            'name' => 'doctor',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
        Role::query()->create(['name' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()]);
        Role::query()->create(['name' => 'patient',
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
