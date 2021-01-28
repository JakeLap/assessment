@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <form action="{{route('payment.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="client_id" class="form-label">Client ID</label>
                <input type="text" class="form-control {{$errors->has('client_id') ? 'is-invalid' : ''}}" id="client_id" name="client_id" value="{{request()->input('client_id') ? request()->input('client_id') : old('client_id')}}" required>
                <div class="invalid-feedback">
                    <ul>
                        @foreach ($errors->get('client_id') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount € (in cents)</label>
                <input type="number" class="form-control {{$errors->has('amount') ? 'is-invalid' : ''}}" id="ammount" name="amount" value="{{old('amount')}}" required>
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
    </div>
    
    

@endsection