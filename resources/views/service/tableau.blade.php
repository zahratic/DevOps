@extends('dashboard')
@section('content')
<div class="table-responsive px-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">LIBELLE</th>
                <th scope="col">DESCRIPTION</th>
                <th class="text-center" scope="col">ACTIVE</th>
                <th class="text-center" scope="col" colspan="2">ACTION</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($list as $l)
          <tr>
            <td><span class="bg-blight">{{ $l->id }}</span></td>
            <td><span class="bg-bdark"><span class="ps-1">{{ $l->libelle }}</span></span></td>
            <td><span class="bg-bdark"><span class="ps-1">{{ $l->typeService }}</span></span></td>
            <td><span class="bg-blight">{{ $l->description }}</span></td>
            <td class="text-center px-0"><span class="<?php if($l->etat==1) echo'fas fa-check';else echo'fas fa-times'; ?>"></span></td>
            <?php if($l->etat==0){
                echo"
                <td class='text-center'><a href='{{ route('active',['id'=>$l->id]) }}'><span class='fas fa-check'></span></a></td>
                ";
            }else{
                echo " 
                <td class='text-center'><a href='{{ route('update',['id'=>$l->id]) }}'><span class='fas fa-edit'></span></a></td>
                <td class='text-center'><a href='{{ route('destroy',['id'=>$l->id]) }}'><span class='fas fa-trash'></span></a></td>";
            }?>
        </tr>
          @endforeach
        </tbody>
    </table>
</div>

@endsection