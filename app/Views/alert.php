<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertes et Notifications - Système Agricole</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/alert.css">
</head>
<body>
    <div class="container py-4">
        <!-- En-tête -->
        <header class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 text-success mb-0"><i class="bi bi-bell"></i> Alertes et Notifications</h1>
                <p class="text-muted mb-0">Gérez vos alertes agricoles et préférences de notification</p>
            </div>
            <div class="d-flex align-items-center">
                <span class="badge bg-danger me-2">3 non lues</span>
                <button class="btn btn-outline-success btn-sm">
                    <i class="bi bi-gear"></i> Préférences
                </button>
            </div>
        </header>

        <div class="row">
            <!-- Colonne principale : Liste des alertes -->
            <div class="col-lg-8">
                <!-- Cartes statistiques -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="stats-card p-3 text-center">
                            <h5 class="mb-0">12</h5>
                            <small>Alertes ce mois</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stats-card p-3 text-center">
                            <h5 class="mb-0">3</h5>
                            <small>Non lues</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stats-card p-3 text-center">
                            <h5 class="mb-0">5</h5>
                            <small>Alertes météo</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="stats-card p-3 text-center">
                            <h5 class="mb-0">7</h5>
                            <small>Tâches en retard</small>
                        </div>
                    </div>
                </div>

                <!-- Filtres -->
                <div class="filter-section p-3 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="d-flex flex-wrap align-items-center">
                                <span class="me-2 mb-2">Filtrer par :</span>
                                <div class="btn-group me-2 mb-2" role="group">
                                    <input type="radio" class="btn-check" name="filter-type" id="filter-all" autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="filter-all">Toutes</label>

                                    <input type="radio" class="btn-check" name="filter-type" id="filter-weather" autocomplete="off">
                                    <label class="btn btn-outline-success" for="filter-weather">Météo</label>

                                    <input type="radio" class="btn-check" name="filter-type" id="filter-tasks" autocomplete="off">
                                    <label class="btn btn-outline-success" for="filter-tasks">Tâches</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-sort-down"></i> Trier
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Plus récentes</a></li>
                                    <li><a class="dropdown-item" href="#">Plus anciennes</a></li>
                                    <li><a class="dropdown-item" href="#">Par priorité</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liste des alertes -->
                <div class="mb-4">
                    <h2 class="h5 mb-3">Alertes récentes</h2>
                    
                    <!-- Alerte 1 -->
                    <div class="card notification-card alert-critical mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="unread-indicator me-2"></span>
                                        <h5 class="card-title mb-0">Alerte Gel Imminent</h5>
                                        <span class="badge badge-critical ms-2">Critique</span>
                                    </div>
                                    <p class="card-text">Températures attendues sous 0°C dans la nuit de vendredi à samedi. Risque de gel pour les cultures sensibles.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-3"><i class="bi bi-clock"></i> Il y a 2 heures</small>
                                        <small class="text-muted"><i class="bi bi-geo"></i> Parcelle Nord</small>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i> Marquer comme lue</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Supprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-sliders"></i> Paramètres</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alerte 2 -->
                    <div class="card notification-card alert-warning mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="unread-indicator me-2"></span>
                                        <h5 class="card-title mb-0">Tâche en Retard</h5>
                                        <span class="badge badge-warning ms-2">Important</span>
                                    </div>
                                    <p class="card-text">La fertilisation de la parcelle Sud n'a pas été effectuée à la date prévue.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-3"><i class="bi bi-clock"></i> Hier, 15:24</small>
                                        <small class="text-muted"><i class="bi bi-list-task"></i> Entretien</small>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i> Marquer comme lue</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Supprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-sliders"></i> Paramètres</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alerte 3 -->
                    <div class="card notification-card alert-info mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="unread-indicator me-2"></span>
                                        <h5 class="card-title mb-0">Rappel d'Irrigation</h5>
                                        <span class="badge badge-info ms-2">Information</span>
                                    </div>
                                    <p class="card-text">Le système d'irrigation de la section Ouest doit être vérifié avant la prochaine utilisation.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-3"><i class="bi bi-clock"></i> Lundi, 09:15</small>
                                        <small class="text-muted"><i class="bi bi-droplet"></i> Irrigation</small>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i> Marquer comme lue</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Supprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-sliders"></i> Paramètres</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alerte 4 (déjà lue) -->
                    <div class="card notification-card alert-success mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="card-title mb-0">Semis Terminé</h5>
                                        <span class="badge badge-success ms-2">Réussi</span>
                                    </div>
                                    <p class="card-text">Les semis de blé dans la parcelle Est ont été complétés avec succès.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-3"><i class="bi bi-clock"></i> Samedi, 14:30</small>
                                        <small class="text-muted"><i class="bi bi-seed"></i> Semis</small>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-check2"></i> Marquer comme non lue</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Supprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-sliders"></i> Paramètres</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Colonne latérale : Préférences et historique -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 20px;">
                    <!-- Préférences de notifications -->
                    <div class="card mb-4">
                        <div class="card-header bg-success text-white">
                            <h2 class="h5 mb-0"><i class="bi bi-sliders"></i> Préférences de notifications</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Types d'alertes</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gelAlert" checked>
                                    <label class="form-check-label" for="gelAlert">Alertes gel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pluieAlert" checked>
                                    <label class="form-check-label" for="pluieAlert">Alertes pluie</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ventAlert">
                                    <label class="form-check-label" for="ventAlert">Alertes vent fort</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="taskAlert" checked>
                                    <label class="form-check-label" for="taskAlert">Tâches en retard</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="systemAlert" checked>
                                    <label class="form-check-label" for="systemAlert">Alertes système</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold">Moyens de notification</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pushNotif" checked>
                                    <label class="form-check-label" for="pushNotif">Notifications push</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="smsNotif">
                                    <label class="form-check-label" for="smsNotif">SMS</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                                    <label class="form-check-label" for="emailNotif">Email</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold">Fréquence des rappels</label>
                                <select class="form-select">
                                    <option>Immédiat</option>
                                    <option>Quotidien</option>
                                    <option selected>Hebdomadaire</option>
                                    <option>Mensuel</option>
                                </select>
                            </div>
                            
                            <button class="btn btn-success w-100">Sauvegarder les préférences</button>
                        </div>
                    </div>

                    <!-- Historique des alertes -->
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <h2 class="h5 mb-0"><i class="bi bi-clock-history"></i> Historique des alertes</h2>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab">Cette semaine</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab">Ce mois</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-week" role="tabpanel">
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Alerte de pluie</h6>
                                                <small class="text-muted">Mercredi</small>
                                            </div>
                                            <p class="mb-1 small">Précipitations attendues: 15mm</p>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Rappel d'entretien</h6>
                                                <small class="text-muted">Mardi</small>
                                            </div>
                                            <p class="mb-1 small">Vérification du système d'irrigation</p>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">Semis complétés</h6>
                                                <small class="text-muted">Lundi</small>
                                            </div>
                                            <p class="mb-1 small">Parcelle Nord semis terminé</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-month" role="tabpanel">
                                    <p class="text-center text-muted py-3">Chargement de l'historique du mois...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>