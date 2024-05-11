<?php $this->view("header") ?>
<body>

<?php $this->view('nav') ?>
      <section class="container">
            <h1 class="content-h1">
                Khatali's Transport <br /><span>Corporation</span>
            </h1>
            <span class="par">A company that provides safe, and efficient transport services for
                passengers in one portal.</span>

            <br />
            <a class="cn btn" href="#">JOIN US</a>

            <marquee class="text-light mt-5" behaviour="right" direction="">Ngong - Nairobi route 111 | Kikuyu - Nairobi
                highway 105 | Nairobi -
                Ktengela route 110 | Nairobi - Juja route 236 | Nairobi - Thika -
                Makongeni route 237</marquee>

            <div class="text-primary h3" style="white-space: nowrap">
                <strong>Search & Book</strong>
            </div>
            <div style="background: transparent !important; border: 1px solid #ff7200" class="form-css card mx-auto">
                <div class="card-body mx-auto d-flex">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" placeholder="From" class="form-control w-100 mb-3" />
                        </div>
                        <div class="col-md-3">
                            <input type="text" placeholder="To" class="form-control mb-3" />
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control mb-3" />
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="form-control cn2 mb-3" value="SEARCH" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <section class="p-md-4">
        <div class="container  text-center">
            <h5><strong class="text-primary">WHAT WE OFFER</strong></h5>
            <h1 class="p-2 fw-bold">Bus Services</h1>
            <div class=" p-1 py-2 swiper  ">
                <div class="swiper-olx olx">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="card xol p-1 ">
                                <img src="<?php echo ROOT?>/assets/img/IMG-20240227-WA0026.jpg " alt="" class=" img-fluid img-olx">
                                <div class=" px-2  text-start mt-2 ">

                                    <p>
                                    </p>
                                    <div>
                                        <a class="btn btn-primary" href="">EMBASSAVA
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card xol  p-1 ">
                                <img src="<?php echo ROOT?>/assets/img/BasiGo.jpg" alt="" class="img-fluid img-olx">
                                <div class=" px-2  text-start mt-2 ">

                                    <P></P>
                                    <div>
                                        <a class="btn btn-primary" href="">BASI GO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card xol  p-1">
                                <img src="<?php echo ROOT?>/assets/img/2.webp" alt="" class="img-fluid img-olx">
                                <div class=" px-2  text-start mt-2 ">

                                    <p>
                                    </p>
                                    <div>
                                        <a class="btn btn-primary" href="">CITI HOPPA</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="card xol  p-1 ">
                                <img src="<?php echo ROOT?>/assets/img/IMG-20240227-WA0027.jpg" alt="" class="img-fluid img-olx">
                                <div class=" px-2  text-start mt-2 ">

                                    <P></P>
                                    <div>
                                        <a class="btn btn-primary" href="">SUPER METRO</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn text-dark"></div>
                </div>

            </div>

        </div>
    </section>
    <section class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold ">
                Frequently Asked Questions
            </h1>
        </div>
        <div class="">
            <div class=" card card-body">
                <!--START-->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Booking</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Bus Pass</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Payment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled"
                            aria-selected="false">Refund</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How many passengers travel with single reservation e-ticket?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>Maximum of six seats can be booked on a single e-ticket. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        I have lost my ticket what do I do now?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            A copy of the ticket would have been sent to you by e-mail when you
                                            booked the
                                            ticket.
                                            Please take a printout of that mail and produce it at the time of
                                            boarding. If you
                                            have
                                            not received your ticket to the mail ID you provided, we have flexibility
                                            that you
                                            will
                                            receive a message directly to your mobile from KTC immediately after
                                            booking ticket,
                                            you
                                            can give the PNR Number in website and you can take a printout.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How many days before can I reserve e-ticket?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            You can reserve your e-ticket through internet before one month from
                                            expected
                                            journey date excluding date of
                                            journey. Seat reservation booking facility will be closed before hour on
                                            proposed
                                            journey date and schedule
                                            departure time of bus service.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Is it mandatory to take a printout of the e-ticket?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            The SMS that is sent to your registered mobile can be produced at the
                                            time of
                                            boarding and
                                            you will be allowed to travel with valid photo ID proof. You need to show
                                            any ID
                                            proof
                                            Driving License, Voter ID, Passport, PAN Card, and AADHAR Card to the
                                            conductor.
                                            Within the
                                            time period specified in the ticket details SMS.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How many types of Bus pass KTC providing?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>We have three Bus Pass Categories Monthly Pass Government Pass Employee
                                            Bus Pass for the KTC employees and their famliy members </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How can I get a bus pass?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            You can visit our Bus pass section under httpsKTConline.uk.gov.in portal.
                                            You
                                            can get all the authorised bus pass type list is available.You can click on
                                            the
                                            the New Pass section. Fill all the details asked to you.You can use
                                            following
                                            payment mode Credit,Debit, Netbanking and UPI .
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How to check my bus pass application status
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            You can visit home page of web portal and select bus pass check application
                                            status
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Do I Have to pay extra when compared to buying the tickets in the traditional I
                                        way?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>KTC does not charge anything extra when compared to the traditional way.
                                            The tickets are absolutely at the same cost only payment gateway charges
                                            will be extra.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        What credit/debit cards do you accept?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            We accept the following Credit cards • Visa. • MasterCard.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        I dont have a credit card can I still buy tickets at KTC?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            Yes. You dont necessarily need to have a Credit card to buy tickets on KTC.
                                            You
                                            can buy tickets through Debit Card or Net Banking also.
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                        tabindex="0">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Is Payment Gateway Service charges refunded ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>Payment Gateway Service charges will not be refunded for service
                                            cancellation/ failure transactions in e-ticketing. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-primary collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        What happen in case of breakdown is ticket amount refunded?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span>
                                            In case of technical / Break Down problem, the traveler will be allowed to
                                            travel in other KTC buses or refund will be made for the remaining journey.
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <!--END-->


            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo ROOT?>/assets/js/script.js"></script>

</html>