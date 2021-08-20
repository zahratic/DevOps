@extends('dashboard')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                         <h1 class="font-semibold text-xl text-gray-800 text-center" style="text-decoration: underline">Ajouter un service </h1>
                        
                         <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-labelle" for="libelle">Libelle</label>
                                <input class="form-control" required name="libelle" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-labelle" for="typeService">Type Service</label>
                                <input class="form-control" required name="typeService" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-labelle" for="description">Description</label>
                                <textarea name="description" required class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="valider" class="btn btn-outline-primary">Ajouter</button>
                                <button type="reset" name="annuler" class="btn btn-outline-danger">Annuler</button>
                            </div> 
                        </form>
    
                </div>
            </div>
        </div>
    </div>


@endsection
