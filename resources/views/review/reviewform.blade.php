@extends("layout.layout")

@section ("titel")
Write a review !
@endsection

@section ("content")
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('review.store')}}" method="POST">
    @csrf
    <div class="row align-items-stretch mb-5">
    <div class="col-md-12">
        <div class="form-group">
        <input  
            class="form-control @error('titel') is-invalid @enderror"
            value="{{ old('name') }}"
            name="name"
            placeholder="Your Name *"
        />
        @error('name')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
        <input
            class="form-control @error('titel') is-invalid @enderror"
            value="{{ old('email') }}"
            name="email"
            placeholder="Your Email *"
        />
        @error('email')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-5 pl-4 col-md-12">
            <select
            class="form-control @error('titel') is-invalid @enderror"
            value="{{ old('star') }}"
            name="star"
            placeholde="Stars *">
                <option value="1">1 michelin star</option>
                <option value="2">2 michelin star</option>
                <option value="3">3 michelin star</option>
                <option value="4">4 michelin star</option>
                <option value="5">5 michelin star</option>
            </select>
            @error('star')
            <div class="error-message">
                {{ $message }}
            </div>
        @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group form-group-textarea mb-md-0">
        <textarea
            class="form-control @error('titel') is-invalid @enderror"
            value="{{ old('message') }}"
            name="message"
            placeholder="Your Message *"
        ></textarea>
        @error('message')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        </div>
    </div>
    </div>
    <div class="text-center">
    <button
        class="btn btn-primary btn-xl text-uppercase"
        type="submit"
    >
        Send Review
    </button>
    </div>
</form>

@endsection