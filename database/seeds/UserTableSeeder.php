<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user_administrator =  Role::where('name', 'user_administrator')->first();

        $role_post_moderator =  Role::where('name', 'post_moderator')->first();

        $role_theme_manager =  Role::where('name', 'theme_manager')->first();

        $role_default =  Role::where('name', 'default')->first();

        $user_administrator = new User();
        $user_administrator->name = 'user admin name';
        $user_administrator->email = 'useradmin@example.com';
        $user_administrator->password = bcrypt('lolo4ever');
        $user_administrator->save();
        $user_administrator->roles()->attach($role_user_administrator);

        $post_moderator = new User();
        $post_moderator->name = 'post mod name';
        $post_moderator->email = 'postmod@example.com';
        $post_moderator->password = bcrypt('lolo4ever');
        $post_moderator->save();
        $post_moderator->roles()->attach($role_post_moderator);

        $theme_manager = new User();
        $theme_manager->name = 'theme manager name';
        $theme_manager->email = 'thememanager@example.com';
        $theme_manager->password = bcrypt('lolo4ever');
        $theme_manager->save();
        $theme_manager->roles()->attach($role_theme_manager);

        $default = new User();
        $default->name = 'default user name';
        $default->email = 'defualtuser@example.com';
        $default->password = bcrypt('lolo4ever');
        $default->save();
        $default->roles()->attach($role_default);
    }
}
