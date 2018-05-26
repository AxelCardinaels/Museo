<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->delete();


        DB::table('countries')->insert(array(
          'id'=> 1,
          'code'=> 4,
          'alpha2'=>'AF',
          'alpha3'=>'AFG',
          'name_gb'=>'Afghanistan',
          'name_fr'=>'Afghanistan'
        ));



        DB::table('countries')->insert(array(
        'id'=> 2,
        'code'=> 8,
        'alpha2'=>'AL',
        'alpha3'=>'ALB',
        'name_gb'=>'Albania',
        'name_fr'=>'Albanie'
        ));



DB::table('countries')->insert(array(
'id'=> 3,
'code'=> 10,
'alpha2'=>'AQ',
'alpha3'=>'ATA',
'name_gb'=>'Antarctica',
'name_fr'=>'Antarctique'
));



DB::table('countries')->insert(array(
'id'=> 4,
'code'=> 12,
'alpha2'=>'DZ',
'alpha3'=>'DZA',
'name_gb'=>'Algeria',
'name_fr'=>'Algérie'
));



DB::table('countries')->insert(array(
'id'=> 5,
'code'=> 16,
'alpha2'=>'AS',
'alpha3'=>'ASM',
'name_gb'=>'American Samoa',
'name_fr'=>'Samoa Américaines'
));



DB::table('countries')->insert(array(
'id'=> 6,
'code'=> 20,
'alpha2'=>'AD',
'alpha3'=>'AND',
'name_gb'=>'Andorra',
'name_fr'=>'Andorre'
));



DB::table('countries')->insert(array(
'id'=> 7,
'code'=> 24,
'alpha2'=>'AO',
'alpha3'=>'AGO',
'name_gb'=>'Angola',
'name_fr'=>'Angola'
));



DB::table('countries')->insert(array(
'id'=> 8,
'code'=> 28,
'alpha2'=>'AG',
'alpha3'=>'ATG',
'name_gb'=>'Antigua and Barbuda',
'name_fr'=>'Antigua-et-Barbuda'
));



DB::table('countries')->insert(array(
'id'=> 9,
'code'=> 31,
'alpha2'=>'AZ',
'alpha3'=>'AZE',
'name_gb'=>'Azerbaijan',
'name_fr'=>'Azerbaïdjan'
));



DB::table('countries')->insert(array(
'id'=> 10,
'code'=> 32,
'alpha2'=>'AR',
'alpha3'=>'ARG',
'name_gb'=>'Argentina',
'name_fr'=>'Argentine'
));



DB::table('countries')->insert(array(
'id'=> 11,
'code'=> 36,
'alpha2'=>'AU',
'alpha3'=>'AUS',
'name_gb'=>'Australia',
'name_fr'=>'Australie'
));



DB::table('countries')->insert(array(
'id'=> 12,
'code'=> 40,
'alpha2'=>'AT',
'alpha3'=>'AUT',
'name_gb'=>'Austria',
'name_fr'=>'Autriche'
));



DB::table('countries')->insert(array(
'id'=> 13,
'code'=> 44,
'alpha2'=>'BS',
'alpha3'=>'BHS',
'name_gb'=>'Bahamas',
'name_fr'=>'Bahamas'
));



DB::table('countries')->insert(array(
'id'=> 14,
'code'=> 48,
'alpha2'=>'BH',
'alpha3'=>'BHR',
'name_gb'=>'Bahrain',
'name_fr'=>'Bahreïn'
));



DB::table('countries')->insert(array(
'id'=> 15,
'code'=> 50,
'alpha2'=>'BD',
'alpha3'=>'BGD',
'name_gb'=>'Bangladesh',
'name_fr'=>'Bangladesh'
));



DB::table('countries')->insert(array(
'id'=> 16,
'code'=> 51,
'alpha2'=>'AM',
'alpha3'=>'ARM',
'name_gb'=>'Armenia',
'name_fr'=>'Arménie'
));



DB::table('countries')->insert(array(
'id'=> 17,
'code'=> 52,
'alpha2'=>'BB',
'alpha3'=>'BRB',
'name_gb'=>'Barbados',
'name_fr'=>'Barbade'
));



DB::table('countries')->insert(array(
'id'=> 18,
'code'=> 56,
'alpha2'=>'BE',
'alpha3'=>'BEL',
'name_gb'=>'Belgium',
'name_fr'=>'Belgique'
));



DB::table('countries')->insert(array(
'id'=> 19,
'code'=> 60,
'alpha2'=>'BM',
'alpha3'=>'BMU',
'name_gb'=>'Bermuda',
'name_fr'=>'Bermudes'
));



DB::table('countries')->insert(array(
'id'=> 20,
'code'=> 64,
'alpha2'=>'BT',
'alpha3'=>'BTN',
'name_gb'=>'Bhutan',
'name_fr'=>'Bhoutan'
));



DB::table('countries')->insert(array(
'id'=> 21,
'code'=> 68,
'alpha2'=>'BO',
'alpha3'=>'BOL',
'name_gb'=>'Bolivia',
'name_fr'=>'Bolivie'
));



DB::table('countries')->insert(array(
'id'=> 22,
'code'=> 70,
'alpha2'=>'BA',
'alpha3'=>'BIH',
'name_gb'=>'Bosnia and Herzegovina',
'name_fr'=>'Bosnie-Herzégovine'
));



DB::table('countries')->insert(array(
'id'=> 23,
'code'=> 72,
'alpha2'=>'BW',
'alpha3'=>'BWA',
'name_gb'=>'Botswana',
'name_fr'=>'Botswana'
));



DB::table('countries')->insert(array(
'id'=> 24,
'code'=> 74,
'alpha2'=>'BV',
'alpha3'=>'BVT',
'name_gb'=>'Bouvet Island',
'name_fr'=>'Île Bouvet'
));



DB::table('countries')->insert(array(
'id'=> 25,
'code'=> 76,
'alpha2'=>'BR',
'alpha3'=>'BRA',
'name_gb'=>'Brazil',
'name_fr'=>'Brésil'
));



DB::table('countries')->insert(array(
'id'=> 26,
'code'=> 84,
'alpha2'=>'BZ',
'alpha3'=>'BLZ',
'name_gb'=>'Belize',
'name_fr'=>'Belize'
));



DB::table('countries')->insert(array(
'id'=> 27,
'code'=> 86,
'alpha2'=>'IO',
'alpha3'=>'IOT',
'name_gb'=>'British Indian Ocean Territory',
'name_fr'=>'Territoire Britannique de l’Océan Indien'
));



DB::table('countries')->insert(array(
'id'=> 28,
'code'=> 90,
'alpha2'=>'SB',
'alpha3'=>'SLB',
'name_gb'=>'Solomon Islands',
'name_fr'=>'Îles Salomon'
));



DB::table('countries')->insert(array(
'id'=> 29,
'code'=> 92,
'alpha2'=>'VG',
'alpha3'=>'VGB',
'name_gb'=>'British Virgin Islands',
'name_fr'=>'Îles Vierges Britanniques'
));



DB::table('countries')->insert(array(
'id'=> 30,
'code'=> 96,
'alpha2'=>'BN',
'alpha3'=>'BRN',
'name_gb'=>'Brunei Darussalam',
'name_fr'=>'Brunéi Darussalam'
));



