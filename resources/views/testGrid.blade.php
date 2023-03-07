@extends('layouts.layout')

@section('content')
    <div class="container text-center rounded-3" style="background-color: rgba(84,33,187, .5)">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-lg-3 col-md-6 col-sm-12 p-2 border-opacity-50">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
            @endfor
        </div>
    </div>
@endsection
