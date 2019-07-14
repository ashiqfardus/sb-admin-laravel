@extends('admin.layout.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">About Settings</h3>
    <div class="col-md-12">


        <form action="{{route('about.update',['id'=>$about->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12 mt-1 mb-1">
                    <textarea id="summernote" class="form-control"  name="description">{{$about->description}}</textarea>
                </div>

                <div class="col-md-2 text-center mt-1 mb-1 d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>

    </div>
    @endsection