DB::table('countries')->insert(array(
'id'=> 31,
'code'=> 100,
'alpha2'=>'BG',
'alpha3'=>'BGR',
'name_gb'=>'Bulgaria',
'name_fr'=>'Bulgarie'
));



DB::table('countries')->insert(array(
'id'=> 32,
'code'=> 104,
'alpha2'=>'MM',
'alpha3'=>'MMR',
'name_gb'=>'Myanmar',
'name_fr'=>'Myanmar'
));



DB::table('countries')->insert(array(
'id'=> 33,
'code'=> 108,
'alpha2'=>'BI',
'alpha3'=>'BDI',
'name_gb'=>'Burundi',
'name_fr'=>'Burundi'
));



DB::table('countries')->insert(array(
'id'=> 34,
'code'=> 112,
'alpha2'=>'BY',
'alpha3'=>'BLR',
'name_gb'=>'Belarus',
'name_fr'=>'Bélarus'
));



DB::table('countries')->insert(array(
'id'=> 35,
'code'=> 116,
'alpha2'=>'KH',
'alpha3'=>'KHM',
'name_gb'=>'Cambodia',
'name_fr'=>'Cambodge'
));



DB::table('countries')->insert(array(
'id'=> 36,
'code'=> 120,
'alpha2'=>'CM',
'alpha3'=>'CMR',
'name_gb'=>'Cameroon',
'name_fr'=>'Cameroun'
));



DB::table('countries')->insert(array(
'id'=> 37,
'code'=> 124,
'alpha2'=>'CA',
'alpha3'=>'CAN',
'name_gb'=>'Canada',
'name_fr'=>'Canada'
));



DB::table('countries')->insert(array(
'id'=> 38,
'code'=> 132,
'alpha2'=>'CV',
'alpha3'=>'CPV',
'name_gb'=>'Cape Verde',
'name_fr'=>'Cap-vert'
));



DB::table('countries')->insert(array(
'id'=> 39,
'code'=> 136,
'alpha2'=>'KY',
'alpha3'=>'CYM',
'name_gb'=>'Cayman Islands',
'name_fr'=>'Îles Caïmanes'
));



DB::table('countries')->insert(array(
'id'=> 40,
'code'=> 140,
'alpha2'=>'CF',
'alpha3'=>'CAF',
'name_gb'=>'Central African',
'name_fr'=>'République Centrafricaine'
));



DB::table('countries')->insert(array(
'id'=> 41,
'code'=> 144,
'alpha2'=>'LK',
'alpha3'=>'LKA',
'name_gb'=>'Sri Lanka',
'name_fr'=>'Sri Lanka'
));



DB::table('countries')->insert(array(
'id'=> 42,
'code'=> 148,
'alpha2'=>'TD',
'alpha3'=>'TCD',
'name_gb'=>'Chad',
'name_fr'=>'Tchad'
));



DB::table('countries')->insert(array(
'id'=> 43,
'code'=> 152,
'alpha2'=>'CL',
'alpha3'=>'CHL',
'name_gb'=>'Chile',
'name_fr'=>'Chili'
));



DB::table('countries')->insert(array(
'id'=> 44,
'code'=> 156,
'alpha2'=>'CN',
'alpha3'=>'CHN',
'name_gb'=>'China',
'name_fr'=>'Chine'
));



DB::table('countries')->insert(array(
'id'=> 45,
'code'=> 158,
'alpha2'=>'TW',
'alpha3'=>'TWN',
'name_gb'=>'Taiwan',
'name_fr'=>'Taïwan'
));



DB::table('countries')->insert(array(
'id'=> 46,
'code'=> 162,
'alpha2'=>'CX',
'alpha3'=>'CXR',
'name_gb'=>'Christmas Island',
'name_fr'=>'Île Christmas'
));



DB::table('countries')->insert(array(
'id'=> 47,
'code'=> 166,
'alpha2'=>'CC',
'alpha3'=>'CCK',
'name_gb'=>'Cocos (Keeling) Islands',
'name_fr'=>'Îles Cocos (Keeling)'
));



DB::table('countries')->insert(array(
'id'=> 48,
'code'=> 170,
'alpha2'=>'CO',
'alpha3'=>'COL',
'name_gb'=>'Colombia',
'name_fr'=>'Colombie'
));



DB::table('countries')->insert(array(
'id'=> 49,
'code'=> 174,
'alpha2'=>'KM',
'alpha3'=>'COM',
'name_gb'=>'Comoros',
'name_fr'=>'Comores'
));



DB::table('countries')->insert(array(
'id'=> 50,
'code'=> 175,
'alpha2'=>'YT',
'alpha3'=>'MYT',
'name_gb'=>'Mayotte',
'name_fr'=>'Mayotte'
));



DB::table('countries')->insert(array(
'id'=> 51,
'code'=> 178,
'alpha2'=>'CG',
'alpha3'=>'COG',
'name_gb'=>'Republic of the Congo',
'name_fr'=>'République du Congo'
));



DB::table('countries')->insert(array(
'id'=> 52,
'code'=> 180,
'alpha2'=>'CD',
'alpha3'=>'COD',
'name_gb'=>'The Democratic Republic Of The Congo',
'name_fr'=>'République Démocratique du Congo'
));



DB::table('countries')->insert(array(
'id'=> 53,
'code'=> 184,
'alpha2'=>'CK',
'alpha3'=>'COK',
'name_gb'=>'Cook Islands',
'name_fr'=>'Îles Cook'
));



DB::table('countries')->insert(array(
'id'=> 54,
'code'=> 188,
'alpha2'=>'CR',
'alpha3'=>'CRI',
'name_gb'=>'Costa Rica',
'name_fr'=>'Costa Rica'
));



DB::table('countries')->insert(array(
'id'=> 55,
'code'=> 191,
'alpha2'=>'HR',
'alpha3'=>'HRV',
'name_gb'=>'Croatia',
'name_fr'=>'Croatie'
));



DB::table('countries')->insert(array(
'id'=> 56,
'code'=> 192,
'alpha2'=>'CU',
'alpha3'=>'CUB',
'name_gb'=>'Cuba',
'name_fr'=>'Cuba'
));



DB::table('countries')->insert(array(
'id'=> 57,
'code'=> 196,
'alpha2'=>'CY',
'alpha3'=>'CYP',
'name_gb'=>'Cyprus',
'name_fr'=>'Chypre'
));



DB::table('countries')->insert(array(
'id'=> 58,
'code'=> 203,
'alpha2'=>'CZ',
'alpha3'=>'CZE',
'name_gb'=>'Czech Republic',
'name_fr'=>'République Tchèque'
));



DB::table('countries')->insert(array(
'id'=> 59,
'code'=> 204,
'alpha2'=>'BJ',
'alpha3'=>'BEN',
'name_gb'=>'Benin',
'name_fr'=>'Bénin'
));



DB::table('countries')->insert(array(
'id'=> 60,
'code'=> 208,
'alpha2'=>'DK',
'alpha3'=>'DNK',
'name_gb'=>'Denmark',
'name_fr'=>'Danemark'
));



