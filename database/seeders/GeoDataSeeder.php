<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geo_data')->insert([
            'route' => 'green',
            'geo_data' => '{"type":"FeatureCollection","features":[{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70952447,52.01675459]},"id":"4a808bb6-78ba-4560-95f2-cf3cd681a9ad","properties":{"name":"Groen 5"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70739675,52.01489912]},"id":"51f89800-4138-42c7-85e0-bdee44c33c13","properties":{"name":"Groen 15"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70645373,52.01809775]},"id":"50995f42-ff93-4793-a93a-3c3b04067629","properties":{"name":"Start"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70954872,52.01598243],[4.70960926,52.01525551],[4.70950867,52.01521506],[4.70948185,52.01519195],[4.70947721,52.01514586],[4.7095878,52.01515481],[4.7096428,52.01487847],[4.70967901,52.01468698],[4.70972863,52.01442863],[4.70977959,52.01411911],[4.70985335,52.01345713],[4.70989895,52.01308651]]},"id":"26af0618-8e24-40fc-b582-5d0c1816a8e7","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70641653,52.01271158]},"id":"25587def-b4e0-4f0c-8afa-70d6ab9608b9","properties":{"name":"Groen 13"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70952873,52.01671471]},"id":"8051cee3-cb1d-42a7-b674-188f203957c9","properties":{"name":"Groen 6"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70437738,52.01290417],[4.70390746,52.01324983],[4.70371165,52.01340299],[4.70342445,52.01363759],[4.70333594,52.0137094],[4.70328498,52.01377131],[4.70326352,52.01380515],[4.70329604,52.01386405]]},"id":"84bf2986-2579-4de0-9c55-d1679e09c458","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70329918,52.01386411],[4.7032963,52.01390572],[4.70315341,52.01427297],[4.70395562,52.01471435],[4.70489985,52.01406781],[4.70541501,52.01371267],[4.70557641,52.01360588]]},"id":"84795bb0-163f-4f7b-ac62-9f0c2167ee5a","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70790634,52.02056159]},"id":"71822728-e2fb-4be8-b095-cf687e7938ab","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70645373,52.01809775],[4.70647361,52.01822747],[4.70644975,52.01826174],[4.70646168,52.01830334],[4.70652929,52.01856523]]},"id":"330ff881-55ff-4cc4-831a-98970eaa81c9","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71084769,52.01290343],[4.71089423,52.01284922],[4.71122683,52.01274687],[4.71115725,52.012603],[4.71104446,52.01235059],[4.71098613,52.01222975]]},"id":"43f051c0-81e3-4751-9423-20e7e1001b6e","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70561904,52.01688926]},"id":"3abbd4cf-9ab9-4186-8266-7fed17167dd7","properties":{"name":"Groen 17 / Einde"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70557641,52.01360588],[4.70611487,52.01391894],[4.70668388,52.01424243],[4.70759846,52.01475876]]},"id":"a8181556-e6c0-48e8-9692-4b7933da6683","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71459923,52.01823201]},"id":"b7ae436a-0c6a-4823-bc13-a7699b640204","properties":{"name":"Groen 4"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71098613,52.01222975],[4.71091773,52.01209603]]},"id":"bfdbe907-9912-4eaf-988b-4af5134ffa0f","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71029215,52.01305014]},"id":"975b3871-5dee-425d-9b7e-d2c2df25cde3","properties":{"name":"Groen 8"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70350824,52.01121699],[4.70335535,52.01131935],[4.7031637,52.01143483],[4.70299594,52.01152571],[4.70274915,52.01165198],[4.70240971,52.01138384]]},"id":"d54cb649-f671-4065-a2ae-a4e7ec466ecd","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70611325,52.01696439]},"id":"ccd788a1-7cae-4c89-835e-b8ab569c8782","properties":{"name":"Groen 16"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70241153,52.01138496]},"id":"ab938703-22bf-4d41-a97d-c7c7288e8a5d","properties":{"name":"Groen 14"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71005536,52.01154865]},"id":"0eaa4e5b-d738-4da2-b1f3-4f803bd2f54e","properties":{"name":"Groen 12"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70652929,52.01856523],[4.7065308,52.01857488],[4.7044266,52.01855095],[4.70440246,52.01873582],[4.70453389,52.01874902],[4.70452585,52.01881505],[4.70487453,52.01887447],[4.70475925,52.01960209]]},"id":"c00e2bbe-5fec-407e-b184-0e8ede8a26df","properties":null},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71117597,52.01264172]},"id":"dcfd1a0a-bf31-4be5-be60-550b940090c0","properties":{"name":"Groen 9"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70641653,52.01271158],[4.70601884,52.0125146],[4.70587266,52.01243784],[4.70574526,52.01236602],[4.70561651,52.0122843],[4.70551324,52.01222075],[4.70545826,52.01219598],[4.70517931,52.01205483],[4.70490304,52.01192111],[4.70459861,52.01177088],[4.70442829,52.01169163],[4.7043961,52.01166935],[4.70422444,52.01155956],[4.7040796,52.01148692],[4.70366527,52.01127563],[4.70350703,52.0112162]]},"id":"d98201d8-ae98-4df7-8533-d2d27f5a431b","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70625062,52.0167893],[4.70611624,52.01680093],[4.70611325,52.01696439],[4.70561904,52.01688926]]},"id":"cb2e86e4-98c8-4c03-b10c-3db1232d3368","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71078574,52.01213094]},"id":"e38a9f4b-4266-4d19-bcaa-00b84368834e","properties":{"name":"Groen 10"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71573262,52.01829904]},"id":"ba1f23a4-b839-4107-a1f5-ab1eb953b310","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70752625,52.01181982],[4.70708522,52.01220263],[4.70641653,52.01271158]]},"id":"da1afe5b-d9a2-4570-ab4e-908df8fbd9e1","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70759846,52.01475876],[4.70729101,52.01497269],[4.70708582,52.01511218],[4.70668752,52.01538539],[4.7063281,52.0156297],[4.70626373,52.01574938],[4.7062597,52.01586906],[4.70625166,52.01606219],[4.70624495,52.01620251],[4.70624227,52.01639647],[4.70625062,52.0167893]]},"id":"e8ad2947-6204-4516-94ca-e62f9c13dfe0","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71071258,52.01795245],[4.71059394,52.01796592],[4.71051644,52.0179881],[4.71042452,52.01804467],[4.71034701,52.01812342],[4.71027492,52.01822547],[4.71021904,52.01834416],[4.70950891,52.01829313],[4.7095053,52.01826429],[4.70948367,52.01822103],[4.70944762,52.01816668],[4.70940617,52.01808682],[4.70938815,52.01802803],[4.70939175,52.01792488],[4.70943681,52.01763315],[4.70945664,52.0174224],[4.70949629,52.01701864],[4.70952873,52.01671471],[4.70956658,52.01635198],[4.70960297,52.0160481],[4.7095885,52.01602806],[4.70954872,52.01598243]]},"id":"62f51226-eb9a-467b-bafa-ad82d4c2ba43","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70947721,52.01514586]},"id":"63afe0a5-9e12-45da-b81e-a8afbbe79272","properties":{"name":"Groen 7"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71091773,52.01209603],[4.71051076,52.01220367],[4.71038853,52.01220367],[4.71030526,52.01220367],[4.71000842,52.01217391],[4.71008364,52.01117194],[4.7092117,52.01123053],[4.70915671,52.01123383],[4.70908429,52.01123301],[4.70902777,52.01169636],[4.70901419,52.01200876],[4.70893441,52.01233369]]},"id":"7c66f4e6-0d68-458f-be0e-a6604159cb23","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70893441,52.01233369],[4.70881766,52.01243668],[4.70809488,52.01211286],[4.70752625,52.01181982]]},"id":"8e4f1ba8-2a3d-40a5-9452-786002949c9c","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70241334,52.01138384],[4.70276004,52.01166315],[4.70303483,52.01194189],[4.70346314,52.01234619],[4.70382039,52.01258026],[4.70437738,52.01290417]]},"id":"8f8d72dc-791c-4e49-8367-66310602cc7d","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71586544,52.0189465],[4.71591247,52.01830968],[4.71527381,52.01827663],[4.71405124,52.01819655],[4.71367842,52.01816932],[4.71307928,52.0181319],[4.71274839,52.01809488],[4.71198133,52.01804066],[4.71123145,52.01799041],[4.71071258,52.01795245]]},"id":"13413959-1fcb-43bf-8c99-3aafd22cb3ed","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70475925,52.01960209],[4.70468873,52.0203805],[4.70725478,52.02054739],[4.70778676,52.02055381],[4.70986719,52.02068912],[4.71133265,52.02084613],[4.713014,52.02100314],[4.7138321,52.0208927],[4.71466104,52.02097813],[4.71559795,52.02107589],[4.71566621,52.02085686],[4.71589049,52.02008277],[4.71610501,52.01921865],[4.71613981,52.01898991],[4.71586152,52.01895132]]},"id":"157660a7-efb0-4eb5-8bee-723a4688bc7b","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70989895,52.01308651],[4.71016538,52.0130615],[4.71031929,52.01304705],[4.71084769,52.01290343]]},"id":"17edd161-93ef-431c-89f4-0a8a2c249607","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71571376,52.01829793]},"id":"0e246640-0511-4589-a9b8-4c58ebda47cc","properties":{"name":"Groen 3"}}]}',
        ]);

        DB::table('geo_data')->insert([
            'route' => 'red',
            'geo_data' => '{"type":"FeatureCollection","features":[{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71001585,52.01016689]},"id":"cca53ca9-b4df-4686-b6ce-4d3384f4a9f5","properties":{"name":"Rood 9"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70433845,52.00870299]},"id":"6ecbf46e-332f-421b-a8d9-b2f595e26944","properties":{"name":"Start/einde"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71060483,52.00752283],[4.71045214,52.007468],[4.71029308,52.00740012],[4.71000466,52.00734137],[4.7097629,52.00729699],[4.70954871,52.00727088],[4.70923272,52.00729568],[4.70892946,52.00733223],[4.70868769,52.00736617],[4.7085859,52.00739228],[4.7085244,52.00744058],[4.70844381,52.00747583],[4.70823112,52.00751912],[4.70800983,52.00756287],[4.70791998,52.0075703],[4.70767992,52.00757691],[4.70759945,52.00759094],[4.70754447,52.00762726],[4.70750424,52.00766606],[4.70710861,52.0078774],[4.70702144,52.00794261],[4.70694097,52.00799627],[4.70686453,52.00803425],[4.70655339,52.00814899],[4.70650377,52.00816055],[4.70632809,52.00813661],[4.70627847,52.00814239],[4.70526247,52.00865923],[4.7048065,52.00843387],[4.70433845,52.00870299]]},"id":"a2da6dd3-8baa-4d92-8817-ae13ee89de52","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71129262,52.00669241]},"id":"52bd826b-d9da-478b-af7b-54b9ef514ed7","properties":{"name":"Rood 11"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.7100935,52.01117162],[4.7101121,52.01102844],[4.71028673,52.01111102],[4.71059554,52.01088687],[4.71054017,52.01084754],[4.71051461,52.01082919],[4.71048905,52.01078331],[4.71047414,52.01074005],[4.71046878,52.01072272],[4.71049292,52.01066411],[4.71055193,52.01058734],[4.71035747,52.01053286],[4.71029175,52.01049571],[4.71025689,52.01050314],[4.71020458,52.01050314],[4.71015362,52.01049076],[4.7101268,52.01047343],[4.710104,52.01045361],[4.71008254,52.01041812],[4.71007315,52.01038262],[4.71007852,52.01034548],[4.71012814,52.01026788],[4.71016435,52.01019689]]},"id":"122485ac-f58a-4e73-a819-96a21900d1c9","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70238774,52.01137519]},"id":"0c1a1423-e000-4816-82d8-fcec2332e081","properties":{"name":"Rood 1"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70688984,52.01019428]},"id":"77c74996-4264-4817-82c6-193d25a3d04b","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7100935,52.01117162]},"id":"7a7f3fa3-2c52-411d-9756-7c85e2e2ae3f","properties":{"name":"Rood 5"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71016435,52.01019689],[4.71009766,52.01018836],[4.71001585,52.01016689],[4.70965644,52.0099597],[4.70959206,52.00991347],[4.70956927,52.0098821],[4.70953172,52.00985239],[4.70925277,52.00966748],[4.70895772,52.00952384],[4.70872839,52.00944212],[4.70859831,52.00940497],[4.7084937,52.00937938],[4.708373,52.00936287],[4.70828583,52.00935874],[4.70820134,52.00935214]]},"id":"3308be0c-9c63-45cb-a609-471353966fe3","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70688064,52.01011055]},"id":"3a5279a0-04b6-4d6f-abfa-ebff69970224","properties":{"name":"Rood 4"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70528696,52.00864678]},"id":"406faed3-c91d-482b-9bba-0eea2f278478","properties":{"name":"Rood 13"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70433845,52.00870299],[4.7048065,52.00843387],[4.70526247,52.00865923],[4.70417695,52.00921425],[4.70397578,52.00934303],[4.70373572,52.00952959],[4.70344873,52.00975825],[4.70338838,52.00984823],[4.70336022,52.00991675],[4.70332803,52.01006863],[4.70333205,52.01041368],[4.70334144,52.01094694],[4.70334546,52.01109304],[4.70337765,52.01114257],[4.70350908,52.01121521]]},"id":"dd3f594e-e671-49d7-b79a-bbce5f33e3fe","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71055193,52.01058734]},"id":"d8f44ff9-bbcf-4d7a-93c9-ccbe6dabe476","properties":{"name":"Rood 7"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70618174,52.01074322]},"id":"0723fe92-22d6-4f29-b1bd-d42fcf46a06e","properties":{"name":"Rood 2"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70820134,52.00935214],[4.70829398,52.00920848],[4.70837177,52.00911602],[4.70851391,52.00898834],[4.70859171,52.00893772],[4.70868424,52.00889314],[4.70883353,52.00882668],[4.70901324,52.0087433],[4.70919027,52.00867231],[4.70944642,52.00854601],[4.70969854,52.00840237],[4.70990507,52.00824635],[4.71014781,52.00804822]]},"id":"60cb7075-8973-4c18-be28-b1da77020d71","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71014781,52.00804822],[4.71058459,52.0082608],[4.710944,52.00843911],[4.71106202,52.00849194],[4.71124173,52.00855468],[4.71137048,52.00839784],[4.71152604,52.00821457],[4.7116226,52.00810891],[4.71180231,52.0079405],[4.71201957,52.00771926],[4.71221537,52.00751783],[4.71238167,52.00734942],[4.71256674,52.00709351],[4.7126177,52.00701591],[4.71215257,52.00697158],[4.71207737,52.00696629],[4.71202365,52.00697026],[4.7114677,52.00688761],[4.71137253,52.00675392],[4.71129322,52.00669139],[4.71136829,52.00675392],[4.7114677,52.00688867],[4.71202193,52.00697238],[4.71136829,52.00718341],[4.71095687,52.00734007],[4.71060483,52.00752283]]},"id":"e98c7935-b8c4-4fb8-93e3-9488d5ff68a3","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71025689,52.01050314]},"id":"4af8522a-85ee-4c5b-aa66-3ad6b440e729","properties":{"name":"Rood 8"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7126177,52.00701591]},"id":"24153b0b-4806-49a3-a9df-1a9c556df0f6","properties":{"name":"Rood 10"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70642142,52.00814933]},"id":"2477d833-7e45-4826-ae04-26e4bff4c708","properties":{"name":"Rood 12"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70350908,52.01121521],[4.70320776,52.01140971],[4.70275133,52.01165613],[4.70238774,52.01137519],[4.70275133,52.01165613],[4.7032155,52.01140614],[4.70350908,52.01121521],[4.70363896,52.01126278],[4.70422237,52.01155728],[4.70465993,52.01132519],[4.70512098,52.01107406],[4.70528882,52.01097974],[4.70553556,52.01081944],[4.70580506,52.01097347],[4.7058639,52.01096032],[4.70592693,52.01092318],[4.70600605,52.01086622],[4.70618174,52.01074322],[4.70634886,52.01061703],[4.70660687,52.01041386],[4.7068134,52.01025289],[4.70688984,52.01019428],[4.70694885,52.01014558],[4.70688064,52.01011055],[4.70701591,52.01017943]]},"id":"ad6828b6-18ff-4ff5-832c-29cbc1838a10","properties":{"name":"Rood 3"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71024122,52.0110895]},"id":"ac9a3267-84c5-4e71-b29d-34e7d1f56238","properties":{"name":"Rood 6"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70701591,52.01017943],[4.70759068,52.01047963],[4.70830415,52.01088246],[4.70901493,52.01123576],[4.7100935,52.01117162]]},"id":"851428fe-9ff9-4393-a227-f1f151ef9291","properties":{"name":""}}]}',
        ]);

        DB::table('geo_data')->insert([
            'route' => 'blue',
            'geo_data' => '{"type":"FeatureCollection","features":[{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70434145,52.00870348]},"id":"f7514430-0cc8-44f0-b7a0-d673cd782b4f","properties":{"name":"Start/Einde"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.69822784,52.00767713]},"id":"f95e7b51-f10b-4956-b8c2-e7a6ef9c511e","properties":{"name":"Blauw 4"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71026717,52.00644294]},"id":"0b7d88c5-47f7-484e-98e8-084226025a0e","properties":{"name":"Blauw 9"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.7021185,52.01091476],[4.70210643,52.0109032],[4.70208899,52.01094282],[4.70198439,52.01101629],[4.70194415,52.0110361],[4.70181809,52.01095025]]},"id":"e434c699-0804-4f0f-b381-956fe0f374df","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70047953,52.00580444]},"id":"aa4a8bc5-3457-4138-8ad3-c2558cf2cdd9","properties":{"name":"Blauw 5"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71095958,52.00651603]},"id":"c09aa62c-8ea3-4075-bf3e-c6142d3c6035","properties":{"name":"Blauw 10"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.7026463,52.01102804],[4.7021252,52.0109973],[4.70213057,52.01095768],[4.7021185,52.01091476]]},"id":"5ac70f3a-0a04-4e5e-b26c-77fa7d53d3c8","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70181809,52.01095025],[4.70168935,52.01084377],[4.70154585,52.01070839],[4.70144096,52.01061367]]},"id":"61032400-1e9a-4067-9041-cdbf3da74d5f","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70443679,52.00531207],[4.70779458,52.0071226],[4.70861528,52.00691488],[4.70978176,52.00660971],[4.71031918,52.00642507],[4.71047678,52.00636825],[4.71064442,52.00637898],[4.71095958,52.00651603]]},"id":"6074daf4-44df-42d0-9f70-7ae97d6e90e8","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70434145,52.00870348],[4.70358373,52.00914925],[4.7031586,52.00941836],[4.70293598,52.00974113],[4.70283137,52.00996896],[4.70278309,52.0102166],[4.70276968,52.01041307],[4.70278175,52.01050882],[4.70279248,52.01061366],[4.70279382,52.01071354],[4.70278711,52.01080186],[4.70276968,52.01086708],[4.70273213,52.01094632],[4.70269324,52.01099255],[4.7026463,52.01102804]]},"id":"00b68944-7e34-498a-8017-e51e49ab1500","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70431171,52.00726268]},"id":"840a5126-fab2-4cef-a6a5-bb07b0fd3889","properties":{"name":"Blauw 6"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70480865,52.00843508],[4.70526865,52.00865631]]},"id":"3a2ea9a1-64cf-4585-9977-6b29f5bfc6e7","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70583752,52.0079102]},"id":"ccfafdde-b4c9-46cb-91ea-d725d94ce141","properties":{"name":"Blauw 11"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7052429,52.00821355]},"id":"33d64812-c4a2-4c21-8cbe-551856bb936b","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70194038,52.01031989]},"id":"ceadffa3-7f19-427d-b1bf-ae7d6ab9631d","properties":{"name":"Blauw 3"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70144096,52.01061367],[4.70161263,52.01050719],[4.70165286,52.01050388],[4.70202435,52.01026615],[4.70200825,52.01013242],[4.70200596,52.01000284],[4.70058238,52.00924435],[4.70032363,52.00909779],[4.6999236,52.00887403],[4.69942039,52.00860825],[4.69852668,52.00813434],[4.69797902,52.00785586],[4.69790282,52.00779625]]},"id":"968c331d-6f5d-447c-ae8c-a3ce01c01c46","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70480792,52.00755079],[4.70494632,52.00748471],[4.70535267,52.00724614],[4.70553238,52.00714872],[4.70563162,52.00710579],[4.7057778,52.00706122],[4.70534969,52.00683149],[4.70504258,52.00666885],[4.7047596,52.00651283],[4.7044659,52.00636175],[4.70410783,52.00618178],[4.70373634,52.0059919],[4.70346544,52.00585569],[4.70337826,52.00581193],[4.70304299,52.00561627],[4.70378596,52.00533558],[4.7038824,52.00541519],[4.70413211,52.00546718],[4.70420189,52.0053971],[4.70443679,52.00531207]]},"id":"9aefde76-d289-4676-9fcb-c01af9a4f004","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70168935,52.01084377]},"id":"614d76ab-dca5-4f8b-8a3d-aedb584cdbc2","properties":{"name":"Blauw 2"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.69790282,52.00779625],[4.69901458,52.00738878],[4.69949264,52.00721545],[4.70001639,52.00703545],[4.7003222,52.00692242],[4.70083247,52.00669038]]},"id":"700a9a67-5fbb-4d42-839b-cdebd7dfedee","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70082967,52.00668603],[4.70067947,52.0065589],[4.7004783,52.00640865],[4.70008548,52.00613245],[4.70000757,52.00585388],[4.7004555,52.00580765],[4.70066866,52.00577915],[4.70138615,52.00635704],[4.70148405,52.00623651],[4.70155647,52.00617542],[4.70180189,52.00607305],[4.70187163,52.00612258],[4.70243757,52.00642721],[4.70257168,52.00643877],[4.70310338,52.00672938],[4.70317714,52.00681854],[4.703613,52.00705464],[4.703786,52.00705712],[4.70384903,52.00703318],[4.70431171,52.00726268],[4.70480792,52.00755079]]},"id":"6b2aea99-8cc6-4050-9051-28d5f13a5716","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71095958,52.00651603],[4.71064442,52.00637898],[4.71047678,52.00636825],[4.70978176,52.00660971],[4.70779458,52.0071226],[4.70712331,52.00738376],[4.70667555,52.00755233],[4.70643568,52.00764215],[4.70598346,52.00783575],[4.70480865,52.00843508]]},"id":"694c76b0-593a-478f-ad73-f3fae4c8658b","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.70526865,52.00865631],[4.70480865,52.00843508],[4.70434145,52.00870348]]},"id":"587c53e5-92e6-42d4-b072-e2e37e681f0a","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7052429,52.00821355]},"id":"989285a5-a614-4fc1-bb4b-36f0ca6cb81c","properties":{"name":"Blauw 12"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70526865,52.00865631]},"id":"94f88fe1-7087-4318-975a-b18b6d8f0dd5","properties":{"name":"Blauw 13"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7062553,52.00629263]},"id":"84490196-9eec-4a30-8c43-44d58a69469d","properties":{"name":"Blauw 8"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70237922,52.01101229]},"id":"3dfa415e-d8cf-49d5-992e-73adfe594388","properties":{"name":"Blauw 1"}}]}',
        ]);

        DB::table('geo_data')->insert([
            'route' => 'yellow',
            'geo_data' => '{"type":"FeatureCollection","features":[{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71119562,52.01327995],[4.71099811,52.01348881],[4.71083986,52.01449333],[4.71086266,52.0145767],[4.71092435,52.01456762],[4.71115636,52.01459568],[4.71127974,52.01459486],[4.71144201,52.01456762],[4.712577,52.01396793],[4.7129309,52.01374842],[4.71256076,52.01357178],[4.71207126,52.01333736],[4.71188482,52.01325096],[4.71089387,52.01285073],[4.71122639,52.01274882],[4.71162603,52.0126052],[4.71173361,52.01254044],[4.71185834,52.01243396],[4.71231431,52.01200803],[4.71259058,52.01175049],[4.71278504,52.01152515],[4.71280247,52.01144425],[4.7121423,52.01120048],[4.71208731,52.01114518],[4.71181775,52.01101971],[4.71195677,52.01094918],[4.71245923,52.01094083],[4.71258716,52.01093531],[4.71268884,52.01092176],[4.71279063,52.01089043],[4.71281782,52.01087422],[4.71283124,52.01081231],[4.71282855,52.01074545],[4.712791,52.01063649],[4.71275345,52.01053743]]},"id":"bd699e23-ed8d-42e5-bb16-f1627811c11f","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71162603,52.0126052]},"id":"f1c10410-10e4-4213-a370-219ca85e098c","properties":{"name":"Geel 5"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71277153,52.01058512]},"id":"f0412f46-cd18-4bc1-a396-acccfcf5972c","properties":{"name":"Geel 7"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71007422,52.01035311]},"id":"be331f58-36a9-4745-abde-d055e25034a1","properties":{"name":"Geel 12"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.70694683,52.01015071]},"id":"bdeeb211-c8dd-4cb0-bdb9-65ad63e311df","properties":{"name":"Geel 13"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71005836,52.01153312]},"id":"bcbf89ae-6c09-4dc4-9ac5-3412a0ab3a6e","properties":{"name":"Geel 22"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71022979,52.01050334]},"id":"d38433ca-a04f-4431-92f8-ee084c42eeb7","properties":{"name":"Geel 11"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71028075,52.01220112]},"id":"c9beb994-ff6e-4db3-94f2-8bf310bf15c5","properties":{"name":"Geel 23"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71089387,52.01285073],[4.71084827,52.01290356],[4.71082815,52.0129927],[4.7108885,52.01311486],[4.71119562,52.01327995]]},"id":"8806ea67-f89a-495f-a6cd-ffd00b810ecf","properties":null},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7152317,52.00715036]},"id":"0eefac8d-84f5-4679-a035-83ac5e540500","properties":{"name":"Geel 18"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71304896,52.00690335]},"id":"227a0e9f-3d54-46f4-aedf-721fc101ae75","properties":{"name":"Geel 16"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7071999,52.00971517]},"id":"90c0b8c9-45f0-443d-8c44-e907e4d3bed8","properties":{"name":"Geel 14"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71166086,52.01049659]},"id":"4dfbe195-dc91-445f-b896-395c645f4f12","properties":{"name":"Geel 9"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71030047,52.01050223],[4.71022979,52.01050334],[4.71018017,52.01049839],[4.71015737,52.01049178],[4.71012518,52.01047362],[4.71010238,52.01045134],[4.71008227,52.01041914],[4.71007288,52.01039686],[4.71007288,52.01037622],[4.71007422,52.01035311],[4.70993072,52.01031926],[4.70942517,52.0100304],[4.70876128,52.00967786],[4.7086151,52.0096242],[4.70848501,52.00958953],[4.70838175,52.00957468],[4.70820338,52.00957715],[4.70808536,52.00959449],[4.70799148,52.00962833],[4.70754892,52.00980829],[4.70694683,52.01015071],[4.70672529,52.01002666],[4.70721299,52.00970657],[4.70779455,52.0094594],[4.70819457,52.00935334],[4.70828452,52.00922915],[4.70833951,52.00915238],[4.70852592,52.00897572],[4.70876195,52.00885933],[4.70906638,52.00872229],[4.70918977,52.00867441],[4.70944592,52.00855141],[4.70969275,52.00840802],[4.70988989,52.00825861],[4.71015141,52.00804562],[4.70997438,52.007935],[4.70988721,52.00787969],[4.70983893,52.00784172],[4.71031366,52.00764655],[4.71049407,52.00757443],[4.71061124,52.00751947],[4.71075818,52.00744048],[4.71101298,52.00731912],[4.71133846,52.00719547],[4.7120229,52.00697222]]},"id":"33a3a3db-25b7-42b5-9c09-dbac602f860f","properties":{"name":""}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.71275345,52.01053743],[4.7124516,52.01060376],[4.71205598,52.01056744],[4.71176898,52.01049645],[4.71115744,52.01049727],[4.71103808,52.0105014],[4.71095761,52.01051626],[4.71090129,52.0105435],[4.71062368,52.01056083],[4.71054858,52.0105889],[4.71036619,52.01053855],[4.71030047,52.01050223]]},"id":"0febe0fb-eb3c-4c44-8b03-3a50bbb23c94","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71398252,52.00703761]},"id":"799e5c42-18d6-4790-875b-dedf9111f489","properties":{"name":"Geel 17"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71111612,52.00965495]},"id":"59729a53-5c71-4b63-8486-ac7714969d6a","properties":{"name":"Geel 19"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71078594,52.01011558]},"id":"87e8719e-6675-457e-bcc8-04d4380986ad","properties":{"name":"Geel 20"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71010164,52.0110467]},"id":"1d77a895-69ee-4f28-9e15-5a7d861049be","properties":{"name":"Geel 21"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71096377,52.01315532]},"id":"ce604c82-1903-4147-b0aa-96c3794f994e","properties":{"name":"Geel 2"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7129309,52.01374842]},"id":"82067f07-6f04-41c5-a491-59f506c38da8","properties":{"name":"Geel 3"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71195297,52.01054196]},"id":"c39a2a11-4134-4cba-8f77-67f04ae67739","properties":{"name":"Geel 8"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71280247,52.01144425]},"id":"2ea61cb0-6776-4ad6-a6ad-4a5df94499d2","properties":{"name":"Geel 6"}},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.7107906,52.0121293],[4.71064711,52.01216727],[4.7107088,52.01230842],[4.71089387,52.01285073]]},"id":"012b1f8f-5049-4380-b019-d7e5256bb539","properties":null},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71056963,52.00753899]},"id":"52be3cd4-f7f3-4611-aa03-3f9a12207716","properties":{"name":"Geel 15"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.7107906,52.0121293]},"id":"3bc22f05-2ec4-4875-9cca-8616179df210","properties":null},{"type":"Feature","geometry":{"type":"LineString","coordinates":[[4.7120229,52.00697222],[4.71209349,52.00696632],[4.71264203,52.00701828],[4.71294914,52.0070546],[4.71334745,52.00710496],[4.71335416,52.00695306],[4.71304896,52.00690335],[4.71335282,52.00695306],[4.71349095,52.0069737],[4.71409367,52.00705207],[4.71462553,52.0071256],[4.71474354,52.00713798],[4.71492325,52.00714458],[4.7152317,52.00715036],[4.71554332,52.00715095],[4.71797342,52.00710993],[4.71797829,52.00715944],[4.71797538,52.00720524],[4.71791771,52.00724486],[4.71781981,52.00727045],[4.71765888,52.0072977],[4.71721765,52.00732742],[4.71702051,52.0073464],[4.71679386,52.00740254],[4.71649368,52.00749956],[4.71629363,52.00772697],[4.71624401,52.00787474],[4.71613159,52.00838369],[4.71605246,52.00875517],[4.71592483,52.00946879],[4.71542751,52.00939246],[4.71531592,52.00937501],[4.71507972,52.00934913],[4.71446325,52.00928184],[4.71396302,52.00922984],[4.71355053,52.00918577],[4.71343597,52.00915719],[4.71335416,52.00913325],[4.71305133,52.00904185],[4.71258973,52.00889551],[4.71238186,52.00883029],[4.71223145,52.00879681],[4.71209888,52.00876838],[4.71203082,52.00875013],[4.7116738,52.00914687],[4.71158691,52.00924605],[4.71143842,52.00938899],[4.71125201,52.00956791],[4.71102332,52.0097144],[4.71061853,52.00997728],[4.71078594,52.01011558],[4.71068,52.01016594],[4.71062903,52.01019813],[4.71056008,52.01024663],[4.71039836,52.0104045],[4.71032729,52.01047879],[4.71028971,52.01049326],[4.71022979,52.01050334],[4.71018017,52.01049839],[4.71015291,52.01062946],[4.71012743,52.01078547],[4.7100784,52.01128203],[4.71004258,52.01173074],[4.71000887,52.01217296],[4.71031656,52.01220483],[4.71048505,52.01220928],[4.7107906,52.0121293]]},"id":"1362e71b-8361-4a93-a617-9258fbcb67ab","properties":{"name":""}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71177193,52.01320537]},"id":"1fcc1442-9ed7-4ab0-86d3-0e54ea5a1550","properties":{"name":"Geel 4"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[4.71055047,52.01058741]},"id":"1f1d6bda-2919-4e07-8125-6d8a7ee4eeda","properties":{"name":"Geel 10"}}]}',
        ]);
    }
}