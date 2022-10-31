<footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="aboutfooter wigdet_1">
                        <h4 class="titleFooter">ADDRESS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </p>
                        <div class="social">
                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" wigdet_2  menu_3 menu">
                        <h4 class="titleFooter">EMAIL</h4>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="footer_content">
                                <h4>ADDRESS</h4>
                                <p>1853 Pearland Parkway, Suite 123 -300, Pearland, Texas 77581</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="footer_content">
                                <h4 class="">CALL US 24/7</h4>
                                <p>(281) 286-1861</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="footer_content">
                                <h4>EMAIL</h4>
                                <p>info@cs2inc.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" wigdet_3 menu_3 menu">
                        <h4 class="titleFooter">Get to Know Us</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Mentor</a></li>
                            <li><a href="javascript:void(0);">About Us</a></li>
                            <li><a href="javascript:void(0);">Reviews</a></li>
                            <li><a href="javascript:void(0);">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wigdet_4 ">
                        <h4 class="titleFooter">Newsletters</h4>
                        <h5>Subscribe For Newsletters</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <div class="form-new">
                            <input type="text" placeholder="Email Address">
                            <button><i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="subFooter-menu">
                            <li><a href="javascript:void(0);">Privacy Policy </a></li>
                            <li><a href="javascript:void(0);">Cookies acceptance/policy </a></li>
                            <li><a href="javascript:void(0);">Spam Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="copy-right">© 2021 , All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal fade" id="youtb-popup" tabindex="-1" aria-labelledby="youtb-popupTitle" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/K4TOrB7at0Y"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" crossorigin="anonymous"
    defer></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" crossorigin="anonymous" defer></script>
<script>
    $(document).ready(function () {
        jQuery('.testimonial_inner').slick({
            dots: true,
            infinite: true,
            arrows: false,
            centerMode: false,
            autoplay: true,
            speed: 300,
            loop: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
        AOS.init();
    });
    const searchIcon = document.querySelector(".search-icon__wrapper");
    searchIcon.addEventListener("click", e => searchIcon.parentElement.classList.toggle("open"))
</script>

</html>