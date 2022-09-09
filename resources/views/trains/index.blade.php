@extends('layouts.main')

@section('main-content')
   <h2>All trains:</h2>

   <ul>
      @forelse ($trains as $train)
         <li>{{ $train->company }} - {{ $train->departure_station }} - {{ $train->arrival_station }} - {{ $train->departure_time }} - {{ $train->arrival_time }} - {{ $train->train_code }} - {{ $train->carriages }}</li>
      @empty
         <h2>Nessun treno disponibile</h2>
      @endforelse
   </ul>
@endsection   