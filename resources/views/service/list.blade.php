@extends('accueil')

@section('content')
@foreach ($list as $l)
<div class="col-md-4 style-3">
    <div class="tour-item ">
        <div class="tour-desc bg-white">
            <div class="tour-text color-grey-3 text-center">“{{ $l->description }}.”</div>
            <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" width="50px" height="50px" src="{{URL::asset('images/service.png')}}" alt=""></div>
            <div class="link-name d-flex justify-content-center">{{ $l->libelle }}</div>
            <div class="link-name d-flex justify-content-center">{{ $l->typeService }}</div>
        </div>
    </div>
</div>
@endforeach
<div class="form-group mt-3">
    {{ $list->links() }}
</div>
@endsection