@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Book Ticket</h2>
        <form method="POST" action="{{ route('book') }}">
    @csrf

    <div class="form-group">
        <label for="booking_date">Booking Date</label>
        <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{ old('booking_date') }}" required autofocus>

        @error('booking_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="time_slot">Time Slot</label>
        <input id="time_slot" type="text" class="form-control @error('time_slot') is-invalid @enderror" name="time_slot" value="{{ old('time_slot') }}" required autofocus>

        @error('time_slot')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Book</button>
</form>

    </div>
</div>
@endsection
