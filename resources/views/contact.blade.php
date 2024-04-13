<!DOCTYPE html>
<html>

@include('layouts.head', ['title' => 'FoodCity-Contact'])

<body>
    <div class="hero_area sub_pages">
        <!-- header section strats -->
        @include('layouts.header')
        <!-- end header section -->
    </div>

    <!-- contact section -->
    <section class="contact_section4 layout_padding">
        <div class="container">
            <img src="images/contact.png" alt="" style="height:50px; width:50px" />
            <span class="font-weight-bold" style="font-size:xx-large; margin-left:20px">
                Contact Us
            </span>

            @include('errors.show_errors')

            <div class="row">
                @include('success.msg')
            </div>

            <div class="row">
                <div class="col-md-8 mr-auto">
                    <form action="send_mail" method="POST">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" name="email">
                                </div>

                                <div class="mt-5">
                                    <input type="text" placeholder="Message" name="message">
                                </div>

                                <div class="mt-5">
                                    <button type="submit">
                                        send
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    @include('layouts.footer')
</body>

</html>
