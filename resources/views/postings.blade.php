@foreach ($posts as $posting)
    <h2>{{ $posting->title }}</h2>
    <h5>{{ $posting->address }}</h5>
    <p>{{ $posting->requirements }}</p>
    <p>{{ $posting->category->name }}</p>
@endforeach
