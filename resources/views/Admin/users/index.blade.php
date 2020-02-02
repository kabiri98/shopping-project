@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
{{-- ============================================================================== --}}
{{-- @foreach ($users as $user)
{{$user->name}}
{{$user->email}}
@endforeach --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">delete or update</th>

      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($users as $user)
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
     <td>  <a href="/edit/{{$user->id}}">update</a>
       <a href="/delete/{{$user->id}}">delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>

{{-- ================================================================================ --}}
                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
