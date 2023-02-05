@include('.layout.header')


@if(Session::has('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('status') }}     </div>
@endif
<table class="table">
    <thead>
    <tr class="bg-dark text-light">
        <th scope="col">Id</th>
        <th scope="col">Book No.</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bookList as $book)
    <tr>
        <th scope="row">{{ $book->id }}</th>
        <td>{{ $book->book_id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author_id }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->price }}</td>
        <td>
            <a href="{{ route('bookUpdateForm',$book->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('bookDelete',$book->id) }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
@include('.layout.footer')
