@extends('frontend.Layouts.main')

@section('main-section')

       <!--====== App Content ======-->
       <div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="index.html">Home</a></li>
                        <li class="is-marked">

                            <a href="signup.html">Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row row--center">
                <div class="col-lg-6 col-md-8 u-s-m-b-30">
                    <div class="l-f-o">
                        <div class="l-f-o__pad-box">
                            <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                            <form class="l-f-o__form" action="{{url('/')}}/store" method="post">
                                @csrf
                                <div class="gl-s-api">
                                    <div class="u-s-m-b-15">

                                        <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                            <span>Signup with Facebook</span></button></div>
                                    <div class="u-s-m-b-30">

                                        <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                            <span>Signup with Google</span></button></div>
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                    <input class="input-text input-text--primary-style" name="fname" type="text" id="reg-fname" placeholder="First Name">
                                    <span class="text-danger">
                                        @error('fname')
                                            {{ $message }}
                                        @enderror
                                    </span></div>
                                <div class="u-s-m-b-30">
        

                                    <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                    <input class="input-text input-text--primary-style" type="text" name="lname" id="reg-lname" placeholder="Last Name">
                                    <span class="text-danger">
                                        @error('lname')
                                            {{ $message }}
                                        @enderror
                                    </span></div>
                                    
                                <div class="gl-inline">
                                    <div class="u-s-m-b-30">

                                        <!--====== Date of Birth Select-Box ======-->

                                        <span class="gl-label">BIRTHDAY</span>
                                        <div class="gl-dob">
                                        <input class="input-text input-text--primary-style" name="dob" type="date" id="reg-date" placeholder="Enter dob">
                                            <!-- <select class="select-box select-box--primary-style">
                                                <option selected>Month</option>
                                                <option value="male">January</option>
                                                <option value="male">February</option>
                                                <option value="male">March</option>
                                                <option value="male">April</option>
                                            </select><select class="select-box select-box--primary-style">
                                                <option selected>Day</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                            </select><select class="select-box select-box--primary-style">
                                                <option selected>Year</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                            </select> -->
                                        </div>
                                        <!--====== End - Date of Birth Select-Box ======-->
                                    </div>
                                    <div class="u-s-m-b-30">

                                        <label class="gl-label"  for="gender">GENDER</label>
                                        <select name="gender" class="select-box select-box--primary-style u-w-100" id="gender">
                                            <option value="">Select </option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="reg-email">E-MAIL *</label>

                                    <input class="input-text input-text--primary-style" name="email" type="text" id="reg-email" placeholder="Enter E-mail">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="reg-password">PASSWORD *</label>

                                    <input class="input-text input-text--primary-style" name="password" type="text" id="reg-password" placeholder="Enter Password">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="u-s-m-b-15">

                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button></div>

                                <a class="gl-link" href="/">Return to Store</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->

@endsection