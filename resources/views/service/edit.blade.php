
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                         <h1 class="font-semibold text-xl text-gray-800 text-center" style="text-decoration: underline">Tableau des Services </h1>
                        
                         <form action="{{ route('update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-labelle" for="libelle">ID</label>
                                <input class="form-control" value="{{ $service->id }}" readonly name="id" type="text">
                            </div> 
                            <div class="form-group">
                                <label class="form-labelle" for="libelle">Libelle</label>
                                <input class="form-control"  value="{{ $service->libelle }}" required name="libelle" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-labelle" for="typeService">Type Service</label>
                                <input class="form-control" required name="typeService" value="{{ $service->typeService }}" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-labelle" for="description">Description</label>
                                <textarea name="description" required class="form-control" cols="30" rows="10"> {{ $service->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="valider" class="btn btn-outline-primary">Modifier</button>
                            </div> 
                        </form>
                        <td><a href="{{ route('index') }}" class="btn btn-primary">Lister</a></td>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
