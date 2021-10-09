<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Management Page</title>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
}
    </style>
</head>
<body>
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 mt-2">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-3">Register</h2>

              <form action="{{ route('register') }}" method="get"> 
                @csrf
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Enter Name <span class="text-danger">*</span></label>
                  <input type="text" id="form3Example1cg" name="name" class="form-control "/>
                  @error('name')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example3cg">Enter Email <span class="text-danger">*</span></label>  
                  <input type="email" id="form3Example3cg" name="email" class="form-control " />
                  @error('email')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4cdg">Enter Number <span class="text-danger">*</span></label>  
                  <input type="number" id="form3Example4cdg" name="phone" class="form-control " />
                  @error('phone')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Hospital Name</label>
                  <select class="form-control hospital-cls" id="hospital" name="hospital_id">
                  <option value="0">-- Select Hospital --</option>
                  @foreach ($users as $user)  
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                  </select>

                  @error('hospital_name')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Enter Department</label>
                  <select class="form-control" id="department" name="department_id">
                  <option value="0">-- Select Department --</option>  
                  </select>
                  @error('department')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success  gradient-custom-4 text-body">Submit</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script>
$( document ).ready(function() {
  $(".hospital-cls").on("change", function(){
    var hospital_id = $("#hospital.hospital-cls")[0].value

    console.log(hospital_id);
    $.ajax({
      url: 'get-department/' + hospital_id,
      success: function(data) {
        $('#department').html(data);
      }
    });
  });
});
 
</script>