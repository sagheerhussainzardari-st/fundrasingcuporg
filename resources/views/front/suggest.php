<?php include 'CommonFile/header.blade.php'; ?>
<section class="discoverSection01">
   <div class="container">
      <div class="col-lg-10 mt-5 mb-5 pt-5">
         <div class="discoverMainBanner">
            <a class="backBtn" href="help_center.blade.php"><i class="fa fa-angle-left"></i> Help Center</a>
            <h1 class="mb-0"><b>Contact Us</b></h1>
            <div class="row mt-5">
               <div class="col-lg-9 m-auto">
                  <div class="row">
                     <div class="col-lg-8">
                        <label class="mb-2" for="describe-fund-raising">Which best describes you?</label>
                        <select class="form-select py-2 mb-3" id='describe-fund-raising' aria-label="Default select example">
                           <option value=""></option>
                           <option value="7498">Running a fundraiser</option>
                           <option value="7502">Accessing funds</option>
                           <option value="7504">Making or managing a donation</option>
                           <option value="7506">Reporting a concern or press inquiry</option>
                        </select>
                        <label class="mb-2" for="fundraiser">Running a fundraiser</label>
                        <select class="form-select py-2 mb-3" id="fundraiser" aria-label="Default select example">
                           <option value=""></option>
                           <option value="7508">Getting started</option>
                           <option value="7510">Sharing and managing your fundraiser</option>
                           <option value="7512">Managing funds</option>
                        </select>
                     </div>
                     <div class="col-lg-4">
                        <h4 class="">Self-Service</h4>
                        <hr>
                        <p>
                           For customized help, please sign in.
                        </p>
                        <a href="sign-in.php" class="see-all">Sign In</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'CommonFile/footer.blade.php'; ?>
