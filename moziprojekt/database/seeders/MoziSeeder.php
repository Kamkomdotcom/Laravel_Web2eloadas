<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Először kiürítjük, hogy ne legyenek duplikációk
        DB::table('mozi')->truncate();
        
        DB::table('mozi')->insert([
            ['mozinev' => 'A38 Hajó', 'irszam' => 1113, 'cim' => 'Petőfi híd budai hídfő', 'telefon' => '4643940'],
            ['mozinev' => 'Bárka Kikötő a Ráday utcában', 'irszam' => 1092, 'cim' => 'Ráday utca', 'telefon' => ''],
            ['mozinev' => 'Bem', 'irszam' => 1024, 'cim' => 'Margit krt. 5/b.', 'telefon' => '3168708'],
            ['mozinev' => 'Budapesti Európai Ifjúsági Központ', 'irszam' => 1024, 'cim' => 'Zivatar u. 1-3.', 'telefon' => '2124080'],
            ['mozinev' => 'Cervantes Intézet', 'irszam' => 1000, 'cim' => 'Vörösmarty u. 32.', 'telefon' => ''],
            ['mozinev' => 'Cinema City Csepel Plaza', 'irszam' => 1212, 'cim' => 'Rákóczi F. út 154-170.', 'telefon' => '4258111'],
            ['mozinev' => 'Cinema City Új Udvar', 'irszam' => 1036, 'cim' => 'Bécsi út 38-44.', 'telefon' => '4378383'],
            ['mozinev' => 'Cirko-Gejzír', 'irszam' => 1055, 'cim' => 'Balassi Bálint u. 15-17.', 'telefon' => '2690904'],
            ['mozinev' => 'Corvin Budapest Filmpalota', 'irszam' => 1082, 'cim' => 'Corvin köz 1.', 'telefon' => '4595050'],
            ['mozinev' => 'Erlin 9 galéria', 'irszam' => 1000, 'cim' => 'Ráday utca', 'telefon' => ''],
            ['mozinev' => 'FilmesHáz', 'irszam' => 1092, 'cim' => 'Ráday utca 31/K', 'telefon' => ''],
            ['mozinev' => 'Hollywood Multiplex Duna Plaza', 'irszam' => 1138, 'cim' => 'Váci út 178. (Duna Plaza)', 'telefon' => '4674267'],
            ['mozinev' => 'Hollywood Multiplex Lurdy Ház', 'irszam' => 1092, 'cim' => 'Mester utca és Könyves Kálmán körút sarok', 'telefon' => '4674267'],
            ['mozinev' => 'Hollywood Multiplex Óbuda', 'irszam' => 1030, 'cim' => 'Bécsi út 154. (Eurocenter)', 'telefon' => '4674267'],
            ['mozinev' => 'Hollywood Multiplex Pólus', 'irszam' => 1152, 'cim' => 'Szentmihályi út 131.', 'telefon' => '4674267'],
            ['mozinev' => 'Hunnia', 'irszam' => 1073, 'cim' => 'Erzsébet krt. 26.', 'telefon' => ''],
            ['mozinev' => 'Jailhouse Club', 'irszam' => 1094, 'cim' => 'IX. kerület, Tűzoltó utca 22.', 'telefon' => '9894905'],
            ['mozinev' => 'Jókai klub', 'irszam' => 1121, 'cim' => 'Hollós út 5.', 'telefon' => '3925452'],
            ['mozinev' => 'Kis Erkel', 'irszam' => 1000, 'cim' => 'Ráday utca', 'telefon' => ''],
            ['mozinev' => 'Kossuth Mozi', 'irszam' => 1132, 'cim' => 'Váci út 14.', 'telefon' => '4674260'],
            ['mozinev' => 'Kultiplex', 'irszam' => 1095, 'cim' => 'Kinizsi u. 28.', 'telefon' => '2190706'],
            ['mozinev' => 'Millenáris Fogadó', 'irszam' => 1024, 'cim' => 'Kisrókus u. 16-20.', 'telefon' => '4361717'],
            ['mozinev' => 'Műcsarnok', 'irszam' => 1406, 'cim' => 'Hősők tere', 'telefon' => ''],
            ['mozinev' => 'Művész', 'irszam' => 1066, 'cim' => 'Teréz krt. 30.', 'telefon' => '3326726'],
            ['mozinev' => 'Művészetek Palotája', 'irszam' => 1095, 'cim' => 'Komor Marcell u. 1.', 'telefon' => '5553000'],
            ['mozinev' => 'Odeon-Lloyd mozi', 'irszam' => 1136, 'cim' => 'Hollán Ernő utca 7.', 'telefon' => '3292064'],
            ['mozinev' => 'Örökmozgó', 'irszam' => 1073, 'cim' => 'Erzsébet krt. 39.', 'telefon' => '3422167'],
            ['mozinev' => 'Palace Campona', 'irszam' => 1222, 'cim' => 'Nagytétényi út 37-43.', 'telefon' => '3458160'],
            ['mozinev' => 'Palace Mammut', 'irszam' => 1024, 'cim' => 'Lövőház u. 2-6.', 'telefon' => '3458160'],
            ['mozinev' => 'Palace MOM Park', 'irszam' => 1123, 'cim' => 'Alkotás út 53.', 'telefon' => '3458160'],
            ['mozinev' => 'Palace Westend', 'irszam' => 1062, 'cim' => 'Váci út 1-3.', 'telefon' => '3365555'],
            ['mozinev' => 'Puskin', 'irszam' => 1053, 'cim' => 'Kossuth L. u. 18.', 'telefon' => '4296080'],
            ['mozinev' => 'Ráday könyves ház', 'irszam' => 1000, 'cim' => 'Ráday utca', 'telefon' => ''],
            ['mozinev' => 'Sambhala Tibet Központ', 'irszam' => 1088, 'cim' => 'Lőrinc pap tér 2.', 'telefon' => '2668084'],
            ['mozinev' => 'Science Park', 'irszam' => 1117, 'cim' => 'Irínyi József u. 4.-20.', 'telefon' => ''],
            ['mozinev' => 'Szimpla Kert Mozi', 'irszam' => 1075, 'cim' => 'Kazinczy u. 14.', 'telefon' => '3215880'],
            ['mozinev' => 'Szindbád', 'irszam' => 1137, 'cim' => 'Szent István krt. 16.', 'telefon' => '3492773'],
            ['mozinev' => 'Tabán', 'irszam' => 1016, 'cim' => 'Krisztina krt. 87-89.', 'telefon' => '3568162'],
            ['mozinev' => 'Toldi', 'irszam' => 1054, 'cim' => 'Bajcsy-Zsilinszky út 36-38.', 'telefon' => '4720397'],
            ['mozinev' => 'Tűzraktár', 'irszam' => 1094, 'cim' => 'Tűzoltó u. 54-56', 'telefon' => ''],
            ['mozinev' => 'Uránia Nemzeti Filmszínház', 'irszam' => 1088, 'cim' => 'Rákóczi út 21.', 'telefon' => '4863413'],
            ['mozinev' => 'Vörösmarty', 'irszam' => 1075, 'cim' => 'Üllői út 4.', 'telefon' => '3174542'],
        ]);
    }
}