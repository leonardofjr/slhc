<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service[0] = new Service();
        $service[0]->service_name = 'Inka Aroma Massage';
        $service[0]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[0]->short_description = 'This is a relaxing, rejuvenating massage that will be soothing for anyone under a lot of tension on our treatment table & let us alleviate your pain & stress. With the use of herbal blends to help you relax your tension.';
        $service[0]->detailed_description = $service[0]->short_description;
        $service[0]->service_price = 100;
        $service[0]->duration = 60;
        $service[0]->save();
    }
}
