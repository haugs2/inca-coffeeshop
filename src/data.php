<?php

$pagesById =[
    0=>'home.php',
    1=>'coffee.php',
    2=>'machines.php',
    3=>'accessories.php',
    4=>'about.php',
    5=>'contact.php',
    6=>'cart.php',
    7=>'profile.php',
    8=>'login.php',
    9=>'product.php',
    10=>'register.php',
];

$products = [
        1 => array('id'=>1, 'name'=>'quindio', 'category'=>'coffee', 'title' => ['en'=>'Quindio Coffee Capsules',
            'de'=>'Quindio Kaffeekapseln'], 'link'=>"menu.php?id=9&productId=1", 'img_link'=>"img/capsuleproductsample.jpg",
            'kind' => 'pads', 'price_per_unit' => 5.50, 'price_unit'=>['en'=>'10pcs', 'de'=>'10 Stk.'], 'origin' => ['en'=>'Colombia', 'de'=>'Kolumbien'], 'growing_altitude' => '1400',
        'description' => ['en'=>'Made from Excelso grade beans which are carefully selected from the coffee fincas (farms) located in the
            mountainous region of Quindío. Because this coffee is grown at a high elevation, at over 1,400 metres, it is
            characterised by a softness, natural acidity and intense aroma. Capsules that taste like freshly ground coffee.',
            'de'=>'Aus handverlesenen Excelso Kaffeebohnen, welche auf den Kaffee-Fincas in den Bergregionen von 
            Quindío mit grosser Sorgfalt ausgewählt werden. Weil dieser Kaffee in der Höhe - mindestens 1400 
            Meter über Meer - angepflanzt wird, verfügt er über eine charakteristische Zartheit, natürliche Säure sowie ein intensives 
            Aroma. Diese Kapseln schmecken wie frischgemahlener Kaffee.'],
            'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
                'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

      2 => array('id'=>2, 'name'=>'altura', 'category'=>'coffee','title' => ['en'=>'Altura Coffee Beans', 'de'=>'Altura Kaffeebohnen'], 'link'=>"menu.php?id=9&productId=2",
          'img_link'=>"img/coffeebeanproductsample.jpg", 'kind' => 'beans', 'price_per_unit' => 7, 'price_unit'=>['en'=>'250g', 'de'=>'250g'],
          'origin' => ['en'=>'Peru', 'de'=>'Peru'], 'growing_altitude' => '1200',
        'description' => ['en'=>'Organic Altura coffee beans from the Cusco region in Quillabamba, Peru. This is a washed coffee with sweet
            notes of cocoa, hazelnut and caramel. 100% Arabica.  Medium roast designed for a good
            balanced espresso.',
            'de'=>'Bio Altura Bohnen aus der Region Cusco in Quillabamba, Peru. Dies ist eine gewaschene Kaffeesorte mit süssen Noten von Cocoa, Haselnuss und Caramel.
            Ein 100% Arabica, mittlere Röstung, ideal für einen ausgeglichenen Espresso.'],
          'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
              'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

     3 => array('id'=>3, 'name'=>'cotopaxi', 'category'=>'coffee', 'title' => ['en'=>'Cotopaxi Coffee Capsules',
         'de'=>'Cotopaxi Kaffeekapseln'], 'link'=>"menu.php?id=9&productId=3", 'img_link'=>"img/capsuleproductsample.jpg",
         'kind' => 'pads', 'price_per_unit' => 6, 'price_unit'=>['en'=>'10pcs', 'de'=>'10 Stk.'], 'origin' => ['en'=>'Ecuador', 'de'=>'Ecuador'], 'growing_altitude' => '1700',
        'description' => ['en'=>'A great example of how coffee cultivators evolve - Ethiopian seedlings brought into Ecuador for a fascinating  experience in the cup.',
        'de'=>'Ein wunderbares Beispiel, dafür wie der Kaffeeanbau sich entwickelt hat - Äthiopische Setzlinge, 
        die nach Ecuador immportiert wurden für ein faszinierendes Geschmackserlebnis'],
     'options'=>['size'=>[['en'=>'10pcs', 'de'=>'10 Stk'], ['en'=>'20pcs', 'de'=>'20 Stk'], ['en'=>'30pcs', 'de'=>'30 Stk']]]),

    4 => array('id'=>4, 'name'=>'cubico', 'category'=>'coffee', 'title' => ['en'=>'Cubico Coffee Beans',
        'de'=>'Cubico Kaffeebohnen'], 'link'=>"menu.php?id=9&productId=4", 'img_link'=>"img/coffeebeanproductsample.jpg",
        'kind' => 'beans', 'price_per_unit' => 7.50, 'price_unit'=>['en'=>'250g', 'de'=>'250g'], 'origin' => ['en'=>'Peru','de'=>'Peru'], 'growing_altitude' => '1600',
        'description' => ['en'=>'Freshly Roasted Peruvian Beans - Cubico Coffees are roasted in small batches and our roasters sign and date
            each bag to ensure freshness.
            Cupping Notes - Smooth body, intense citrus and lemon acidity, followed by nutty and toffee sweetness, with
            mild herbal notes in the finish.
            Premium Organic Coffee - Medium Roasted to preserve the coffee’s complex flavors and intense aroma.',
        'de'=>'Frischgeröstete peruanische Kaffeebohnen - Cubico Kaffeesorten werden in kleinen Ladungen geröstet und 
        jede Packung von unseren Röstern datiert und signiert, 
         um einen maximale Frische zu garantieren. Ein köstlicher Geschmack - Vollmundiger Körper, intensive Säure von 
         Limette und Zitrone, gefolgt von einer nussigen und toffeeartigen Süsse,
         mit milden Noten von Kräutern zum Abschluss'],
        'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
            'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

     5 => array('id'=>5, 'name'=>'diamante', 'category'=>'coffee', 'title' => ['en'=>'Diamante Coffee Beans',
         'de'=>'Diamante Kaffeebohnen'], 'link'=>"menu.php?id=9&productId=5",
         'img_link'=>"img/coffeebeanproductsample.jpg",'kind' => 'beans', 'price_per_unit' => 10, 'price_unit'=>['en'=>'250g', 'de'=>'250g'],
         'origin' => ['en'=>'Colombia', 'de'=>'Kolumbien'], 'growing_altitude' => '1700',
        'description' => ['en'=>'This coffee from the El
            Diamante farm is first and foremost a great representation of this incredible region, with the typical Huila
            characteristics of intense sweetness, crisp fruits, and a buoyant mouthfeel. In addition, this coffee is
            100% Yellow Bourbon, a rare mutation of the traditional Bourbon variety that was first introduced to Latin
            America in the 19th century. Yellow Bourbon has an exceptional flavor, characterized by caramel, juicy fruit
            and floral notes.',
        'de'=>'Dieser Kaffee, welcher auf der El Diamante Farm gezüchtet wird, ist in erster Linie ein grossartiger Repräsentant dieser unglaublich faszinierenden 
        Region, mit seiner charakteristischen, intensiven Süsse, dem frischen fruchtigen Geschmack und einem lebhaften Mundgefühl. Darüber hinaus ist dieser Kaffee
        zu 100% Yellow Bourbon, eine seltene Variante der traditionellen Bourbon-Sorte, die in Lateinamerika seit dem 19. Jahrhundert anzutreffen ist. 
        Yellow Bourbon hat einen aussergewöhnlichen Geruch, der sich durch Caramel, saftig-fruchtige sowie blumige Noten auszeichnet.'],
         'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
             'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

     6 => array('id'=>6, 'name'=>'robusta', 'category'=>'coffee', 'title' => ['en'=>'Robusta Coffee Beans', 'de'=>'Robusta Kaffeebohnen'],
     'link'=>"menu.php?id=9&productId=6", 'img_link'=>"img/coffeebeanproductsample.jpg",
         'kind' => 'beans', 'price_per_unit' => 8, 'price_unit'=>['en'=>'250g', 'de'=>'250g'], 'origin' => ['en'=>'Peru', 'de'=>'Peru'], 'growing_altitude' => '1600',
        'description' => ['en'=>'A pure Robusta, very strong, both in flavor and caffeine. Richly chocolatey in the best Robusta tradition.
            Excellent with milk and sugar, or sweetened condensed milk, but is also very low in acid so can be drunk
            black even by individuals who are sensitive to acidity. Robusta is high in body and crema and makes a
            fabulous espresso alone or paired with your favorite arabica.',
            'de'=>'Ein purer Robusta, sehr stark sowohl im Geschmack wie im Koffeingehalt. Reiche schokoladige Geschmacksnoten in bester Robusta-Tradition. 
            Hervorragend mit Milch und Zucker oder gesüsster Kondensmilch. Sehr tiefer Säuregehalt, damit kann dieser 
            Kaffee sehr gut auch schwarz getrunken werden selbst bei Säureunverträglichkeit.
            Robusta hat einen reichen Körper und cremigen Geschmack und kann als wunderbarer Espresso genossen werden - allein oder in Kombination mit Ihrem liebsten Arabica.'],
         'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
             'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

    7 => array('id'=>7, 'name'=>'urubamba', 'category'=>'coffee','title' => ['en'=>'Urubamba Coffee Capsules',
        'de'=>'Urubamba Kaffeekapseln'], 'link'=>"menu.php?id=9&productId=7", 'img_link'=>"img/capsuleproductsample.jpg",
        'kind' => 'pads', 'price_per_unit' => 5.50, 'price_unit'=>['en'=>'10pcs', 'de'=>'10 Stk.'], 'origin' => ['en'=>'Peru', 'de'=>'Peru'], 'growing_altitude' => '1500',
        'description' => ['en'=>'Fully washed and dried in the sun, Fair Trade, Organic. Tastes like freshly ground.',
            'de'=>'Gewaschener und sonnengetrockneter Kaffee, Fair Trade und organisch. Schmeckt wie frisch gemahlen'],
        'options'=>['size'=>[['en'=>'10pcs', 'de'=>'10 Stk'], ['en'=>'20pcs', 'de'=>'20 Stk'], ['en'=>'30pcs', 'de'=>'30 Stk']]]),

     8 => array('id'=>8, 'name'=>'volcanico', 'category'=>'coffee','title' => ['en'=>'Volcanico Coffee Beans',
         'de'=>'Volcanico Kaffeebohnen'],'link'=>"menu.php?id=9&productId=8", 'img_link'=>"img/coffeebeanproductsample.jpg",
         'kind' => 'beans', 'price_per_unit' => 10, 'price_unit'=>['en'=>'250g', 'de'=>'250g'], 'origin' => ['en'=>'Peru', 'de'=>'Peru'], 'growing_altitude' =>'1000',
        'description' => ['en'=>'100% Arabica. This Peru Coffee is also known as "Tres Cumbres" and organically grown in the Chanchamayo region at the
            highest ranges of the South American Andes and the Amazon River basin.
            The Peruvian Coffee produces a complex full bodied coffee with floral, smoky overtones,  a gentle acidity and a clean, bright aromatic finish.',
        'de'=>'100% Arabica. Dieser peruanische Kaffee, auch bekannt unter dem Namen "Tres Cumbres, wird ursprünglich in der Region Chanchamayo,
         eine der höchstgelegenen Gegenden der südamerikanischen Anden und dem Amazonasbecken angebaut. 
         Dieser peruanische Sorte ergibt einen reichhaltigen und komplexen Kaffee mit blumigen, rauchigen Obertönen, 
        leichter Säure, sowie einem hellen aromatischen Abschluss'], 'options'=>['consistence'=>[['en'=>'ground','de'=>'gemahlen'], ['en'=>'whole beans', 'de'=>'Bohnen']],
             'size'=>[['en'=>'250g', 'de'=>'250g'], ['en'=>'500g', 'de'=>'500g']]]),

    9 => ['id'=>9, 'name'=>'quechua', 'category'=>'machine', 'title' => ['en'=>'Capsule Machine Quechua', 'de'=>'Quechua Kapselmaschine'],
        'link'=>"menu.php?id=9&productId=9", 'price_per_unit' => 320, 'price_unit'=>0, 'img_link' => "img/capsule-machine-sample.jpg",
        'description' => ['en'=>'One of our all favorite products the Quechua pod machine is ideal for every coffee lover who prefers a simple handling and a quick pouring!
            Compatible with our own and all Nespresso compatible Capsules. Machine heats up in only 15 seconds and comes with a removable 1L water tank.
            The used capsule container can hold up to 20 used capsules. Cup support can be adjusted for tall glasses. off mode after 10min of inactivity.',
            'de'=>'Eines unserer beliebtesten Produkte. Die Quechua Kapselmaschine ist ideal für jeden Kaffeeliebhaber, 
            der eine einfache Handhabung und einen schnell gebrühten Kaffee schätzt.
            Eignet sich für alle Nespresso-kompatiblen Kapseln. Ablage kann für grosse Gläser angepasst werden. Inaktivitätsmodus nach 10 Minuten.'],
        'options'=>['color'=>[['en'=>'silver', 'de'=>'silber'], ['en'=>'black', 'de'=>'schwarz'], ['en'=>'white', 'de'=>'weiss'], ['en'=>'lightblue', 'de'=>'hellblau']]
            ]],

    10 => ['id'=>10, 'name'=>'galina', 'category'=>'machine', 'title' => ['en'=>'French Press La Galina', 'de'=>'Kaffeepresse La Galina'],
        'link'=>"menu.php?id=9&productId=10",  'price_per_unit' => 55, 'price_unit'=>0, 'img_link' => "img/french-press-sample.jpg",
        'description' => ['en'=> 'A simple yet robust french press made of steel and premium glass. Use a coarsely ground coffee, wait 4 minutes and press down the flask.
        Pour and enjoy a highly aromatic coffee. Leaves no residue in cup',
            'de'=>'Eine einfache und robuste Kaffeepresse aus Stahl und hochwertigem Glas. Idealerweise einen grob gemahlenen Kaffee verwenden. 
            Nach 4 Minuten kann der Kolben nach unten gepresst werden. Servieren und einen hocharomatischen Kaffee geniessen. Hinterlässt keinen Kaffeesatz'],
        'options'=>['color'=>[['en'=>'silver', 'de'=>'silber'], ['en'=>'black', 'de'=>'schwarz'], ['en'=>'white', 'de'=>'weiss']],
            'size'=>[['en'=>'350ml', 'de'=>'350ml'], ['en'=>'750ml', 'de'=>'750ml']]
        ]],

    11 => ['id'=>11, 'name'=>'piura', 'category'=>'machine', 'title' => ['en'=>'Espresso machine Piura', 'de'=>'Espressomaschine Piura'],
        'link'=>"menu.php?id=9&productId=11", 'price_per_unit' => 2200, 'price_unit'=>0, 'img_link' => "img/espresso-machine-sample.jpg",
        'description' => ['en'=>'Prepare tasty espresso within a minute.The Piura Espresso machine unites a grinder
            with an exquisite espresso machine. Use the digital temperature control to ensure that water has the perfect temperature.
            Froth your milk by hand using the milk frother when making Latte or Cappuccino. Grinding strength can be adjusted depending on the type of beans.
            Choose either single or double espresso. Manual included with the machine.',
            'de'=>'Bereiten Sie sich in kürzester Zeit einen leckeren Espresso zu. Die Espressomaschine Piura ist sowohl eine Kaffeemühle wie auch eine exquisite Kaffeemaschine.
            Verwenden Sie die digitale Temperaturkontrolle um sicherzugehen, dass das Wasser die perfekte Temperatur hat. 
            Schäumen sie Ihre Milch von Hand wenn Sie einen Latte oder Cappuccino vorbereiten. Der Mahlgrad kann abhängig vom Bohnentyp angepasst werden. 
            Wählen sie zwischen einem und zwei Espressi. Bedienungsanleitung inklusive.'],
        'options'=>['color'=>[['en'=>'silver', 'de'=>'silber'], ['en'=>'black', 'de'=>'schwarz'], ['en'=>'white', 'de'=>'weiss'],
            ['en'=>'metallic red', 'de'=>'metallisch rot']]]],

    12 => ['id'=>12, 'name'=>'tamper', 'category'=>'machine', 'title' => ['en'=>'Coffee Tamper', 'de'=>'Kaffee Tamper'],
        'link'=>"menu.php?id=9&productId=12", 'price_per_unit' => 25, 'price_unit'=>0, 'img_link' => "img/tamper-sample.jpg",
        'description' => ['en'=>'An indispensable tool for every Espresso Machine owner, the tamper is used to press 
        coffee into the sieve carrier with the right amount of pressure.
            Forms a flat surface on the coffee powder and thus ensures optimal water saturation. Made of stainless steel.',
            'de'=>'Ein unabdingbares Werkzeug für jeden Besitzer einer Espressomaschine. Der Tamper wird verwendet 
            um den Kaffee im Siebträger mit dem passenden Druck festzupressen. Erzeugt eine glatte Oberfläche und garantiert damit optimale Wassersättigung. Aus Edelstahl.'],
        'options'=>['color'=>[['en'=>'brown wood', 'de'=>'holz'], ['en'=>'black', 'de'=>'schwarz'], ['en'=>'white', 'de'=>'weiss']]]],

    13 =>['id'=>13, 'name'=>'cup_espresso', 'category'=>'accessory', 'title' => ['en'=>'Espresso Cup', 'de'=>'Espressotasse'],
        'link'=>"menu.php?id=9&productId=13", 'price_per_unit' => 6.90, 'price_unit'=>0, 'description' =>['en'=> ' A simple 
    Espresso cup made of porcelain with a timeless design. Holds 80ml.', 'de'=>'
    Eine schlichte Espressotasse aus Porzellan mit zeitlosem Design. Fassungsvermögen 80ml'], 'img_link' => "img/espresso-cup-sample.jpg",
        'options'=>['color'=>[['en'=>'red', 'de'=>'rot'], ['en'=>'lightgreen', 'de'=>'hellgrün'], ['en'=>'white', 'de'=>'weiss'], ['en'=>'lightblue', 'de'=>'hellblau']]
        ]],

    14=>['id'=>14, 'name'=>'cup_cappuccino', 'category'=>'accessory',  'title' => ['en'=>'Cappuccino Cup', 'de'=>'Cappuccinotasse'],
        'link'=>"menu.php?id=9&productId=14",'price_per_unit' => 8, 'price_unit'=>0,
        'description' => ['en'=>'Cappuccino cup made of porcelain with a timeless design. Holds 160ml',
            'de'=>'Cappuccinotasse aus Porzellan mit zeitlosem Design. Umfasst 160ml'],
        'img_link' => 'img/cappucino-cup-sample.jpg', 'options'=>['color'=>[['en'=>'red', 'de'=>'rot'], ['en'=>'lightgreen', 'de'=>'hellgrün'], ['en'=>'white', 'de'=>'weiss'], ['en'=>'lightblue', 'de'=>'hellblau']]
        ]],

    15=>['id'=>15, 'name'=>'cup_coffee', 'category'=>'accessory', 'title' => ['en'=>'Retro Coffee Cup',
        'de'=>'Retro Kaffeetasse'], 'link'=>"menu.php?id=9&productId=15", 'price_per_unit' => 7.50, 'price_unit'=>0,
        'description' => ['en'=>'Klassische Tasse aus Keramik mit dem 
        charakteristischen schwarzen Rand. Umfasst 125ml', 'en'=>'Classic retro enamel mug with the typical black rim. Holds 125ml'],
        'img_link' =>'img/coffeecupretrosample.jpg',
        'options'=>['color'=>[['en'=>'red', 'de'=>'rot'],['en'=>'yellow', 'de'=>'gelb'], ['en'=>'lightgreen', 'de'=>'hellgrün'], ['en'=>'offwhite', 'de'=>'offwhite'], ['en'=>'lightblue', 'de'=>'hellblau']]
        ]],

    16=>['id'=>16, 'name'=>'cup_reusable', 'category'=>'accessory', 'title' => ['en'=>'Reusable Bamboo Coffee Mug',
        'de'=>'Recyclebarer Kaffeebecher aus Bambus'], 'link'=>"menu.php?id=9&productId=16",'price_per_unit' => 20,
        'price_unit'=>0, 'description' => [
        'en'=>'No more paper mugs! Not only does this reusable mug made from bamboo wood look more colorful and trendy,
            by using it you also reduce waste and protect the environment. Holds 330ml. With a rubber band to protect
            your hands from hot temperature',
        'de'=>'Schluss mit Papierbechern! Dieser wiederverwendbare Becher aus Bambus sieht nicht nur fröhlicher und stylischer aus, 
        er reduziert die Ressourcenverschwendung und schützt damit die Umwelt. Umfasst 330ml. Enthält ein Gummiband der die Hände 
        vor heissen Temperaturen schützt.'], 'img_link' => 'img/reusable-mug-sample.jpg',
        'options'=>['pattern'=>[['en'=>'blue stripes', 'de'=>'blau gestreift'],['en'=>'yellow polka dot', 'de'=>'gelb gepunktet'], ['en'=>'military green', 'de'=>'militärgrün'],
            ['en'=>'deep sea', 'de'=>'deep sea']]
        ]],

    17=>['id'=>17, 'name'=>'milkjar', 'category'=>'accessory', 'title'=> ['en'=>'Barista Milk Jar', 'de'=>'Barista Milchkrug'], 'link'=>"menu.php?id=9&productId=17",
        'price_per_unit'=>18, 'price_unit'=>0, 'description'=>['en'=>'Stainless 
    steel milk jar with graduated measurement. Holds 350ml or 750ml', 'de'=>'Milchkanne aus Edelstahl mit graduierter Messkennzeichnung. Fassungsvermögen 350ml oder 750ml.'],
        'img_link'=>'img/milk-jar-sample.jpg',
        'options'=>['color'=>[['en'=>'silver', 'de'=>'silber'], ['en'=>'black', 'de'=>'schwarz']],
            'size'=>[['en'=>'350ml', 'de'=>'350ml'], ['en'=>'750ml', 'de'=>'750ml']]
        ]],

    18=>['id'=>18, 'name'=>'thermos', 'category'=>'accessory', 'title'=>['en'=>'Thermos Bottle', 'de'=>'Thermosflasche'],
        'link'=>"menu.php?id=9&productId=18", 'price_per_unit'=>20, 'price_unit'=>0, 'description'=>['en'=>'Keep hot drinks warm!. 
    This elegantly designed thermos comes in handy when you take your coffee for the road
            Made of stainless steel. Holds 550ml or 1000ml',
        'de'=>'Hält heisse Getränke warm! Diese elegante Thermosflasche ist Ihr bester Freund wenn Sie ihren Kaffee für 
        unterwegs mitnehmen wollen. Aus Edelstahl. Fassungsvermögen 500ml'], 'img_link'=>'img/thermos-sample.jpg',
        'options'=>['color'=>[['en'=>'silver', 'de'=>'silber'], ['en'=>'black', 'de'=>'schwarz'], ['en'=>'red', 'de'=>'rot']],
            'size'=>[['en'=>'550ml', 'de'=>'550ml'], ['en'=>'1000ml', 'de'=>'1000ml']]
        ]]
];





