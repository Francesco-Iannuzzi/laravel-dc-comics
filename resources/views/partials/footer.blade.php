<footer>
    <section class="up_footer py-3">
        <div class="container">
            <div class="row d-flex">
                <div class="footer_left col-5 d-flex justify-content-evenly">
                    <div>
                        <div>
                            <h2 class="text-uppercase">dc comics</h2>
                            <ul>
                                @foreach ($dcComicsList as $dcComicsItem)
                                    <li>
                                        <a href="#">{{ $dcComicsItem }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-uppercase">shop</h2>
                            <ul>
                                @foreach ($shopList as $shopItem)
                                    <li>
                                        <a href="#">{{ $shopItem }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-uppercase">dc</h2>
                        <ul>
                            @foreach ($dcList as $dcItem)
                                <li>
                                    <a href="#">{{ $dcItem }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-uppercase">sites</h2>
                        <ul>
                            @foreach ($sitesList as $siteItem)
                                <li>
                                    <a href="#">{{ $siteItem }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="footer_right col-7 d-flex justify-content-center"></div>
            </div>
        </div>
    </section>
    <section class="bottom_footer">
        <div class="container d-flex justify-content-between align-content-center py-3">
            <button class="sign btn">
                <h2 class="text-uppercase m-0">sign-up now!</h2>
            </button>
            <div class="social d-flex">
                <h2 class="text-uppercase align-self-center m-0">follow us</h2>
                <ul class="d-flex align-self-center m-0 gap-3">
                    <li><i class="fa-brands fa-facebook-f"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-youtube"></i></li>
                    <li><i class="fa-brands fa-pinterest"></i></li>
                    <li><i class="fa-brands fa-periscope"></i></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
