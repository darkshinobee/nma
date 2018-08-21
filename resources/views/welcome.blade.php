@extends('master')
@section('title', 'Homepage')

@section('content')

  <table class="table table-hover table-dark">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Date Posted</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 5; $i++)
        <tr>
          <td>Calcified Hematoma</td>
          <td>Dr Strange</td>
          <td>{{ date("F jS, Y") }}</td>
        </tr>
      @endfor
    </tbody>
  </table>

@stop
