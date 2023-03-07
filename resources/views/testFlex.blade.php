@extends('layouts.layout')

@section('content')
    <div class="container text-center rounded-3" style="background-color: rgba(84,33,187, .5)">
        <div class="d-flex flex-wrap align-items-center">
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 p-2 border-opacity-50">
                <button type="button" class="btn btn-success">Tambah</button>
                <button type="button" class="btn btn-warning">Import</button>
                <button type="button" class="btn btn-primary">Export</button>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 p-2 border-opacity-50">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Search ...">
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 p-2 border-opacity-50">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this Select</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>
    </div>
@endsection
