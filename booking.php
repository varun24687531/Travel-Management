

    <!-- Booking Start -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/boost.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet"> 

    
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text- white ">
                        <h6 class="text- white  text-uppercase">Booking</h6>
                        <h1 class="text- white  mb-4">Online Booking</h1>
                        <p class="mb-4"> Book a travel with us and make a wonderful moment </p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text- white  mb-4">Book A Tour</h1>
                        <form method="post" action="booktable.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" name="name" id="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class=" ol-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent"  name="email" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control bg-transparent datetimepicker-input" name="date" id="datetime"required placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="tel" class="form-control bg-transparent datetimepicker-input" name="number" id="datetime"required placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">phone number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" name="message" placeholder="Special Request" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Other option</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->