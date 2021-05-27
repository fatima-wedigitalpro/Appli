@extends('user.accederQuestionnaire')

@section('content')
@php
use Illuminate\Http\Request;
@endphp


<center>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Campanions') }}</div> 
<div class="card-body">
    <form method="POST" action="{{ route('user.questionnaire1', app()->getLocale()) }}">
              @csrf
              <div class="form-group row">
    <select class="form-select" aria-label="Default select example" name="compagne">
    @foreach((\App\User::where('id',auth()->user()->id)->get()) as $user)
    @foreach((\App\compagne::where('id_Compagne',$user->idCompagne)->get()) as $compagne)
        <option  value="{{$compagne->id_Compagne}}">{{$compagne->numCompagne}}</option>        
        @endforeach
        @endforeach
        </select>
        </div>
        <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4" >
      <button type="submit" class="btn btn-primary" name="btnaffecteS">this companion</button>
    </div>
    </div>
    </form>
    </div>
        </div>
       </div>
     </div>
     </div>
    <br><br>


</center>

@endsection