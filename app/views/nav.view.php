    <main class="container-fluid main">
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
                        <?php if(!Auth::logged_in()):?>
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
                        <?php else: ?>
                        <li  class="nav-item">
                            <a class="dropdown-itemj nav-link text-light" style="white-space: nowrap;"
                                href="<?php echo ROOT?>/logout" class="text-dark">LogOut(<?php echo Auth::getUsername()?>)</a>
                        </li>

                        <?php endif;?>
                        <li class="nav-item">
                           <?php if(Auth::is_admin()):?>
                            <a class="dropdown-itemj nav-link text-light" style="white-space: nowrap;"
                                href="<?php echo ROOT?>/admin/route" class="text-dark">Dashboard</a>
                            <?php endif;?>
                        </li>
                        <li class="nav-item">
                          
                            <a class="dropdown-itemj nav-link text-light" style="white-space: nowrap;"
                                href="<?php echo ROOT?>/bookings" class="text-dark">MY BOOKINGS</a>
                           
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
  