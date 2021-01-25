@extends("layout.layout")

@section ("titel")
All Reviews from previous guest
@endsection

@section ("content")
<div class="text-center">
<a class="btn btn-outline-warning btn-lg m-5 font-weight-bold text-decoration-none" href="{{ route('review.add')}}" role="button">Write review</a>
    <table class="table">
    @foreach ($allreviews as $reviews)
    <tr>
        <td><a href="{{ route('review.details', ['id' => $reviews->id])}}">{{$reviews->name}}</a><br></td>
        <td>{{$reviews->star}}/5<i class="fas fa-star"></i><br></td>
        <td>{{$reviews->message}}<br></td>
    </tr>
    @endforeach
    </table>
</div>
<div class="d-flex justify-content-center">
{{$allreviews->links()}}
</div>
@endsection