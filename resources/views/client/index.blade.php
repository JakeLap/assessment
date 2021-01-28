@extends('layouts.main')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <h5>Clients</h5>
        <a href="{{route('client.create')}}" class="text-white btn btn-sm btn-primary">Create new client</a>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Client ID</th>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">Tel</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td><a href="{{route('client.show', ['client' => $client])}}">{{$client->getFullName()}}</a></td>
                <td>{{$client->email}}</td>
                <td>{{$client->tel ? $client->tel : 'NA'}}</td>
                <td class="border-0">
                    <a href="{{route('client.edit', ['client' => $client])}}" class="text-white btn btn-sm btn-info">Edit</a>
                </td>
                <td class="border-0">
                    <form action="{{route('client.destroy', ['client' => $client])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-sm btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
      

   
@endsection