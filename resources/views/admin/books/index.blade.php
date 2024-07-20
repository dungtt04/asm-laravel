<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh Sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Danh Sách Sách</h1>
    <a href="{{route('admin.book.create')}}" class="btn btn-success">Thêm Mới</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Title</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Publication</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
          <tbody>
          @foreach ($books as $book )
          <tr>
            <th scope="row">{{$book -> id}}</th>
            <td>{{$book -> title}}</td>
            <td>
                <img src="{{$book -> thumbnail}}" width="60" alt="">
            </td>
            <td>{{$book -> author}}</td>
            <td>{{$book -> publisher}}</td>
            <td>{{$book -> publication}}</td>
            <td>{{$book -> price}}</td>
            <td>{{$book -> quantity}}</td>
            <td>{{$book -> name}}</td>
            <td>
                <a href="{{route('admin.book.edit', $book->id)}}" class="btn btn-success">Sửa</a>
                <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('ban co muon xoa')">Xóa</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>