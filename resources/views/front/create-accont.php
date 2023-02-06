<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include 'CommonFile/css.blade.php'; ?>
   <title>Sign Up</title>
   <style>


   </style>
</head>

<body>
   <section class="mt-4">

      <div class="container">
         <div class="row">
            <div class="col-6 col-lg-3 m-auto ms-0">
               <a class="brandong-logo" href="home.blade.php"><img class="w-100" src="Assets/Images/logo/mainLogo.png" alt="Assets/Images/logo/mainLogo.png"></a>

            </div>
            <div class="col-6 col-lg-4 text-end me-0 m-auto">
               <div>
                  <a href="sign-in.php" class="see-all">Sign In </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="container mt-5 pt-5">
         <div class="row">
            <div class="col-lg-5">
               <div class="mb-5">
                  <div class="row align-items-center">
                     <div class="col-lg-3">
                        <a href="javascript:void(0)" onclick="history.back()" class="startedBtn border-0"><i class="fa fa-angle-left mx-2" aria-hidden="true"></i>Back</a>
                     </div>
                     <div class="col-lg-3">
                        3 to 3
                     </div>
                  </div>

               </div>
               <h2>Create an account to save and continue</h2>

            </div>
            <div class="col-lg-7 sign-up-form">
               <div class="row">
                  <form class="row" onsubmit="submitform(event)">
                     <div class="col-lg-8">
                        <label for="" class="form-label">Email Address</label>
                        <input required type="email" class="bg-transparent form-control py-3" id="" placeholder="Email Address">
                        <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                     </div>
                     <div class="col-lg-8 mt-4">
                        <label for="" class="form-label">Password</label>
                        <input required type="password" class="bg-transparent form-control py-3" id="" placeholder="Password">
                        <p class="text-danger err-field d-none" id="last-name"> This Field Is Required</p>
                     </div>
                     <div class="col-lg-8 mt-4">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                           <label class="form-check-label" for="flexCheckDefault">
                              Receive tips to help you make the most of your fundraiser, and updates about important causes. Unsubscribe anytime.
                           </label>
                        </div>
                     </div>
                     <div class="col-lg-8 text-end mt-5">
                        <button type="submit" class="startedBtn border-0 w-100">NEXT</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
<script>
   function submitform(event) {
      event.preventDefault()
      console.log(1, event.target)
      const formData = new FormData(event.target)
      // window.location.href = "goal.php"
   }
</script>

</html>
