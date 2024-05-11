<?php $this->view('header') ?>
   <?php $this->view('nav')?>

  
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
                <div class="col-md-11 ">

                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <?php if(!empty($bookings)):?>
                                <h3><strong>Here's your Booking History</strong></h3>
                                
                                <div class="mt-3 table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="white-space: nowrap;">From-Station</th>
                                        <th style="white-space: nowrap;">To-Station</th>
                                        <th style="white-space: nowrap;">Booking-Date</th>
                                        <th style="white-space: nowrap;">Start Date</th>
                                        <th style="white-space: nowrap;">Stop Date</th>
                                        <th style="white-space: nowrap;">QR-CODE</th>
                                         <th style="white-space: nowrap;">Download QR-CODE</th>

                                    </tr>
                                    <?php foreach($bookings as $row): ?>
                                    <tr>
                                        <td style="white-space: nowrap;"><?php echo esc($row->fromStation)?></td>
                                        <td style="white-space: nowrap;"><?php echo esc($row->toStation)?></td>
                                        <td style="white-space: nowrap;"><?php echo esc($row->date)?></td>
                                        <td style="white-space: nowrap;"><?php echo esc($row->startDate)?></td>
                                        <td style="white-space: nowrap;"><?php echo esc($row->stopDate)?></td>
                                        <td><img src="<?php echo ROOT?>/assets/<?php echo $row->qrpath?>" /></td>
                                        <td>
                                            <a class="text-info me-3" href="<?php echo ROOT?>/assets/<?php echo $row->qrpath?>" download="<?php echo $row->qrpath?>">Download</a>
                                            <a class="text-info" href="<?php echo ROOT?>/assets/<?php echo $row->qrpath?>">View QR</a>
                                        </td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                                </div>
                                <?php else :?>
                                    <div class="mt-3 text-center">
                                        Empty Record
                                    </div>
                                <?php endif;?>



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