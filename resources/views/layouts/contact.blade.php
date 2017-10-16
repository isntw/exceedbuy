<!-- Contact List -->
<div class="section-seperator" id="contact">
    <div class="content-md container">
        <div class="row">
            <!-- Contact List -->
            <div class="col-sm-4 sm-margin-b-50">
                <h4><a href="#">New York</a> <span class="text-uppercase margin-l-20">Head Office</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <ul class="list-unstyled contact-list">
                    <li><i class="margin-r-10 color-base icon-call-out"></i> 1 012 3456 7890</li>
                    <li><i class="margin-r-10 color-base icon-envelope"></i> hq@acidus.com</li>
                </ul>
            </div>
            <!-- End Contact List -->

            <!-- Contact List -->
            <div class="col-sm-4 sm-margin-b-50">
                <h4><a href="#">London</a> <span class="text-uppercase margin-l-20">Operation</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <ul class="list-unstyled contact-list">
                    <li><i class="margin-r-10 color-base icon-call-out"></i> 44 77 3456 7890</li>
                    <li><i class="margin-r-10 color-base icon-envelope"></i> operation@acidus.com</li>
                </ul>
            </div>
            <!-- End Contact List -->

            <!-- Contact List -->
            <div class="col-sm-4 sm-margin-b-50">
                <h4><a href="#">Singapore</a> <span class="text-uppercase margin-l-20">Finance</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <ul class="list-unstyled contact-list">
                    <li><i class="margin-r-10 color-base icon-call-out"></i> 50 012 456 7890</li>
                    <li><i class="margin-r-10 color-base icon-envelope"></i> finance@acidus.com</li>
                </ul>
            </div>
            <!-- End Contact List -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->

<!-- Comment -->
<div class="section-seperator">
    <div class="content-md container ">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Send Us A Note</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <div class="row ">
            <div class="col-md-5 col-sm-7">
                <form method="post" action="/post">
                    {{ csrf_field() }}
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="margin-b-20">
                        <textarea class="form-control" rows="5" placeholder="Message" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                    @if(count($errors))
                    <div class='form-group'>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li><strong>Error!</strong> {{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                </form>


            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Comment -->