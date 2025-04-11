@extends('layouts.app')

@section('content')
<div class="space">
    <div class="statistiques">
        <div class="total">
            <p class="preums">Nombre de patients</p>
            <p class="second">754</p>
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
        <div class="stades">Hello world</div>
        <div class="graphique">Hello world</div>
    </div>
</div>
<div class="notify">
    <div class="agenda"></div>
    <div class="mynotif"></div>
</div>
@endsection
