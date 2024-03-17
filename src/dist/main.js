// const articles = [
//         {
//             article: "KIT POTION",
//             info: "Kit médical de secours militaire.",
//             prix: "123 euros",
//             imageUrl: "../src/assets/kitMiliMedUkraine.jpg",
//             altImageText: "Kit Militaire"
//         },
//         {
//             article: "KIT DYSENTERIE",
//             info: "Médicaments pour : Inflammation intestinale grave; maladie infectieuse et contagieuse provoquée par divers agents pathogènes et caractérisée par des diarrhées violentes avec présence de sang, de pus et de mucus..",
//             prix: "456 euros",
//             imageUrl: "../src/assets/medKitSoviet.avif",
//             altImageText: "Kit medical sovietique"
//         },
//         {
//             article: "KIT CHIRURGIE",
//             info: "Médicaments pour : Inflammation intestinale grave; maladie infectieuse et contagieuse provoquée par divers agents pathogènes et caractérisée par des diarrhées violentes avec présence de sang, de pus et de mucus..",
//             prix: "789 euros",
//             imageUrl: "../src/assets/kitChirurgieMili.jpeg",
//             altImageText: "Kit Chirurgie"
//         },
//         {
//             article: "EQUIPE TOUBIB",
//             info: "Spécialiste de médecins généralistes.",
//             prix: "123456 euros",
//             imageUrl: "../src/assets/lesMedecins.webp",
//             altImageText: "Equipe toubib"
//         },
//         {
//             article: "Spécialiste 'CHIRURGIE'",
//             info: "Le rôle d'un chirurgien peut varier en fonction de plusieurs facteurs, notamment le domaine de spécialisation, le lieu de travail et les pratiques médicales spécifiques.",
//             prix: "7894 euros",
//             imageUrl: "../src/assets/doc1.jpg",
//             altImageText: "chirurgien"
//         },
//         {
//             article: "Spécialiste PSYCHOLOGIE",
//             info: "Un spécialiste en psychologie est un professionnel de la santé mentale formé pour évaluer, diagnostiquer et traiter une variété de problèmes psychologiques et émotionnels. Ils peuvent travailler dans différents domaines, tels que la santé mentale générale, la thérapie de couple et familiale, la toxicomanie, les troubles alimentaires, le stress post-traumatique, etc.",
//             prix: "123563 euros",
//             imageUrl: "../src/assets/doc3bis.jpg",
//             altImageText: "Psychologue"
//         },
//     ];

fetch("config/data.json.php")
    .then(response => response.json())
    .then(data => {
        data.forEach(article => 
            {   
                // console.log(data);
                let div = document.getElementById('cardProduct');

                // Créer les éléments HTML pour la carte
                let cardDiv = document.createElement('div');
                cardDiv.className = "col-lg-4 mb-5";
            
                let cardInnerDiv = document.createElement('div');
                cardInnerDiv.className = "card h-100 shadow border-0";
            
                let cardImage = document.createElement('img');
                cardImage.className = "card-img-top";
                cardImage.src = article.image;
                cardImage.alt = article.altImageText;
            
                let cardBodyDiv = document.createElement('div');
                cardBodyDiv.className = "card-body p-4";
            
                let badgeDiv = document.createElement('div');
                badgeDiv.className = "badge bg-primary bg-gradient rounded-pill mb-2";
                badgeDiv.textContent = "Nouveau";
            
                let titleLink = document.createElement('a');
                titleLink.className = "text-decoration-none link-dark stretched-link";
                titleLink.href = "total-product.php"; //HREF a modifié et dynamiser par PHP selon les ID
                titleLink.innerHTML = `<h5 class="card-title mb-3">${article.name}</h5>`;
            
                let infoPara = document.createElement('p');
                infoPara.className = "card-text mb-0";
                infoPara.textContent = article.info;
            
                let priceDiv = document.createElement('div');
                priceDiv.className = "m-2 text-success";
                priceDiv.innerHTML = `<div class="fw-bold">Prix : ${article.price}</div>`;
            
                // Assembler les éléments de la carte
                cardBodyDiv.appendChild(badgeDiv);
                cardBodyDiv.appendChild(titleLink);
                cardBodyDiv.appendChild(infoPara);
                cardBodyDiv.appendChild(priceDiv);
            
                cardInnerDiv.appendChild(cardImage);
                cardInnerDiv.appendChild(cardBodyDiv);
            
                cardDiv.appendChild(cardInnerDiv);
            
                // Ajouter la carte au conteneur principal
                div.appendChild(cardDiv);
            }
        );
    })
    .catch(error => console.error('Erreur : ', error))




