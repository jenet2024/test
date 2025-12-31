<?php
session_start();
$email = isset($_SESSION['email']);

// $loggedIn = false; 
// ou true pour simuler une connexion


//liste des articles avec dates
$articles = [
    [
        'date' => '2023-01-01',
        'html' => "<div class='article'>
            <div class='image'><img src='images/alesia.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Alesia</h3>
                <p>La localisation de la bataille d’Alésia a longtemps suscité des débats. Au XIXe siècle, Napoléon III a initié d’importantes fouilles à Alise-Sainte-Reine, menées de 1861 à fin 1865. Ces fouilles ont permis la découverte d’un grand nombre d’armes, de monnaies gauloises et romaines, ainsi que d’objets militaires. De plus, la méthode utilisée, qui consistait à confronter les découvertes avec les textes de César, ressemblant à l’archéologie expérimentale, a permis la reconstitution grandeur nature de segments des lignes d’investissement et de machines de guerre romaines.
                    Malgré l’importance de ces découvertes, le débat n’est toujours pas clos, et la communauté scientifique reste divisée.
                    Dans les années 1990, une équipe d’archéologues franco-allemande a apporté de nouvelles preuves, confirmant que l’oppidum du Mont-Auxois à Alise-Sainte-Reine et le siège militaire du Ier siècle av. J.-C. qui y a été révélé par l’archéologie correspondent bien à la bataille d’Alésia.
                    Aujourd’hui, la communauté scientifique française et internationale considère Alise-Sainte-Reine comme le lieu historique de la bataille. C’est donc naturellement sur cet emplacement que le MuséoParc Alésia s’est établi. »</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-01-15',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Bibracte</h3>
                <p>Au cœur d’une forêt de 1000 hectares se niche une ville qui a accueilli entre 5 et 10 000 habitants, à la période charnière de la conquête de la Gaule par les Romains. Une ville éphémère, capitale du puissant peuple des Eduens, qui fut un centre artisanal, commercial et politique de premier ordre aux IIe et Ier siècles avant notre ère, et qui vit passer Vercingétorix et Jules César.
                    Aujourd’hui, vous cheminez à travers les arases des murs antiques, habitations ou bâtiments publics, passez près des vestiges d’un couvent de la fin du moyen-âge, découvrez une fontaine.
                    Les vestiges de la ville sont aujourd’hui enserrés d’un écrin de verdure. La qualité des paysages et la richesse biologique du milieu sont telles que le massif du mont Beuvray tout entier a été classé en 1990 au titre des Sites pour son intérêt paysager et scientifique et qu’il est référencé ZNIEFF et Natura 2000, tandis que le sommet est classé au titre des Monuments historiques depuis 1988.
                </p>
            </div>
            <div class='image'><img src='images/bibracta.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],

    [
        'date' => '2023-02-01',
        'html' => "<div class='article'>
            <div class='image'><img src='images/glanum.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Glanum</h3>
                <p>Glanum est un site archéologique remarquable situé près de Saint-Rémy-de-Provence, dans le sud de la France. Fondé au VIe siècle av. J.-C., ce site fut d'abord une colonie celtique avant de devenir une ville gallo-romaine prospère. Glanum est célèbre pour ses monuments bien conservés, tels que les temples jumeaux (dits de Castor et Pollux), un arc de triomphe et des thermes. Le site offre un aperçu fascinant de la vie quotidienne et de l'architecture de l'époque romaine. Les fouilles archéologiques ont révélé des artefacts, des mosaïques et des structures qui témoignent de l'importance culturelle et économique de Glanum. Aujourd\hui, le site est ouvert au public et attire de nombreux visiteurs intéressés par l\'istoire antique.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-02-15',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Les grottes de Lascaux</h3>
                <p>Les grottes de Lascaux, situées en Dordogne, dans le sud-ouest de la France, sont l'un des sites préhistoriques les plus célèbres au monde. Découvertes en 1940, ces grottes abritent des peintures rupestres vieilles de plus de 17 000 ans, réalisées par des artistes de l'époque du Paléolithique supérieur. Les peintures représentent principalement des animaux, tels que des chevaux, des aurochs et des cerfs, avec un réalisme et une vitalité saisissants. Les grottes de Lascaux sont souvent surnommées la 'Chapelle Sixtine de la Préhistoire' en raison de la qualité et de la richesse de leurs œuvres d\art. Pour préserver ces trésors fragiles, la grotte originale est fermée au public, mais une réplique, appelée Lascaux IV, permet aux visiteurs de découvrir ces chefs-d'œuvre dans des conditions optimales.
                </p>
            </div>
            <div class='image'><img src='images/grotte de lascaux.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-03-01',
        'html' => "<div class='article'>
            <div class='image'><img src='images/grotte de chauvet.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>La grotte de Chauvet</h3>
                <p>La grotte de Chauvet, située dans le sud de la France près de Vallon-Pont-d'Arc en Ardèche, est l'un des sites préhistoriques les plus importants jamais découverts. Elle a été découverte en 1994 et contient certaines des plus anciennes peintures rupestres connues, datant d'environ 36 000 ans. Ces œuvres d'art, remarquablement bien conservées, représentent une variété d'animaux, dont des lions, des mammouths, des rhinocéros et des chevaux, avec un réalisme et une expressivité exceptionnels. La grotte de Chauvet offre un aperçu fascinant de la vie et de l'art des premiers humains modernes en Europe. Pour protéger ces trésors fragiles, l'accès à la grotte originale est strictement limité, mais une réplique, appelée la Grotte Chauvet 2, a été créée pour permettre au public de découvrir ces chefs-d'œuvre préhistoriques.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-03-15',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Cognac</h3>
                <p>Le site archéologique au pied du château de Cognac, en Charente, est un lieu d'intérêt historique et culturel. Bien que moins connu que les grottes préhistoriques ou les grands sites gallo-romains, cette zone a révélé des artefacts et des structures qui témoignent de l'occupation humaine depuis l'Antiquité jusqu'au Moyen Âge.Les fouilles archéologiques dans cette région ont mis au jour des vestiges de différentes époques, notamment des traces d'habitations, des outils et des objets du quotidien qui offrent un aperçu de la vie des populations passées. Ces découvertes permettent de mieux comprendre l'évolution du peuplement et des activités humaines dans la région de Cognac.Le site est également intéressant en raison de sa proximité avec le château de Cognac, qui lui-même a une riche histoire remontant à l'époque médiévale. Les artefacts découverts lors des fouilles sont souvent exposés dans des musées locaux, où ils contribuent à enrichir le patrimoine culturel de la région.Les recherches archéologiques continuent de révéler des informations précieuses sur le passé de Cognac et de ses environs, attirant l'intérêt des historiens et des passionnés d'archéologie.</p>
            </div>
            <div class='image'><img src='images/cognac(charente).jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-04-01',
        'html' => "<div class='article'>
            <div class='image'><img src='images/abbeville.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Abbeville</h3>
                <p>Le site archéologique d'Abbeville, situé dans la région des Hauts-de-France, est un lieu d'importance majeure pour la compréhension de la préhistoire. Ce site est particulièrement célèbre pour les découvertes faites au XIXe siècle, qui ont joué un rôle clé dans l'établissement de l'existence de l'homme préhistorique. Les fouilles à Abbeville ont révélé de nombreux outils en silex taillé, caractéristiques de la culture acheuléenne, qui remontent à environ 500 000 ans. Ces artefacts, souvent appelés 'hachettes d'Abbeville', sont parmi les plus anciens outils lithiques connus en Europe. Ils témoignent des compétences techniques et de l'ingéniosité des premiers humains qui ont occupé cette région. Le site d'Abbeville est également associé à la découverte de fossiles d'animaux préhistoriques, tels que des mammouths et des rhinocéros laineux, qui offrent un aperçu de la faune de l'époque. Ces découvertes ont contribué à la reconnaissance de l'ancienneté de l'humanité et à l'étude de l'évolution humaine. Aujourd'hui, les artefacts découverts à Abbeville sont exposés dans des musées, notamment au Musée d'Archéologie nationale à Saint-Germain-en-Laye et au Musée Boucher-de-Perthes à Abbeville, qui porte le nom du célèbre archéologue qui a mené les premières fouilles dans la région.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-04-15',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Bernot</h3>
                <p>Le site archéologique de Bernot, situé dans le département de l'Aisne en France, a révélé des vestiges significatifs de l'âge du Bronze. Lors de fouilles menées par l'Institut national de recherche archéologique préventive (Inrap), une zone d'habitat datant du Bronze final a été mise au jour. Ces découvertes incluent une variété d'objets tels que des céramiques, des outils lithiques, des fragments de bronze, et des perles en ambre, offrant un aperçu précieux des modes de vie et des pratiques artisanales de cette période. Ces artefacts sont particulièrement importants pour la compréhension de l'occupation humaine dans le nord du département de l'Aisne, une région où les connaissances archéologiques étaient jusqu'alors limitées</p>
            </div>
            <div class='image'><img src='images/bernot.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-05-01',
        'html' => "<div class='article'>
            <div class='image'><img src='images/marseille(bouches-du-Rhône).jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Marseille</h3>
                <p>Marseille, située dans le département des Bouches-du-Rhône en France, est l'une des villes les plus anciennes du pays. Fondée vers 600 av. J.-C. par des colons grecs originaires de Phocée (actuelle Turquie), elle est souvent considérée comme la plus ancienne cité de France. Connue sous le nom de Massalia à l'époque antique, Marseille était un important comptoir commercial et un carrefour culturel entre les Grecs, les Celtes et d'autres peuples méditerranéens. La ville a conservé de nombreux vestiges de son passé grec et romain, notamment dans le site archéologique du Vieux-Port, où des fouilles ont mis au jour des vestiges de murs, de quais et d'entrepôts antiques. Le Musée d'Histoire de Marseille, situé près du Vieux-Port, abrite une riche collection d'objets archéologiques, dont des épaves de navires et des artefacts qui témoignent de l'importance maritime et commerciale de la ville à travers les âges. Marseille est également célèbre pour son patrimoine architectural et culturel, qui reflète les différentes périodes de son histoire, de l'Antiquité à nos jours. La ville attire de nombreux visiteurs grâce à ses monuments historiques, ses musées et son ambiance méditerranéenne unique.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-06-01',    
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Illiers-Combray (Eure-et-Loir)</h3>
                <p>Illiers-Combray, située dans le département d'Eure-et-Loir en France, est une commune riche en histoire et en patrimoine. Bien que moins connue que d'autres sites archéologiques majeurs, cette région a révélé des traces de peuplement antique qui témoignent de son occupation dès l'époque gallo-romaine. Les découvertes archéologiques dans et autour d'Illiers-Combray incluent des vestiges de constructions, des objets du quotidien et des éléments de céramique qui suggèrent une présence humaine continue depuis l'Antiquité. Ces artefacts offrent un aperçu de la vie des habitants de cette région à travers les siècles et de leur interaction avec les cultures environnantes. Illiers-Combray est également célèbre pour son association avec l'écrivain Marcel Proust. La ville, rebaptisée Combray dans son œuvre majeure 'À la recherche du temps perdu', attire de nombreux visiteurs intéressés par la littérature et l'histoire culturelle. La maison de Tante Léonie, inspirée de la maison de la tante de Proust, est un lieu emblématique pour les amateurs de littérature. En somme, Illiers-Combray est un lieu où l'histoire antique et la culture littéraire se rencontrent, offrant une expérience unique aux visiteurs.</p>
            </div>
            <div class='image'><img src='images/illiers-combray(eure et loire).jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-06-15',
        'html' => "<div class='article'>
            <div class='image'><img src='images/mainvilliers(eure et loire).jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Mainvilliers (Eure-et-Loir)</h3>
                <p>Mainvilliers, située dans le département d'Eure-et-Loir en France, est une commune qui a révélé des traces intéressantes de son passé gallo-romain. Les découvertes archéologiques dans cette région ont mis en lumière des vestiges de cette période, offrant un aperçu de la vie et des activités des habitants de l'époque. Les fouilles archéologiques à Mainvilliers et ses environs ont permis de découvrir divers artefacts, tels que des céramiques, des outils, et des structures architecturales, qui témoignent de l'occupation et de l'activité humaine durant la période gallo-romaine. Ces découvertes sont essentielles pour comprendre l'histoire locale et régionale, ainsi que les interactions culturelles et économiques de l'époque. Bien que Mainvilliers ne soit pas aussi célèbre que d'autres sites archéologiques majeurs, les vestiges gallo-romains trouvés dans cette zone contribuent à enrichir notre connaissance du passé antique de la région. Ces découvertes sont souvent exposées dans des musées locaux ou étudiées par des archéologues pour mieux comprendre l'histoire et l'évolution de la région d'Eure-et-Loir.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-07-01',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Pernant (Aisne)</h3>
                <p>Pernant, située dans le département de l'Aisne en France, est un site archéologique qui a révélé des vestiges d'occupations préhistoriques et protohistoriques. Lors de fouilles récentes, des artefacts datant de l'époque protohistorique ont été mis au jour, notamment des outils en silex et d'autres vestiges qui témoignent de la présence humaine dans cette région dès ces périodes reculées23. Ces découvertes sont essentielles pour comprendre les modes de vie et les activités des populations qui ont occupé cette zone bien avant l'époque romaine. En plus des vestiges préhistoriques, Pernant est également connue pour ses découvertes gallo-romaines et médiévales, ce qui en fait un site d'intérêt pour plusieurs périodes historiques. Les fouilles ont également révélé une villa antique, ainsi que des traces d'une nécropole gauloise, illustrant l'importance continue de ce site à travers différentes époques</p>
            </div>
            <div class='image'><img src='images/pernant(Aisne).jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-07-10',
        'html' => "<div class='article'>
            <div class='image'><img src='images/val des marais.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Val-des-Marais (Marne)</h3>
                <p>Le site archéologique rural du Grand Est, connu sous le nom de 'Le Pré à Vaches' à Val-des-Marais dans la Marne, est un lieu de fouilles archéologiques qui a révélé des vestiges significatifs de l'époque néolithique. Depuis 2022, des recherches archéologiques sont menées dans le cadre d'un Programme Collectif de Recherche visant à étudier les habitats liés aux complexes miniers néolithiques de la région des Marais de Saint-Gond. Ces recherches ont permis de découvrir des occupations datant du Néolithique moyen II et surtout du Néolithique récent, offrant un aperçu précieux des modes de vie et des activités des populations de cette période. Le site comprend une enceinte palissadée, des fosses dépotoirs, un puits et un bâtiment en abside, tous datés du Néolithique récent. Ces découvertes sont essentielles pour comprendre l'évolution des habitats et des pratiques agricoles et artisanales de l'époque. Les artefacts trouvés sur le site, tels que des céramiques et des outils, contribuent à enrichir notre connaissance de cette période charnière de la préhistoire européenne. Le site de Val-des-Marais est un exemple remarquable de l'archéologie préventive et programmée, illustrant l'importance de la préservation et de l'étude des vestiges archéologiques pour la compréhension de notre patrimoine culturel et historique</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-07-15',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Douvrin (Pas-de-Calais)</h3>
                <p>Douvrin, située dans le département du Pas-de-Calais en région Hauts-de-France, est une commune avec une histoire riche et des traces d'habitations anciennes. Les premières mentions documentées de Douvrin remontent à 1098, indiquant que le lieu était déjà habité depuis le XIe siècle. La commune est traversée par des chemins anciens, dont certains datent de l'époque romaine, comme celui reliant Douvrin à Haisnes. En ce qui concerne les découvertes archéologiques spécifiques à Douvrin, les informations disponibles sont limitées. Cependant, il est connu que la région a été le théâtre de diverses activités minières et industrielles, notamment avec la Compagnie des mines de Douvrin, qui a joué un rôle important dans l'exploitation du charbon dans la région au XIXe siècle. En termes d'habitations anciennes, une partie significative du parc immobilier de Douvrin date d'avant 1971, ce qui témoigne de la présence de constructions anciennes dans la commune. Ces habitations reflètent l'histoire et l'évolution architecturale de la région au fil des siècles. Pour des informations plus détaillées sur des découvertes archéologiques spécifiques à Douvrin, il pourrait être nécessaire de consulter des archives locales ou des rapports d'archéologie préventive qui pourraient contenir des données sur des fouilles ou des découvertes récentes dans la région.</p>
            </div>
            <div class='image'><img src='images/douvrin.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-07-20',
        'html' => "<div class='article'>
            <div class='image'><img src='images/limoges,.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Limoges (Haute-Vienne)</h3>
                <p>Limoges, connue sous le nom d'Augustoritum à l'époque gallo-romaine, était une ville importante de la province romaine de Gaule aquitaine. Cependant, elle n'était pas la capitale de la province. La capitale de la Gaule aquitaine était généralement considérée comme étant Burdigala, l'actuelle Bordeaux. Limoges était célèbre pour son artisanat, notamment la production de céramiques sigillées, qui étaient très prisées dans tout l'Empire romain. La ville était également un centre religieux important, avec des temples dédiés à diverses divinités romaines. Aujourd'hui, Limoges conserve de nombreux vestiges de son passé gallo-romain, notamment des vestiges archéologiques et des objets exposés dans des musées locaux. La ville est également connue pour sa porcelaine, qui perpétue la tradition de l'artisanat de haute qualité remontant à l'époque romaine.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-07-25', 
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Soyons (Ardèche)</h3>
                <p>Soyons, nichée dans le département de l'Ardèche en France, est un site d'une richesse archéologique et historique remarquable. Ce village est particulièrement célèbre pour ses grottes préhistoriques et son oppidum, qui témoignent d'une occupation humaine continue depuis des millénaires. Les grottes préhistoriques de Soyons, occupées dès le Paléolithique, ont livré de nombreux artefacts, outils en silex, et vestiges qui offrent un aperçu fascinant de la vie des premiers habitants de la région. Ces grottes ont également révélé des œuvres d'art rupestre, essentielles pour comprendre les modes de vie et les pratiques culturelles des populations préhistoriques. L'oppidum de Soyons, quant à lui, est un site fortifié datant de l'âge du Fer. Les oppidums étaient des places fortes construites sur des hauteurs, offrant une vue stratégique sur les environs et servant de refuges en cas d'attaque. L'oppidum de Soyons, avec ses remparts et ses structures défensives, est un exemple typique de ces constructions. Il témoigne de l'importance stratégique de la région durant cette période et offre des informations précieuses sur l'organisation sociale et militaire des peuples gaulois avant la conquête romaine. Aujourd'hui, ces sites sont protégés et font l'objet de recherches archéologiques continues. Ils sont également ouverts au public, permettant aux visiteurs de découvrir l'histoire riche et complexe de cette région de l'Ardèche. Les musées locaux, comme le Musée archéologique de Soyons, exposent de nombreux artefacts découverts sur ces sites, offrant une immersion dans le passé préhistorique et antique de la région. Ces découvertes archéologiques, combinées à la beauté naturelle des paysages environnants, font de Soyons une destination incontournable pour les amateurs d'histoire et d'archéologie.</p>
            </div>
            <div class='image'><img src='images/soyons.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-07-30', 
        'html' => "<div class='article'>
            <div class='image'><img src='images/pfulgrieheim.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Pfulgriesheim (Bas-Rhin)</h3>
                <p>Pfulgriesheim, située dans le Bas-Rhin en région Grand Est, se trouve près de sites archéologiques majeurs comme Biesheim, où le site gallo-romain d'Oedenburg a été découvert. Ce site, couvrant près de 200 hectares, révèle des artefacts et structures romaines, illustrant l'importance stratégique de la région. Les fouilles ont mis au jour des vestiges de camps romains, des objets domestiques, et du matériel militaire, offrant un aperçu de la vie quotidienne et des activités des Romains. Bien que Pfulgriesheim elle-même ne soit pas directement associée à des découvertes majeures, sa proximité avec des sites comme Oedenburg suggère une région riche en histoire gallo-romaine. Les artefacts découverts sont souvent exposés dans des musées locaux, enrichissant notre compréhension de l'occupation romaine en Alsace.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-08-05',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Avranches (Manche)</h3>
                <p>Avranches, située dans le département de la Manche en Normandie, est une ville historique et religieuse. Fondée à l'époque gallo-romaine, elle a joué un rôle clé dans l'histoire régionale. La ville abrite la basilique Saint-Gervais, un monument médiéval important, et le Scriptorial, un musée dédié aux manuscrits médiévaux, dont certains proviennent du Mont Saint-Michel. Avranches a été un lieu stratégique pendant des périodes historiques cruciales, comme la guerre de Cent Ans. Aujourd'hui, elle attire de nombreux visiteurs grâce à son riche patrimoine et sa proximité avec le Mont Saint-Michel, l'un des sites les plus emblématiques de France.</p>
            </div>
            <div class='image'><img src='images/avranches.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-08-12',
        'html' => "<div class='article'>
            <div class='image'><img src='images/reims.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Reims (Marne)</h3>
                <p>Reims, située dans le département de la Marne, est une ville historique majeure en France, connue pour son rôle central durant l'Antiquité. Au IIIe siècle, Reims était une capitale importante des Gaules, jouant un rôle politique et économique significatif. La ville est célèbre pour son patrimoine romain et médiéval, notamment grâce à ses vestiges gallo-romains et à sa cathédrale gothique, Notre-Dame de Reims, qui est un symbole de l'histoire religieuse et royale de France. Reims a également été le lieu de nombreux événements historiques, dont le baptême de Clovis, qui a marqué le début de l'alliance entre l'Église et la royauté franque. Aujourd'hui, la ville attire de nombreux visiteurs grâce à son riche patrimoine culturel et historique, ainsi qu'à sa production de champagne, qui est mondialement reconnue.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-08-19',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Pierre-Percée (Meurthe-et-Moselle)</h3>
                <p>Pierre-Percée, située dans le département de Meurthe-et-Moselle en région Grand Est, est un site connu pour son patrimoine médiéval et ses vestiges anciens. Le site est célèbre pour son château médiéval en ruines, qui offre un témoignage fascinant de l'architecture et de l'histoire médiévale de la région. Ces vestiges, perchés sur un éperon rocheux, dominent la vallée et offrent une vue imprenable sur les paysages environnants. Le château de Pierre-Percée, construit au XIIe siècle, a joué un rôle stratégique important au Moyen Âge. Aujourd'hui, les ruines du château sont un lieu de visite prisé, attirant les amateurs d'histoire et de randonnée. Le site est également entouré de forêts et de sentiers de randonnée, ce qui en fait une destination appréciée pour les activités de plein air. Les vestiges de Pierre-Percée, combinés à la beauté naturelle de la région, en font un lieu de découverte et d'exploration du patrimoine historique et naturel de la Lorraine.</p>
            </div>
            <div class='image'><img src='images/pierre percee, (meurthe et moselle).jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-08-26',
        'html' => "<div class='article'>
            <div class='image'><img src='images/saint martin la garenne (yvelines).jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Saint-Martin-la-Garenne (Yvelines)</h3>
                <p>Saint-Martin-la-Garenne, située dans le département des Yvelines en Île-de-France, est une commune pittoresque en bord de Seine. Ce village est apprécié pour son cadre naturel préservé et son patrimoine historique. La commune abrite plusieurs monuments et sites d'intérêt, dont l'église Saint-Martin, un édifice religieux qui témoigne de l'architecture et de l'histoire locale. Le patrimoine de Saint-Martin-la-Garenne inclut également des vestiges historiques et des paysages fluviaux qui attirent les visiteurs pour des promenades et des activités de plein air. La proximité de la Seine offre des vues magnifiques et des opportunités pour des activités nautiques. La commune est également connue pour ses sentiers de randonnée et ses espaces verts, ce qui en fait une destination prisée pour ceux qui cherchent à échapper à l'agitation urbaine.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-09-02',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Vannes (Morbihan)</h3>
                <p>Vannes, située dans le département du Morbihan en Bretagne, est une ville riche en histoire gallo-romaine. Connue sous le nom de Darioritum à l'époque romaine, Vannes était une ville fortifiée importante, comme en témoignent les vestiges de ses remparts. Ces fortifications, construites pour protéger la ville, sont encore partiellement visibles aujourd'hui et offrent un aperçu de l'architecture militaire romaine. La ville était un centre administratif et économique majeur dans la région, bénéficiant de sa position stratégique sur la côte atlantique. Aujourd'hui, Vannes attire de nombreux visiteurs grâce à son patrimoine historique bien préservé et à son charme médiéval.</p>
            </div>
            <div class='image'><img src='images/vannes()mobihan.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-09-09',
        'html' => "<div class='article'>
            <div class='image'><img src='images/levroux.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Levroux (Indre)</h3>
                <p>Le site de Levroux, situé dans le département de l'Indre, est un exemple notable d'oppidum gaulois et de vestiges gallo-romains. Les fouilles archéologiques menées depuis 1968 ont révélé un murus gallicus, une technique de construction caractéristique des fortifications gauloises, sur la colline des Tours. Cet oppidum, connu sous le nom de 'Bonnan' ou 'Bonnens', a été un lieu d'occupation humaine important dès l'âge du fer. Les recherches ont également mis au jour des vestiges de l'époque gallo-romaine, notamment des puits et des structures domestiques, indiquant une occupation continue et significative de la région. Les artefacts et les structures découvertes, comme les arènes gallo-romaines, témoignent de l'importance stratégique et économique de Levroux durant l'Antiquité. Aujourd'hui, ces découvertes sont essentielles pour comprendre l'évolution des établissements humains dans cette partie de la Gaule et de la période romaine.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-09-16',
        'html' => "<div class='article'>
            <div class='texte'>
                <h3>Lattara</h3>
                <p>Lattara, également connue sous le nom de Lattes, est un site archéologique situé près de Montpellier dans le sud de la France. Ce site est célèbre pour son histoire en tant que ville portuaire importante, d'abord sous l'influence des Étrusques, puis des Romains. Fondée au VIe siècle av. J.-C., Lattara était un centre commercial majeur, facilitant les échanges entre les cultures méditerranéennes. Les fouilles archéologiques ont révélé des vestiges significatifs, notamment des structures portuaires, des habitations, et des artefacts qui témoignent de la vie quotidienne et des activités commerciales de l'époque. Ces découvertes incluent des céramiques, des outils, et des objets de commerce qui illustrent les liens étroits entre Lattara et d'autres cultures méditerranéennes. Aujourd'hui, le site est un lieu de recherche archéologique actif et un musée, le Musée Henri Prades, expose de nombreux artefacts découverts sur place, offrant un aperçu fascinant de l'histoire ancienne de la région.</p>
            </div>
            <div class='image'><img src='images/lattara.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-09-23',
        'html' =>"<div class='article'>
            <div class='image'><img src='images/caune de làrago.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Caune de l'Arago</h3>
                <p>La Caune de l'Arago, située près du village de Tautavel dans les Pyrénées-Orientales, est un site préhistorique de renommée mondiale. Ce site est célèbre pour la découverte de l'Homme de Tautavel, un ancêtre préhistorique daté d'environ 450 000 ans, considéré comme l'un des plus anciens humains connus en Europe. Les fouilles archéologiques menées dans cette grotte ont révélé de nombreux artefacts et ossements qui ont fourni des informations précieuses sur la vie et les habitudes des premiers humains en Europe. La grotte a livré une riche collection d'outils en pierre, des restes de faune, et des traces de foyers, indiquant une occupation humaine prolongée et répétée. Ces découvertes ont permis de mieux comprendre les modes de vie, les techniques de chasse, et les comportements sociaux des hominidés de cette époque. Aujourd'hui, la Caune de l'Arago est un lieu de recherche archéologique actif et un musée sur place, le Musée de Préhistoire de Tautavel, expose de nombreux artefacts et reconstitutions, offrant un aperçu fascinant de la vie préhistorique.</p>
            </div>
        </div>"
    ],    
    [
        'date' => '2023-09-30',
        'html' =>"<div class='article'>
            <div class='texte'>
                <h3>Grotte du Pech Merle</h3>
                <p>La grotte du Pech Merle, située dans le Lot en France, est l'une des grottes ornées les plus célèbres au monde pour ses peintures préhistoriques. Ces peintures, datant du Paléolithique supérieur, sont remarquables pour leur qualité artistique et leur état de conservation. Les représentations incluent des chevaux, des mammouths, des bisons, et des mains humaines, souvent réalisées avec des techniques de peinture sophistiquées utilisant des pigments naturels. La grotte a été découverte en 1922 et est depuis un site clé pour l'étude de l'art préhistorique. Les peintures et les gravures trouvées dans la grotte offrent un aperçu fascinant de la vie et des croyances des humains préhistoriques. Aujourd'hui, la grotte du Pech Merle est ouverte au public, permettant aux visiteurs de découvrir ces œuvres d'art anciennes dans leur contexte d'origine, offrant une expérience immersive dans le passé lointain de l'humanité.</p>
            </div>
            <div class='image'><img src='images/grotte de perh merle.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-10-07',
        'html'=>"<div class='article'>
            <div class='image'><img src='images/filitosa.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Site préhistorique de Filitosa</h3>
                <p>Le site préhistorique de Filitosa, situé en Corse-du-Sud, est l'un des sites mégalithiques les plus célèbres de l'île. Ce site est particulièrement connu pour ses impressionnantes statues-menhirs, des pierres dressées sculptées représentant des figures humaines. Ces statues, datées de l'âge du bronze, sont uniques en leur genre et offrent un aperçu fascinant des pratiques artistiques et culturelles des peuples préhistoriques de la région. Les menhirs de Filitosa sont disposés en alignements et en cercles, suggérant un usage cérémoniel ou rituel. Les sculptures sur ces pierres représentent souvent des armes, des visages, et d'autres motifs, ce qui a conduit les archéologues à spéculer sur leur signification symbolique ou religieuse. Aujourd'hui, Filitosa est un site touristique majeur, attirant des visiteurs du monde entier qui viennent admirer ces mystérieuses sculptures et découvrir l'histoire ancienne de la Corse.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-10-14',
        'html'=>"<div class='article'>
            <div class='texte'>
                <h3>Menhirs de Cauria</h3>
                <p>Les alignements de menhirs de Cauria, situés près de Sartène en Corse-du-Sud, sont parmi les sites mégalithiques les plus impressionnants de l'île. Ces menhirs, disposés en rangées parallèles, datent de l'âge du bronze et sont un exemple frappant de l'architecture préhistorique de la région. Les pierres dressées, certaines atteignant plusieurs mètres de hauteur, sont alignées de manière à former des configurations géométriques qui suggèrent un usage cérémoniel ou astronomique. Le site de Cauria est un lieu de mystère et de fascination, attirant les visiteurs par son ambiance unique et ses paysages spectaculaires. Les menhirs, souvent associés à des légendes locales, offrent un aperçu des pratiques culturelles et spirituelles des peuples préhistoriques de la Corse. Aujourd'hui, le site est accessible au public et constitue une destination majeure pour ceux qui s'intéressent à l'histoire ancienne et aux paysages naturels de la Corse.</p>
            </div>
            <div class='image'><img src='images/menhirs de cauria.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],
    [
        'date' => '2023-10-21',
        'html'=>"<div class='article'>
            <div class='image'><img src='images/Amphitheatre dàrles.jpg' whidth='50%' alt='Photo 1'></div>
            <div class='texte'>
                <h3>Amphithéâtre d'Arles</h3>
                <p>L'amphithéâtre d'Arles, situé dans le cœur de la ville, est l'un des monuments romains les plus impressionnants de France. Construit à la fin du Ier siècle après J.-C., cet amphithéâtre pouvait accueillir jusqu'à 20 000 spectateurs, ce qui en fait l'un des plus grands de la Gaule romaine. Il était utilisé pour des combats de gladiateurs et d'autres spectacles publics, reflétant l'importance d'Arles comme centre culturel et politique durant l'Antiquité. Aujourd'hui, l'amphithéâtre est un site touristique majeur et un lieu de spectacles, notamment pour les courses de taureaux et d'autres événements culturels. Il est également classé au patrimoine mondial de l'UNESCO, ce qui témoigne de son importance historique et architecturale. Les visiteurs peuvent explorer les gradins, les arènes, et les coulisses, offrant une immersion dans l'histoire romaine et l'architecture antique.</p>
            </div>
        </div>"
    ],
    [
        'date' => '2023-10-28',
        'html'=>"<div class='article'>
            <div class='texte'>
                <h3>Théâtre antique de Vienne</h3>
                <p>Le théâtre antique de Vienne, situé en Isère, est l'un des théâtres romains les mieux conservés de France. Construit au début du Ier siècle après J.-C., ce théâtre pouvait accueillir jusqu'à 13 000 spectateurs, témoignant de l'importance culturelle et sociale de Vienne durant l'époque romaine. Il était utilisé pour des représentations théâtrales, des concerts et d'autres événements publics, reflétant la richesse de la vie culturelle de la ville à cette époque. Aujourd'hui, le théâtre antique de Vienne est un site touristique majeur et un lieu de spectacles en plein air, notamment pour le célèbre festival de jazz de Vienne. Les visiteurs peuvent explorer les gradins, la scène, et les coulisses, offrant une immersion dans l'histoire romaine et l'architecture antique. Le théâtre est également classé au patrimoine historique, ce qui témoigne de son importance et de sa valeur culturelle.</p>
            </div>
            <div class='image'><img src='images/theatre de vienne.jpg' whidth='50%' alt='Photo 1'></div>
        </div>"
    ],

];


    
//Trie des articles par date
usort($articles, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

//Si non connecter on garde suelement les 3 plus recents
if (!$email) {
    $articles = array_slice($articles, 0, 3);
}

?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Archeo IT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <!-- <main> -->

    <?php
    //Recuperer les 3 derniers articles
    $topArticles = array_slice($articles, 0, 3);
    ?>

    <div class="bandeau">
        <?php foreach ($topArticles as $index => $article): ?>
            <?php
            // Extraction du titre depuis la balise <h3>
            $title = 'Article sans titre'; // fallback
            if (preg_match('/<h3>(.*?)<\/h3>/', $article['html'], $matches)) {
                $title = $matches[1];
            }
            ?>
            <div class="section">
                <a href="#article<?= $index ?>"><?= htmlspecialchars($title) ?></a>
            </div>
        <?php endforeach; ?>

        <?php if (!$email): ?>
            <div class="voir-plus">
                <a href="seconnecter.php" class="btn_transparent"><br>Voir +</a>
            </div>
        <?php endif; ?>
    </div>

    <div class="definition-container">
        <div class="definition">
            <h3>L'Archéologie, qu'est-ce-que c'est ? <br><br></h3>
            <p>L'archeologie est une science qui étudie les traces laissées pas les êtres humains dans le passé, comme des objets, des outils, des bâtiments, des sépulturesou des ossements, afin de comprendre comment vivaient les populations anciennes.  <br>
            L'archéologie s'intéresse à toutes les periodes de l'histoire, depuis la préhistoire jusqu'a des époques plus recentes, et concerne toutes les régions du monde. <br>
            Les archéologues  mènent des fouilles sur des sites souvent enfois sous terre ou sous l'eau, puis analysent les vestiges découvert pour reconstituer les modes de vie, les croyances, les échanges ou encore l'organisation des sociétés. <br>
            L'archéologie est essentielle pour mieux connaitre notre passé, surtout quand il s'agit de peuple anciens qui n'ont pas laissé de textes ou d'écrit. <br>
            Elle permet aussi de préserver le patrimoine culturel, de protéger les sites historiques et de transmettre la mémoire des civilisation dispartue aux générations futures. En observant l'évolution des sociétés humaines, elle nous aide à mieux comprendre le monde d'aujourd'hui.</p>
        </div>

        <div class="cartedef"><img src="carte (1).jpg" alt="carte"></div>

    </div>
    <div class="separation"></div>
    <div class="video-container">

        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
        <iframe src="https://geo.dailymotion.com/player.html?video=x5i4ajl"
        style="width:50%; height:50%; position:absolute; left:400px; top:100px; overflow:hidden; border:none;"
        allowfullscreen
        title="Dailymotion Video Player"
        allow="web-share">
        </iframe>
        <div class="texte-video">
        <p>Venez visitez les chantiers de fouilles archéologiques en France, vous verrez les outils de fouille utilisés, les techeniques de recherche ainsi que la valeur des monument/outils historique.</p>
        </div>
        </div>

    </div>
    <div class="separation"></div>

    <div class="carousel-container">

        <div class="titre-carousel majuscule text-gras">
            <h2>découvrez nos lieux de fouille</h2>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="carouselle/ChauvetC(1).jpg" class="d-block w-100" alt="slide 2">
                </div>
                <div class="carousel-item">
                <img src="carouselle/LascauxC(1).jpg" class="d-block w-100" alt="slide 3">
                </div>
                <div class="carousel-item">
                <img src="carouselle/SoyonC(1).jpg" class="d-block w-100" alt="slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="separation"></div>

    <div class="outil-container">
        <div class="titre-outil majuscule text-gras">
            <h2>les indispensables d'un archéologue</h2>
        </div>

        <div class="outil">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col ">
                    <div class="card h-100">
                    <img src="images/photoOutils/pioche.jpg" class="card-img-top" alt="pinceaux">
                    <div class="card-body">
                        <h5 class="card-title">Les Outils Indispensables de l'Archéologue</h5>
                        <p class="card-text">Cette collection d'outils de précision est utilisée pour le nettoyage et l'analyse fine des artefacts. Les outils en métal avec des pointes variées permettent de gratter délicatement la terre et les dépôts des objets découverts. Les brosses, notamment la brosse métallique, sont employées pour enlever la poussière et les particules sans rayer ou abîmer les surfaces fragiles. Ces instruments sont indispensables pour révéler les détails des artefacts et préparer leur étude en laboratoire.</p>
                    </div>
                    </div>
                </div>
                <div class="col carte">
                    <div class="card h-100">
                    <img src="images/photoOutils/minioutils.jpg" class="card-img-top" alt="petit outils">
                    <div class="card-body">
                        <h5 class="card-title">Les Instruments de Précision pour l'Étude des Artefacts</h5>
                        <p class="card-text">Cette collection d'outils de précision est utilisée pour le nettoyage et l'analyse fine des artefacts. Les outils en métal avec des pointes variées permettent de gratter délicatement la terre et les dépôts des objets découverts. Les brosses, notamment la brosse métallique, sont employées pour enlever la poussière et les particules sans rayer ou abîmer les surfaces fragiles. Ces instruments sont indispensables pour révéler les détails des artefacts et préparer leur étude en laboratoire.</p>
                    </div>
                    </div>
                </div>
                <div class="col carte">
                    <div class="card h-100">
                    <img src="images/photoOutils/outils_pinceaux.jpg" class="card-img-top" alt="gros outils">
                    <div class="card-body">
                        <h5 class="card-title">Les Pinceaux de Nettoyage pour la Préservation des Découvertes</h5>
                        <p class="card-text">Ces pinceaux sont spécialement conçus pour le nettoyage des artefacts archéologiques. Les poils doux permettent de brosser délicatement la poussière et les débris des objets sans les endommager. Les différentes tailles et formes des pinceaux permettent de travailler sur des artefacts de toutes tailles, des plus grands aux plus petits et délicats. Ces outils sont essentiels pour la préservation et la préparation des artefacts avant leur analyse et leur exposition.</p>
                    </div>
                    </div>
                </div>
            
            </div>

        </div>
    </div>

    <div class="separation"></div>

    <div class="article-contenaire">
        <?php 
        foreach ($articles as $index => $articles): ?>
            <div id="article<?= $index ?>">
                <?= $articles['html'] ?>
            </div>
            <!-- echo $articles['html']; -->
    
        
        <?php endforeach; ?>   

        <?php if (!$email) : ?>
            <div class="voirautre"><p ><a href="seconnecter.php"><br>Connectez vous pour lire tous les articles !</a></p></div>
        <?php endif; ?>
    </div>



    <!-- </main> -->
<?php
    include 'footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        

</body>

</html>