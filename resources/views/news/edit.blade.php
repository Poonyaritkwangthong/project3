<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit News</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('news.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                            <strong>News Name:</strong>
                            <input type="text" name="name_news" value="{{ $news->name_news }}" class="form-control" placeholder="News Name">
                            <strong>Image:</strong>
                            <input type="text" name="n_img" value="{{ $news->n_img }}" class="form-control" placeholder="Image">
                            <strong>Location:</strong>
                            <input type="text" name="n_location" value="{{ $news->n_location }}" class="form-control" placeholder="Location">
                            <strong>Detail:</strong>
                            <input type="text" name="n_detail" value="{{ $news->n_detail }}" class="form-control" placeholder="Detail">
                            <strong>Date:</strong>
                            <input type="date" name="n_date" value="{{ $news->n_date }}" class="form-control" placeholder="Date">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>