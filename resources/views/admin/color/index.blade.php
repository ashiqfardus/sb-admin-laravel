@extends('admin.layout.app')


@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="" width="100%" cellspacing="0">


                        <tbody>
                        @foreach($color as $clr)
                            <tr>
                                <td>
                                    Theme Primary
                                </td>
                                <td>

                                    <form action="{{route('color.primary',['id'=>$clr->id])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="color" value="{{$clr->theme_primary}}" name="theme_primary">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Theme Secondary
                                </td>
                                <td>
                                    <form action="{{route('color.secondary',['id'=>$clr->id])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="color" value="{{$clr->theme_secondary}}" name="theme_secondary">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Header Footer
                                </td>
                                <td>
                                    <form action="{{route('color.header',['id'=>$clr->id])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="color" value="{{$clr->header_footer}}" name="theme_header">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>
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
