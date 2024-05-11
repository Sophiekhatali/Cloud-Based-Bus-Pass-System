<?php $this->view('header')?>

    <main class="container-fluid bg-dark">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo ROOT?>">
                    <div class="icon">
                        <h2 class="logo">KTC</h2>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo ROOT?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link line-break" href="<?php echo ROOT?>/about">ABOUT <br />
                                US</a>
                        </li>

                        <li class="nav-item dropdown">
                            <!-- Added dropdown class -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ANY <br>QUERY?
                                <!-- Changed from a simple link to a dropdown toggle -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Dropdown items for login -->
                                <li><a class="dropdown-itemj nav-link text-dark" style="white-space: nowrap;"
                                        href="<?php echo ROOT ?>/contactUs" class="text-dark">Contact Us</a>
                                </li>
                                <li><a class="dropdown-iteml nav-link text-dark" href="<?php echo ROOT?>/helpDesk">Helpdesk</a></li>
                                <!-- <li><a class="dropdown-iteml nav-link text-dark" href="LoginD">Grievance</a></li> -->
                                <!-- Add more login options as needed -->
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <!-- Added dropdown class -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ONLINE<br />
                                SERVICE
                                <!-- Changed from a simple link to a dropdown toggle -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Dropdown items for login -->
                                <li><a class="dropdown-itemj nav-link text-dark" style="white-space: nowrap;"
                                        href="<?php echo ROOT?>/bookticket" class="text-dark">Search & Book</a>
                                </li>
                                <li><a class="dropdown-iteml nav-link text-dark" href="LoginD">Cancel Ticket</a></li>
                                <li><a class="dropdown-iteml nav-link text-dark" href="<?php echo ROOT?>/bookings">Download QR</a></li>
                                <li><a class="dropdown-iteml nav-link text-dark" href="<?php echo ROOT?>/busTimetable">Bus Timetable</a></li>
                                <!-- Add more login options as needed -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- Added dropdown class -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                LOGIN
                                <!-- Changed from a simple link to a dropdown toggle -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Dropdown items for login -->
                                <li><a class="dropdown-itemj nav-link text-dark" style="white-space: nowrap;"
                                        href="<?php echo ROOT?>/login" class="text-dark">Traveller Login</a>
                                </li>
                                <li><a class="dropdown-iteml nav-link text-dark" href="<?php echo ROOT?>/departmentLogin">Department Login</a></li>
                                <!-- Add more login options as needed -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div href="" class="text-dark">
                                <input class="srch" type="search" name="" placeholder="Type To text" />
                                <a href="#"> <button class="btnh">search</button></a>
                            </div>
                        </li>
                        <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li> -->
                    </ul>
                </div>
            </div>
        </nav>

    </main>
    <section class="container px-5 mt-5 h3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="text-dark" href="#">Home</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page"> Book Ticket</li>
            </ol>
        </nav>
    </section>
    <section class="container mt-5 px-5">
        <div class="text-primary h3 " style="white-space: nowrap">
            <strong>Search & Book Ticket</strong>
        </div>
        <div class="form-css card mx-auto">
            <div class="card-body mx-auto d-flex">
                <div class="row">
                    <div class="col-md-4">
                         <input type="text" id="searchInput1" placeholder="Search for From-Station..." class="form-control mb-3">
                    </div>
                    <div class="col-md-3">
                        <input type="text" id="searchInput2" placeholder="To Station" class="form-control mb-3" />
                    </div>
                    <div class="col-md-3">
                        <input type="date" id="searchInput3" class="form-control mb-3" />
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="form-control cn2 mb-3" value="WELCOME TO KTC" />
                    </div>
                </div>
            </div>
        </div>
        <div class="m">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="mt-5">
                        <h4><strong>Popular Routes</strong></h4>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                    <input class="form-control mb-3" type="text" id="searchInput" placeholder="Search for From-Station...">
                            <br><br>
                         <?php if(!empty($routes)): ?>
                        <table id="routesTable" class="table">
                            <tr>
                                <th style="white-space: nowrap;">From-Station</th>
                                <th style="white-space: nowrap;">To-Station</th>
                                <th style="white-space: nowrap;">Start Date</th>
                                <th style="white-space: nowrap;">Stop Date</th>
                                <th style="white-space: nowrap;">Stop Date</th>
                            </tr>
                            <?php foreach($routes as $row): ?>
                            <tr>
                                <td style="white-space: nowrap;"><?php echo esc($row->fromStation)?></td>
                                <td style="white-space: nowrap;"><?php echo esc($row->toStation)?></td>
                                <td style="white-space: nowrap;"><?php echo esc($row->startDate)?></td>
                                <td style="white-space: nowrap;"><?php echo esc($row->stopDate)?></td>
                                <td><a class="text-info" href="<?php echo ROOT?>/payment/<?php echo $row->id?>">BOOK</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-5">
                        <h4><strong>Exclusive Offers</strong></h4>
                    </div>
                    <div class="card ">
                        <div class="card-body text-center p-5">
                            <h4>Discount/Offers will be available soon.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container p-5 mb-5">
        <strong>Payment Method & Payment Partners</strong>
        <div class="mt-4">
            <strong class="h2" style="color: green;">M-Pesa</strong>
        </div>
    </section>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("searchInput").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("routesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Search only in the first column (From-Station)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    });
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("searchInput1").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("routesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Search only in the first column (From-Station)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    });
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("searchInput2").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("routesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Search only in the first column (From-Station)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    });
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("searchInput3").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput3");
            filter = input.value.toUpperCase();
            table = document.getElementById("routesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Search only in the first column (From-Station)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    });
</script>

</html>