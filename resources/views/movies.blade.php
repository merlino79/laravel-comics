@extends('layouts.main')

@section('content')

    <main>
      <div class="container mt-3">

        <div class="row">
          <div class="col">
            @foreach ($films as $film )
              <div class="img">
                <img src="{{$film['thumb']}}" alt="">
              </div>
              
            @endforeach
            </div>

           
          </div>
        </div>
       
      </div>
    </main>

@endsection
