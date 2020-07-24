@extends('include.includes')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container container-fluid">
        <div class="card card-title">
            <h1>
                Blog Posts
            </h1>
        </div>

        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

        <div class="container">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @if (count($posts)>0)
                        @foreach ($posts as $post)
                        <a href="blog/{{$post->id}}">
                            <div class="card-title">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        {{$post -> id}}:
                                        {{$post -> title}}
                                        <div class="float-right">
                                            {{$post->created_at}}
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
                                        No Post Found!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection