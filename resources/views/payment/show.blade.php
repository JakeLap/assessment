@extends('layouts.main')

@section('content')

    <div class="d-flex flex-row justify-content-center">
        <div class="d-inline-block shadow-sm px-4 py-2">
                <div class="d-flex flex-row justify-content-center">
                    <h1 class="display-4 me-4 d-flex flex-column justify-content-center">
                        {{$payment->amount/100}} €
                    </h1>
                    <div class="me-4">
                        <p class="fw-light h4 ">Payment ID: {{$payment->id}}</p>
                        <p class="fw-light h4 ">By: <a href="{{route('client.show', ['client' => $client])}}">{{$client->getFullName()}}</a></p>
                        <p class="fw-light h4">Date: {{$payment->created_at}}</p>
                        <p class="fw-light h4">Lat update: {{$payment->updated_at}}</p>
                    </div>
                    <div class="d-flex flex-column justify-content-center ">
                        <a href="{{route('payment.edit', ['payment' => $payment])}}" class="text-white btn btn-sm btn-info mb-2">Edit</a>
                        <form action="{{route('payment.destroy', ['payment' => $payment])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-sm btn-danger">
                        </form>
                    </div>
                </div>
        </div>
    </div>
    

@endsection