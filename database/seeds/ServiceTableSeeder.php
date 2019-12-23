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
        $service[0]->service_chinese_name = '指压';
        $service[0]->image = 'imgs/acupressure.png';
        $service[0]->slug = str_replace(' ','_' ,strtolower($service[0]->service_name));
        $service[0]->short_description = 'Natural health care system that dates back thousands of years old.';
        $service[0]->detailed_description = $service[0]->short_description;
        $service[0]->service_price = 60;
        $service[0]->duration = 3600;
        $service[0]->save();

        $service[1] = new Service();
        $service[1]->service_name = 'Massage';
        $service[1]->service_chinese_name = '按摩';
        $service[1]->image = 'imgs/massage.png';
        $service[1]->slug = str_replace(' ','_' ,strtolower($service[1]->service_name));
        $service[1]->short_description = 'Treats the whole person as well as the energy body.';
        $service[1]->detailed_description = 'Tui Na masage is a complete treatment that involves the use of meridian therapy each point used will help achieve balance of qi in the body. This is a similar treatment to acupuncture except that this treatment is done without needles. Great for relaxation and restoration book today or call for more details';
        $service[1]->service_price = 60;
        $service[1]->duration = 3600;
        $service[1]->save();

        $service[2] = new Service();
        $service[2]->service_name = 'Herbal Medicine';
        $service[2]->service_chinese_name = '草药';
        $service[2]->image = 'imgs/herbal-medicine.png';
        $service[2]->slug = str_replace(' ','_' ,strtolower($service[2]->service_name));
        $service[2]->short_description = 'We offer traditional shamanic inka healing that is practiced across the Andes and is now being offered here at our centre.';
        $service[2]->detailed_description = 'Herbal Medicine has been used for thousands of years and is still being used today.';
        $service[2]->service_price = 60;
        $service[2]->duration = 3600;
        $service[2]->save();

        $service[3] = new Service();
        $service[3]->service_name = 'Reiki';
        $service[3]->service_chinese_name = '灵气';
        $service[3]->image = 'imgs/reiki.png';
        $service[3]->slug = str_replace(' ','_' ,strtolower($service[3]->service_name));
        $service[3]->short_description = 'Is a modality where energy is directed through the hands of the practitioner through your Chakras.';
        $service[3]->detailed_description = 'Reiki is an energy healing technique that is done with the use of universal energy. It is transferred through the palms of the practitioner to the patient in order to encourage emotional or physical healing. Great stress and emotional pain.';
        $service[3]->service_price = 60;
        $service[3]->duration = 3600;
        $service[3]->save();
    }
}
