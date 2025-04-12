<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styledash.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        .patient-info-modal .modal-body {
            padding: 20px;
        }

        .patient-info-section {
            margin-bottom: 20px;
        }

        .patient-info-section h5 {
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .info-row {
            display: flex;
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            width: 150px;
        }

        .info-value {
            flex: 1;
        }

        .download-btn {
            margin-top: 20px;
        }

        .workspace {
            display: block;
            margin-left: 220px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="sidebar">
            <div class="logo">
                MedNephroX
            </div>
            <div class="lien">
                <div class="bouton">
                    <a href="{{ route('dashoard') }}">Accueil</a>
                    <a href="{{ route('visit') }}">Agenda</a>
                    <a href="{{ route('listepatient') }}">Patients</a>
                    <a href="">Statistiques</a>
                    <a href="">Messagerie</a>
                </div>
                <div class="another">
                    <a href="">Paramètres</a>
                    <button class="logout">Deconnexion</button>
                </div>
            </div>
        </div>
        <div class="workspace">
            <div class="navbar">
                <div class="part1">
                    <input type="search">
                </div>
                <div class="part2">
                    <p class="name">Dr Ratheil</p>
                    <img src="" alt="" class="profil">
                </div>
            </div>
            <div class="spacework">
                <div class="patient-table-container">
                    <a href="#" class="add" data-bs-toggle="modal" data-bs-target="#ajouterPatientModal">Ajouter un patient</a>

                    <h2>Liste des Patients</h2>
                    <table class="patient-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Date d'inscription</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $index => $patient)
                            <tr>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#patientInfoModal"
                                        data-patient-id="{{ $patient->id }}"
                                        data-patient-name="{{ $patient->name }}"
                                        data-patient-surname="{{ $patient->surname }}"
                                        data-patient-naissance="{{ $patient->naissance }}"
                                        data-patient-sexe="{{ $patient->sexe }}"
                                        data-patient-adresse="{{ $patient->adresse }}"
                                        data-patient-phone="{{ $patient->phoneNumber }}"
                                        data-patient-email="{{ $patient->email }}"
                                        data-patient-created="{{ $patient->created_at->format('d/m/Y') }}">
                                        {{ $index + 1 }}
                                    </a></td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->surname }}</td>
                                <td>{{ $patient->sexe }}</td>
                                <td>{{ $patient->phoneNumber }}</td>
                                <td>{{ $patient->created_at->format('d/m/Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- 🌟 MODALE POUR FORMULAIRE -->
                <div class="modal fade" id="ajouterPatientModal" tabindex="-1" aria-labelledby="ajouterPatientLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ajouterPatientLabel">Ajouter un patient</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('traitpage') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" placeholder="nomPatient" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="prenomPatient" name="surname" id="surname" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" placeholder="date de naissance" name="naissance" id="naissance" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="sexe" name="sexe" id="sexe" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="adresse" name="adresse" id="adresse" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="numero de telephone" name="phonenumber" id="phonenumber" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" placeholder="adressemail" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Soumettre" class="btn btn-primary">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 🌟 MODALE POUR AFFICHER LES INFORMATIONS DU PATIENT -->
                <div class="modal fade patient-info-modal" id="patientInfoModal" tabindex="-1" aria-labelledby="patientInfoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="patientInfoLabel">Informations du Patient</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body" id="patientInfoContent">
                                <!-- Le contenu sera rempli dynamiquement par JavaScript -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary download-btn" onclick="downloadPatientInfo()">Télécharger</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    // Lorsque la modale patientInfoModal est affichée
                    document.getElementById('patientInfoModal').addEventListener('show.bs.modal', function(event) {
                        var button = event.relatedTarget; // Bouton qui a déclenché la modale

                        // Récupérer les données du patient
                        var patientName = button.getAttribute('data-patient-name');
                        var patientSurname = button.getAttribute('data-patient-surname');
                        var patientNaissance = button.getAttribute('data-patient-naissance');
                        var patientSexe = button.getAttribute('data-patient-sexe');
                        var patientAdresse = button.getAttribute('data-patient-adresse');
                        var patientPhone = button.getAttribute('data-patient-phone');
                        var patientEmail = button.getAttribute('data-patient-email');
                        var patientCreated = button.getAttribute('data-patient-created');
                        var patientId = button.getAttribute('data-patient-id');

                        // Mettre à jour le titre de la modale
                        document.getElementById('patientInfoLabel').textContent = 'Dossier Patient: ' + patientName + ' ' + patientSurname;

                        // Construire le contenu HTML
                        var content = `
                            <div class="patient-info-section">
                                <h5>Informations Personnelles</h5>
                                <div class="info-row">
                                    <div class="info-label">ID Patient:</div>
                                    <div class="info-value">${patientId}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Nom:</div>
                                    <div class="info-value">${patientName}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Prénom:</div>
                                    <div class="info-value">${patientSurname}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Date de naissance:</div>
                                    <div class="info-value">${patientNaissance}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Sexe:</div>
                                    <div class="info-value">${patientSexe}</div>
                                </div>
                            </div>
                            
                            <div class="patient-info-section">
                                <h5>Coordonnées</h5>
                                <div class="info-row">
                                    <div class="info-label">Adresse:</div>
                                    <div class="info-value">${patientAdresse}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Téléphone:</div>
                                    <div class="info-value">${patientPhone}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Email:</div>
                                    <div class="info-value">${patientEmail}</div>
                                </div>
                            </div>
                            
                            <div class="patient-info-section">
                                <h5>Informations Médicales</h5>
                                <div class="info-row">
                                    <div class="info-label">Date d'inscription:</div>
                                    <div class="info-value">${patientCreated}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Groupe sanguin:</div>
                                    <div class="info-value">Non spécifié</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Allergies:</div>
                                    <div class="info-value">Aucune connue</div>
                                </div>
                            </div>
                        `;

                        // Insérer le contenu dans la modale
                        document.getElementById('patientInfoContent').innerHTML = content;
                    });

                    // Fonction pour télécharger les informations du patient
                    function downloadPatientInfo() {
                        // Récupérer le contenu à télécharger
                        const patientName = document.getElementById('patientInfoLabel').textContent.replace('Dossier Patient: ', '');
                        const content = document.getElementById('patientInfoContent').innerText;

                        // Créer un blob avec le contenu
                        const blob = new Blob([content], {
                            type: 'text/plain'
                        });
                        const url = URL.createObjectURL(blob);

                        // Créer un lien de téléchargement
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = `Dossier_Patient_${patientName.replace(' ', '_')}.txt`;

                        // Déclencher le téléchargement
                        document.body.appendChild(a);
                        a.click();

                        // Nettoyer
                        document.body.removeChild(a);
                        URL.revokeObjectURL(url);
                    }
                </script>
            </div>
        </div>
    </div>
</body>

</html>