<?php $this->view('header') ?>


<!-- <section  class="mt-md-5">
    <div class="container">
        <div class="row">
     
            <div class="col-md-12 ">
                <div class="card w-50 mx-auto "
                 style="
                    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
                    ">
                    <form method="POST" class="card-body">
                         <?php if(!empty($errors['email'])):?>
                        <div class="text-danger"><?php echo $errors['email']?></div>
                     <?php endif; ?>  


                            <label for="email">Enter Email</label>
                        <input type="text" id="email" name="email" class="form-control mt-2" />
                          <div class="form-outline mt-2">
                            <label for="password">Enter Password</label>
                        <input type="password" id="password"  name="password" class="form-control mt-2 mb-4" />

                       <button type="submit" class="btn w-100 btn-primary btn-block mb-4">
                        Login
                        </button>
                        <div class="mb-4" >
                           <a style="color:#993133 !important;" href="<?php echo ROOT ?>/forgot"> Forgotten your password?</a>
                        </div>
                        <div class="text-center">
                         <span><a  href="signup">Sign Up</a></span>
                        </div>

                        </div>
                    </form>
                </div>
         

            </div>
        </div>
    </div>
</section> -->

<main class="container-fluid main">
        <?php $this->view('nav')?>

        <div class="container">
            <div class="row  cardk card-shadow mt-5">
                <div class="col-md-6 ">
                    <!-- <div class="swiper">
                        <div class="swiper-login olx">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card xol p-1 ">
                                        <img src="./BasiGo.jpg" alt="" class="img-fluid img-olx">
                                        <div class=" px-2  text-start mt-2 ">

                                            <p>Lorem ipsum dolor sit amet.
                                            </p>
                                            <div>
                                                <a class="btn btn-primary" href="">METRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card xol p-1 ">
                                        <img src="./1.jpg" alt="" class="img-fluid img-olx">
                                        <div class=" px-2  text-start mt-2 ">

                                            <p>Lorem ipsum dolor sit amet.
                                            </p>
                                            <div>
                                                <a class="btn btn-primary" href="">METRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card xol p-1 ">
                                        <img src="./2.webp" alt="" class="img-fluid img-olx">
                                        <div class=" px-2  text-start mt-2 ">

                                            <p>Lorem ipsum dolor sit amet.
                                            </p>
                                            <div>
                                                <a class="btn btn-primary" href="">METRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card xol p-1 ">
                                        <img src="./1.jpg" alt="" class="img-fluid img-olx">
                                        <div class=" px-2  text-start mt-2 ">

                                            <p>Lorem ipsum dolor sit amet.
                                            </p>
                                            <div>
                                                <a class="btn btn-primary" href="">METRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-navBtn text-dark"></div>
                        </div>
                    </div> -->

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- <img src="./1.jpg" class="d-block w-100" alt="..."> -->
                                <div class="card" style="height:35rem !important ;">
                                    <div class="card-body p-5 text-center">
                                        <div class="card-text">
                                            <div class="mt-5 mb-5">
                                                <div class="mt-4">
                                                    <h2 class="h1 text-primary">What's New</h2>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mb-4">
                                                <h3 class="text-primary ext-uppercase">OFFERS</h3>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <span>
                                                Offers and Discounts on using online services may be provided time to
                                                time. Offers & discounts are subjected to administrative decision and
                                                cannot be challenged.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="height:35rem !important ;">
                                    <div class="card-body p-5 text-center">
                                        <div class="card-text">
                                            <div class="mt-5 mb-5">
                                                <h2 class="h1 text-primary">What's New</h2>
                                            </div>
                                            <hr>
                                            <div class="mb-4">
                                                <h3 class="text-primary ext-uppercase">Wallet </h3>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <span>
                                                For ease of booking traveler, wallet facility is provided to our
                                                travelers.
                                                Now you can top up your wallet once and use it whenever you are booking
                                                a
                                                ticket on portal/mobile app.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="height:35rem !important ;">
                                    <div class="card-body p-5 text-center">
                                        <div class="card-text">
                                            <div class="mt-5 mb-5">
                                                <h2 class="h1 text-primary">What's New</h2>
                                            </div>
                                            <hr>
                                            <div class="mb-4">
                                                <h3 class="text-primary ext-uppercase">Track Bus </h3>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <span>
                                                Track my bus feature enables our on-the-go customers and their families
                                                to
                                                keep track of the bus location. You can track your bus on a map and use
                                                the
                                                information to plan your commute to the boarding point and to get off at
                                                the
                                                right stop. Family members and friends can also check the bus location
                                                to
                                                coordinate pick-ups and rest assured about your safety.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="height:35rem !important ;">
                                    <div class="card-body p-5 text-center">
                                        <div class="card-text">
                                            <div class="mt-5 mb-5">
                                                <h2 class="h1 text-primary">What's New</h2>
                                            </div>
                                            <hr>
                                            <div class="mb-4">
                                                <h3 class="text-primary ext-uppercase">e-Ticket </h3>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <span>
                                                Now e-ticket, which is digital ticket, will be valid to travel in our
                                                buses. Permission to travel will be subjected to verification of
                                                identity of the travelers by KTC staff.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card">
                    <div class="card" style="height:35rem !important ;">
                        <div class="card-body p-5 text-center">
                            <div class="card-text">
                                <div class="mt-5 mb-5">

                                    <h2 class="h1 text-primary">Traveller Login</h2>

                                </div>
                                <?php if(!empty($errors['email'])):?>
                                    <div class="text-danger"><?php echo $errors['email']?></div>
                                <?php endif; ?>  
                                <hr>
                                <div class="mb-4">
                                    <div class="text-dark ext-uppercase">Please Login details</div>
                                </div>
                            </div>
                            <form method="POST" class="mb-5">
                                <div class="input-group">
                                    <span class="input-group-text">Email Address</span>
                                    <input style="outline: 2px solid transparent !important;" type="email" name="email"
                                        placeholder="Enter Email" class="form-control">
                                    <span class="input-group-text">Password</span>
                                    <input style="outline: 2px solid transparent !important;" type="password" name="password"
                                        placeholder="Enter password" class="form-control">



                                </div>
                                <div class="mt-4">
                                    <input class="btn btn-primary w-100" type="submit" value="submit" class="form-control">
                                </div>
                                <br><br><br>
                                <a style="color:blue;" href="<?php echo ROOT?>/signup"><span style="color:blue;">Create new Account</span></a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </main>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>





















