<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body style="background:gray;font-family: Verdana;">
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 mx-auto" >
                <h3 class="text-center mt-2 px-3">Form and View Data</h3>
                <hr>

                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail')}}
                </div>
                @endif

                <form action="add" method="POST" >
                @csrf

                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter Your ID" value="{{old('id')}}">
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                </div>
                
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{old('name')}}">
                        <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">NRP</label>
                        <input type="text" class="form-control" name="nrp" placeholder="Enter Your NRP" value="{{ old('nrp') }}">
                        <span style="color:red">@error('nrp'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
                        <span style="color:red">@error('email'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-light btn-block">Submit</button>
                    </div>
                </form>
                <hr>

                <table class="table table-hover rounded">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NRP</th>
                    <th>Email</th>
                </thead>

                <tbody>
                    @foreach ($list as $item)
                        
                    
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->nrp}}</td>
                        <td>{{ $item->email}}</td>
                     </tr>
                     @endforeach
                </tbody>
                </table>


            </div>
        </div>
    </div>
</body>
</html>