DB::table('countries')->insert(array(
'id'=> 61,
'code'=> 212,
'alpha2'=>'DM',
'alpha3'=>'DMA',
'name_gb'=>'Dominica',
'name_fr'=>'Dominique'
));



DB::table('countries')->insert(array(
'id'=> 62,
'code'=> 214,
'alpha2'=>'DO',
'alpha3'=>'DOM',
'name_gb'=>'Dominican Republic',
'name_fr'=>'République Dominicaine'
));



DB::table('countries')->insert(array(
'id'=> 63,
'code'=> 218,
'alpha2'=>'EC',
'alpha3'=>'ECU',
'name_gb'=>'Ecuador',
'name_fr'=>'Équateur'
));



DB::table('countries')->insert(array(
'id'=> 64,
'code'=> 222,
'alpha2'=>'SV',
'alpha3'=>'SLV',
'name_gb'=>'El Salvador',
'name_fr'=>'El Salvador'
));



DB::table('countries')->insert(array(
'id'=> 65,
'code'=> 226,
'alpha2'=>'GQ',
'alpha3'=>'GNQ',
'name_gb'=>'Equatorial Guinea',
'name_fr'=>'Guinée Équatoriale'
));



DB::table('countries')->insert(array(
'id'=> 66,
'code'=> 231,
'alpha2'=>'ET',
'alpha3'=>'ETH',
'name_gb'=>'Ethiopia',
'name_fr'=>'Éthiopie'
));



DB::table('countries')->insert(array(
'id'=> 67,
'code'=> 232,
'alpha2'=>'ER',
'alpha3'=>'ERI',
'name_gb'=>'Eritrea',
'name_fr'=>'Érythrée'
));



DB::table('countries')->insert(array(
'id'=> 68,
'code'=> 233,
'alpha2'=>'EE',
'alpha3'=>'EST',
'name_gb'=>'Estonia',
'name_fr'=>'Estonie'
));



DB::table('countries')->insert(array(
'id'=> 69,
'code'=> 234,
'alpha2'=>'FO',
'alpha3'=>'FRO',
'name_gb'=>'Faroe Islands',
'name_fr'=>'Îles Féroé'
));



DB::table('countries')->insert(array(
'id'=> 70,
'code'=> 238,
'alpha2'=>'FK',
'alpha3'=>'FLK',
'name_gb'=>'Falkland Islands',
'name_fr'=>'Îles (malvinas) Falkland'
));



DB::table('countries')->insert(array(
'id'=> 71,
'code'=> 239,
'alpha2'=>'GS',
'alpha3'=>'SGS',
'name_gb'=>'South Georgia and the South Sandwich Islands',
'name_fr'=>'Géorgie du Sud et les Îles Sandwich du Sud'
));



DB::table('countries')->insert(array(
'id'=> 72,
'code'=> 242,
'alpha2'=>'FJ',
'alpha3'=>'FJI',
'name_gb'=>'Fiji',
'name_fr'=>'Fidji'
));



DB::table('countries')->insert(array(
'id'=> 73,
'code'=> 246,
'alpha2'=>'FI',
'alpha3'=>'FIN',
'name_gb'=>'Finland',
'name_fr'=>'Finlande'
));



DB::table('countries')->insert(array(
'id'=> 74,
'code'=> 248,
'alpha2'=>'AX',
'alpha3'=>'ALA',
'name_gb'=>'Åland Islands',
'name_fr'=>'Îles Åland'
));



DB::table('countries')->insert(array(
'id'=> 75,
'code'=> 250,
'alpha2'=>'FR',
'alpha3'=>'FRA',
'name_gb'=>'France',
'name_fr'=>'France'
));



DB::table('countries')->insert(array(
'id'=> 76,
'code'=> 254,
'alpha2'=>'GF',
'alpha3'=>'GUF',
'name_gb'=>'French Guiana',
'name_fr'=>'Guyane Française'
));



DB::table('countries')->insert(array(
'id'=> 77,
'code'=> 258,
'alpha2'=>'PF',
'alpha3'=>'PYF',
'name_gb'=>'French Polynesia',
'name_fr'=>'Polynésie Française'
));



DB::table('countries')->insert(array(
'id'=> 78,
'code'=> 260,
'alpha2'=>'TF',
'alpha3'=>'ATF',
'name_gb'=>'French Southern Territories',
'name_fr'=>'Terres Australes Françaises'
));



DB::table('countries')->insert(array(
'id'=> 79,
'code'=> 262,
'alpha2'=>'DJ',
'alpha3'=>'DJI',
'name_gb'=>'Djibouti',
'name_fr'=>'Djibouti'
));



DB::table('countries')->insert(array(
'id'=> 80,
'code'=> 266,
'alpha2'=>'GA',
'alpha3'=>'GAB',
'name_gb'=>'Gabon',
'name_fr'=>'Gabon'
));



DB::table('countries')->insert(array(
'id'=> 81,
'code'=> 268,
'alpha2'=>'GE',
'alpha3'=>'GEO',
'name_gb'=>'Georgia',
'name_fr'=>'Géorgie'
));



DB::table('countries')->insert(array(
'id'=> 82,
'code'=> 270,
'alpha2'=>'GM',
'alpha3'=>'GMB',
'name_gb'=>'Gambia',
'name_fr'=>'Gambie'
));



DB::table('countries')->insert(array(
'id'=> 83,
'code'=> 275,
'alpha2'=>'PS',
'alpha3'=>'PSE',
'name_gb'=>'Occupied Palestinian Territory',
'name_fr'=>'Territoire Palestinien Occupé'
));



DB::table('countries')->insert(array(
'id'=> 84,
'code'=> 276,
'alpha2'=>'DE',
'alpha3'=>'DEU',
'name_gb'=>'Germany',
'name_fr'=>'Allemagne'
));



DB::table('countries')->insert(array(
'id'=> 85,
'code'=> 288,
'alpha2'=>'GH',
'alpha3'=>'GHA',
'name_gb'=>'Ghana',
'name_fr'=>'Ghana'
));



DB::table('countries')->insert(array(
'id'=> 86,
'code'=> 292,
'alpha2'=>'GI',
'alpha3'=>'GIB',
'name_gb'=>'Gibraltar',
'name_fr'=>'Gibraltar'
));



DB::table('countries')->insert(array(
'id'=> 87,
'code'=> 296,
'alpha2'=>'KI',
'alpha3'=>'KIR',
'name_gb'=>'Kiribati',
'name_fr'=>'Kiribati'
));



DB::table('countries')->insert(array(
'id'=> 88,
'code'=> 300,
'alpha2'=>'GR',
'alpha3'=>'GRC',
'name_gb'=>'Greece',
'name_fr'=>'Grèce'
));



DB::table('countries')->insert(array(
'id'=> 89,
'code'=> 304,
'alpha2'=>'GL',
'alpha3'=>'GRL',
'name_gb'=>'Greenland',
'name_fr'=>'Groenland'
));



DB::table('countries')->insert(array(
'id'=> 90,
'code'=> 308,
'alpha2'=>'GD',
'alpha3'=>'GRD',
'name_gb'=>'Grenada',
'name_fr'=>'Grenade'
));



DB::table('countries')->insert(array(
'id'=> 91,
'code'=> 312,
'alpha2'=>'GP',
'alpha3'=>'GLP',
'name_gb'=>'Guadeloupe',
'name_fr'=>'Guadeloupe'
));



