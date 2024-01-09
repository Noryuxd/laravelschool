@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Gestion d'employés</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, dicta.</p>
                        <a href="{{ url('/TP6') }}" class="btn btn-primary">Liste d'employés</a>
                        <a href="{{ url('/tp-5') }}" class="btn btn-success">Nouveau employé</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Gestion de projets</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, dicta.</p>
                        <a href="{{ url('/TP6') }}" class="btn btn-primary">Liste de projets</a>
                        <a href="{{ url('/TP6/create') }}" class="btn btn-success">Nouveau projet</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Gestion de taches</h2>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, dicta.</p>
                        <a href="{{ url('/tache') }}" class="btn btn-primary">Liste des taches</a>
                        <a href="{{ url('/tache/create') }}" class="btn btn-success">Nouvelle tache</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
