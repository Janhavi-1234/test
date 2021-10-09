<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
   
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <title>Document</title>
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
              <h2 class="text-uppercase text-center mb-3">Create an account</h2>

              <form action="<?php echo e(route('register')); ?>" method="post"> 
                <?php echo csrf_field(); ?>
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Enter Name</label>
                  <input type="text" id="form3Example1cg" class="form-control " />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example3cg">Enter Email</label>  
                  <input type="email" id="form3Example3cg" class="form-control " />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4cg">Password</label> 
                  <input type="password" id="form3Example4cg" class="form-control " />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4cdg">Enter Number</label>  
                  <input type="number" id="form3Example4cdg" class="form-control " />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Hospital Name</label>
                  <input type="text" id="form3Example1cg" class="form-control " />
                </div>
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example1cg">Enter Department</label>
                  <input type="text" id="form3Example1cg" class="form-control   " />
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
</html><?php /**PATH C:\xampp\htdocs\Test\resources\views/welcome.blade.php ENDPATH**/ ?>