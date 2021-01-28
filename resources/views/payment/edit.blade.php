@extends('layouts.main')

@section('content')

    <form action="{{route('payment.update', ['payment' => $payment])}}" method="post">
        @csrf
        @method('PUT')

        <p>Client: {{$client->getFullName()}}</p>
        <p>Client ID: {{$client->id}}</p>
        <p>Payment ID: {{$payment->id}}</p>

        <div class="mb-3">
            <label for="amount" class="form-label">Ammount € (in cents)</label>
            <input type="number" class="form-control {{$errors->has('amount') ? 'is-invalid' : ''}}" id="amount" name="amount" value="{{$payment->amount}}" required>
            <div class="invalid-feedback">
                <ul>
                    @foreach ($errors->get('amount') as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    

@endsection