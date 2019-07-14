@extends('admin.layout.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">Social Link Settings</h3>
    <div class="col-md-6 offset-md-3">
        <form action="{{route('social.update',['id'=>$social->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Facebook:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Facebook" name="facebook" value="{{$social->facebook}}">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Google:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Google Plus" name="google" value="{{$social->google}}">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Twiter:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Twiter" name="twiter" value="{{$social->twiter}}">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Youtube:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Youtube" name="youtube" value="{{$social->youtube}}">
                        </div>
                    </div>


                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Linkedin:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Linkedin" name="linkedin" value="{{$social->linkedin}}">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-1 mb-1">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Instagram:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Instagram" name="instagram" value="{{$social->instagram}}">
                        </div>
                    </div>

                </div>


                <div class="col-md-2 text-center mt-1 mb-1 d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>
    @endsection
