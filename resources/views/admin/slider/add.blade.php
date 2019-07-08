@extends('admin.layout.app')

@section('content')

    <h3 class="text-center mb-5 mt-5">Add Slider Image</h3>
    <div class="col-md-6 offset-md-3">
        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-md-12 mb-2 mt-2">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" name="image">

                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>

@endsection
