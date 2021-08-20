@extends('welcome')

@section('content')

    <div class="container">
        <div class="row">
            <form action="" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="adresse" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="tel" required>
                </div>
                <div class="form-group">
                   <textarea class="form-control" name="test" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">envoyer</button>
                    <button type="reset" class="btn btn-outline-danger">annuler</button>
                </div>
            </form>
        </div>
    </div>

@endsection