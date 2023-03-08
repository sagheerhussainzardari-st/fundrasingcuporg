@extends('front.auth.auth')
@section('title') Become a Member @endsection
@section('content')
    <form id="form1" action="{{ route('becomeMember') }}" method="post">
        @csrf
        <section id="step1">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-5">Step 1 to 4</div>
                        <h2>Let’s start with the basics</h2>
                        <p>
                            We're here to guide you through your fundraising journey.
                        </p>
                    </div>
                    <div class="col-lg-7 sign-up-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="form-label">What's your full name?</label>
                                <input required type="name" class="bg-transparent form-control py-3" id="name"
                                       name="name" placeholder="Full Name">
                                <p class="text-danger err-field d-none" id="nameError">This Field Is Required</p>
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="form-label" style="visibility: hidden;">Email</label>
                                <input required type="email" id="email1" name="email1"
                                       class="bg-transparent form-control py-3" placeholder="Email Address">
                                <p class="text-danger err-field d-none" id="email1Error"> This Field Is Required</p>
                            </div>
                            <div class="mt-5">
                                <div class="col-lg-12">
                                    <label for="" class="form-label">Where do you live?</label>
                                    <select required class="bg-transparent form-select py-3" id="country" name="country"
                                            placeholder="Select Country" aria-label="Default select example">
                                        <option value="">Select your country</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AF">Africa</option>
                                        <option value="BE">Belgium</option>
                                        <option value="CA">Canada</option>
                                        <option value="DK">Denmark</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="IN">India</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IT">Italy</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="ME">Mexico</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NO">Norway</option>
                                        <option value="PA">Pakistan</option>
                                        <option value="PT">Portugal</option>
                                        <option value="ES">Spain</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                    </select>
                                    <p class="text-danger err-field d-none" id="countryError">Select Country</p>
                                </div>
                                <!-- <div class="col-lg-12 mt-3">
                                    <input required type="text" id="zipcode" name="zipcode"
                                           class="bg-transparent form-control py-3" placeholder="Your Country Zip Code">
                                    <p class="text-danger err-field d-none" id="zipcodeError"> This Field Is Required</p>
                                </div> -->
                                <div class="col-lg-12">
                                    <label for="" class="form-label mt-5">What are you fundraising for?</label>
                                    <input required type="text" class="bg-transparent form-control py-3"
                                           id="description" name="description"
                                           placeholder="What are you fundraising for?">
                                    <p class="text-danger err-field d-none" id="descriptionError">This Field Is Required</p>
                                </div>
                                <div class="col-lg-12 text-end mt-5">
                                    <button type="button" onclick="submitForm(1)" class="startedBtn border-0 w-100">
                                        NEXT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-none" id="step2">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <a href="javascript:void(0)" onclick="goToPreviousStep(1)"
                                       class="startedBtn border-0"><i class="fa fa-angle-left mx-2"
                                                                      aria-hidden="true"></i>Back</a>
                                </div>
                                <div class="col-lg-3">
                                    Step 2 to 4
                                </div>
                            </div>

                        </div>
                        <h2>Set your fundraising goal</h2>

                    </div>
                    <div class="col-lg-7 sign-up-form">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="" class="form-label">How much would you like to raise?</label>
                                <div class="input-group">
                                    <input required type="number" class="bg-transparent form-control py-3 amount-field"
                                           id="amount" name="amount" placeholder="Enter Amount">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text py-3 border-1 rounded-0">$</span>
                                    </div>
                                </div>
                                <p class="text-danger err-field d-none" id="amountError">This Field Is Required</p>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-8">
                                    <p>
                                        Start fundraising platform fee is 5%. Keep in mind that transaction fees,
                                        including credit and debit charges, are deducted from each donation.
                                    </p>
                                    <p class="bg-secondary p-3 border-0 rounded text-light">
                                        To receive money raised, please make sure the person withdrawing has an address
                                        and bank account in the selected country of residence.
                                    </p>
                                    <div class="col-lg-12 text-end mt-5">
                                        <button type="button" onclick="submitForm(2)"
                                                class="startedBtn border-0 w-100">NEXT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-none" id="step3">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <a href="javascript:void(0)" onclick="goToPreviousStep(2)"
                                       class="startedBtn border-0"><i class="fa fa-angle-left mx-2"
                                                                      aria-hidden="true"></i>Back</a>
                                </div>
                                <div class="col-lg-3">
                                    Step 3 to 4
                                </div>
                            </div>

                        </div>
                        <h2>Enter Bank Details</h2>

                    </div>
                    <div class="col-lg-7 sign-up-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="bank_title" class="form-label">Account Title?</label>
                                <input required type="text" class="bg-transparent form-control py-3" id="bank_title"
                                       name="bank_title" placeholder="Account Title">
                                <p class="text-danger err-field d-none" id="bank_titleError">This Field Is Required</p>
                            </div>

                            <div class="col-lg-6">
                                <label for="bank_account_no" class="form-label">Account Number?</label>
                                <input required type="number" class="bg-transparent form-control py-3" id="bank_account_no"
                                       name="bank_account_no" placeholder="Account Number">
                                <p class="text-danger err-field d-none" id="bank_account_noError">This Field Is Required</p>
                            </div>

                            <div class="col-lg-6">
                                <label for="bank_iban" class="form-label">IBAN?</label>
                                <input required type="text" class="bg-transparent form-control py-3" id="bank_iban"
                                       name="bank_iban" placeholder="IBAN">
                                <p class="text-danger err-field d-none" id="bank_ibanError">This Field Is Required</p>
                            </div>

                            <div class="col-lg-6">
                                <label for="bank_swift" class="form-label">SWIFT?</label>
                                <input required type="text" class="bg-transparent form-control py-3" id="bank_swift"
                                       name="bank_swift" placeholder="SWIFT">
                                <p class="text-danger err-field d-none" id="bank_swiftError">This Field Is Required</p>
                            </div>
                           
                           
                            <div class="col-lg-12 text-end mt-5">
                                <button type="button" onclick="submitForm(3)"
                                        class="startedBtn border-0 w-100">NEXT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        <section class="d-none" id="step4">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-5">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <a href="javascript:void(0)" onclick="goToPreviousStep(3)"
                                       class="startedBtn border-0"><i class="fa fa-angle-left mx-2"
                                                                      aria-hidden="true"></i>Back</a>
                                </div>
                                <div class="col-lg-3">
                                    Step 4 to 4
                                </div>
                            </div>

                        </div>
                        <h2>Create an account to save and continue</h2>

                    </div>
                    <div class="col-lg-7 sign-up-form">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="" class="form-label">Email Address</label>
                                <input required type="email" class="bg-transparent form-control py-3" id="email"
                                       name="email" placeholder="Email Address">
                                <p class="text-danger err-field d-none" id="emailError">This Field Is Required</p>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <label for="" class="form-label">Password</label>
                                <input required type="password" class="bg-transparent form-control py-3" id="password"
                                       name="password" placeholder="Password">
                                <p class="text-danger err-field d-none" id="passwordError"> This Field Is Required</p>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <div class="form-check">
                                    <input required class="form-check-input" type="checkbox" value="1"
                                           id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Receive tips to help you make the most of your fundraiser, and updates about
                                        important causes. Unsubscribe anytime.
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-8 text-end mt-5">
                                <button type="submit" class="startedBtn border-0 w-100">Submit</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
