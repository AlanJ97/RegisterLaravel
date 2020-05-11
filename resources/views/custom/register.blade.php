<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS file  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Custom registration</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-6 mt-4">
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                                    
                @endif
                <form action="{{route('custom.register')}}" method="POST">     
                    {{ csrf_field() }}               
                    <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                    <input type="text"  name="fname" value="{{old('fname')}}" class="form-control-plaintext" placeholder="First name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Last name</label>
                    <input type="text" name="lname" value="{{old('lname')}}" class="form-control"  aria-describedby="emailHelp" placeholder="Enter lastname">                       
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">                       
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password Confirmation </label>
                    <input type="password" name="password_confirmation" class="form-control"  placeholder="Password">
                    </div>
                <fieldset class="form-group">                                           
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </fieldset>
                </form>
            </div>
        </div>
    </div>


    {{-- Bootstrap javascript files --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>