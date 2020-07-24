@extends('include.includes')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container">
        <div class="card">
            <div class="card-title">
                <h1>
                    Personal Requests
                </h1>
            </div>

            <div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            </div>

            <div class="card-body">
                @if (count($contact)>0)
                @foreach ($contact as $contact)
                <a href="request/{{$contact->id}}">
                    <div class="card-title">
                        <ul class="list-group">
                            <li class="list-group-item">
                                {{$contact -> id}}:
                                {{$contact -> name}}
                                <div class="float-right">
                                    {{$contact->created_at}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </a>
                @endforeach
                @else
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <h3>
                                No Request Found!
                            </h3>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection