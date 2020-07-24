@extends('include.show')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container">
        <a href="../request">
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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>
                            <strong>Name:</strong> {{$contact->name}}
                        </h4>
                    </div>

                    <div class="col-md-6">
                        <h3>
                            <strong>Age:</strong> {{$contact->age}}
                        </h3>
                    </div>
                </div>

                <div class="card-header">
                    <h1>
                        <strong>
                            {{$contact->category}}
                        </strong>
                    </h1>
                </div>

                <div>
                    <p>
                        {{$contact->messege}}
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{$contact->email}}
                            <p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            {{$contact->phone}}
                            <p>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <p>
                    {{$contact->created_at}}
                </p>
            </div>
        </div>

        <div class="card">
            @if (!Auth::guest())
            <div class="float-right">
                <form action="../request/{{$contact->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection