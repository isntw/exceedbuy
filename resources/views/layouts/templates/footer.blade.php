<!--========== FOOTER ==========-->
<footer class="footer">

    @guest
    <!-- Links -->
    <div class="section-seperator">
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a href="#">Home</a></li>
                        <li class="footer-list-item"><a href="#">About</a></li>
                        <li class="footer-list-item"><a href="#">Work</a></li>
                        <li class="footer-list-item"><a href="#">Contact</a></li>
                    </ul>
                    <!-- End List -->
                </div>

                <div class="col-sm-3">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                        <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                        <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->
    @else
    @endguest 

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <h2>{{ config('app.name') }}</h2>
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="fweight-700" href="">{{ config('app.name') }}:</a>
                    Website Developed by: <a class="fweight-700">Iustinian Monea</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

@include('layouts.templates.scripts')

