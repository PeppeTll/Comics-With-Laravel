{{-- @extends('layouts.default') --}}

{{-- 
  Per i metaTitle è anche possibile inserire un secondo parametro
  per passare la stringa del titolo, in questo modo possiamo
  non chiudere il tag della @section.
--}}
{{-- @section('metaTitle', 'La mia home con blade')

@section('content')
  <h1>
    {{ $h1 }}
  </h1>
  <ul>
    @foreach ($team as $value)
      <li>{{ $value['name'] }}</li>
    @endforeach
  </ul>
  <h2>
    <a href="{{ $contact['href'] }}">{{ $contact['text'] }}</a>
  </h2>
@endsection --}}
