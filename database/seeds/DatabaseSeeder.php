<?php

use Illuminate\Database\Seeder;
// use database\seeds\UsersTableSeeder;
// use database\seeds\ProductsTableSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call('UsersTableSeeder');
        
//         $this->command->info('Users table seeded!');
        
//         //$this->call('ProductsTableSeeder');
        
//         $this->command->info('Products table seeded!');

        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'name' => 'admin@admin.com',
            'email' => 'admin@admin.com',
            'password' => '123456',
            'admin' => true,
        ]);
        
        
        DB::table('products')->delete();
        
        DB::table('products')->insert([
            'name' => 'Coins',
            'description' => 'Throwable coins. Ideal for distracting people.',
            'price' => 1,
            'category' => 'Gear',
            'subcategory' => 'Distractions',
            'filename' => 'coin.png',
            'original_filename' => 'coin.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Concealable Knife',
            'description' => 'This knife is easily concealable in a jacket pocket or a sleeve. Get past frisks and pat downs without trouble.',
            'price' => 150 ,
            'category' => 'Melee',
            'subcategory' => 'Knives',
            'filename' => 'concealableknife.png',
            'original_filename' => 'concealableknife.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Custom 5mm pistol',
            'description' => 'The ergonomic design of this pistol makes it easily concealable. Undetectable when being frisked',
            'price' => 500,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'custom5mmpistol.png',
            'original_filename' => 'custom5mmpistol.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Enram Shotgun',
            'description' => 'Powerful and loud weapon. Has a tight spread at close range but accuracy drops at longer ranges.',
            'price' => 100,
            'category' => 'Guns',
            'subcategory' => 'Shotguns',
            'filename' => 'enram.png',
            'original_filename' => 'enram.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Enram Supressed',
            'description' => 'Powerful shotgun. Equipped with suppressor to allow for less detectable shots.',
            'price' => 1500,
            'category' => 'Guns',
            'subcategory' => 'Shotguns',
            'filename' => 'enramsupressed.png',
            'original_filename' => 'enramsupressed.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Explosive Phone',
            'description' => 'Dummy phone with integrated explosive. Detonates upon usage.',
            'price' => 400,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'explosivephone.png',
            'original_filename' => 'explosivephone.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Fiber Wire',
            'description' => 'This glassfiber wire is undetectable with metal detectors. Can be used to choke a person.',
            'price' => 150,
            'category' => 'Melee',
            'subcategory' => 'Blunt',
            'filename' => 'fiberwire.jpg',
            'original_filename' => 'fiberwire.jpg',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC Heavy Pistol',
            'description' => 'Heavy caliber pistol designed for use with armor piercing ammunition. Possibility for shooting your target through thin walls.',
            'price' => 1200,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'heavypistol.jpg',
            'original_filename' => 'heavypistol.jpg',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'ICA19',
            'description' => 'Basic semi-automatic pistol. Effective at close to medium range with average damage. Can not pierce body armor.',
            'price' => 400,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'ica19.jpg',
            'original_filename' => 'ica19.jpg',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'ICA19 Full Auto Stealth',
            'description' => 'Fully automatic version of the ICA19 stealth. Allows for rapid firing at multiple targets.',
            'price' => 1200,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'ica19fastealth.png',
            'original_filename' => 'ica19fastealth.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'ICA19 Stealth Chrome',
            'description' => 'ICA19 stealth with a chrome finish.',
            'price' => 1100,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'ica19stealthchrome.png',
            'original_filename' => 'ica19stealthchrome.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'ICA19 Stealth',
            'description' => 'ICA19 equipped with suppressor for silent shooting. Effective at close range.',
            'price' => 1000,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'ica19stealth.png',
            'original_filename' => 'ica19stealth.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jaeger 7',
            'description' => 'Very accurate long range rifle',
            'price' => 3000,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'jaeger7.png',
            'original_filename' => 'jaeger7.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Absolution Suit',
            'description' => 'A custom tailored suit with black leather gloves. Scarlet tie and tie pin. French cuff shirt and black leather gloves.',
            'price' => 4000,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'absolutionsuit.png',
            'original_filename' => 'absolutionsuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Audio Distraction',
            'description' => 'An audio distraction device. Will attract an individual in hearing range.',
            'price' => 100,
            'category' => 'Gear',
            'subcategory' => 'Distractions',
            'filename' => 'audiodistraction.png',
            'original_filename' => 'audiodistraction.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Blood Money Suit',
            'description' => 'A black two-button suit with black leather gloves. Pin-striped shirt and tie.',
            'price' => 3500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'bloodmoneysuit.png',
            'original_filename' => 'bloodmoneysuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Breaching Charge',
            'description' => 'An explosive device designed to breach doors. Will destroy the lock when detonated. Relatively quiet.',
            'price' => 400,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'breachingcharge.png',
            'original_filename' => 'breachingcharge.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Clown Suit',
            'description' => 'A jolly outfit sure to liven up any child\'s birthday pary. Featuring a polka dotted shirt, rainbow socks and a bright red nose.',
            'price' => 2000,
            'category' => 'Clothing',
            'subcategory' => 'Special',
            'filename' => 'clownsuit.png',
            'original_filename' => 'clownsuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Combat Knife',
            'description' => 'A military style knife. Stainless steel. Effective in close quarters engagements',
            'price' => 200,
            'category' => 'Melee',
            'subcategory' => 'Knives',
            'filename' => 'combatknife.png',
            'original_filename' => 'combatknife.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Concealable Baton',
            'description' => 'A collapsible baton. Can be used in close combat to knock an individual unconscious. Can be smuggled though frisk zones.',
            'price' => 150,
            'category' => 'Melee',
            'subcategory' => 'Blunt',
            'filename' => 'concealablebaton.png',
            'original_filename' => 'concealablebaton.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Cowboy Suit',
            'description' => 'A tasteful suit for the discerning cowboy. Steel blue on patriotic white.',
            'price' => 3000,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'cowboysuit.png',
            'original_filename' => 'cowboysuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Casual Shirt',
            'description' => 'Dark dress shirt with gloves. Light-weight pleated summer trousers.',
            'price' => 2500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'darkshirt.png',
            'original_filename' => 'darkshirt.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Italian Shirt',
            'description' => 'A light-weight Italian style dress shirt with black gloves. Slim tailored trousers.',
            'price' => 2500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'italianshirt.png',
            'original_filename' => 'italianshirt.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Stealth Suit',
            'description' => 'Where tactical meets practical and stylish, you will find the stealth suit. Black and charcoal with the finest gloves and pockets for every tool required on-site.',
            'price' => 6000,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'ravensuit.png',
            'original_filename' => 'ravensuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Santa Suit',
            'description' => 'A carmine silk and wool outfit. Represents a modern version of a mythical figure who brings gifts to well-behaved "good" children. Ironic.',
            'price' => 3500,
            'category' => 'Clothing',
            'subcategory' => 'Special',
            'filename' => 'santasuit.png',
            'original_filename' => 'santasuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Signature Suit',
            'description' => 'A bespoke modern suit with black leather gloves. Single-color burgundy tie. White point-collar shirt.',
            'price' => 4500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'signaturesuit.png',
            'archived'=>false,
            'original_filename' => 'signaturesuit.png',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Summer Suit',
            'description' => 'A tailored polo shirt under a linen suit with gray leather gloves.',
            'price' => 3000,
            'category' => 'Clothing',
            'archived'=>false,
            'subcategory' => 'Suits',
            'filename' => 'summersuit.png',
            'original_filename' => 'summersuit.png',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Tactical Gear',
            'description' => 'A tactical turtleneck, jacket and ballistic gloves, with all weather hunter\'s hat. Full length tactical pants.',
            'price' => 3500,
            'category' => 'Clothing',
            'subcategory' => 'Special',
            'filename' => 'tacticalgearhat.png',
            'archived'=>false,
            'original_filename' => 'tacticalgearhat.png',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Tuxedo',
            'description' => 'A tailored tuxedo with black leather gloves. Burgundy pin-stripe pocket square.',
            'price' => 5000,
            'category' => 'Clothing',
            'archived'=>false,
            'subcategory' => 'Suits',
            'filename' => 'tuxedo.png',
            'original_filename' => 'tuxedo.png',
        ]);
        
        DB::table('products')->insert([
            'name' => 'White Suit',
            'description' => 'A white suit with white leather gloves. Bespoke pin-stripe shirt with American-style regimental tie.',
            'price' => 5500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'whitesuit.png',
            'original_filename' => 'whitesuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Winter Suit',
            'description' => 'A tailored winter suit with French cuff shirt and muted burgundy tie. Bespoke Merino wool coat, with black leather gloves.',
            'price' => 5500,
            'category' => 'Clothing',
            'subcategory' => 'Suits',
            'filename' => 'wintersuit.png',
            'original_filename' => 'wintersuit.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Yukata',
            'description' => 'A custom white silk Yukata with crimson obi. White tabi and lacqured paulownia geta.',
            'price' => 2500,
            'category' => 'Clothing',
            'subcategory' => 'Special',
            'filename' => 'yukuta.png',
            'original_filename' => 'yukuta.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Emetic Poison Syringe',
            'description' => 'A syringe containing a single dose of an emetic poison. Any dosed individual will immediately become nauseous.',
            'price' => 50,
            'category' => 'Gear',
            'subcategory' => 'Poison',
            'filename' => 'emeticsyringe.png',
            'original_filename' => 'emeticsyringe.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Emetic Poison Vial',
            'description' => 'A vial of poison. Contains a single dose of an emetic poison. When consumed, an individual will imeediately become nauseous. Can be administered via food or drink.',
            'price' => 50,
            'category' => 'Gear',
            'subcategory' => 'Poison',
            'filename' => 'emeticvial.png',
            'original_filename' => 'emeticvial.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Gold Coins',
            'description' => 'A large golden coin, can be used as a distraction when thrown.',
            'price' => 25,
            'category' => 'Gear',
            'subcategory' => 'Distractions',
            'filename' => 'goldcoin.png',
            'original_filename' => 'goldcoin.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Claw Hammer',
            'description' => 'Lightweight hammer. Can be used to knock an individual unconscious.',
            'price' => 25,
            'category' => 'Melee',
            'subcategory' => 'Blunt',
            'filename' => 'hammer.png',
            'original_filename' => 'ammer.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'HWK21 Covert',
            'description' => 'A modern light pistol with camouflage details. Rapid firing with large magazine capacity.',
            'price' => 1100,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'hwk21covert.png',
            'original_filename' => 'hwk21covert.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jaeger 7 Covert',
            'description' => 'A modern marksman\'s rifle with custom camouflage detailing. Reduced weight allows for quicker and easier handling.',
            'price' => 3500,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'jaeger7covert.png',
            'original_filename' => 'jaeger7covert.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jaeger 7 Tiger',
            'description' => 'A modern marksman\'s rifle with custom tiger camouflage detailing. Increased magazine capacity.',
            'price' => 3500,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'jaeger7tiger.png',
            'original_filename' => 'jaeger7tiger.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Jaeger 7 Lancer',
            'description' => 'A modern marksman\'s rifle. Armor piercing rounds allow it to shoot through thin walls and human bodies.',
            'price' => 5500,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'jaeger7lancer.png',
            'original_filename' => 'jaeger7lancer.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Janbiya',
            'description' => 'A curved dagger. Ceremonial origins, likely Middle Eastern.',
            'price' => 350,
            'category' => 'Melee',
            'subcategory' => 'Knives',
            'filename' => 'janibya.png',
            'original_filename' => 'janibya.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Krugermeier .22',
            'description' => 'A low velocity, small caliber pistol. Originally designed for special forces to make as little noise as possible. Custom engraving.',
            'price' => 1500,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'krugermeier.png',
            'original_filename' => 'krugermeier.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Lethal Syringe',
            'description' => 'A syringe containing a single dose of lethal poison. Will eliminate any victim immediately, without trace.',
            'price' => 150,
            'category' => 'Gear',
            'subcategory' => 'Poison',
            'filename' => 'lethalsyringe.png',
            'original_filename' => 'lethalsyringe.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Lethal Poison Vial',
            'description' => 'A vial of poison containing a single dose of lethal poison. Will result in immediate death of the target. Can be administered via food or drink.',
            'price' => 150,
            'category' => 'Gear',
            'subcategory' => 'Poison',
            'filename' => 'lethalvial.png',
            'original_filename' => 'lethalvial.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Lockpick',
            'description' => 'A set of lockpicks. Can be used to open physical locks.',
            'price' => 50,
            'category' => 'Gear',
            'subcategory' => 'Tools',
            'filename' => 'lockpick.png',
            'original_filename' => 'lockpick.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Machete',
            'description' => 'A bloodied machete. Very lethal and suspicious.',
            'price' => 100,
            'category' => 'Melee',
            'subcategory' => 'Knives',
            'filename' => 'machete.png',
            'original_filename' => 'machete.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Masamune',
            'description' => 'A Japanese katana. High-strength steel blade.',
            'price' => 1000,
            'category' => 'Melee',
            'subcategory' => 'Knives',
            'filename' => 'masamune.png',
            'original_filename' => 'masamune.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Okinawan Tonfa',
            'description' => 'A blunt weapon from the Japanese island of Okinawa. Made of traditional red oak.',
            'price' => 600,
            'category' => 'Melee',
            'subcategory' => 'Blunt',
            'filename' => 'okinawantonfa.png',
            'original_filename' => 'okinawantonfa.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Proximity Explosive Duck',
            'description' => 'An explosive device designed to resemble a yellow rubber duck. Detonated by proximity. Exercise caution when placing.',
            'price' => 600,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'proximityduck.png',
            'original_filename' => 'proximityduck.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Proximity Explosive',
            'description' => 'A modular explosive device.. Detonated by proximity. Exercise caution when placing.',
            'price' => 500,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'proximityexplosive.png',
            'original_filename' => 'proximityexplosive.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Explosive Duck',
            'description' => 'An explosive device designed to resemble a red rubber duck. Detonated remotely. Exercise caution when placing.',
            'price' => 600,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'redremoteduck.png',
            'original_filename' => 'redremoteduck.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Explosive Duck',
            'description' => 'An explosive device designed to resemble a white rubber duck. Detonated remotely. Exercise caution when placing.',
            'price' => 600,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'whiteremoteduck.png',
            'original_filename' => 'whiteremoteduck.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Demolition Block',
            'description' => 'A heavy block of Composition-10 plastic explosive. Packaged for use in remote explosive applications. Creates a massive blast when detonated. High risk of collateral damage.',
            'price' => 900,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'remotedemoblock.png',
            'original_filename' => 'remotedemoblock.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Remote Explosive',
            'description' => 'A modular explosive device. Detonated remotely. Exercise caution when placing.',
            'price' => 500,
            'category' => 'Gear',
            'subcategory' => 'Explosives',
            'filename' => 'remoteexplosive.png',
            'original_filename' => 'remoteexplosive.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'RS 15 Assault Rifle',
            'description' => 'A modern revision of a widely distributed assault rifle. Fully automatic. Comes with effecte suppressor.',
            'price' => 1900,
            'category' => 'Guns',
            'subcategory' => 'Assault Rifles',
            'filename' => 'rs15.png',
            'original_filename' => 'rs15.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Digital Scrambler',
            'description' => 'An electronic lockpick. Can bypass electronic locks by generating electromagnetic pulse. Cannot be reused.',
            'price' => 300,
            'category' => 'Gear',
            'subcategory' => 'Tools',
            'filename' => 'scrambler.png',
            'original_filename' => 'scrambler.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Sedative Poison Vial',
            'description' => 'A vial of poison. Contains a single dose of sedative. Any individual dosed will immediately slip into unconsciousness. May be administerd via food or drink.',
            'price' => 75,
            'category' => 'Gear',
            'subcategory' => 'Poison',
            'filename' => 'sedativevial.png',
            'original_filename' => 'sedativevial.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Shuriken',
            'description' => 'A throwable lethal weapon',
            'price' => 20,
            'category' => 'Melee',
            'subcategory' => 'Throwables',
            'filename' => 'shuriken.jpg',
            'archived'=>false,
            'original_filename' => 'shuriken.jpg',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Sieger 300',
            'description' => 'A classic bullpup sniper rifle designed for precise, medium range engagements. Inlayed with wood components. Comes equipped with scope and suppressor.',
            'price' => 4500,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'Sieger300.png',
            'original_filename' => 'sieger300.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Sieger 300 Ghost',
            'description' => 'A unique modernized version of the Sieger 300. All black bullpup rifle designed for high precision, high damage, long range engagements. Equipped with suppressor for ultimate stealth.',
            'price' => 7000,
            'category' => 'Guns',
            'subcategory' => 'Sniper Rifles',
            'filename' => 'sieger300ghost.png',
            'original_filename' => 'sieger300ghost.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Silverballer',
            'description' => 'A tactical pisol with custom high precision barrel. Excellent damage output in a small package.',
            'price' => 2000,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'silverballer.png',
            'original_filename' => 'silverballer.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Striker',
            'description' => 'A custombuilt magnum pistol that uses heavy ammunition. Is able to shoot through thin walls and human bodies. Has a low rate of fire and very high damage. ',
            'price' => 2500,
            'category' => 'Guns',
            'subcategory' => 'Pistols',
            'filename' => 'striker.png',
            'original_filename' => 'striker.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC-4',
            'description' => 'A modern bullpup assault rifle. Capable of firing in semi-auto, 3-round burst and fully automatic modes.',
            'price' => 1800,
            'category' => 'Guns',
            'subcategory' => 'Assault Rifles',
            'filename' => 'tac4ar.png',
            'original_filename' => 'tac4ar.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC-4 Desert',
            'description' => 'A modern bullpup assault rifle. Capable of firing in semi-auto, 3-round burst and fully automatic modes. Equipped with modern suppressor and a desert camouflage pattern.',
            'price' => 2300,
            'category' => 'Guns',
            'subcategory' => 'Assault Rifles',
            'filename' => 'tac4ardesert.png',
            'original_filename' => 'tac4ardesert.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC-4 Jungle',
            'description' => 'A modern bullpup assault rifle. Equipped with modern suppressor, tactical red dot sight and a jungle camouflage pattern.',
            'price' => 2500,
            'category' => 'Guns',
            'subcategory' => 'Assault Rifles',
            'filename' => 'tac4arjungle.jpg',
            'original_filename' => 'tac4arjungle.jpg',
            'archived'=>false,
        ]);
        
        
        DB::table('products')->insert([
            'name' => 'TAC-4 Stealth',
            'description' => 'A modern bullpup assault rifle. Capable of firing in semi-auto, 3-round burst and fully automatic modes. Equipped with modern suppressor and a black subtle paint scheme.',
            'price' => 2200,
            'category' => 'Guns',
            'subcategory' => 'Assault Rifles',
            'filename' => 'tac4arstealth.png',
            'original_filename' => 'tac4arstealth.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC SMG',
            'description' => 'A modern submachine gun. Lightweight, with excellent rate of fire and precision, comes equipped with a suppressor.',
            'price' => 1600,
            'category' => 'Guns',
            'subcategory' => 'Submachine Guns',
            'filename' => 'tacsmg.png',
            'original_filename' => 'tacsmg.png',
            'archived'=>false,
        ]);
        
        DB::table('products')->insert([
            'name' => 'TAC SMG Covert',
            'description' => 'A modern submachine gun. Lightweight, with excellent rate of fire and precision, comes equipped with a suppressor, tactical red dot sight and custom camouflage detailing.',
            'price' => 1900,
            'category' => 'Guns',
            'subcategory' => 'Submachine Guns',
            'filename' => 'tacsmgcovert.jpg',
            'archived'=>false,
            'original_filename' => 'tacsmgcovert.jpg',
        ]);
        
       
    }
    
    
}

