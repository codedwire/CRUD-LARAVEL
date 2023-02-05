@include('.layout.header')

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="{{ $update ? route("bookUpdate",$bookData->id) : route('bookCreate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Book Id</label>
                <input type="text" class="form-control" name="book_id" value="{{ $update? $bookData->book_id : " " }}">

            </div>
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $update? $bookData->title : " " }}">

            </div>
            <div class="mb-3">
                <label  class="form-label">Author</label>
                <input type="text" class="form-control" name="author_id" value="{{ $update? $bookData->author_id : " " }}">

            </div>

            <div class="mb-3">
                <label  class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $update? $bookData->description : " " }}">

            </div>

            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $update? $bookData->price : " " }}">

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>





@include('.layout.footer')
