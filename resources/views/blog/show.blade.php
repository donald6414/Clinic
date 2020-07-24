@extends('include.show')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container">
        <a href="../blog">
            <button class="btn btn-default">Back <i class="fa fa-backward"></i></button>
        </a>
    </div>

    <div>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>
                    {{$posts->title}}
                </h1>
            </div>

            <div class="card-body">
                <p>
                    {{$posts->body}}
                </p>
            </div>

            <div class="card-footer float-right">
                <p>
                    <strong>Time: </strong>{{$posts->created_at}}
                </p>
            </div>
        </div>

        <div class="card">
            @if (!Auth::guest())
            <div class="row">
                <div class="float-left">
                    <a href="../blog/{{$posts->id}}/edit">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </div>
                <div class="float-right">
                    <form action="../blog/{{$posts->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection