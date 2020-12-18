@extends("layout.layout")

@section ("titel")
Reviews
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
    <div class="col-md-6">
        <div class="form-group">
        <input  
            class="form-control @error('titel') is-invalid @enderror"
            type="text"
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
            type="email"
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
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-textarea mb-md-0">
        <textarea
            class="form-control @error('titel') is-invalid @enderror"
            type="text"
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
    <div id="success"></div>
    <button
        class="btn btn-primary btn-xl text-uppercase"
        id="sendMessageButton"
        type="submit"
    >
        Send Message
    </button>
    </div>
</form>

@endsection