<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Application Agricole</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="auth-container">
                    <div class="row g-0">
                        <!-- Colonne de formulaire -->
                        <div class="col-lg-7">
                            <div class="auth-header">
                                <h1><i class="bi bi-tree-fill"></i> GreenPath</h1>
                                <p class="mb-0">Votre compagnon agricole intelligent</p>
                            </div>
                            
                            <ul class="nav nav-tabs auth-tabs" id="authTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Connexion</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Inscription</button>
                                </li>
                            </ul>
                            
                            <div class="tab-content auth-form" id="authTabsContent">
                                <!-- Formulaire de connexion -->
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    <h2 class="mb-4">Content de vous revoir</h2>
                                    <form>
                                        <div class="mb-3">
                                            <label for="loginEmail" class="form-label">Email ou Téléphone</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input type="text" class="form-control" id="loginEmail" placeholder="votre@email.com ou 0612345678">
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="loginPassword" class="form-label">Mot de passe</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                                <input type="password" class="form-control" id="loginPassword" placeholder="Votre mot de passe">
                                                <span class="password-toggle" id="toggleLoginPassword">
                                                    <i class="bi bi-eye"></i>
                                                </span>
                                            </div>
                                            <div class="form-text">
                                                <a href="#forgotPasswordModal" data-bs-toggle="modal">Mot de passe oublié ?</a>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 mb-3">Se connecter</button>
                                        
                                        <div class="divider">ou</div>
                                        
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-google me-2"></i> Continuer avec Google
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-facebook me-2"></i> Continuer avec Facebook
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- Formulaire d'inscription -->
                                <div class="tab-pane fade" id="register" role="tabpanel">
                                    <h2 class="mb-4">Rejoignez-nous</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName" class="form-label">Prénom</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="Votre prénom">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName" class="form-label">Nom</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Votre nom">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="registerEmail" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="email" class="form-control" id="registerEmail" placeholder="votre@email.com">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Téléphone (optionnel)</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                                <input type="tel" class="form-control" id="phone" placeholder="0612345678">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="registerPassword" class="form-label">Mot de passe</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                                <input type="password" class="form-control" id="registerPassword" placeholder="Créez un mot de passe">
                                                <span class="password-toggle" id="toggleRegisterPassword">
                                                    <i class="bi bi-eye"></i>
                                                </span>
                                            </div>
                                            <div class="form-text">8 caractères minimum avec chiffres et lettres</div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe">
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="termsAgree">
                                            <label class="form-check-label" for="termsAgree">J'accepte les <a href="#">conditions d'utilisation</a> et la <a href="#">politique de confidentialité</a></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Créer un compte</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Colonne d'image -->
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="auth-image">
                                <h3>Gérez votre exploitation agricole en toute simplicité</h3>
                                <p>Accédez à toutes les fonctionnalités pour optimiser votre production</p>
                                <ul class="list-unstyled mt-4">
                                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Suivi météo personnalisé</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Gestion des parcelles et cultures</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Alertes et notifications intelligentes</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Planification des tâches agricoles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mot de passe oublié -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Réinitialiser votre mot de passe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entrez votre adresse email ou votre numéro de téléphone pour recevoir un lien de réinitialisation.</p>
                    <div class="mb-3">
                        <label for="recoveryEmail" class="form-label">Email ou Téléphone</label>
                        <input type="text" class="form-control" id="recoveryEmail" placeholder="votre@email.com ou 0612345678">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Envoyer le lien</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/inscription.js"></script>
</body>
</html>