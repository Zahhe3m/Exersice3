extends('master') 
@section('title', 'List') 
@section('content') 
 <h1>Books</h1>
 <ul>
 @foreach($list as $list) 
 <li>{{ $list }} </li>
 @endforeach 
 </ul>
@endsection