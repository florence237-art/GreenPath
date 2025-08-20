<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Suivi Météo Agricole</title>
</head>
<body class="bg-light">
    <div class="container py-4">
        <!-- En-tête -->
        <header class="">
            <h1 class="h3 text-success"><i class="bi bi-cloud-sun">Suivi Météo Agricole</i></h1>
            <div class="d-flex align-items-center">
                <div class="form-check form-switch me-3">
                    <input type="checkbox" class="form-check-input" id="notifToggle" checked>
                    <label class="form-check-label"" for="notifToggle">Notifications</label>
                </div>
                <button class="btn btn-outline-success btn-sm"><i class="bi bi-gear"></i> Préférences</button>
            </div>
        </header>
        <div class="row">
            <!-- Colonne principale : Prévisions météo -->
            <div class="col-lg-8">
                <!-- Alertes en cours -->
                <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                    </div>
                    <h5 class="alert-heading mb-1">Alerte Gel</h5>
                    <p class="mb-0">Risque de gel nocturne dans la nuit de vendredi à samedi. Températures attendues: -2°C.</p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

        <!-- Prévisions sur 5 jours -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0"><i class="bi bi-calendar-week"></i> Prévisions Météo sur 5 Jours</h2>
            </div>
            <div class="card-body p-0">
                <div class="row g-0 text-center">
                    <!-- Jour 1 -->
                     <div class="col weather-card">
                        <div class="p-3 border-end">
                            <h5 class="mb-1">Aujourd'hui</h5>
                            <p class="text-muted mb-2">15 Sept</p>
                            <i class="bi bi-sun text-warning fs-1 mb-2"></i>
                            <div class="temperature-high mb-1">22°C</div>
                            <div class="temperature-low mb-2">12°C</div>
                            <div><i class="bi bi-droplet"></i> 10%</div>
                        </div>
                     </div>
                      <!-- Jour 2 -->
                     <div class="col weather-card">
                        <div class="p-3 border-end">
                            <h5 class="mb-1">Demain</h5>
                            <p class="text-muted mb-2">16 Sept</p>
                            <i class="bi bi-cloud-sun text-secondary fs-1 mb-2"></i>
                            <div class="temperature-high mb-1">19°C</div>
                            <div class="temperature-low mb-2">10°C</div>
                            <div><i class="bi bi-droplet"></i> 30%</div>
                        </div>
                     </div>
                      <!-- Jour 3 -->
                     <div class="col weather-card">
                        <div class="p-3 border-end">
                            <h5 class="mb-1">Jeu.</h5>
                            <p class="text-muted mb-2">17 Sept</p>
                            <i class="bi bi-cloud text-info fs-1 mb-2"></i>
                            <div class="temperature-high mb-1">15°C</div>
                            <div class="temperature-low mb-2">8°C</div>
                            <div><i class="bi bi-droplet"></i> 80%</div>
                        </div>
                     </div>
                      <!-- Jour 4 -->
                     <div class="col weather-card">
                        <div class="p-3 border-end">
                            <h5 class="mb-1">Ven.</h5>
                            <p class="text-muted mb-2">18 Sept</p>
                            <i class="bi bi-cloud-snow text-info fs-1 mb-2"></i>
                            <div class="temperature-high mb-1">5°C</div>
                            <div class="temperature-low mb-2">-2°C</div>
                            <div><i class="bi bi-droplet"></i> 40%</div>
                        </div>
                     </div>
                      <!-- Jour 5 -->
                     <div class="col weather-card">
                        <div class="p-3 border-end">
                            <h5 class="mb-1">Sam.</h5>
                            <p class="text-muted mb-2">19 Sept</p>
                            <i class="bi bi-brightness-high text-warning fs-1 mb-2"></i>
                            <div class="temperature-high mb-1">10°C</div>
                            <div class="temperature-low mb-2">3°C</div>
                            <div><i class="bi bi-droplet"></i> 5%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Recommandations -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h2 class="h5 mb-0"><i class="bi bi-lightbulb"></i> Recommandations</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="p-3 rounded recommendation-card">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-droplet-fill text-primary me-2"></i>
                                    <h5 class="mb-0">Irrigation</h5>
                                </div>
                                <p class="mb-0">Arrosage recommandé demain matin avant 10h. Prévisions de pluie faible dans 3 jours.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="p-3 rounded recommendation-card">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-shield-check text-success me-2"></i>
                                    <h5 class="mb-0">Protection</h5>
                                </div>
                                <p class="mb-0">Protégez les cultures sensibles jeudi soir. Risque de gel dans la nuit de vendredi.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="p-3 rounded recommendation-card">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-tree-fill text-success me-2"></i>
                                    <h5 class="mb-0">Semis</h5>
                                </div>
                                <p class="mb-0">Conditions favorables pour les semis de blé à partir de samedi.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="p-3 rounded recommendation-card">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-hourglass-split text-warning me-2"></i>
                                    <h5 class="mb-0">Récolte</h5>
                                </div>
                                <p class="mb-0">Avancez la récolte des cultures fragiles avant jeudi. Pluie prévue jeudi après-midi.</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>

    <!-- Colonne latérale : Alertes et Notifications -->
    <div class="col-lg-4">
        <div class="sticky-top" style="top: 20px;">
            <!-- Alertes en cours -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h2 class="h5 mb-0"><i class="bi bi-bell"></i> Alertes en cours</h2>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item alert-critical">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Alerte Gel</h5>
                                <small>Il y a 2h</small>
                            </div>
                            <p class="mb-1">Vendredi nuit: -2°C attendus</p>
                            <small class="text-danger"><i class="bi bi-exclamation-circle"></i> Critique</small>
                        </div>
                        <div class="list-group-item alert-critical">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Avertissement Pluie</h5>
                                <small>Il y a 5h</small>
                            </div>
                            <p class="mb-1">Jeudi: 15mn de pluie attendus</p>
                            <small class="text-danger"><i class="bi bi-info-circle"></i> Modéré</small>
                        </div>
                        <div class="list-group-item alert-critical">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Rappel d'arrosage</h5>
                                <small>Hier</small>
                            </div>
                            <p class="mb-1">Section Nord nécessite irrigation</p>
                            <small class="text-danger"><i class="bi bi-exclamation-circle"></i> Information</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Préférences de notifications -->
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2 class="h5 mb-0"><i class="bi bi-sliders"></i> Préférences de notifications</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Types d'alertes</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="gelAlert" checked>
                            <label for="gelAlert" class="form-check-label">Alertes gel</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="pluieAlert" checked>
                            <label for="pluieAlert" class="form-check-label">Alertes pluie</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="ventAlert" checked>
                            <label for="ventAlert" class="form-check-label">Alertes vent fort</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Moyens de notification</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="pushNotif" checked>
                            <label for="pushNotif" class="form-check-label">Notifications push</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="smsNotif" checked>
                            <label for="smsNotif" class="form-check-label">SMS</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="emailNotif" checked>
                            <label for="emailNotif" class="form-check-label">Email</label>
                        </div>
                    </div>

                    <button class="btn btn-success w-100">Sauvegarder les préférences</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>