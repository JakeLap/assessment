@extends('layouts.main')

@section('content')


<div class="container-fluid">

    <form action="{{route('client.update', ['client' => $client])}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control {{$errors->has('firstname') ? 'is-invalid' : ''}}" id="firstname" name="firstname" value="{{$client->firstname}}" required>
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->get('firstname') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}" id="lastname" name="lastname" value="{{$client->lastname}}" required>
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->get('lastname') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mb-3">
            <label for="emailinput" class="form-label">Email</label>
            <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="emailinput" name="email" value="{{$client->email}}" required>
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->get('email') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mb-3">
            <label for="telinput" class="form-label">Tel</label>
            <input type="tel" class="form-control {{$errors->has('tel') ? 'is-invalid' : ''}}" id="telinput" name="tel" value="{{$client->tel ? $client->tel : ''}}">
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->get('tel') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
    
@endsection