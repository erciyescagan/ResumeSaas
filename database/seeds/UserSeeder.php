<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->firstName = 'Mert Erciyes';
        $user->lastName = 'Çağan';
        $user->username = 'erciyescagan';
        $user->email = 'erciyescagan@gmail.com';
        $user->image = 'http://localhost:8000/templates/professional-v1/assets/img/profile-photo2.png';
        $user->password = \Illuminate\Support\Facades\Hash::make('sim2waycil');
        $user->templateID = 2;
        $user->shortResume = 'I have graduated from Computer Engineering Bachelor Program at Süleyman Demirel University in July of 2019 and I got a job to develop a website about travel via PHP Laravel Framework. Before that, I worked freelance about WordPress. On the other hand, I have experience and know-how related to developing mobile applications via Android. Among my future plans are cross-platform software and creating statistics based on artificial intelligence and meaningful data.';
        $user->contacts = json_encode(
            [
                'address' => [
                    'content' => 'Gençlik Mah. Işıklar Cad. 38/14 Muratpaşa, Antalya, TURKEY',
                    'visibility' => 1
                ],
                'phone' => [
                    'content' => '+905443741994',
                    'visibility' => 1
                ],
                'social' => [
                    'facebook' => 'erciyescagan',
                    'twitter' => 'erciyescagan',
                    'linkedin' => 'erciyescagan',
                    'github' => 'erciyescagan'
                ]
            ]);
        $user->save();
        $user = new \App\User();
        $user->firstName = 'Pembe Begül';
        $user->lastName = ' Güner';
        $user->username = 'begulguner';
        $user->email = 'gunerbegul@gmail.com';
        $user->image = 'http://localhost:8000/templates/basic-v1/images/profile-photo1.jpg';
        $user->contacts =json_encode([
            'address' => [
                'content' => 'Gençlik Mah. Işıklar Cad. 38/14 Muratpaşa, Antalya, TURKEY',
                'visibility' => 1
            ],
            'phone' => [
                'content' => '+905074985035',
                'visibility' => 1
            ],
            'social' => [
                'facebook' => 'begulguner',
                'twitter' => 'begulguner',
                'linkedin' => 'begulguner',
                'github' => 'begulguner'
            ]
        ]);
        $user->shortResume = '';
        $user->password = \Illuminate\Support\Facades\Hash::make('sim2waycil');
        $user->save();
    }
}
