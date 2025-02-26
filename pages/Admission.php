<figure class="text-center">
  <blockquote class="blockquote">
    <p class="h1 text-primary">BrainWare University Admission Form !</p>
  </blockquote>
</figure>
<form class="w-50 mb-5 card p-4 bg-success p-2 text-dark bg-opacity-25" method="POST" action="./pages/AdmissionController.php" style="margin: 0 auto;">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="staticEmail" name="name" required>
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="staticEmail" name="email" required>
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="staticEmail" name="address" required>
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Pin</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="staticEmail" name="pin" required>
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="staticEmail" name="phone" required>
    </div>
  </div>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-5">
      <input type="radio"  id="staticEmail" value="Male" name="gender"> Male
      <input type="radio"  id="staticEmail" value="Female" name="gender">Female
      <input type="radio"  id="staticEmail" value="Others" name="gender">Others
    </div>
  </div>
  <label for="inputdob" class="col-sm-2 col-form-label">Select State</label>
  <select class="form-select col-5" aria-label="Default select example" name="state" required>
  <option class="col-5" selected>--Select State--</option>
  <option class="col-5" value="AndhraPradesh">Andhra Pradesh</option>
  <option class="col-5" value="WestBengal">West Bengal</option>
  <option class="col-5" value="Maharastra">Maharastra</option>
</select>
<label for="inputdob" class="col-sm-5 col-form-label">Date of Birth</label>
  <div class="mb-3 row">
    <div class="col-sm-5">
      <input type="date" class="form-control" id="inputdob" name="date">
    </div>
  </div>
  <label for="inputdob" class="col-sm-5 col-form-label">Last Year of Passout</label>
  <select class="form-select mb-3 col-sm-5" aria-label="Default select example" name="lyp" required>
  <option selected>--Select Year--</option>
  <option value="2024">2024</option>
  <option value="2023">2023</option>
  <option value="2022">2022</option>
</select>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="password" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="cpassword" required>
    </div>
  </div>
  <div class="text-center mb-5"><button type="submit" class="btn btn-primary">Apply Here</button></div>
  
 </form>