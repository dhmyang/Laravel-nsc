@extends("layout.layout")

@section ("titel")
{{$review->name}}
@endsection

@section ("content")
    {{$review->star}}<br>
    {{$review->message}}

    <a href="{{route('reviews')}}" class="btn btn-outline-info">See all reviews</a>
@endsection