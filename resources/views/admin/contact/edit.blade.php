@extends('admin.layout.app')

@section('content')

    <h3 class="text-center mb-5 mt-5">Edit Contact Settings</h3>
    <div class="col-md-6 offset-md-3">
        <form action="{{route('contact.update',['id'=>$contacts->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12 mt-1 mb-1">
                    <input type="text" class="form-control" placeholder="Site Name" name="address" value="{{$contacts->address}}">
                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <input type="text" class="form-control" placeholder="Site Name" name="phone" value="{{$contacts->phone}}">
                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <input type="text" class="form-control" placeholder="Site Name" name="mobile" value="{{$contacts->mobile}}">
                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <input type="text" class="form-control" placeholder="Site Name" name="email" value="{{$contacts->email}}">
                </div>


                <div class="col-md-2 text-center mt-1 mb-1 d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>

@endsection

