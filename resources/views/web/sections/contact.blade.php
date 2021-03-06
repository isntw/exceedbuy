<!-- Contact List -->
<div class="section-seperator" id="contact">
    <div class="content-md container">
        <div class="row">
            <!-- Contact List -->
            <div class="col-sm-4 sm-margin-b-50">
                <h4><a href="#">{{$settings->location}}</a> <span class="text-uppercase margin-l-20">Head Office</span></h4>
                <p>{{$settings->description}}</p>
                <ul class="list-unstyled contact-list">
                    <li><i class="margin-r-10 color-base icon-call-out"></i> {{$settings->phone}}</li>
                    <li><i class="margin-r-10 color-base icon-envelope"></i> {{$settings->email}}</li>
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
                <form method="post" action="/post" name='contact_form'>
                    {{ csrf_field() }}
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Name" name="name" >
                        <span class="text-danger" id="name"></span>
                    </div>
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Email" name="email" >
                        <span class="text-danger" id="email"></span>
                    </div>
                    <div class="margin-b-10">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                        <span class="text-danger" id="phone"></span>
                    </div>
                    <div class="margin-b-20">
                        <textarea class="form-control" rows="5" placeholder="Message" name="text"></textarea>
                        <span class="text-danger" id="text"></span>
                    </div>
                    <input type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="Submit">

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