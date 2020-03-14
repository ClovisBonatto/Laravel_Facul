@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categorias
                    <a class="btn btn-primary" href="{{route('categories.create')}}"> Nova Categoria</a></div>
                    

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach($categories as $categories)
                            <tr>
                                <th>{{$categories->id}}</th>
                                <th>{{$categories->title}}</th>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection