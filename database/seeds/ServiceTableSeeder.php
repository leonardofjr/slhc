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
        $service[0]->service_name = 'Acupressure';
        $service[0]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[0]->short_description = 'A traditional modality that helps meridians great to alleviate pain and inflammation';
        $service[0]->detailed_description = $service[0]->short_description;
        $service[0]->service_price = 60;
        $service[0]->duration = 3600;
        $service[0]->save();

        $service[1] = new Service();
        $service[1]->service_name = 'Massage';
        $service[1]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[1]->short_description = 'Tui Na masage is a complete treatment that involves the use of meridian therapy each point used will help achieve balance of qi in the body. This is a similar treatment to acupuncture except that this treatment is done without needles. Great for relaxation and restoration book today or call for more details';
        $service[1]->detailed_description = $service[0]->short_description;
        $service[1]->service_price = 60;
        $service[1]->duration = 3600;
        $service[1]->save();

        $service[2] = new Service();
        $service[2]->service_name = 'Herbal Medicine';
        $service[2]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[2]->short_description = 'Herbal Medicine has been used for thousands of years and is still being used today.';
        $service[2]->detailed_description = $service[0]->short_description;
        $service[2]->service_price = 60;
        $service[2]->duration = 3600;
        $service[2]->save();

        $service[3] = new Service();
        $service[3]->service_name = 'Reiki';
        $service[3]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[3]->short_description = 'Reiki is an energy healing technique that is done with the use of universal energy. It is transferred through the palms of the practitioner to the patient in order to encourage emotional or physical healing. Great stress and emotional pain.';
        $service[3]->detailed_description = $service[0]->short_description;
        $service[3]->service_price = 60;
        $service[3]->duration = 3600;
        $service[3]->save();
    }
}
