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
                        2 to 3
                     </div>
                  </div>

               </div>
               <h2>Set your fundraising goal</h2>

            </div>
            <div class="col-lg-7 sign-up-form">
               <div class="row">
                  <form class="row" onsubmit="submitDonation(event)">
                     <div class="col-lg-8">
                        <label for="" class="form-label">How much would you like to raise?</label>
                        <div class="input-group">

                           <input required type="number" class="bg-transparent form-control py-3 amount-field" id="" placeholder="Enter Amount">
                           <div class="input-group-prepend">
                              <span class="input-group-text py-3 border-1 rounded-0">$</span>
                           </div>
                        </div>
                        <p class="text-danger err-field d-none" id="first-name">This Field Is Required</p>
                     </div>

                     <div class="row mt-3">
                        <div class="col-lg-8">
                           <p>
                              Start fundraising platform fee is 5%. Keep in mind that transaction fees, including credit and debit charges, are deducted from each donation.
                           </p>
                           <p class="bg-secondary p-3 border-0 rounded text-light">
                              To receive money raised, please make sure the person withdrawing has an address and bank account in the selected country of residence.
                           </p>
                           <div class="col-lg-12 text-end mt-5">
                              <button type="submit" class="startedBtn border-0 w-100">NEXT</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
<script>
   function submitDonation(event) {
      event.preventDefault()
      console.log(1, event.target)
      const formData = new FormData(event.target)
      window.location.href = "create-accont.php"

   }
</script>

</html>
