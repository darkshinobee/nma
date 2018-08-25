@extends('master')
@section('title', 'All Articles')

@section('content')

<div class="card text-white bg-dark">
    <div class="card-body">
      <h2 class="text-center">ALL ARTICLES</h2><br>
        <table class="table table-hover table-borderless">
            <thead class="table-bordered">
                <tr>
                    {{--
                    <th scope="col">#</th> --}}
                    <th scope="col">TITLE</th>
                    <th scope="col">AUTHOR</th>
                    <th scope="col">DATE POSTED</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i
                < 5; $i++) <tr>
                    <td>Calcified Hematoma</td>
                    <td>Dr Strange</td>
                    <td>{{ date("F jS, Y") }}</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>

@stop
