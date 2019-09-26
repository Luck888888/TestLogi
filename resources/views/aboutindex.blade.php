
@extends('layouts.index')

<!-- about section
   ================================================== -->
@section('content')


    <div class="container">
        <div class="row">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Email</th>
                    <th scope="col">Projects</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($kard as $kard)

                <tr>
                    <th scope="row">{{$kard->id}}</th>
                    <td>{{$kard->fullname}}</td>
                    <td>{{$kard->job}}</td>
                    <td>{{$kard->email}}</td>

                    <td>
                        @foreach($kard->projects as $project)

                          {{$project->id}}

                            @endforeach
                        </td>
                    <td><a href="{{route('about.show',$kard->id)}}" class="btn btn-sm btn-success">About</a>
                        <form  id="delete_user_{{$kard->id}}" action="{{route('about.delete',$kard->id)}}" method="post">
                            @csrf
                        </form>
                        <a href="#"  onclick="document.getElementById('delete_user_{{$kard->id}}').submit()" class="btn btn-sm btn-success">Delete</a></td>
                </tr>

                @endforeach

                </tbody>
            </table>


        </div>
    </div>




@stop