@section('appJs')
    <script>
        const stepOne = document.getElementById("step1")
        const stepTwo = document.getElementById("step2")
        const stepThree = document.getElementById("step3")
        const stepFour = document.getElementById("step4")

        function submitForm(stepNumber) {
            if (stepNumber === 1) {
                if (document.getElementById('name').value.trim().length === 0) {
                    document.getElementById('nameError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('nameError').classList.add('d-none')
                }
                if (document.getElementById('email1').value.trim().length === 0 || !ValidateEmail(document.getElementById('email1').value)) {
                    document.getElementById('email1Error').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('email1Error').classList.add('d-none')
                }
                if (document.getElementById('country').value.trim().length === 0) {
                    document.getElementById('countryError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('countryError').classList.add('d-none')
                }
                // if (document.getElementById('zipcode').value.trim().length === 0) {
                //     document.getElementById('zipcodeError').classList.remove('d-none')
                //     return false;
                // } else {
                //     document.getElementById('zipcodeError').classList.add('d-none')
                // }
                if (document.getElementById('description').value.trim().length === 0) {
                    document.getElementById('descriptionError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('descriptionError').classList.add('d-none')
                }
                stepOne.classList.add('d-none')
                stepTwo.classList.remove('d-none')
                stepThree.classList.add('d-none')

                $("#form1").valid();
            }
            if (stepNumber === 2) {
                if (document.getElementById('amount').value.trim().length === 0) {
                    document.getElementById('amountError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('amountError').classList.add('d-none')
                }
                stepOne.classList.add('d-none')
                stepTwo.classList.add('d-none')
                stepThree.classList.remove('d-none')
            }
            if (stepNumber === 3) {
                if (document.getElementById('bank_title').value.trim().length === 0 ) {
                    document.getElementById('bank_titleError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('bank_titleError').classList.add('d-none')
                }

                if (document.getElementById('bank_account_no').value.trim().length === 0 ) {
                    document.getElementById('bank_account_noError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('bank_account_noError').classList.add('d-none')
                }

                if (document.getElementById('bank_iban').value.trim().length === 0 ) {
                    document.getElementById('bank_ibanError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('bank_ibanError').classList.add('d-none')
                }

                if (document.getElementById('bank_swift').value.trim().length === 0 ) {
                    document.getElementById('bank_swiftError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('bank_swiftError').classList.add('d-none')
                }

               
                // if (document.getElementById('password').value.trim().length === 0) {
                //     document.getElementById('passwordError').classList.remove('d-none')
                //     return false;
                // } else {
                //     document.getElementById('passwordError').classList.add('d-none')
                // }

                stepOne.classList.add('d-none')
                stepTwo.classList.add('d-none')
                stepThree.classList.add('d-none')
                stepFour.classList.remove('d-none')
            }
            if (stepNumber === 4) {
                if (document.getElementById('email').value.trim().length === 0 || !ValidateEmail(document.getElementById('email').value)) {
                    document.getElementById('emailError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('emailError').classList.add('d-none')
                }
                if (document.getElementById('password').value.trim().length === 0) {
                    document.getElementById('passwordError').classList.remove('d-none')
                    return false;
                } else {
                    document.getElementById('passwordError').classList.add('d-none')
                }

            }
        }

        function ValidateEmail(mail)
        {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
            {
                return (true)
            }
            alert("You have entered an invalid email address!")
            return (false)
        }

        function goToPreviousStep(previousStep) {
            if (previousStep == 1) {
                stepOne.classList.remove('d-none')
                stepTwo.classList.add('d-none')
                stepThree.classList.add('d-none')
                stepFour.classList.add('d-none')

            }
            if (previousStep == 2) {
                stepOne.classList.add('d-none')
                stepTwo.classList.remove('d-none')
                stepThree.classList.add('d-none')
                stepFour.classList.add('d-none')

            }

            if (previousStep == 3) {
                stepOne.classList.add('d-none')
                stepTwo.classList.add('d-none')
                stepThree.classList.remove('d-none')
                stepFour.classList.add('d-none')
            }
        }
    </script>
@endsection
