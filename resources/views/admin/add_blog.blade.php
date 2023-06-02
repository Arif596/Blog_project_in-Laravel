<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
   /* Form container styles */
.card {
  border: none;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 1px rgba(33, 67, 219, 0.676);
  transition: box-shadow 0.3s ease-in-out;
}

.card:hover {
  box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.397);
}

.card-body {
  padding: 3rem;
}

.form-control {
  border-radius: 20px;
  border: none;
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
  border: none;
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
}

.approch-btn {
  border: none;
  border-radius: 20px;
  padding: 15px 40px !important;
  transition: all 0.3s ease-in-out;
}

.approch-btn:hover {
  background-color: #3e8e41 !important;
}

.btn-lg {
  font-size: 1.2rem;
}

.btn-rounded-pill {
  border-radius: 50px;
  padding: 1rem 2.5rem;
}

input::placeholder,
textarea::placeholder {
  font-size: 0.9rem;
  font-weight: 300;
}
select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 10px);
  border-radius: 20px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 1px;
}

select.form-control {
  border-radius: 0;
  border-color: #ced4da;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23cccccc' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E"); */
  background-repeat: no-repeat;
  background-position: right 0.75;
}
  
</style>

     </style>
</head>
<body>
<div class="container-fluid page-body-wrapper">
          @if(session()->has('message'))
          <div class="alert alert-success">
            <Button type="button" class="close" data-dismiss="alert">x</Button>
            {{session()->get('message')}}

          </div>
          @endif
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
<div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="row mb-3">
                      <label for="inputName" class="col-sm-3 col-form-label"  >Name</label>
                      <div class="col-sm-9">
                        <input type="text"  class="form-control" id="inputName" name="name" placeholder="Enter your name" required>
                      </div>
                    </div>
                    <!-- <div class="row mb-3">
                      <label for="inputEmail" class="col-sm-3 col-form-label" >Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPhone" class="col-sm-3 col-form-label" >Phone</label>
                      <div class="col-sm-9">
                        <input type="tel" class="form-control" id="inputPhone" placeholder="Enter your phone number" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="category" class="col-sm-3 col-form-label">Select Designation</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="category" required>
                          <option value="">Choose...</option>
                          <option>Job</option>
                          <option>Internship</option>
                          
                        </select>
                      </div>
                    </div> -->
                    <div class="row mb-3">
                      <label for="category" class="col-sm-3 col-form-label">Select</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="category" name="select" required>
                          <option value="">Choose...</option>
                          <option>Food</option>
                          <option>Travel</option>
                          <option>Business</option>
                          <option> Fashion</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputMessage" class="col-sm-3 col-form-label">message</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="inputMessage" rows="4" name="message" placeholder="Enter your Content"></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputMessage"  class="col-sm-3 col-form-label">Date</label>
                      <div class="col-sm-9">

                      <input type="date" class="form-control" id="date" name="date" required>



                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="category" class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input class="w-100 mb-2" type="file"id="avatar" name="file"accept="image/png, image/jpeg">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary approch-btn  rounded-pill">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        </form>


<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>