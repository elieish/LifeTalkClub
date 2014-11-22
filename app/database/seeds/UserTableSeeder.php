<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(
                                        array(
                                                array(
                                                        'username'      => 'elieish@gmail.com',
                                                        'password'      => Hash::make('0829699114'),
                                                        'role'          => 1,
                                                        'created_by'    => 1,
                                                        'update_by'     => 1,
                                                        'active'        => 1,
                                                        'created_at'    =>\Carbon\Carbon::now()->toDateTimeString(),
                                                        'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
                                                        ),
                                                 array(
                                                        'username'      => 'nokukhanya68@gmail.com',
                                                        'password'      => Hash::make('0820795249'),
                                                        'role'          => 1,
                                                        'created_by'    => 1,
                                                        'update_by'     => 1,
                                                        'active'        => 1,
                                                        'created_at'    =>\Carbon\Carbon::now()->toDateTimeString(),
                                                        'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
                                                        )
                                            )
                                    );

                 }
}