DB::table('countries')->insert(array(
'id'=> 92,
'code'=> 316,
'alpha2'=>'GU',
'alpha3'=>'GUM',
'name_gb'=>'Guam',
'name_fr'=>'Guam'
));



DB::table('countries')->insert(array(
'id'=> 93,
'code'=> 320,
'alpha2'=>'GT',
'alpha3'=>'GTM',
'name_gb'=>'Guatemala',
'name_fr'=>'Guatemala'
));



DB::table('countries')->insert(array(
'id'=> 94,
'code'=> 324,
'alpha2'=>'GN',
'alpha3'=>'GIN',
'name_gb'=>'Guinea',
'name_fr'=>'Guinée'
));



DB::table('countries')->insert(array(
'id'=> 95,
'code'=> 328,
'alpha2'=>'GY',
'alpha3'=>'GUY',
'name_gb'=>'Guyana',
'name_fr'=>'Guyana'
));



DB::table('countries')->insert(array(
'id'=> 96,
'code'=> 332,
'alpha2'=>'HT',
'alpha3'=>'HTI',
'name_gb'=>'Haiti',
'name_fr'=>'Haïti'
));



DB::table('countries')->insert(array(
'id'=> 97,
'code'=> 334,
'alpha2'=>'HM',
'alpha3'=>'HMD',
'name_gb'=>'Heard Island and McDonald Islands',
'name_fr'=>'Îles Heard et Mcdonald'
));



DB::table('countries')->insert(array(
'id'=> 98,
'code'=> 336,
'alpha2'=>'VA',
'alpha3'=>'VAT',
'name_gb'=>'Vatican City State',
'name_fr'=>'Saint-Siège (état de la Cité du Vatican)'
));



DB::table('countries')->insert(array(
'id'=> 99,
'code'=> 340,
'alpha2'=>'HN',
'alpha3'=>'HND',
'name_gb'=>'Honduras',
'name_fr'=>'Honduras'
));



DB::table('countries')->insert(array(
'id'=> 100,
'code'=> 344,
'alpha2'=>'HK',
'alpha3'=>'HKG',
'name_gb'=>'Hong Kong',
'name_fr'=>'Hong-Kong'
));



DB::table('countries')->insert(array(
'id'=> 101,
'code'=> 348,
'alpha2'=>'HU',
'alpha3'=>'HUN',
'name_gb'=>'Hungary',
'name_fr'=>'Hongrie'
));



DB::table('countries')->insert(array(
'id'=> 102,
'code'=> 352,
'alpha2'=>'IS',
'alpha3'=>'ISL',
'name_gb'=>'Iceland',
'name_fr'=>'Islande'
));



DB::table('countries')->insert(array(
'id'=> 103,
'code'=> 356,
'alpha2'=>'IN',
'alpha3'=>'IND',
'name_gb'=>'India',
'name_fr'=>'Inde'
));



DB::table('countries')->insert(array(
'id'=> 104,
'code'=> 360,
'alpha2'=>'ID',
'alpha3'=>'IDN',
'name_gb'=>'Indonesia',
'name_fr'=>'Indonésie'
));



DB::table('countries')->insert(array(
'id'=> 105,
'code'=> 364,
'alpha2'=>'IR',
'alpha3'=>'IRN',
'name_gb'=>'Islamic Republic of Iran',
'name_fr'=>'République Islamique d’Iran'
));



DB::table('countries')->insert(array(
'id'=> 106,
'code'=> 368,
'alpha2'=>'IQ',
'alpha3'=>'IRQ',
'name_gb'=>'Iraq',
'name_fr'=>'Iraq'
));



DB::table('countries')->insert(array(
'id'=> 107,
'code'=> 372,
'alpha2'=>'IE',
'alpha3'=>'IRL',
'name_gb'=>'Ireland',
'name_fr'=>'Irlande'
));



DB::table('countries')->insert(array(
'id'=> 108,
'code'=> 376,
'alpha2'=>'IL',
'alpha3'=>'ISR',
'name_gb'=>'Israel',
'name_fr'=>'Israël'
));



DB::table('countries')->insert(array(
'id'=> 109,
'code'=> 380,
'alpha2'=>'IT',
'alpha3'=>'ITA',
'name_gb'=>'Italy',
'name_fr'=>'Italie'
));



DB::table('countries')->insert(array(
'id'=> 110,
'code'=> 384,
'alpha2'=>'CI',
'alpha3'=>'CIV',
'name_gb'=>'Côte d’Ivoire',
'name_fr'=>'Côte d’Ivoire'
));



DB::table('countries')->insert(array(
'id'=> 111,
'code'=> 388,
'alpha2'=>'JM',
'alpha3'=>'JAM',
'name_gb'=>'Jamaica',
'name_fr'=>'Jamaïque'
));



DB::table('countries')->insert(array(
'id'=> 112,
'code'=> 392,
'alpha2'=>'JP',
'alpha3'=>'JPN',
'name_gb'=>'Japan',
'name_fr'=>'Japon'
));



DB::table('countries')->insert(array(
'id'=> 113,
'code'=> 398,
'alpha2'=>'KZ',
'alpha3'=>'KAZ',
'name_gb'=>'Kazakhstan',
'name_fr'=>'Kazakhstan'
));



DB::table('countries')->insert(array(
'id'=> 114,
'code'=> 400,
'alpha2'=>'JO',
'alpha3'=>'JOR',
'name_gb'=>'Jordan',
'name_fr'=>'Jordanie'
));



DB::table('countries')->insert(array(
'id'=> 115,
'code'=> 404,
'alpha2'=>'KE',
'alpha3'=>'KEN',
'name_gb'=>'Kenya',
'name_fr'=>'Kenya'
));



DB::table('countries')->insert(array(
'id'=> 116,
'code'=> 408,
'alpha2'=>'KP',
'alpha3'=>'PRK',
'name_gb'=>'Democratic People’s Republic of Korea',
'name_fr'=>'République Populaire Démocratique de Corée'
));



DB::table('countries')->insert(array(
'id'=> 117,
'code'=> 410,
'alpha2'=>'KR',
'alpha3'=>'KOR',
'name_gb'=>'Republic of Korea',
'name_fr'=>'République de Corée'
));



DB::table('countries')->insert(array(
'id'=> 118,
'code'=> 414,
'alpha2'=>'KW',
'alpha3'=>'KWT',
'name_gb'=>'Kuwait',
'name_fr'=>'Koweït'
));



DB::table('countries')->insert(array(
'id'=> 119,
'code'=> 417,
'alpha2'=>'KG',
'alpha3'=>'KGZ',
'name_gb'=>'Kyrgyzstan',
'name_fr'=>'Kirghizistan'
));



DB::table('countries')->insert(array(
'id'=> 120,
'code'=> 418,
'alpha2'=>'LA',
'alpha3'=>'LAO',
'name_gb'=>'Lao People’s Democratic Republic',
'name_fr'=>'République Démocratique Populaire Lao'
));



DB::table('countries')->insert(array(
'id'=> 121,
'code'=> 422,
'alpha2'=>'LB',
'alpha3'=>'LBN',
'name_gb'=>'Lebanon',
'name_fr'=>'Liban'
));



