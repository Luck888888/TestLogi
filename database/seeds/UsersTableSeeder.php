<?php

use Illuminate\Database\Seeder;
use App\Kards;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kards')->insert([
            [
                'fullname' => 'Tania' ,
                'email' => 'tania@gmail.com' ,
                'job' => 'developer' ,
                'about' => 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open 
                          source general-purpose scripting language that is especially ' ,
                'profile' => 'What distinguishes PHP from something like client-side JavaScript is 
                            that the code is executed on the server, generating HTML which is then sent to the ' ,

                'skills' => 'The best things in using PHP are that it is extremely simple for a 
                            newcomer, but offers many advanced features for a professional programmer.' ,
                'aducationame' => 'Univer' ,
                'metaname' => 'PHP is pretty quick by itself, but bottlenecks can arise when 
                             you make remote connections, load files, etc' ,
                'meta' => 'There are times when it can be beneficial to cache individual objects 
                          in your code, such as with data that is expensive' ,

                'portfolio' => 'Many of the popular bytecode caching solutions let you cache custom data as well, 
                              so there’s even more reason to take advantage of them.' ,

                'birth_date' => 'semptember' ,
                'year' => '2018' ,
            ] ,
            [
                'fullname' => 'Ta' ,
                'email' => 'tan@gmail.com' ,
                'job' => 'developer' ,
                'about' => 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open 
                          source general-purpose scripting language that is especially ' ,
                'profile' => 'What distinguishes PHP from something like client-side JavaScript is 
                            that the code is executed on the server, generating HTML which is then sent to the ' ,

                'skills' => 'The best things in using PHP are that it is extremely simple for a 
                            newcomer, but offers many advanced features for a professional programmer.' ,
                'aducationame' => 'Univer' ,
                'metaname' => 'PHP is pretty quick by itself, but bottlenecks can arise when 
                             you make remote connections, load files, etc' ,
                'meta' => 'There are times when it can be beneficial to cache individual objects 
                          in your code, such as with data that is expensive' ,

                'portfolio' => 'Many of the popular bytecode caching solutions let you cache custom data as well, 
                              so there’s even more reason to take advantage of them.' ,

                'birth_date' => 'semptember' ,
                'year' => '2020' ,
            ] ,
            [
                'fullname' => 'Victor' ,
                'email' => 'victor@gmail.com' ,
                'job' => 'jobs' ,
                'about' => 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open 
                          source general-purpose scripting language that is especially ' ,
                'profile' => 'What distinguishes PHP from something like client-side JavaScript is 
                            that the code is executed on the server, generating HTML which is then sent to the ' ,

                'skills' => 'The best things in using PHP are that it is extremely simple for a 
                            newcomer, but offers many advanced features for a professional programmer.' ,
                'aducationame' => 'Univer' ,
                'metaname' => 'PHP is pretty quick by itself, but bottlenecks can arise when 
                             you make remote connections, load files, etc' ,
                'meta' => 'There are times when it can be beneficial to cache individual objects 
                          in your code, such as with data that is expensive' ,

                'portfolio' => 'Many of the popular bytecode caching solutions let you cache custom data as well, 
                              so there’s even more reason to take advantage of them.' ,

                'birth_date' => 'semptember 19' ,
                'year' => '2020' ,


            ]
        ]);
    }
}
