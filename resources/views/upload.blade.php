<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

    <body>
    <div class="container p-3 my-3 bg-dark text-white " >
  <h1>Upload CSV File To DataBase</h1>
 @if (session('status')) 
 <div class="alert alert-success"> 
 {{ session('status') }} 
 </div>
  @endif @if (session('error'))
   <div class="alert alert-error">
    {{ session('error') }} 
    </div> 
    @endif 
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
            <label for="upload-file">Upload</label>
            <input type="file" name="upload-file" class="form-control" placeholder="chose file" >
        </div>
        <input class="btn btn-success" type="submit" value="Upload csv" name="submit">
        </form>

</div>




    </body>
</html>