DB::table('countries')->insert(array(
'id'=> 122,
'code'=> 426,
'alpha2'=>'LS',
'alpha3'=>'LSO',
'name_gb'=>'Lesotho',
'name_fr'=>'Lesotho'
));



DB::table('countries')->insert(array(
'id'=> 123,
'code'=> 428,
'alpha2'=>'LV',
'alpha3'=>'LVA',
'name_gb'=>'Latvia',
'name_fr'=>'Lettonie'
));



DB::table('countries')->insert(array(
'id'=> 124,
'code'=> 430,
'alpha2'=>'LR',
'alpha3'=>'LBR',
'name_gb'=>'Liberia',
'name_fr'=>'Libéria'
));



DB::table('countries')->insert(array(
'id'=> 125,
'code'=> 434,
'alpha2'=>'LY',
'alpha3'=>'LBY',
'name_gb'=>'Libyan Arab Jamahiriya',
'name_fr'=>'Jamahiriya Arabe Libyenne'
));



DB::table('countries')->insert(array(
'id'=> 126,
'code'=> 438,
'alpha2'=>'LI',
'alpha3'=>'LIE',
'name_gb'=>'Liechtenstein',
'name_fr'=>'Liechtenstein'
));



DB::table('countries')->insert(array(
'id'=> 127,
'code'=> 440,
'alpha2'=>'LT',
'alpha3'=>'LTU',
'name_gb'=>'Lithuania',
'name_fr'=>'Lituanie'
));



DB::table('countries')->insert(array(
'id'=> 128,
'code'=> 442,
'alpha2'=>'LU',
'alpha3'=>'LUX',
'name_gb'=>'Luxembourg',
'name_fr'=>'Luxembourg'
));



DB::table('countries')->insert(array(
'id'=> 129,
'code'=> 446,
'alpha2'=>'MO',
'alpha3'=>'MAC',
'name_gb'=>'Macao',
'name_fr'=>'Macao'
));



DB::table('countries')->insert(array(
'id'=> 130,
'code'=> 450,
'alpha2'=>'MG',
'alpha3'=>'MDG',
'name_gb'=>'Madagascar',
'name_fr'=>'Madagascar'
));



DB::table('countries')->insert(array(
'id'=> 131,
'code'=> 454,
'alpha2'=>'MW',
'alpha3'=>'MWI',
'name_gb'=>'Malawi',
'name_fr'=>'Malawi'
));



DB::table('countries')->insert(array(
'id'=> 132,
'code'=> 458,
'alpha2'=>'MY',
'alpha3'=>'MYS',
'name_gb'=>'Malaysia',
'name_fr'=>'Malaisie'
));



DB::table('countries')->insert(array(
'id'=> 133,
'code'=> 462,
'alpha2'=>'MV',
'alpha3'=>'MDV',
'name_gb'=>'Maldives',
'name_fr'=>'Maldives'
));



DB::table('countries')->insert(array(
'id'=> 134,
'code'=> 466,
'alpha2'=>'ML',
'alpha3'=>'MLI',
'name_gb'=>'Mali',
'name_fr'=>'Mali'
));



DB::table('countries')->insert(array(
'id'=> 135,
'code'=> 470,
'alpha2'=>'MT',
'alpha3'=>'MLT',
'name_gb'=>'Malta',
'name_fr'=>'Malte'
));



DB::table('countries')->insert(array(
'id'=> 136,
'code'=> 474,
'alpha2'=>'MQ',
'alpha3'=>'MTQ',
'name_gb'=>'Martinique',
'name_fr'=>'Martinique'
));



DB::table('countries')->insert(array(
'id'=> 137,
'code'=> 478,
'alpha2'=>'MR',
'alpha3'=>'MRT',
'name_gb'=>'Mauritania',
'name_fr'=>'Mauritanie'
));



DB::table('countries')->insert(array(
'id'=> 138,
'code'=> 480,
'alpha2'=>'MU',
'alpha3'=>'MUS',
'name_gb'=>'Mauritius',
'name_fr'=>'Maurice'
));



DB::table('countries')->insert(array(
'id'=> 139,
'code'=> 484,
'alpha2'=>'MX',
'alpha3'=>'MEX',
'name_gb'=>'Mexico',
'name_fr'=>'Mexique'
));



DB::table('countries')->insert(array(
'id'=> 140,
'code'=> 492,
'alpha2'=>'MC',
'alpha3'=>'MCO',
'name_gb'=>'Monaco',
'name_fr'=>'Monaco'
));



DB::table('countries')->insert(array(
'id'=> 141,
'code'=> 496,
'alpha2'=>'MN',
'alpha3'=>'MNG',
'name_gb'=>'Mongolia',
'name_fr'=>'Mongolie'
));



DB::table('countries')->insert(array(
'id'=> 142,
'code'=> 498,
'alpha2'=>'MD',
'alpha3'=>'MDA',
'name_gb'=>'Republic of Moldova',
'name_fr'=>'République de Moldova'
));



DB::table('countries')->insert(array(
'id'=> 143,
'code'=> 500,
'alpha2'=>'MS',
'alpha3'=>'MSR',
'name_gb'=>'Montserrat',
'name_fr'=>'Montserrat'
));



DB::table('countries')->insert(array(
'id'=> 144,
'code'=> 504,
'alpha2'=>'MA',
'alpha3'=>'MAR',
'name_gb'=>'Morocco',
'name_fr'=>'Maroc'
));



DB::table('countries')->insert(array(
'id'=> 145,
'code'=> 508,
'alpha2'=>'MZ',
'alpha3'=>'MOZ',
'name_gb'=>'Mozambique',
'name_fr'=>'Mozambique'
));



DB::table('countries')->insert(array(
'id'=> 146,
'code'=> 512,
'alpha2'=>'OM',
'alpha3'=>'OMN',
'name_gb'=>'Oman',
'name_fr'=>'Oman'
));



DB::table('countries')->insert(array(
'id'=> 147,
'code'=> 516,
'alpha2'=>'NA',
'alpha3'=>'NAM',
'name_gb'=>'Namibia',
'name_fr'=>'Namibie'
));



DB::table('countries')->insert(array(
'id'=> 148,
'code'=> 520,
'alpha2'=>'NR',
'alpha3'=>'NRU',
'name_gb'=>'Nauru',
'name_fr'=>'Nauru'
));



DB::table('countries')->insert(array(
'id'=> 149,
'code'=> 524,
'alpha2'=>'NP',
'alpha3'=>'NPL',
'name_gb'=>'Nepal',
'name_fr'=>'Népal'
));



DB::table('countries')->insert(array(
'id'=> 150,
'code'=> 528,
'alpha2'=>'NL',
'alpha3'=>'NLD',
'name_gb'=>'Netherlands',
'name_fr'=>'Pays-Bas'
));



DB::table('countries')->insert(array(
'id'=> 151,
'code'=> 530,
'alpha2'=>'AN',
'alpha3'=>'ANT',
'name_gb'=>'Netherlands Antilles',
'name_fr'=>'Antilles Néerlandaises'
));



DB::table('countries')->insert(array(
'id'=> 152,
'code'=> 533,
'alpha2'=>'AW',
'alpha3'=>'ABW',
'name_gb'=>'Aruba',
'name_fr'=>'Aruba'
));



