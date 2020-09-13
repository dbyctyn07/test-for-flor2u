<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        $data = [
            'Dubrovka',
            'Udomlya',
            'Leninskiy',
            'Akademicheskiy',
            'Sasovo',
            'Novozavidovskiy',
            'Krasnolesnyy',
            'Malinovo',
            'Kosterevo',
            'Zyuzino',
            'Zyukayka',
            'Zykovo',
            'Zykeyevo',
            'Zyablikovo',
            'Zvorkovo',
            'Zvonkaya',
            'Zvezdnyy',
            'Zverevo',
            'Zvenigovo',
            'Zvenigorod',
            'Zuyevka',
            'Zubtsovo',
            'Zubtsov',
            'Zubovo',
            'Zubova Polyana',
            'Zubachevo',
            'Zorino',
            'Zolotukhino',
            'Zolotovo',
            'Zolotnikovskaya Pustyn',
            'Zolotkovo',
            'Zalapino',
            'Zolnoye',
            'Zakomelye',
            'Znamenskoye',
            'Znamenka',
            'Znamensk',
            'Znamenki',
            'Zmiyëvka',
            'Zmeyskaya',
            'Zlynka',
            'Zlatoust',
            'Zirgan',
            'Zimovniki',
            'Zimogorye',
            'Zilair',
            'Zibrovo',
            'Zhuravskaya',
            'Zhukovskiy',
            'Zhukovo',
            'Zhukovka',
            'Zhornovka',
            'Zholobova-Sloboda',
            'Zhokhovo',
            'Zhizdra',
            'Zhitnitskaya',
            'Zhiryatino',
            'Zhirovo',
            'Zhiroshkino',
            'Zhirkovskiy',
            'Zhirnovsk',
            'Zhirnov',
            'Zhilploshchadka',
            'Zhilino',
            'Zhilina',
            'Zhilëvo',
            'Zhiletovo',
            'Zhigulevsk',
            'Zhestylëvo',
            'Zheshart',
            'Zhernovka',
            'Zherdevka',
            'Zhemtala',
            'Zhelyabino',
            'Zheludyevo',
            'Zheleznovodsk',
            'Zheleznogorsk',
            'Zheleznodorozhnyy',
            'Zheleznitsa',
            'Zhdankovskiy',
            'Zhavoronki',
            'Zharkovskiy',
            'Zharikhino',
            'Zhankhoteko',
            'Zhako',
            'Zhadovka',
            'Zhadinskoye',
            'Zhabka',
            'Zevalovo',
            'Zernograd',
            'Zenzeli',
            'Zenkino',
            'Zevnevo',
            'Zemlyansk',
            'Zemlerob',
            'Zemetchino',
            'Zelënyy Lug',
            'Zelënyy Gorod',
            'Zelentsino',
            'Zelënaya Sloboda',
            'Zelenokumsk',
            'Zelenogradskiy',
            'Zelenogradsk',
            'Zelenograd',
            'Zelenogorsk',
            'Zelenodolsky District',
            'Zelenodolsk',
            'Zelenoborskiy',
            'Zelenino',
            'Zelenets',
            'Zelenchukskaya',
            'Zelenchuk',
            'Zelënaya Polyana',
            'Zdekhovo',
            'Zayukovo',
            'Zaymishche',
            'Zavorovo',
            'Zavoronezhskoye',
            'Zavolzhye',
            'Zavolzhskiy',
            'Zavolzhsk',
            'Masalovka',
            'Zavidovo',
            'Zavety Ilicha',
            'Zavetnoye',
            'Zavalino',
            'Zaval',
            'Zaterechnyy',
            'Zasosna',
            'Zasechnoye',
            'Zarubino',
            'Zarelye',
            'Zarechye Krasnoye',
            'Zarechye',
            'Zarechnyy',
            'Zarechenskiy',
            'Zaraysk',
            'Zaputnaya',
            'Zaprudnya',
            'Zaprudino',
            'Zaporozhskaya',
            'Zaponorye',
            'Zapolyarnyy',
            'Zapolnaya',
            'Zaplavnoye',
            'Zapadnaya Dvina',
            'Zaozërye',
            'Zaovrazhye',
            'Zaokskiy',
            'Zanino',
            'Zanevka',
            'Zandak',
            'Zamyatino',
            'Zamosty',
            'Zamoskvorechye',
            'Zalukokoazhe',
            'Valesye',
            'Zalesnyy',
            'Zalesnaya',
            'Zalegoshch',
            'Zaklyazminskiy',
            'Zakhvatovo',
            'Zakharovo',
            'Zakharova',
            'Zakharkovo',
            'Zakharino',
            'Zakan-Yurt',
            'Zainsk',
            'Zagryazhskaya',
            'Zagorye',
            'Zagoryanskiy',
            'Zagornyy',
            'Zadorino',
            'Zadonskiy',
            'Zadonsk',
            'Zadneye Pole',
            'Zachatye',
            'Zabugorovka',
            'Zaborye',
            'Zabolotye',
            'Zabolotovka',
            'Zabelino',
            'Yuzhnyy-Kospashskiy',
            'Yuzhno-Sukhokumsk',
            'Yuzha',
            'Yuva',
            'Yutsa',
            'Yusta',
            'Yuryuzan',
            'Yuryev-Polskiy',
            'Yuryevo',
            'Yuryevets',
            'Yury',
            'Yurtseva',
            'Yurovskiy',
            'Yurovo',
            'Yurovka',
            'Yurlovo',
            'Yurla',
            'Yurino',
            'Yurasovo',
            'Yupiter',
            'Yumaguzino',
            'Yuksary',
            'Yukhnov',
            'Yukamenskoye',
            'Yugo-Kamskiy',
            'Yuganets',
            'Yug',
            'Yudino',
            'Yubileynyy',
            'Yoshkar-Ola',
            'Yeysk',
            'Yessentukskaya',
            'Yessentuki',
            'Yesipovo',
            'Bolshoye Yesiplevo',
            'Yesiplevo',
            'Yesino',
            'Yertsevo',
            'Yershovo',
            'Yershov',
            'Yershichi',
            'Yeropkino-Bolshak',
            'Yernitskiy Ostrov',
            'Yermolitsa',
            'Yermolino',
            'Yermolayevo',
            'Yermish',
            'Yermekeyevo',
            'Yerino',
            'Yerikovskiy',
            'Bolshoy Yermuchash',
            'Yerëmino',
            'Yeremeyevo',
            'Yepifan',
            'Yenotayevka',
            'Yemva',
            'Yemtsa',
            'Yemetsk',
            'Yemeshevo',
            'Yemelyanovo',
            'Yelyaty',
            'Yelovo',
            'Yelovka',
            'Yelovaya Gora',
            'Yelnya',
            'Yëlkino',
            'Yelkhovka',
            'Yelizavetinskoye',
            'Yelizavetinskaya',
            'Yelizavetino',
            'Yelizarovo',
            'Yelino',
            'Yelgazino',
            'Yelets',
            'Yeldigino',
            'Yelatma',
            'Yelan-Kolenovskiy',
            'Yelan-Koleno',
            'Yelan',
            'Yelabuga',
            'Yekusha',
            'Yekimtsevo',
            'Yekimovichi',
            'Yekimikha',
            'Yekaterinovka',
            'Yekaterinoslavskiy',
            'Yegoryevsk',
            'Yegorlykskaya',
            'Yeganovo',
            'Yefremovskaya',
            'Yefremov',
            'Yefino',
            'Yefimyevo',
            'Yefimovo',
            'Yefimovka',
            'Yednevo',
            'Yazykovo',
            'Yayva',
            'Yavas',
            'Yastrebki',
            'Yasnyy',
            'Yasnogorsk',
            'Yasnaya Polyana',
            'Yashkul',
            'Yashalta',
            'Yasenskaya',
            'Yasennaya',
            'Yartsevo',
            'Yaroslavskaya Oblast',
            'Yaroslavskaya',
            'Yaroslavl',
            'Yaropolets',
            'Yarensk',
            'Yarega',
            'Yaransk',
            'Yar',
            'Yantikovo',
            'Yanisyarvi',
            'Yanishpole',
            'Yanino-2',
            'Yandyki',
            'Yanaul',
            'Novaya Maka',
            'Yamnovo',
            'Yamkino',
            'Yam',
            'Yalkhoy-Mokhk',
            'Yalchiki',
            'Kzyl-Aul',
            'Yakshur',
            'Yaksatovo',
            'Yakovlevskoye',
            'Yakovlevskaya',
            'Yakovlevo',
            'Yakovka',
            'Yakimovo',
            'Yakimanskaya Sloboda',
            'Yakhroma',
            'Yakhino',
            'Yaitskiy',
            'Yagodnaya',
            'Yadrin',
            'Yablonovskiy',
            'Yablonovka',
            'Yablono-Bukin',
            'Yabedino',
            'Vyyezdnoye',
            'Vytegra',
            'Vysotskoye',
            'Vysotsk',
            'Vysokovo',
            'Vysokovsk',
            'Vysokova',
            'Vysokaya Gora',
            'Vysokaya',
            'Vyshniy Volochëk',
            'Vyshneye Dolgoye',
            'Vyshkov',
            'Vyshegorod',
            'Vysha',
            'Vyselki',
            'Vyrypayevka',
            'Vyritsa',
            'Vypolzovo',
            'Vylgort',
            'Vyksa',
            'Vykhino-Zhulebino',
            'Vygonichi',
            'Vydumki',
            'Vydropuzhsk',
            'Vychegodskiy',
            'Vyborg',
            'Vybor',
            'Vyazovskoye',
            'Vyazovaya',
            'Vyazniki',
            'Vyazma',
            'Vyatskiye Polyany',
            'Vyatkino',
            'Vyartsilya',
            'Vyalovskaya',
            'Vyalkovo',
            'Vvedenskoye',
            'Vurnary',
            'Vuktyl',
            'Vsevolozhsk',
            'Vozy',
            'Belyy',
            'Voznesenye',
            'Voznesenskoye',
            'Voznesenskaya',
            'Vozhega',
            'Vozdvizhenskoye',
            'Vozdvizhenka',
            'Voyvozh',
            'Voyutino',
            'Voyskovitsy',
            'Voynyukovo',
            'Votrya',
            'Votkinsk',
            'Vostryakovo',
            'Vostroye',
            'Vostochnyy',
            'Voskresenye',
            'Voskresenskoye',
            'Voskresensk',
            'Voskresenovka',
            'Voskresenki',
            'Vorya-Bogorodskoye',
            'Vorsma',
            'Vorovo',
            'Vorotynets',
            'Vorotishna',
            'Voroshnëvo',
            'Voronyë',
            'Vorontsovskaya',
            'Vorontsovo',
            'Vorontsovka',
            'Voronovo',
            'Voronki',
            'Voroniy Ostrov',
            'Voronikha',
            'Voronezhskaya Oblast',
            'Voronezhskaya',
            'Voronezh',
            'Voronety',
            'Vorokhobino',
            'Vorobyovo',
            'Vorobyëvo',
            'Vorobyëvka',
            'Vorlygino',
            'Vongiozero',
            'Vondokurye',
            'Vonda',
            'Volzhskiy',
            'Volzhsk',
            'Volya',
            'Volsk',
            'Volovo',
            'Volovnikovo',
            'Volot',
            'Volosovo',
            'Voloshka',
            'Voloshino',
            'Senozhat',
            'Volokonovka',
            'Volokolamskiy Rayon',
            'Volokolamets',
            'Volokolamsk',
            'Vologodsko-Yamskaya Sloboda',
            'Vologodskaya Oblast',
            'Vologda',
            'Volodinskiy',
            'Volodino',
            'Volodarskiy',
            'Volodarsk',
            'Volnost',
            'Volkovo',
            'Volkovichi',
            'Volkhovskiy',
            'Volkhov',
            'Nagornyy',
            'Volgusha',
            'Volgorechensk',
            'Volgo-Kaspiyskiy',
            'Volgogradskaya Oblast',
            'Volgograd',
            'Volgodonsk',
            'Volga',
            'Voldynskoye',
            'Voldyn',
            'Vokzalnyye Vyselki',
            'Voknavolok',
            'Vokhtoga',
            'Vokhrinka',
            'Vokhma',
            'Voinova Gora',
            'Vodstroy',
            'Vodnyy',
            'Vodniki',
            'Vnukovo',
            'Vlasyevo',
            'Vlasovo',
            'Vlaski',
            'Vladychino Novoye',
            'Vladimirskiy Posëlok',
            'Vladimirskaya',
            'Vladimirovka',
            'Vladimir',
            'Vladikavkaz',
            'Vizinga',
            'Vizim”yary',
            'Vityazevo',
            'Vitenëvo',
            'Vistino',
            'Vislyy Bor',
            'Visim',
            'Vishnyakovskiye Dachi',
            'Vishnyakovo',
            'Vishnëvka',
            'Vinsady',
            'Vinogradovo',
            'Vinogradnyy',
            'Vinnovka',
            'Vilya',
            'Vilovatovo',
            'Vilga',
            'Vikkolovo',
            'Viglino',
            'Vidyayevo',
            'Vidnoye',
            'Vichuga',
            'Veydelevka',
            'Vetluzhskiy',
            'Vetluga',
            'Vetchi',
            'Vesyegonsk',
            'Veshnyaki',
            'Veshkayma',
            'Veshenskaya',
            'Veshchevo',
            'Veselyy Poselok',
            'Vesëlyy',
            'Vesëlaya Lopan',
            'Verzilovo',
            'Vërtnoye',
            'Vertlino',
            'Vertkovo',
            'Vershilovo',
            'Verkhozim',
            'Verkhozërye',
            'Verkhovye',
            'Verkhovino',
            'Verkhovazhye',
            'Verkhoshizhemye',
            'Verkhnyaya Tura',
            'Verkhnyaya Tozma',
            'Verkhnyaya Toyma',
            'Verkhnyaya Tishanka',
            'Verkhnyaya Maksakovka',
            'Verkhnyaya Kozlan',
            'Kishcha',
            'Verkhnyaya Khava',
            'Verkhnyaya Balkariya',
            'Verkhnyaya Akhtuba',
            'Verkhniy Uslon',
            'Verkhniy Tagil',
            'Verkhniy Nurlat',
            'Lakkha Nëvre',
            'Verkhniy Mamon',
            'Verkhniy Lomov',
            'Verkhniy Landekh',
            'Verkhniy Kurkuzhin',
            'Verkhniy Fiagdon',
            'Verkhniye Tuby',
            'Verkhniye Tatyshly',
            'Verkhniye Sergi',
            'Verkhniye Oselki',
            'Verkhniye Kotly',
            'Verkhniye Kigi',
            'Verkhniye Gorki',
            'Verkhniye Achaluki',
            'Verkhniy Baskunchak',
            'Verkhniy Avzyan',
            'Verkhniy Aktash',
            'Verkhneye Zarechye',
            'Verkhneye Velino',
            'Verkhneye Valuyevo',
            'Verkhneye Starovo',
            'Verkhneye Shchekotikhino',
            'Verkhneye Shakhlovo',
            'Verkhneye Koyrovo',
            'Verkhneye Kazanishche',
            'Verkhneye Brusovoye',
            'Verkhneye Akcherino',
            'Verkhneyarkeyevo',
            'Verkhne-Vasilyevskoye',
            'Verkhneuralsk',
            'Verkhnetulomskiy',
            'Verkhne-Romashkovo',
            'Verkhniy Pikhovkin',
            'Verkhnegoveynyy',
            'Verkhnedneprovskiy',
            'Verkhne-Derevyannoye',
            'Verkhnechusovskiye Gorodki',
            'Verkhnebakanskiy',
            'Verkhneye Anisimovo',
            'Anikin',
            'Verizino',
            'Vereya',
            'Vereshchagino',
            'Verbovskiy',
            'Verbino',
            'Verbilovo',
            'Verbilki',
            'Ventsy',
            'Venëv',
            'Velyaminovo',
            'Velyaminovka',
            'Velt',
            'Velsk',
            'Vels',
            'Velizh',
            'Velino',
            'Velikovskoye',
            'Velikovechnoye',
            'Velikooktyabrskiy',
            'Velikodvorskiy',
            'Velikiy Ustyug',
            'Velikiye Luki',
            'Velikent',
            'Velikanov',
            'Velednikovo',
            'Vegota',
            'Vedishchevo',
            'Vedernikov',
            'Vedeno',
            'Vechnoye',
            'Vazhiny',
            'Vavozh',
            'Vavilovo',
            'Vavibet',
            'Vaulovo',
            'Vatutino',
            'Vatutinki',
            'Vasyurinskaya',
            'Vasyukovo',
            'Vasilyevskoye',
            'Vasilyevskiy Mokh',
            'Vasilyevskiy',
            'Vasilyevo',
            'Vasilyevka',
            'Vasilsursk',
            'Vasilëvo',
            'Varshavka',
            'Varnavino',
            'Varlamovo',
            'Varnitsy',
            'Varenovka',
            'Varenikovskaya',
            'Vardane',
            'Vankovo',
            'Vani',
            'Vanda',
            'Valuyki',
            'Valtsovo',
            'Valki',
            'Valishchevo',
            'Valerik',
            'Valerianovsk',
            'Valentinovka',
            'Valday',
            'Vakhtan',
            'Vakhrushi',
            'Vadinsk',
            'Vad',
            'Vacha',
            'Uzytamak',
            'Uzunovo',
            'Uzolskiy',
            'Uzlovaya',
            'Uzheselga',
            'Uzhalye',
            'Uyut',
            'Uyta',
            'Uyemskiy',
            'Uvarovo',
            'Uvarovka',
            'Uvalyevo',
            'Uva',
            'Utta',
            'Utsmiyurt',
            'Utevka',
            'Utamysh',
            'Usvyaty',
            'Usukhchay',
            'Ustyuzhna',
            'Ustye-Gorodischenskoye',
            'Ustye',
            'Ust-Tsilma',
            'Ust-Shonosha',
            'Ust-Rybnitsa',
            'Ust-Pelshma',
            'Ust-Luga',
            'Ust-Labinsk',
            'Ust-Kulom',
            'Ust-Kishert',
            'Ust-Katav',
            'Ust-Kachka',
            'Ust-Izhora',
            'Ustinovo',
            'Ust-Dzheguta',
            'Ust-Donetskiy',
            'Uspenskoye',
            'Uspenskiy',
            'Uspenskaya',
            'Usolye',
            'Usogorsk',
            'Usman',
            'Uslon',
            'Usisha',
            'Parma',
            'Ushkovo',
            'Ushinka',
            'Ushakovka',
            'Usady',
            'Usadishche',
            'Urzhum',
            'Uryv-Pokrovka',
            'Uryupinsk',
            'Uryadino',
            'Urvan',
            'Urussu',
            'Urus-Martan',
            'Urukh',
            'Urshelskiy',
            'Ursala',
            'Urozhaynoye',
            'Urmary',
            'Urman',
            'Urma',
            'Urkarakh',
            'Uritsk',
            'Uren',
            'Urdoma',
            'Urazovo',
            'Urazovka',
            'Uralskiy',
            'Uralets',
            'Upornaya',
            'Unzha',
            'Untsukul',
            'Uni',
            'Undory',
            'Unecha',
            'Umet',
            'Umba',
            'Ulyanovsk Oblast',
            'Ulyanovsk',
            'Ulyanovka',
            'Ulyanino',
            'Ulyanikha',
            'Ulu-Telyak',
            'Ulukulevo',
            'Ullubiyaul',
            'Ulluaya',
            'Ulitino',
            'Ukrainskiy',
            'Ukrainskaya',
            'Ukhta',
            'Ukholovo',
            'Uinskoye',
            'Ugra',
            'Ugory',
            'Ugolnyy',
            'Uglyanets',
            'Uglovka',
            'Uglich',
            'Ugleuralskiy',
            'Uglerodovskiy',
            'Uglegorskiy',
            'Ufimskiy',
            'Ufa',
            'Udobnaya',
            'Udmurtskaya Respublika',
            'Udimskiy',
            'Udima',
            'Udelnaya',
            'Uchkulan',
            'Uchkeken',
            'Uchaly',
            'Ubory',
            'Ubezhenskaya',
            'Tyutkovo',
            'Tyushino',
            'Tyulyuk',
            'Tyulyachi',
            'Tyulgan',
            'Tyrnyauz',
            'Tyazhino',
            'Tyarlevo',
            'Tyapkino',
            'Tverskaya Oblast',
            'Tverskaya',
            'Tver',
            'Tuzha',
            'Tuymazy',
            'Tutykhino',
            'Tutayev',
            'Tushino',
            'Turovo',
            'Turovka',
            'Turki',
            'Turgenevo',
            'Turayevo',
            'Tupitsyno',
            'Tupitsino',
            'Tunoshna',
            'Tungozero',
            'Tumbotino',
            'Tumazy',
            'Tuma',
            'Tulskaya Oblast',
            'Tula',
            'Tukhkala',
            'Tukayevskiy Rayon',
            'Tukan',
            'Tugurgoy',
            'Tugolesskiy Bor',
            'Tugarinovo',
            'Tuchkovo',
            'Tubinskiy',
            'Tuapse',
            'Tsurib',
            'Tsumadinskiy Rayon',
            'Tsivilsk',
            'Tsimlyansk',
            'Tsilna',
            'Tsibino',
            'Tsentralnyy',
            'Tsentoroy',
            'Tsemdolina',
            'Tselina',
            'Tseleyevo',
            'Tsaplino',
            'Tsagan Aman',
            'Tryznovo',
            'Trutnëvo',
            'Trusovo',
            'Trunovskoye',
            'Trudovoye Pole',
            'Trudobelikovskiy',
            'Trudy',
            'Trubitsino',
            'Trubino',
            'Trubchevsk',
            'Trostniki',
            'Trosna',
            'Troitskoye-Kaynardzhi',
            'Troitskoye',
            'Troitsko-Pechorsk',
            'Troitskiy',
            'Troitskaya',
            'Troitsk',
            'Troitsa-Chizhi',
            'Trofimovo',
            'Tretya Rota',
            'Trëkhgorka',
            'Trebukhino',
            'Trasna',
            'Trakt',
            'Tpig',
            'Tovarkovskiy',
            'Tovarkovo',
            'Totskoye',
            'Totma',
            'Tosno',
            'Torzhok',
            'Toropets',
            'Torfyanoy',
            'Torchino',
            'Torbeyevo',
            'Toporkovo',
            'Toporikha',
            'Topkanovo',
            'Tonshayevo',
            'Tonkino',
            'Tomilino',
            'Tomarovka',
            'Tolyatti',
            'Tolstyakovo',
            'Tolstoy-Yurt',
            'Tolstovka',
            'Tolstopaltsevo',
            'Tolpygino',
            'Tolokontsevo',
            'Tolmachevo',
            'Tolloreka',
            'Tolbazy',
            'Toksovo',
            'Tobenki',
            'Tlyustenkhabl',
            'Tlyarata',
            'Titovo',
            'Titan',
            'Tishkovo',
            'Tishchenskoye',
            'Tirlyanskiy',
            'Timshino',
            'Timonovo',
            'Timonino',
            'Timokhovo',
            'Timokhino',
            'Timkovo',
            'Timenka',
            'Timashëvsk',
            'Tim',
            'Tiliktino',
            'Tiksha',
            'Tikhvin',
            'Tikhtozero',
            'Tikhoretsk',
            'Tikhonovo',
            'Nizhnyaya Maktama',
            'Tikhonikha',
            'Teykovo',
            'Adygeysk',
            'Tetyushi',
            'Tetërino',
            'Teterevikha',
            'Teshilovo',
            'Teshebs',
            'Teryayevo',
            'Terskol',
            'Terskaya',
            'Ternevskaya',
            'Ternovka',
            'Teribërka',
            'Tereze',
            'Terekli-Mekteb',
            'Terekhovo',
            'Terek',
            'Terbuny',
            'Tyoply Stan',
            'Tëploye',
            'Tëplaya Gora',
            'Tengushevo',
            'Tenginka',
            'Temyasovo',
            'Temyashëvo',
            'Temyan',
            'Temta',
            'Temryuk',
            'Temnikov',
            'Tëmkino',
            'Temizhbekskaya',
            'Temirgoyevskaya',
            'Temiraul',
            'Temenichi',
            'Telezhinka',
            'Tekstilshchik',
            'Teberda',
            'Tbilisskaya',
            'Taytsy',
            'Taynoye',
            'Tayninskiy',
            'Tatsinskiy',
            'Tatishchevo',
            'Tatarstan',
            'Tatarskaya Pishlya',
            'Tatarskaya Kargala',
            'Tatarskaya',
            'Tatarovo',
            'Tatarka',
            'Tatanovo',
            'Tasino',
            'Tashla',
            'Tashirovo',
            'Tarychëvo',
            'Tarusovo',
            'Tarusa',
            'Tarumovka',
            'Tartarskaya',
            'Tarskoye',
            'Tarnogskiy Gorodok',
            'Tarki',
            'Tarkhovo',
            'Tarkhovka',
            'Tarkhanskaya Potma',
            'Taremskoye',
            'Tarasovskiy',
            'Lipovka',
            'Tarasovka',
            'Tarakanovo',
            'Tambovskaya Oblast',
            'Tambovka',
            'Tambov',
            'Taman',
            'Tamala',
            'Talovyy',
            'Talovskiy',
            'Talitsy',
            'Taldom',
            'Taksino',
            'Agidel',
            'Taganrog',
            'Tagankovo',
            'Taganskiy',
            'Syzran',
            'Syumsi',
            'Sysova',
            'Syrtych',
            'Syrskoye',
            'Syrostan',
            'Syrnevo',
            'Synyanyrd',
            'Syntul',
            'Synya',
            'Symbozero',
            'Sylva',
            'Syktyvkar',
            'Sychëvo',
            'Sychëvka',
            'Syava',
            'Syasstroy',
            'S”yanovo',
            'Syamzha',
            'Svyato',
            'Svobody',
            'Svobodnyy',
            'Svoboda',
            'Sviyazhsk',
            'Sviridov',
            'Svinkino',
            'Sviblovo',
            'Svetogorsk',
            'Svetoch',
            'Svetlyy Yar'
         ];

        foreach ($data as $value)
            $massCreateData[] = ['name' => $value];
        City::insert($massCreateData);

    }
}
