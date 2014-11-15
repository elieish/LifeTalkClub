<?php
class MemberTableSeeder extends Seeder {

    public function run()
    {
        DB::table('members')->truncate();
        DB::table('members')->insert(
                                        array(
                                                array(
                                                        'title'         => 'Mr',
                                                        'cell'          => '0828699114',
                                                        'tel'           => '0313326581',
                                                        'dob'           => '1984-12-01',
                                                        'initials'      => 'E',
                                                        'firstname'     => 'Elie',
                                                        'surname'       => 'Ishimwe',
                                                        'idnumber'      => '00000000',
                                                        'introducer'    => 1,
                                                        'bankid'        => 1,
                                                        'userid'        => 1,
                                                        'created_by'    => 1,
                                                        'updated_by'    => 1,
                                                        'active'        => 1,
                                                        'created_at'    =>\Carbon\Carbon::now()->toDateTimeString(),
                                                        'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
                                                        ),
                                                 array(
                                                        'title'         => 'Miss',
                                                        'cell'          => '0820795248',
                                                        'tel'           => '0312010287',
                                                        'dob'           => '1968-09-02',
                                                        'initials'      => 'NC',
                                                        'firstname'     => 'Nokukhanya',
                                                        'surname'       => 'Ntuli',
                                                        'idnumber'      => '6809021134083',
                                                        'introducer'    => 1,
                                                        'bankid'        => 1,
                                                        'userid'        => 1,
                                                        'created_by'    => 1,
                                                        'updated_by'    => 1,
                                                        'active'        => 1,
                                                        'created_at'    =>\Carbon\Carbon::now()->toDateTimeString(),
                                                        'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
                                                        )
                                            )
                                    );

                 }
}

