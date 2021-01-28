@extends('layouts.main')

@section('content')
    <div class="d-flex flex-row justify-content-between border-bottom">
        <h5>Payments</h5>
        <a href="{{route('payment.create')}}" class="text-white btn btn-sm btn-primary mb-2">Create new payment</a>
    </div>
    <table class="table">
    
        <thead>
            <tr>
                <th scope="col">Amount €</th>
                <th scope="col">Client's name</th>
                <th scope="col">Email</th>
                <th scope="col">Tel</th>
                <th scope="col">Payment date</th>
                <th scope="col">Lastly updated</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($payments as $payment)
            @php
                $client = $payment->getClient()->get()->first();
            @endphp
            <tr>
                <td>{{$payment->formatAmount()}}</td>
                <td><a href="{{route('client.show', ['client' => $client])}}">{{$client->getFullName()}}</a></td>
                <td>{{$client->email}}</td>
                <td>{{$client->tel ? $client->tel : 'NA'}}</td>
                <td>{{$payment->created_at}}</td>
                <td>{{$client->updated_at}}</td>
                <td class="border-0"><a href="{{route('payment.show', ['payment' => $payment])}} " class="btn btn-sm btn-light" >View</a></td>
                <td class="border-0">
                    <a href="{{route('payment.edit', ['payment' => $payment])}}" class="text-white btn btn-sm btn-info">Edit</a>
                </td>
                <td class="border-0">
                    <form action="{{route('payment.destroy', ['payment' => $payment])}}" method="post">
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