@extends('layouts.main')

@section('content')

    <h5>Client's information</h5>
    <p><strong>{{$client->getFullName()}}</strong></p>
    <p><strong>{{$client->email}}</strong></p>
    <p><strong>{{$client->tel ? $client->tel : 'NA'}}</strong></p>

    <div class="d-flex flex-row justify-content-between mt-5">
        <h5>Client's payments</h5>
        <a href="{{route('payment.create',  ['client_id' => $client->id])}}" class="text-white btn btn-sm btn-primary">Add new payment</a>
    </div>

    @if ($payments)
        
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Amount €</th>
                    <th scope="col">Transaction date</th>
                    <th scope="col">Lastly updated</th>
                  </tr>
            </thead>

            <tbody>

                @foreach ($payments as $payment)
                    <tr>
                        <td>{{$payment->formatAmount()}}</td>
                        <td>{{$payment->created_at}}</td>
                        <td>{{$payment->updated_at}}</td>
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
        
    @endif
@endsection