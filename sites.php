
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Sites_Archeo_IT</title>
  <link rel="stylesheet" href="Anicet.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

</head>
<body>
  <header>
        <?php include 'header.php'; ?>
  </header>
  
  <div id="map"></div>
  <div class="cards-container" id="cards"></div>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script>
    const map = L.map('map').setView([46.6, 2.2], 6);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const sites = [
      {
        id: 'alesia',
        title: 'Alésia',
        description: 'Site de la célèbre bataille entre Jules César et Vercingétorix.',
        lat: 47.5372,
        lng: 4.5006,
        img: 'images/alesia.jpg',
      },
      {
        id: 'bibracte',
        title: 'Bibracte',
        description: 'Ancienne capitale des Éduens, oppidum gaulois sur le mont Beuvray.',
        lat: 46.9267,
        lng: 4.045,
        img: 'images/bibracta.jpg',
        
      },
      {
        id: 'glanum',
        title: 'Glanum',
        description: 'Ville antique située près de Saint-Rémy-de-Provence.',
        lat: 43.7686,
        lng: 4.8317,
        img: 'images/glanum.jpg',
             
      },
      {
      id: 'lascaux',
      title: 'Grotte de Lascaux',
      description: 'Célèbre pour ses peintures préhistoriques.',
      lat: 45.0533,
      lng: 1.1667,
      img: 'images/grotte de lascaux.jpg',
      
    },
    {
      id: 'chauvet',
      title: 'Grotte Chauvet',
      description: 'Abrite des peintures rupestres parmi les plus anciennes connues.',
      lat: 44.3872,
      lng: 4.4156,
      img: 'images/grotte de chauvet.jpg',
      
    },
    {
      id: 'cognac',
      title: 'Cognac (Charente)',
      description: 'Site archéologique au pied du château de Cognac, révélant des occupations médiévales.',
      lat: 45.7,
      lng: -0.3,
      img: 'images/cognac(charente).jpg',
    },
    {
      id: 'abbeville',
      title: 'Abbeville (Somme)',
      description: 'Découverte de restes de grands herbivores et d’artefacts datant de 600 000 ans.',
      lat: 50.1066,
      lng: 1.8351,
      img: 'images/abbeville.jpg',
    },
    {
      id: 'bernot',
      title: 'Bernot (Aisne)',
      description: 'Zone d’habitat du Bronze final avec céramiques et objets en bronze.',
      lat: 49.8,
      lng: 3.45,
      img: 'images/bernot.jpg',
    },
    {
        id: "marseille",
        title: "Marseille (Bouches-du-Rhône)",
        lat: 43.2965,
        lng: 5.3698,
        img: "images/marseille(bouches-du-Rhône).jpg",
        description: "Ancienne cité phocéenne fondée par les Grecs.",
        
      },
      {
        id: "illiers",
        title: "Illiers-Combray (Eure-et-Loir)",
        lat: 48.45,
        lng: 1.25,
        img: "images/illiers-combray(eure et loire).jpg",
        description: "Traces de peuplement antique.",
        
      },
      {
        id: "mainvilliers",
        title: "Mainvilliers (Eure-et-Loir)",
        lat: 48.45,
        lng: 1.45,
        img: "images/mainvilliers(eure et loire).jpg",
        description: "Zone de découvertes gallo-romaines.",
        
      },
      {
        id: "pernant",
        title: "Pernant (Aisne)",
        lat: 49.4,
        lng: 3.25,
        img: "images/pernant(Aisne).jpg",
        description: "Vestiges d’occupations préhistoriques.",
              
      },
      {
        id: "valdesmarais",
        title: "Val-des-Marais (Marne)",
        lat: 48.883,
        lng: 4.15,
        img: "images/val des marais.jpg",
        description: "Site archéologique rural du Grand Est.",
      
      },
      {
        id: "douvrin",
        title: "Douvrin (Pas-de-Calais)",
        lat: 50.52,
        lng: 2.77,
        img: "images/douvrin.jpg",
        description: "Découvertes d’habitations anciennes.",
              
      },
      {
        id: "limoges",
        title: "Limoges (Haute-Vienne)",
        lat: 45.83,
        lng: 1.26,
        img: "images/limoges,.jpg",
        description: "Capitale gallo-romaine régionale.",
              
      },
      {
        id: "soyons",
        title: "Soyons (Ardèche)",
        lat: 44.91,
        lng: 4.85,
        img: "images/soyons.jpg",
        description: "Grottes préhistoriques et oppidum.",
             
      },
      {
        id: "pfulgriesheim",
        title: "Pfulgriesheim (Bas-Rhin)",
        lat: 48.64,
        lng: 7.6,
        img: "images/pfulgrieheim.jpg",
        description: "Découvertes gallo-romaines dans le Grand Est.",
        
      },
      {
        id: "avranches",
        title: "Avranches (Manche)",
        lat: 48.68,
        lng: -1.36,
        img: "images/avranches.jpg",
        description: "Ville historique et religieuse ancienne.",
        
      },
      {
        id: "reims",
        title: "Reims (Marne)",
        lat: 49.26,
        lng: 4.03,
        img: "images/reims.jpg",
        description: "Capitale des Gaules au IIIe siècle.",
            
      },
      {
        id: "pierrepercee",
        title: "Pierre-Percée (Meurthe-et-Moselle)",
        lat: 48.48,
        lng: 6.92,
        img: "images/pierre percee, (meurthe et moselle).jpg",
        description: "Site médiéval et vestiges anciens.",
      
      },
      {
        id: "saintmartin",
        title: "Saint-Martin-la-Garenne (Yvelines)",
        lat: 49.05,
        lng: 1.7,
        img: "images/saint martin la garenne (yvelines).jpg",
        description: "Commune en bord de Seine avec patrimoine.",
      
      },
      {
        id: "vannes",
        title: "Vannes (Morbihan)",
        lat: 47.66,
        lng: -2.75,
        img: "images/vannes()mobihan.jpg",
        description: "Ville gallo-romaine fortifiée.",
             
      },
      {
        id: "levroux",
        title: "Levroux (Indre)",
        lat: 46.97,
        lng: 1.6,
        img: "images/levroux.jpg",
        description: "Oppidum gaulois et fouilles gallo-romaines.",
              
      },
    {
      id: 'lattes',
      title: 'Lattara',
      description: 'Ancienne ville portuaire étrusque et romaine.',
      lat: 43.5667,
      lng: 3.9000,
      img: 'images/lattara.jpg',
          
    },
    {
      id: 'tautavel',
      title: 'Caune de l\'Arago',
      description: 'Site préhistorique célèbre pour la découverte de l\'Homme de Tautavel.',
      lat: 42.8000,
      lng: 2.7833,
      img: 'images/caune de làrago.jpg',
      
    },
    {
      id: 'pechmerle',
      title: 'Grotte du Pech Merle',
      description: 'Grotte ornée avec des peintures préhistoriques.',
      lat: 44.4833,
      lng: 1.6167,
      img: 'images/grotte de perh merle.jpg',
      
    },
    {
      id: 'filitosa',
      title: 'Site préhistorique de Filitosa',
      description: 'Site mégalithique en Corse avec des statues-menhirs.',
      lat: 41.7000,
      lng: 8.9000,
      img: 'images/filitosa.jpg',
      
    },
    {
      id: 'sartene',
      title: 'Menhirs de Cauria',
      description: 'Alignements de menhirs près de Sartène en Corse.',
      lat: 41.6000,
      lng: 8.9333,
      img: 'images/menhirs de cauria.jpg',

    },
    {
      id: 'arles',
      title: 'Amphithéâtre d\'Arles',
      description: 'Grand amphithéâtre romain au cœur de la ville.',
      lat: 43.6766,
      lng: 4.6278,
      img: 'images/Amphitheatre dàrles.jpg',
      
    },
    {
      id: 'vienne',
      title: 'Théâtre antique de Vienne',
      description: 'Théâtre romain bien conservé en Isère.',
      lat: 45.5167,
      lng: 4.8667,
      img: 'images/theatre de vienne.jpg',
      
    }
    ];

    sites.forEach(site => {
      const marker = L.marker([site.lat, site.lng]).addTo(map);
      marker.bindPopup(
        `<strong>${site.title}</strong><br>
        <img src="images/${site.img}" width="200"><br>
        <em>${site.description}</em>`
      );

      const card = document.createElement('div');
      card.className = 'site-card';
      card.id = `${site.id}-card`;
      card.innerHTML = `
  <img src="${site.img}" alt="${site.title}" style="width:100%; height:150px; object-fit:cover; border-radius:8px 8px 0 0;">
  <div style="padding: 10px;">
    <h3>${site.title}</h3>
    <p>${site.description}</p>
   
  </div>
`;
      document.getElementById('cards').appendChild(card);

      card.addEventListener('click', () => {
        map.setView([site.lat, site.lng], 5);
        marker.openPopup();
      document.getElementById('map').scrollIntoView({ behavior: 'smooth' });

      });
    });
  </script>

  <?php
    include 'footer.php';
?>
</body>
</html>
