<footer>
    <div id="content">
        <!-- Your existing content goes here -->
    </div>

    <div class="footer-main sec-padd2" style="background-color: #433361;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <div class="logo-part">

                            <img id="al" src="" aria-label="logo" loading="lazy">

                        </div>
                        <p class="footer-words" id="foot">
                        </p>
                        <ul id="social-links" class="list-inline footer-social">
                            <li><a href="" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" aria-label="Google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>


                    </div>
                </div>
                <div class="" style="position: fixed; left: 0px; bottom: 7%; z-index: 999;">
                    <div class="text-center">
                        <div style="display: flex; flex-direction: column;">
                            <a id="whatsappLink" href="" target="_blank">
                                <img src="{{ asset('public/machine/images/w1-removebg-preview.png') }}" alt="Image Not Found" style="height: 60px; width: 60px;">
                            </a>
                            <a id="phoneLink" href="">
                                <img src="{{ asset('public/machine/images/w2-removebg-preview.png') }}" alt="Image Not Found" style="height: 45px; width: 45px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h3 class="footer-title">Services</h3>
                        <ul class="footer-list" id="add">

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="footer-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/home') }}">About Us</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>

                            <li><a href="{{ url('/blog') }}">Blogs</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <h3 class="footer-title">Contact Details</h3>
                        <div class="footer-widget contact-column">

                            <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h4 style="color:wheat;">Address</h4>
                                        <p id="address"></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h4 style="color:wheat;">Call Us On</h4>
                                        <p id="dnumber"></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="icon-letter-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h4 style="color:wheat;">Mail Us @</h4>
                                        <p id="mail"></p>
                                    </div>
                                </li>
                            </ul>
                            jeasus please help me.i could not survive this world.so i want come where you are.so please
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="copyright">© 2024 all rights reserved</p>
                </div>
                <div class="col-md-9">
                    <nav class="footer-menu pull-right">
                        <ul class="list-inline">
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li><a href="{{ url('/service') }}">services</a></li>
                            <li>term &amp; condition</li>
                            <li>privacy policy</li>
                            <li><a href="{{ url('/contact') }}">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="loader"></div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Spin.js CDN -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Fetch the logo from the server and update
        function fetchAndUpdateLogo() {
            // Fetch the logo from the server
            $.ajax({
                url: '{{ route("header") }}',
                                type: 'GET',
                success: function(response) {
                    if (response.image) {
                        // Update the logo
                        updateLogo(response.image);
                        // Store the new logo URL in local storage
                        localStorage.setItem('logo', response.image);
                    } else {
                        console.error('No image found');
                    }
                },
                error: function(error) {
                    console.error('Error fetching logo:', error.responseText);
                }
            });
        }

        // Update the logo with the provided URL
        function updateLogo(imageUrl) {
            $('#al').attr('src', imageUrl);
            $('#al1').attr('src', imageUrl);
            $('link[rel="shortcut icon"]').attr('href', imageUrl); // Update favicon
        }

        // Fetch logo from local storage if available
        var storedLogoUrl = localStorage.getItem('logo');
        if (storedLogoUrl) {
            updateLogo(storedLogoUrl);
        } else {
            // Fetch and update the logo from the server
            fetchAndUpdateLogo();
        }

        // Set up an interval to periodically check for logo updates
        setInterval(fetchAndUpdateLogo, 10000); // Adjust the interval as needed
    });



    $(document).ready(function() {
        // Define a function to fetch profile data
        function fetchProfileData() {
            $.ajax({
                url: '{{ route("profile") }}',            
                    type: 'GET',
                success: function(response) {
                    if (response) {
                        // Update the HTML content with profile data
                        $('#address').text(response.profile.address);
                        $('#dnumber').text(response.profile.dnumber);
                        $('#mail').text(response.profile.mail);
                        var whatsappLink = 'whatsapp://send?phone=' + response.profile.wnumber;
                        $('#whatsappLink').attr('href', whatsappLink);

                        // Update phone link
                        var phoneLink = 'tel:' + response.profile.dnumber;
                        $('#phoneLink').attr('href', phoneLink);
                        $('#up').attr('href', phoneLink);


                        $('#addressLine').text(response.profile.address);

                        // Update phone number
                        $('#phoneNumber').text(response.profile.dnumber);

                        // Update email
                        $('#emailLink').attr('href', 'mailto:' + response.profile.mail);
                        $('#email1').text(response.profile.mail);
                        $('#foot').text(response.profile.footer);
                        $('#head').text(response.profile.header);

                        // Check if profile data has changed since last retrieval
                        var storedProfileData = localStorage.getItem('profileData');
                        if (storedProfileData !== JSON.stringify(response.profile)) {
                            // Update local storage with new profile data
                            localStorage.setItem('profileData', JSON.stringify(response.profile));
                        }
                    } else {
                        console.error('No profile data found');
                    }
                },
                error: function(error) {
                    console.error('Error fetching profile data:', error.responseText);
                }
            });
        }

        // Check if profile data exists in local storage
        var storedProfileData = localStorage.getItem('profileData');
        if (storedProfileData) {
            // Parse stored profile data
            var parsedProfileData = JSON.parse(storedProfileData);
            // Update HTML content with stored profile data
            $('#address').text(parsedProfileData.address);
            $('#dnumber').text(parsedProfileData.dnumber);
            $('#mail').text(parsedProfileData.mail);
            var whatsappLink = 'whatsapp://send?phone=' + parsedProfileData.wnumber;
            $('#whatsappLink').attr('href', whatsappLink);

            // Update phone link
            var phoneLink = 'tel:' + parsedProfileData.dnumber;
            $('#phoneLink').attr('href', phoneLink);
            $('#up').attr('href', phoneLink);

            $('#addressLine').text(parsedProfileData.address);

            // Update phone number
            $('#phoneNumber').text(parsedProfileData.dnumber);

            // Update email
            $('#emailLink').attr('href', 'mailto:' + parsedProfileData.mail);
            $('#email1').text(parsedProfileData.mail);
            $('#foot').text(parsedProfileData.footer);
            $('#head').text(parsedProfileData.header);
        }

        // Fetch profile data and update local storage
        fetchProfileData();

        // Set interval to periodically fetch profile data (e.g., every 10 minutes)
        setInterval(fetchProfileData, 10000); // 600000 milliseconds = 10 minutes
    });




    $(document).ready(function() {

        $.ajax({
            url: '{{ route("allget") }}',
                        type: 'GET',
            success: function(response) {
                if (response && response.gather.length > 0) {
                    var gather = response.gather[0]; // Access the first element of the array

                    // Update the elements with the data from the gather object
                    $('#des').text(gather.description);
                    $('#contact').text(gather.contact);
                    // Show the gather section
                    $('#gather').show();
                } else {
                    // Hide the gather section if no data found
                    $('#gather').hide();
                    console.error('No gather data found');
                }

                if (response && response.sociallink.length > 0) {
                    var sociallink = response.sociallink[0]; // Access the first element of the array

                    // Update the href attributes with the social media URLs
                    $('#social-links').find('a:eq(0)').attr('href', sociallink.facebook);
                    $('#social-links').find('a:eq(1)').attr('href', sociallink.twitter);
                    $('#social-links').find('a:eq(2)').attr('href', sociallink.google);
                    $('#social-links').find('a:eq(3)').attr('href', sociallink.instagram);
                } else {
                    console.error('No sociallink data found');
                }

            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
    $(document).ready(function() {

        $.ajax({
            url: '{{ route("service1") }}',
                        type: 'GET',
            success: function(response) {
                if (response && response.service) {
                    // Clear existing list items
                    $('#add').empty();

                    // Iterate over the titles and append them as list items
                    var firstFiveServices = response.service.slice(0, 5);

                    // Iterate over the titles and append them as list items
                    firstFiveServices.forEach(function(service) {
                        // Generate the URL using Laravel's url() helper
                        var serviceUrl = '{{ url(' / service ') }}';

                        // Append the service title and URL as list items
                        $('#add').append('<li><a href="' + serviceUrl + '">' + service.machinetitle + '</a></li>');
                    });
                } else {
                    console.error('No profile data found');
                }
            }
        });

    });

    // 


    // $(document).ready(function() {
    // Get the current URL path
    // var currentPath = window.location.pathname;

    // Check if the current path is "/"
    // if (currentPath === "/") {
    //     // Execute this code block only if the current path is "/"
    //     $.ajax({
    //         url: '/allget',
    //         type: 'GET',
    //         success: function(response) {
    //             if (response && response.home.length > 0) {
    //                 var home = response.home[0]; // Access the first element of the array

    //                 // Update meta tags with data from the home object
    //                 $('title').text(home.metatitle);
    //                 $('meta[name="description"]').attr('content', home.metadescription);

    //                 $('meta[property="og:title"]').attr('content', home.ogtitle);
    //                 $('meta[property="og:description"]').attr('content', home.ogdescription);
    //                 $('meta[property="og:image"]').attr('content', home.ogimage);
    //                 $('meta[property="og:url"]').attr('content', home.ogurl);
    //                 $('meta[property="og:type"]').attr('content', home.ogtype);

    //                 // Show the gather section
    //             } else {
    //                 // Hide the gather section if no data found
    //                 console.error('No home data found');
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error:', error);
    //         }
    //     });
    // }
    //  if (currentPath === "/about") {
    //     // Execute this code block only if the current path is "/"
    //     $.ajax({
    //         url: '/allget',
    //         type: 'GET',
    //         success: function(response) {
    //             if (response && response.about.length > 0) {

    //                 var about = response.about[0]; // Access the first element of the array

    //                 // Update meta tags with data from the home object
    //                 $('title').text(about.metatitle);
    //                 $('meta[name="description"]').attr('content', about.metadescription);

    //                 $('meta[property="og:title"]').attr('content', about.ogtitle);
    //                 $('meta[property="og:description"]').attr('content', about.ogdescription);
    //                 $('meta[property="og:image"]').attr('content', about.ogimage);
    //                 $('meta[property="og:url"]').attr('content', about.ogurl);
    //                 $('meta[property="og:type"]').attr('content', about.ogtype);

    //                 // Show the gather section
    //             } else {
    //                 // Hide the gather section if no data found
    //                 console.error('No home data found');
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error:', error);
    //         }
    //     });
    // }

    // else if (currentPath === "/blog") {
    //     // Execute this code block only if the current path is "/"
    //     $.ajax({
    //         url: '/allget',
    //         type: 'GET',
    //         success: function(response) {
    //             if (response && response.blog.length > 0) {

    //                 var blog = response.blog[0]; // Access the first element of the array

    //                 // Update meta tags with data from the home object
    //                 $('title').text(blog.metatitle);
    //                 $('meta[name="description"]').attr('content', blog.metadescription);

    //                 $('meta[property="og:title"]').attr('content', blog.ogtitle);
    //                 $('meta[property="og:description"]').attr('content', blog.ogdescription);
    //                 $('meta[property="og:image"]').attr('content', blog.ogimage);
    //                 $('meta[property="og:url"]').attr('content', blog.ogurl);
    //                 $('meta[property="og:type"]').attr('content', blog.ogtype);

    //                 // Show the gather section
    //             } else {
    //                 // Hide the gather section if no data found
    //                 console.error('No home data found');
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error:', error);
    //         }
    //     });
    // }

    // else if (currentPath === "/service") {
    //     // Execute this code block only if the current path is "/"
    //     $.ajax({
    //         url: '/allget',
    //         type: 'GET',
    //         success: function(response) {
    //             if (response && response.service.length > 0) {

    //                 var service = response.service[0]; // Access the first element of the array

    //                 // Update meta tags with data from the home object
    //                 $('title').text(service.metatitle);
    //                 $('meta[name="description"]').attr('content', service.metadescription);

    //                 $('meta[property="og:title"]').attr('content', service.ogtitle);
    //                 $('meta[property="og:description"]').attr('content', service.ogdescription);
    //                 $('meta[property="og:image"]').attr('content', service.ogimage);
    //                 $('meta[property="og:url"]').attr('content', service.ogurl);
    //                 $('meta[property="og:type"]').attr('content', service.ogtype);

    //                 // Show the gather section
    //             } else {
    //                 // Hide the gather section if no data found
    //                 console.error('No home data found');
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error:', error);
    //         }
    //     });
    // }

    // else if (currentPath === "/contact") {
    //     // Execute this code block only if the current path is "/"
    //     $.ajax({
    //         url: '/allget',
    //         type: 'GET',
    //         success: function(response) {
    //             if (response && response.contact.length > 0) {

    //                 var contact = response.contact[0]; // Access the first element of the array

    //                 // Update meta tags with data from the home object
    //                 $('title').text(contact.metatitle);
    //                 $('meta[name="description"]').attr('content', contact.metadescription);

    //                 $('meta[property="og:title"]').attr('content', contact.ogtitle);
    //                 $('meta[property="og:description"]').attr('content', contact.ogdescription);
    //                 $('meta[property="og:image"]').attr('content', contact.ogimage);
    //                 $('meta[property="og:url"]').attr('content', contact.ogurl);
    //                 $('meta[property="og:type"]').attr('content', contact.ogtype);

    //                 // Show the gather section
    //             } else {
    //                 // Hide the gather section if no data found
    //                 console.error('No home data found');
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             console.error('Error:', error);
    //         }
    //     });
    // }
    // else{
    //     console.error('no slash:', error);

    // }

    // });
</script>
<script>
    // Wait for 2 seconds before hiding the loader
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
        document.body.style.display = 'block'; // Show the content
    }, 1000); // 2000 milliseconds = 2 seconds
</script>