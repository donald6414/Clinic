@extends('include.includes')

@section('content')
<section id="section-services" class="section-gap">
    <div class="container card card-body">
        <div class="card-title">
            <h3>
                Add Posts
            </h3>
        </div>

        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

        <form action="create" method="post">
            @csrf
            <div class="container container-fluid">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" name="title" placeholder="Post title" value="{{old('title')}}"
                        class="form-control">
                    @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Post Content</label>
                    <textarea name="body" id="" cols="30" rows="10" value="{{old('body')}}"
                        class="form-control">Post Content</textarea>
                    @error('body')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button name="addpost" class="btn btn-success btn-block">Add Post</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection