// Gestion des Parcelles
const parcelles = [];

document.getElementById('btn-ajouter-parcelle').addEventListener('click', () => {
    const nom = prompt("Nom de la parcelle:");
    const culture = prompt("Culture en cours:");
    const superficie = prompt("Superficie (en m²):");

    if (nom && culture && superficie) {
        const parcelle = { nom, culture, superficie };
        parcelles.push(parcelle);
        afficherParcelles();
    }
});

function afficherParcelles() {
    const listeParcelles = document.getElementById('liste-parcelles');
    listeParcelles.innerHTML = '';

    parcelles.forEach((parcelle, index) => {
        const li = document.createElement('li');
        li.textContent = `${parcelle.nom} - ${parcelle.culture} - ${parcelle.superficie} m²`;
        li.addEventListener('click', () => {
            alert(`Détails de la parcelle:\nNom: ${parcelle.nom}\nCulture: ${parcelle.culture}\nSuperficie: ${parcelle.superficie} m²`);
        });
        listeParcelles.appendChild(li);
    });
}

// Gestion des Tâches
const taches = [];

document.getElementById('btn-ajouter-tache').addEventListener('click', () => {
    const description = prompt("Description de la tâche:");
    const parcelle = prompt("Nom de la parcelle associée:");
    const echeance = prompt("Échéance (JJ/MM/AAAA):");

    if (description && parcelle && echeance) {
        const tache = { description, parcelle, echeance, termine: false };
        taches.push(tache);
        afficherTaches();
    }
});

function afficherTaches() {
    const listeTaches = document.getElementById('liste-taches');
    listeTaches.innerHTML = '';

    taches.forEach((tache, index) => {
        const li = document.createElement('li');
        li.textContent = `${tache.description} - Parcelle: ${tache.parcelle} - Échéance: ${tache.echeance}`;
        li.addEventListener('click', () => {
            tache.termine = !tache.termine;
            afficherTaches();
        });
        if (tache.termine) {
            li.style.textDecoration = 'line-through';
            li.style.color = 'gray';
        }
        listeTaches.appendChild(li);
    });
}
