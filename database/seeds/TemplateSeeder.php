<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = new \App\Template();
        $template->name = 'basic-v1';
        $template->description = 'basic resume template';
        $template->blade = 'basic-v1';
        $template->type = 'free';
        $template->save();
        $template = new \App\Template();
        $template->name = 'professional-v1';
        $template->description = 'professional resume template';
        $template->blade = 'professional-v1';
        $template->type = 'paid';
        $template->save();
    }
}