DB::table('countries')->insert(array(
'id'=> 153,
'code'=> 540,
'alpha2'=>'NC',
'alpha3'=>'NCL',
'name_gb'=>'New Caledonia',
'name_fr'=>'Nouvelle-Calédonie'
));



DB::table('countries')->insert(array(
'id'=> 154,
'code'=> 548,
'alpha2'=>'VU',
'alpha3'=>'VUT',
'name_gb'=>'Vanuatu',
'name_fr'=>'Vanuatu'
));



DB::table('countries')->insert(array(
'id'=> 155,
'code'=> 554,
'alpha2'=>'NZ',
'alpha3'=>'NZL',
'name_gb'=>'New Zealand',
'name_fr'=>'Nouvelle-Zélande'
));



DB::table('countries')->insert(array(
'id'=> 156,
'code'=> 558,
'alpha2'=>'NI',
'alpha3'=>'NIC',
'name_gb'=>'Nicaragua',
'name_fr'=>'Nicaragua'
));



DB::table('countries')->insert(array(
'id'=> 157,
'code'=> 562,
'alpha2'=>'NE',
'alpha3'=>'NER',
'name_gb'=>'Niger',
'name_fr'=>'Niger'
));



DB::table('countries')->insert(array(
'id'=> 158,
'code'=> 566,
'alpha2'=>'NG',
'alpha3'=>'NGA',
'name_gb'=>'Nigeria',
'name_fr'=>'Nigéria'
));



DB::table('countries')->insert(array(
'id'=> 159,
'code'=> 570,
'alpha2'=>'NU',
'alpha3'=>'NIU',
'name_gb'=>'Niue',
'name_fr'=>'Niué'
));



DB::table('countries')->insert(array(
'id'=> 160,
'code'=> 574,
'alpha2'=>'NF',
'alpha3'=>'NFK',
'name_gb'=>'Norfolk Island',
'name_fr'=>'Île Norfolk'
));



DB::table('countries')->insert(array(
'id'=> 161,
'code'=> 578,
'alpha2'=>'NO',
'alpha3'=>'NOR',
'name_gb'=>'Norway',
'name_fr'=>'Norvège'
));



DB::table('countries')->insert(array(
'id'=> 162,
'code'=> 580,
'alpha2'=>'MP',
'alpha3'=>'MNP',
'name_gb'=>'Northern Mariana Islands',
'name_fr'=>'Îles Mariannes du Nord'
));



DB::table('countries')->insert(array(
'id'=> 163,
'code'=> 581,
'alpha2'=>'UM',
'alpha3'=>'UMI',
'name_gb'=>'United States Minor Outlying Islands',
'name_fr'=>'Îles Mineures Éloignées des États-Unis'
));



DB::table('countries')->insert(array(
'id'=> 164,
'code'=> 583,
'alpha2'=>'FM',
'alpha3'=>'FSM',
'name_gb'=>'Federated States of Micronesia',
'name_fr'=>'États Fédérés de Micronésie'
));



DB::table('countries')->insert(array(
'id'=> 165,
'code'=> 584,
'alpha2'=>'MH',
'alpha3'=>'MHL',
'name_gb'=>'Marshall Islands',
'name_fr'=>'Îles Marshall'
));



DB::table('countries')->insert(array(
'id'=> 166,
'code'=> 585,
'alpha2'=>'PW',
'alpha3'=>'PLW',
'name_gb'=>'Palau',
'name_fr'=>'Palaos'
));



DB::table('countries')->insert(array(
'id'=> 167,
'code'=> 586,
'alpha2'=>'PK',
'alpha3'=>'PAK',
'name_gb'=>'Pakistan',
'name_fr'=>'Pakistan'
));



DB::table('countries')->insert(array(
'id'=> 168,
'code'=> 591,
'alpha2'=>'PA',
'alpha3'=>'PAN',
'name_gb'=>'Panama',
'name_fr'=>'Panama'
));



DB::table('countries')->insert(array(
'id'=> 169,
'code'=> 598,
'alpha2'=>'PG',
'alpha3'=>'PNG',
'name_gb'=>'Papua New Guinea',
'name_fr'=>'Papouasie-Nouvelle-Guinée'
));



DB::table('countries')->insert(array(
'id'=> 170,
'code'=> 600,
'alpha2'=>'PY',
'alpha3'=>'PRY',
'name_gb'=>'Paraguay',
'name_fr'=>'Paraguay'
));



DB::table('countries')->insert(array(
'id'=> 171,
'code'=> 604,
'alpha2'=>'PE',
'alpha3'=>'PER',
'name_gb'=>'Peru',
'name_fr'=>'Pérou'
));



DB::table('countries')->insert(array(
'id'=> 172,
'code'=> 608,
'alpha2'=>'PH',
'alpha3'=>'PHL',
'name_gb'=>'Philippines',
'name_fr'=>'Philippines'
));



DB::table('countries')->insert(array(
'id'=> 173,
'code'=> 612,
'alpha2'=>'PN',
'alpha3'=>'PCN',
'name_gb'=>'Pitcairn',
'name_fr'=>'Pitcairn'
));



DB::table('countries')->insert(array(
'id'=> 174,
'code'=> 616,
'alpha2'=>'PL',
'alpha3'=>'POL',
'name_gb'=>'Poland',
'name_fr'=>'Pologne'
));



DB::table('countries')->insert(array(
'id'=> 175,
'code'=> 620,
'alpha2'=>'PT',
'alpha3'=>'PRT',
'name_gb'=>'Portugal',
'name_fr'=>'Portugal'
));



DB::table('countries')->insert(array(
'id'=> 176,
'code'=> 624,
'alpha2'=>'GW',
'alpha3'=>'GNB',
'name_gb'=>'Guinea-Bissau',
'name_fr'=>'Guinée-Bissau'
));



DB::table('countries')->insert(array(
'id'=> 177,
'code'=> 626,
'alpha2'=>'TL',
'alpha3'=>'TLS',
'name_gb'=>'Timor-Leste',
'name_fr'=>'Timor-Leste'
));



DB::table('countries')->insert(array(
'id'=> 178,
'code'=> 630,
'alpha2'=>'PR',
'alpha3'=>'PRI',
'name_gb'=>'Puerto Rico',
'name_fr'=>'Porto Rico'
));



DB::table('countries')->insert(array(
'id'=> 179,
'code'=> 634,
'alpha2'=>'QA',
'alpha3'=>'QAT',
'name_gb'=>'Qatar',
'name_fr'=>'Qatar'
));



DB::table('countries')->insert(array(
'id'=> 180,
'code'=> 638,
'alpha2'=>'RE',
'alpha3'=>'REU',
'name_gb'=>'Réunion',
'name_fr'=>'Réunion'
));



DB::table('countries')->insert(array(
'id'=> 181,
'code'=> 642,
'alpha2'=>'RO',
'alpha3'=>'ROU',
'name_gb'=>'Romania',
'name_fr'=>'Roumanie'
));



DB::table('countries')->insert(array(
'id'=> 182,
'code'=> 643,
'alpha2'=>'RU',
'alpha3'=>'RUS',
'name_gb'=>'Russian Federation',
'name_fr'=>'Fédération de Russie'
));



