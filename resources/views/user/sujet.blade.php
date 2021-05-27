@extends('user.accederQuestionnaire')

@section('content')
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">{{ __('evaluation subject') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.sujet',['sujet'=>request()->sujet, 'campagne'=>request()->campagne,'language'=>app()->getLocale()] )}}" method="POST">
                        @csrf
                        <div class="form-group row"> 
                        @foreach((\App\Sujet::where('id',request()->sujet)->get()) as $sujet)
                           Subject title: <label style="color:#FF7F50;"> {{$sujet->titre}} </label>
                            <label>Subject description: {{$sujet->description}}</label>
                        @endforeach
                        </div>  
                        <ul class="list-group">
                        @foreach((\App\Dimension::where('idSujet',request()->sujet)->get()) as $dimension)
                        <li class="list-group-item" style=" border: 2px solid #B8860B; color:#B8860B; " name="dimension" value="{{$dimension->id}}">{{$dimension->titre}}</li><br>
                        @foreach((\App\Critere::where('idCompagne',request()->campagne)->get()) as $critere)
                       <div style="background: #F5F5DC; border: 2px solid #DEB887; color:#D2691E;"> {{$critere->titre}} </div><br><br>
                        @foreach((\App\Proposition::where('idCritere',$critere->id)->get()) as $propo)
                        {{$propo->titre}}<input type="checkbox" name="critere" value="{{$critere->id}}"><br/>
                        @endforeach
                        @endforeach
                        @endforeach
                        </ul> <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                  Submit the questionnaire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
