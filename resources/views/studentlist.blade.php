
<div class="card mb-3">
    <img src="https://assets.ey.com/content/dam/ey-sites/ey-com/en_gl/topics/ey-at-the-milken-institute-global-conference/ey-teacher-assisting-students-working-tablets.jpg.rendition.1800.1200.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Student List</h5>
      <p class="card-text">You can find the list of all students here.</p>
       

      <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">cName</th>
                <th scope="col">first Name</th>
                <th scope="col"> Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Specialty</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
@foreach ($students as $student)
<tr>

    <td>{{$student->one}}</td>
    <td>{{$student->firstName}}</td>
    <td>{{$student->secondName}}</td>
    <td>{{$student->age}}</td>
    <td>{{$student->specialty}}</td>
    <td>
        <a href="#" class="btn btn-sm btn-info">Show</a>
        <a href="{{url('/edit',$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="" class="btn btn-sm btn-danger">Delete</a>
    </td>
    
</tr>
@endforeach
            
          </tbody>


    </table>


    </div>
  </div>



 
    

    
 