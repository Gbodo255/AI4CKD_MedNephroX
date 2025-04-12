@extends('layouts.app')

@section('content')
<style>
    .workspace {
        display: block;
        margin-left: 190px;
    }

    .notifications {
        width: 215px;
        height: 280px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f5f5f5;
        padding: 10px;
        overflow-y: auto;
        font-family: Arial, sans-serif;
    }

    .notification {
        background: white;
        padding: 8px;
        margin-bottom: 8px;
        border-radius: 3px;
        font-size: 13px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .notification.new {
        border-left: 3px solid #4CAF50;
    }

    .notification.old {
        border-left: 3px solid #ccc;
        color: #666;
    }

    .time {
        font-size: 11px;
        color: #999;
        margin-top: 3px;
        text-align: right;
    }

    .agenda {
        width: 215px;
        height: 250px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        background-color: #f8f9fa;
        padding: 8px;
        overflow-y: auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .agenda-header {
        text-align: center;
        padding: 5px 0;
        margin-bottom: 8px;
        border-bottom: 1px solid #eee;
        font-weight: bold;
        color: #333;
    }

    .rdv {
        background: white;
        padding: 8px;
        margin-bottom: 6px;
        border-radius: 4px;
        font-size: 12px;
        border-left: 3px solid #4CAF50;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .rdv.urgent {
        border-left-color: #f44336;
    }

    .rdv.passe {
        opacity: 0.6;
        border-left-color: #9e9e9e;
    }

    .rdv-heure {
        font-weight: bold;
        color: #333;
        margin-bottom: 2px;
    }

    .rdv-titre {
        margin-bottom: 3px;
    }

    .rdv-lieu {
        font-size: 11px;
        color: #666;
    }

    /* Style de la barre de défilement */
    ::-webkit-scrollbar {
        width: 4px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 2px;
    }
</style>
<div class="spacework">
    <div class="space">
        <div class="statistiques">
            <div class="total">
                <p class="preums">Nombre de patients</p>
                <p class="second">605</p>
            </div>
            <div class="grave">
                <p class="preums">Cas grave</p>
                <p class="second">250</p>
            </div>
            <div class="traite">
                <p class="preums">Prise en main</p>
                <p class="second">355</p>
            </div>
        </div>
        <div class="graphes">
            <div class="stades"></div>
            <div class="graphique"></div>
        </div>
    </div>
    <div class="notify">
        <div class="agenda">
            <div class="agenda-header">
                Aujourd'hui, 12 juin
            </div>

            <div class="rdv urgent">
                <div class="rdv-heure">08:30 - 09:15</div>
                <div class="rdv-titre">Consultation Dupont</div>
                <div class="rdv-lieu">Cabinet 1</div>
            </div>

            <div class="rdv">
                <div class="rdv-heure">10:00 - 10:45</div>
                <div class="rdv-titre">Vaccin Martin</div>
                <div class="rdv-lieu">Cabinet 2</div>
            </div>

            <div class="rdv passe">
                <div class="rdv-heure">11:30 - 12:00</div>
                <div class="rdv-titre">Contrôle routine</div>
                <div class="rdv-lieu">Cabinet 3</div>
            </div>

            <div class="rdv">
                <div class="rdv-heure">14:00 - 14:45</div>
                <div class="rdv-titre">Nouveau patient</div>
                <div class="rdv-lieu">Cabinet 1</div>
            </div>

            <div class="rdv">
                <div class="rdv-heure">16:15 - 17:00</div>
                <div class="rdv-titre">Suivi thérapie</div>
                <div class="rdv-lieu">Cabinet 2</div>
            </div>
        </div>
        < <div class="notifications">
            <div class="notification new">
                Nouveau message reçu
                <div class="time">12:34</div>
            </div>

            <div class="notification new">
                Rendez-vous confirmé
                <div class="time">11:20</div>
            </div>

            <div class="notification old">
                Rappel: Réunion à 15h
                <div class="time">Hier</div>
            </div>

            <div class="notification old">
                Système mis à jour
                <div class="time">23/05</div>
            </div>

            <div class="notification old">
                Paiement reçu
                <div class="time">22/05</div>
            </div>

            <div class="notification old">
                Nouveau patient enregistré
                <div class="time">20/05</div>
            </div>
    </div>
</div>
</div>
<div class="listePatientDash">
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
            <tr class="surle">
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
@endsection