@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Social Link Settings</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Google</th>
                            <th>Youtube</th>
                            <th>Linkedin</th>
                            <th>Twiter</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($social as $sc)
                            <tr>
                                <td>{{$sc->facebook}}</td>
                                <td>{{$sc->instagram}}</td>
                                <td>{{$sc->twiter}}</td>
                                <td>{{$sc->youtube}}</td>
                                <td>{{$sc->google}}</td>
                                <td>{{$sc->linkedin}}</td>

                                <td>
                                    <a href="{{route('social.edit',['id'=>$sc->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endsection
