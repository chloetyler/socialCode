<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user_administrator = new Role();
        $role_user_administrator->name = 'user_administrator';
        $role_user_administrator->save();

        $role_post_moderator = new Role();
        $role_post_moderator->name = 'post_moderator';
        $role_post_moderator->save();

        $role_theme_manager = new Role();
        $role_theme_manager->name = 'theme_manager';
        $role_theme_manager->save();

        $role_default = new Role();
        $role_default->name = 'default';
        $role_default->save();
    }
}