DB::table('countries')->insert(array(
'id'=> 183,
'code'=> 646,
'alpha2'=>'RW',
'alpha3'=>'RWA',
'name_gb'=>'Rwanda',
'name_fr'=>'Rwanda'
));



DB::table('countries')->insert(array(
'id'=> 184,
'code'=> 654,
'alpha2'=>'SH',
'alpha3'=>'SHN',
'name_gb'=>'Saint Helena',
'name_fr'=>'Sainte-Hélène'
));



DB::table('countries')->insert(array(
'id'=> 185,
'code'=> 659,
'alpha2'=>'KN',
'alpha3'=>'KNA',
'name_gb'=>'Saint Kitts and Nevis',
'name_fr'=>'Saint-Kitts-et-Nevis'
));



DB::table('countries')->insert(array(
'id'=> 186,
'code'=> 660,
'alpha2'=>'AI',
'alpha3'=>'AIA',
'name_gb'=>'Anguilla',
'name_fr'=>'Anguilla'
));



DB::table('countries')->insert(array(
'id'=> 187,
'code'=> 662,
'alpha2'=>'LC',
'alpha3'=>'LCA',
'name_gb'=>'Saint Lucia',
'name_fr'=>'Sainte-Lucie'
));



DB::table('countries')->insert(array(
'id'=> 188,
'code'=> 666,
'alpha2'=>'PM',
'alpha3'=>'SPM',
'name_gb'=>'Saint-Pierre and Miquelon',
'name_fr'=>'Saint-Pierre-et-Miquelon'
));



DB::table('countries')->insert(array(
'id'=> 189,
'code'=> 670,
'alpha2'=>'VC',
'alpha3'=>'VCT',
'name_gb'=>'Saint Vincent and the Grenadines',
'name_fr'=>'Saint-Vincent-et-les Grenadines'
));



DB::table('countries')->insert(array(
'id'=> 190,
'code'=> 674,
'alpha2'=>'SM',
'alpha3'=>'SMR',
'name_gb'=>'San Marino',
'name_fr'=>'Saint-Marin'
));



DB::table('countries')->insert(array(
'id'=> 191,
'code'=> 678,
'alpha2'=>'ST',
'alpha3'=>'STP',
'name_gb'=>'Sao Tome and Principe',
'name_fr'=>'Sao Tomé-et-Principe'
));



DB::table('countries')->insert(array(
'id'=> 192,
'code'=> 682,
'alpha2'=>'SA',
'alpha3'=>'SAU',
'name_gb'=>'Saudi Arabia',
'name_fr'=>'Arabie Saoudite'
));



DB::table('countries')->insert(array(
'id'=> 193,
'code'=> 686,
'alpha2'=>'SN',
'alpha3'=>'SEN',
'name_gb'=>'Senegal',
'name_fr'=>'Sénégal'
));



DB::table('countries')->insert(array(
'id'=> 194,
'code'=> 690,
'alpha2'=>'SC',
'alpha3'=>'SYC',
'name_gb'=>'Seychelles',
'name_fr'=>'Seychelles'
));



DB::table('countries')->insert(array(
'id'=> 195,
'code'=> 694,
'alpha2'=>'SL',
'alpha3'=>'SLE',
'name_gb'=>'Sierra Leone',
'name_fr'=>'Sierra Leone'
));



DB::table('countries')->insert(array(
'id'=> 196,
'code'=> 702,
'alpha2'=>'SG',
'alpha3'=>'SGP',
'name_gb'=>'Singapore',
'name_fr'=>'Singapour'
));



DB::table('countries')->insert(array(
'id'=> 197,
'code'=> 703,
'alpha2'=>'SK',
'alpha3'=>'SVK',
'name_gb'=>'Slovakia',
'name_fr'=>'Slovaquie'
));



DB::table('countries')->insert(array(
'id'=> 198,
'code'=> 704,
'alpha2'=>'VN',
'alpha3'=>'VNM',
'name_gb'=>'Vietnam',
'name_fr'=>'Viet Nam'
));



DB::table('countries')->insert(array(
'id'=> 199,
'code'=> 705,
'alpha2'=>'SI',
'alpha3'=>'SVN',
'name_gb'=>'Slovenia',
'name_fr'=>'Slovénie'
));



DB::table('countries')->insert(array(
'id'=> 200,
'code'=> 706,
'alpha2'=>'SO',
'alpha3'=>'SOM',
'name_gb'=>'Somalia',
'name_fr'=>'Somalie'
));



DB::table('countries')->insert(array(
'id'=> 201,
'code'=> 710,
'alpha2'=>'ZA',
'alpha3'=>'ZAF',
'name_gb'=>'South Africa',
'name_fr'=>'Afrique du Sud'
));



DB::table('countries')->insert(array(
'id'=> 202,
'code'=> 716,
'alpha2'=>'ZW',
'alpha3'=>'ZWE',
'name_gb'=>'Zimbabwe',
'name_fr'=>'Zimbabwe'
));



DB::table('countries')->insert(array(
'id'=> 203,
'code'=> 724,
'alpha2'=>'ES',
'alpha3'=>'ESP',
'name_gb'=>'Spain',
'name_fr'=>'Espagne'
));



DB::table('countries')->insert(array(
'id'=> 204,
'code'=> 732,
'alpha2'=>'EH',
'alpha3'=>'ESH',
'name_gb'=>'Western Sahara',
'name_fr'=>'Sahara Occidental'
));



DB::table('countries')->insert(array(
'id'=> 205,
'code'=> 736,
'alpha2'=>'SD',
'alpha3'=>'SDN',
'name_gb'=>'Sudan',
'name_fr'=>'Soudan'
));



DB::table('countries')->insert(array(
'id'=> 206,
'code'=> 740,
'alpha2'=>'SR',
'alpha3'=>'SUR',
'name_gb'=>'Suriname',
'name_fr'=>'Suriname'
));



DB::table('countries')->insert(array(
'id'=> 207,
'code'=> 744,
'alpha2'=>'SJ',
'alpha3'=>'SJM',
'name_gb'=>'Svalbard and Jan Mayen',
'name_fr'=>'Svalbard etÎle Jan Mayen'
));



DB::table('countries')->insert(array(
'id'=> 208,
'code'=> 748,
'alpha2'=>'SZ',
'alpha3'=>'SWZ',
'name_gb'=>'Swaziland',
'name_fr'=>'Swaziland'
));



DB::table('countries')->insert(array(
'id'=> 209,
'code'=> 752,
'alpha2'=>'SE',
'alpha3'=>'SWE',
'name_gb'=>'Sweden',
'name_fr'=>'Suède'
));



DB::table('countries')->insert(array(
'id'=> 210,
'code'=> 756,
'alpha2'=>'CH',
'alpha3'=>'CHE',
'name_gb'=>'Switzerland',
'name_fr'=>'Suisse'
));



DB::table('countries')->insert(array(
'id'=> 211,
'code'=> 760,
'alpha2'=>'SY',
'alpha3'=>'SYR',
'name_gb'=>'Syrian Arab Republic',
'name_fr'=>'République Arabe Syrienne'
));



