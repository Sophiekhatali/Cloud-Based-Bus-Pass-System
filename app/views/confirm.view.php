<?php $this->view('header') ?>
   <?php $this->view('nav')?>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

  body {
    background-color: #eaedf4;
    font-family: "Rubik", sans-serif;
  }

  .card {
    pwidth: 310px;
    border: none;
    border-radius: 15px;
  }

  .justify-content-around div {
    border: none;
    border-radius: 20px;
    background: #f3f4f6;
    padding: 5px 20px 5px;
    color: #8d9297;
  }

  .justify-content-around span {
    font-size: 12px;
  }

  .justify-content-around div:hover {
    background: #545ebd;
    color: #fff;
    cursor: pointer;
  }

  .justify-content-around div:nth-child(1) {
    background: #545ebd;
    color: #fff;
  }

  span.mt-0 {
    color: #8d9297;
    font-size: 12px;
  }

  h6 {
    font-size: 15px;
  }

  .mpesa {
    background-color: green !important;
  }

  img {
    border-radius: 15px;
  }


  .price h1 {
    font-weight: 300;
    color: #18C2C0;
    letter-spacing: 2px;
    text-align: center;
  }

</style>
  
    <section class="container px-5 mt-5 h3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="text-dark" href="#">Home</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page"> TICKET</li>
            </ol>
        </nav>
    </section>
    <section class="container mt-5 px-5">
        <div class="m">
            <div class="row">
                <div class="col-md-8 ">

                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h3><strong>Here's your ticket!</strong></h3>
                                
                                <div class="mt-3">

                            








                                <div class="container" style="margin-top:8rem; margin-bottom:5rem;">
  <div class="row">
    <div class="col-md-12 text-center ">
      <div class="price mb-3">
       
          <?php if(!empty($total)): ?>
        <h1 class="text-dark">Awesome, that's KES <?php echo " ".$total?></h1>
        <?php endif; ?>
      </div>

      <?php if(!empty($errors)):?>
        <span class="alert alert-danger">
          <?php echo $errors['phone']?>
      </span>
      <?php endif;?>
      <div><span class="fw-bold text-warning">Lipa na </span>
        <img style="width:10rem;" src="<?php echo ROOT?>/assets/img/1200px-M-PESA_LOGO-01.svg.png" class="img-fluid "
          alt="">
      </div>

      <div class="btn mb-2" style="background-color: #242852 !important; margin-top: 30px;
        font-size:0.7rem;
        
        margin:auto;
        ">
        <p style="color:#8F92C3;line-height:1.7;">1. Enter the <b>phone number</b> and press "<b>Confirm and
            Pay</b>"</br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
      </div>


     <form method="post" style="width:300px; margin:auto;">
        <div>
          
          <input id="phone" style="margin:auto;" placeholder="Enter phone number" type="text" name="phone" class="form-control  mt-2 mb-3" required>
        </div>

        <input name="submit" class="btn"  style="  font-size: 1.2rem;
        font-weight: 400;
        letter-spacing: 1px;
      
        background-color: #18C2C0 !important;
        border: none;
        color: #fff;" type="submit" value="Confirm and Pay">

    </form>
    
  

    </div>
  </div>

  <div class="col-md-7">



 






</div>
</div>





















                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <h4>Counter Enquiry</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</html>