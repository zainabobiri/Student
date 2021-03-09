<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')
    <div class="row header-container justify-content-center">
        <div class="header">
          <h1>Student Mnagement System</h1>
        </div>


    </div>
  @if($layout== 'index')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include('studentlist')
      </section>
      <section class="col">
      </section>
    </div>
  </div>
  @elseif($layout== 'create')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include('studentlist')
      </section>
      <section class="col-md-5">
        <div class="card mb-3">
          <img src="https://d33wubrfki0l68.cloudfront.net/3ac765230c26bbe332d565211794faef5bf7e015/c7d1d/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x0_resize_q90_lanczos.jpg" class="card-img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Enter the Information of the New Student</h5>
        <form action="{{url('/store')}}" method="post">
          @csrf
          <div class="forrm-group">
            <label for="cName">cName</label>
            <input name="cName" type="text" class="form-control" placeholder="Enter cName">
          </div>
          <div class="forrm-group">
            <label for="firstName">firstName</label>
            <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
          </div>
          <div class="forrm-group">
            <label for="secondName">secondName</label>
            <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
          </div>
          <div class="forrm-group">
            <label for="age">age</label>
            <input name="age" type="text" class="form-control" placeholder="Enter Age">
          </div>
          <div class="forrm-group">
            <label for="specialty">specialty</label>
            <input name="specialty" type="text" class="form-control" placeholder="Enter Specialty">
          </div>
          <input type="submit" class="btn btn-info" value="Save">
          <input type="reset" class="btn btn-warning" value="reset">
        </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  @elseif($layout=='show')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col">
        @include('studentlist')
      </section>
      <section class="col">
      </section>
    </div>
  </div>
  @elseif($layout== 'edit')
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include('studentlist')
      </section>
      <section class="col">
        <div class="card mb-3">
          <img src="https://d33wubrfki0l68.cloudfront.net/3ac765230c26bbe332d565211794faef5bf7e015/c7d1d/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x0_resize_q90_lanczos.jpg" class="card-img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Update Information of Student</h5>
            <form action="{{route('edit',$student->id)}}" method="post">
              @csrf
              <div class="forrm-group">
                <label for="cName">cName</label>
                <input value="{{$student->CName}}"  name="cName" type="text" class="form-control" placeholder="Enter cName">
              </div>
              <div class="forrm-group">
                <label for="firstName">firstName</label>
                <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="forrm-group">
                <label for="secondName">secondName</label>
                <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
              </div>
              <div class="forrm-group">
                <label for="age">age</label>
                <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter Age">
              </div>
              <div class="forrm-group">
                <label for="specialty">specialty</label>
                <input value="{{$student->specialty}}" name="specialty" type="text" class="form-control" placeholder="Enter Specialty">
              </div>
              <input type="submit" class="btn btn-info" value="update">
              <input type="reset" class="btn btn-warning" value="reset">
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  @endif
  <footer></footer>

      





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>