@extends('include.edit')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container card card-body">
        <div class="card-title">
            <h3>
                Edit Posts
            </h3>
        </div>

        <form action="../../blog/{{$posts->id}}" method="post">
            @csrf

            @method('PATCH')
            <div class="container container-fluid">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" name="title" placeholder="Post title" value="{{$posts->title}}"
                        class="form-control">
                    @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Post Content</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$posts->body}}</textarea>
                    @error('body')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button name="addpost" class="btn btn-success btn-block">Save Changes</button>
                </div>
            </div>
            {{-- {{form::hidden('_method', 'PUT')}} --}}
        </form>
    </div>
</section>
@endsection