DB::table('countries')->insert(array(
'id'=> 212,
'code'=> 762,
'alpha2'=>'TJ',
'alpha3'=>'TJK',
'name_gb'=>'Tajikistan',
'name_fr'=>'Tadjikistan'
));



DB::table('countries')->insert(array(
'id'=> 213,
'code'=> 764,
'alpha2'=>'TH',
'alpha3'=>'THA',
'name_gb'=>'Thailand',
'name_fr'=>'Thaïlande'
));



DB::table('countries')->insert(array(
'id'=> 214,
'code'=> 768,
'alpha2'=>'TG',
'alpha3'=>'TGO',
'name_gb'=>'Togo',
'name_fr'=>'Togo'
));



DB::table('countries')->insert(array(
'id'=> 215,
'code'=> 772,
'alpha2'=>'TK',
'alpha3'=>'TKL',
'name_gb'=>'Tokelau',
'name_fr'=>'Tokelau'
));



DB::table('countries')->insert(array(
'id'=> 216,
'code'=> 776,
'alpha2'=>'TO',
'alpha3'=>'TON',
'name_gb'=>'Tonga',
'name_fr'=>'Tonga'
));



DB::table('countries')->insert(array(
'id'=> 217,
'code'=> 780,
'alpha2'=>'TT',
'alpha3'=>'TTO',
'name_gb'=>'Trinidad and Tobago',
'name_fr'=>'Trinité-et-Tobago'
));



DB::table('countries')->insert(array(
'id'=> 218,
'code'=> 784,
'alpha2'=>'AE',
'alpha3'=>'ARE',
'name_gb'=>'United Arab Emirates',
'name_fr'=>'Émirats Arabes Unis'
));



DB::table('countries')->insert(array(
'id'=> 219,
'code'=> 788,
'alpha2'=>'TN',
'alpha3'=>'TUN',
'name_gb'=>'Tunisia',
'name_fr'=>'Tunisie'
));



DB::table('countries')->insert(array(
'id'=> 220,
'code'=> 792,
'alpha2'=>'TR',
'alpha3'=>'TUR',
'name_gb'=>'Turkey',
'name_fr'=>'Turquie'
));



DB::table('countries')->insert(array(
'id'=> 221,
'code'=> 795,
'alpha2'=>'TM',
'alpha3'=>'TKM',
'name_gb'=>'Turkmenistan',
'name_fr'=>'Turkménistan'
));



DB::table('countries')->insert(array(
'id'=> 222,
'code'=> 796,
'alpha2'=>'TC',
'alpha3'=>'TCA',
'name_gb'=>'Turks and Caicos Islands',
'name_fr'=>'Îles Turks et Caïques'
));



DB::table('countries')->insert(array(
'id'=> 223,
'code'=> 798,
'alpha2'=>'TV',
'alpha3'=>'TUV',
'name_gb'=>'Tuvalu',
'name_fr'=>'Tuvalu'
));



DB::table('countries')->insert(array(
'id'=> 224,
'code'=> 800,
'alpha2'=>'UG',
'alpha3'=>'UGA',
'name_gb'=>'Uganda',
'name_fr'=>'Ouganda'
));



DB::table('countries')->insert(array(
'id'=> 225,
'code'=> 804,
'alpha2'=>'UA',
'alpha3'=>'UKR',
'name_gb'=>'Ukraine',
'name_fr'=>'Ukraine'
));



DB::table('countries')->insert(array(
'id'=> 226,
'code'=> 807,
'alpha2'=>'MK',
'alpha3'=>'MKD',
'name_gb'=>'The Former Yugoslav Republic of Macedonia',
'name_fr'=>'L’ex-République Yougoslave de Macédoine'
));



DB::table('countries')->insert(array(
'id'=> 227,
'code'=> 818,
'alpha2'=>'EG',
'alpha3'=>'EGY',
'name_gb'=>'Egypt',
'name_fr'=>'Égypte'
));



DB::table('countries')->insert(array(
'id'=> 228,
'code'=> 826,
'alpha2'=>'GB',
'alpha3'=>'GBR',
'name_gb'=>'United Kingdom',
'name_fr'=>'Royaume-Uni'
));



DB::table('countries')->insert(array(
'id'=> 229,
'code'=> 833,
'alpha2'=>'IM',
'alpha3'=>'IMN',
'name_gb'=>'Isle of Man',
'name_fr'=>'Île de Man'
));



DB::table('countries')->insert(array(
'id'=> 230,
'code'=> 834,
'alpha2'=>'TZ',
'alpha3'=>'TZA',
'name_gb'=>'United Republic Of Tanzania',
'name_fr'=>'République-Unie de Tanzanie'
));



DB::table('countries')->insert(array(
'id'=> 231,
'code'=> 840,
'alpha2'=>'US',
'alpha3'=>'USA',
'name_gb'=>'United States',
'name_fr'=>'États-Unis'
));



DB::table('countries')->insert(array(
'id'=> 232,
'code'=> 850,
'alpha2'=>'VI',
'alpha3'=>'VIR',
'name_gb'=>'U.S. Virgin Islands',
'name_fr'=>'Îles Vierges des États-Unis'
));



DB::table('countries')->insert(array(
'id'=> 233,
'code'=> 854,
'alpha2'=>'BF',
'alpha3'=>'BFA',
'name_gb'=>'Burkina Faso',
'name_fr'=>'Burkina Faso'
));



DB::table('countries')->insert(array(
'id'=> 234,
'code'=> 858,
'alpha2'=>'UY',
'alpha3'=>'URY',
'name_gb'=>'Uruguay',
'name_fr'=>'Uruguay'
));



DB::table('countries')->insert(array(
'id'=> 235,
'code'=> 860,
'alpha2'=>'UZ',
'alpha3'=>'UZB',
'name_gb'=>'Uzbekistan',
'name_fr'=>'Ouzbékistan'
));



DB::table('countries')->insert(array(
'id'=> 236,
'code'=> 862,
'alpha2'=>'VE',
'alpha3'=>'VEN',
'name_gb'=>'Venezuela',
'name_fr'=>'Venezuela'
));



DB::table('countries')->insert(array(
'id'=> 237,
'code'=> 876,
'alpha2'=>'WF',
'alpha3'=>'WLF',
'name_gb'=>'Wallis and Futuna',
'name_fr'=>'Wallis et Futuna'
));



DB::table('countries')->insert(array(
'id'=> 238,
'code'=> 882,
'alpha2'=>'WS',
'alpha3'=>'WSM',
'name_gb'=>'Samoa',
'name_fr'=>'Samoa'
));



DB::table('countries')->insert(array(
'id'=> 239,
'code'=> 887,
'alpha2'=>'YE',
'alpha3'=>'YEM',
'name_gb'=>'Yemen',
'name_fr'=>'Yémen'
));



DB::table('countries')->insert(array(
'id'=> 240,
'code'=> 891,
'alpha2'=>'CS',
'alpha3'=>'SCG',
'name_gb'=>'Serbia and Montenegro',
'name_fr'=>'Serbie-et-Monténégro'
));



DB::table('countries')->insert(array(
'id'=> 241,
'code'=> 894,
'alpha2'=>'ZM',
'alpha3'=>'ZMB',
'name_gb'=>'Zambia',
'name_fr'=>'Zambie'
));
    }
}
