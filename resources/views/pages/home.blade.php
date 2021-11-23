@extends('layouts.index')
@section('content')
    <section>
        <div class="banner">
            <img src="images/banner.jpg"> 
            <div class="text">
                <img src="images/logo.png">
                <p>SUCESS</p>
                <p>COMES FROM</p>
                <p>SMART CHOICES</p>
                <a href="#" type="button" class="btn btn-secondary">JOIN NOW >></a>
            </div>
            <div class="banner-footer-img">
                <img src="images/logo-mini.png">
            </div>
        </div>
    </section>
     <section id="main-content">
            <div class="container">
                <div class="main-content-1">
                    <h1>HOW WE WORK</h1>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h2 class="number-01">01</h2>
                            <h3>Premium Indicators</h3>
                            <p>We currently offer three different premium indicators to our VIP members. The Advanced Market Moves 2.0, Buy the Dip, and Take Profit.</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <h2 class="number-02">02</h2>
                            <h3>Private Chatroom</h3>
                            <p>Get access to our private chatroom hosted on Discord. There, you can talk stocks, options, and futures trading. You'll also get access to our admin in case you need additional assistance.</p>
                        </div>
                    </div>
                </div>
                <div class="main-content-2">
                    <h1>GET MORE AS A MEMBER</h1>
                    <div class="row">
                        <div class="col-md-6 col-12">
                           <div class="main-content-basic">
                                <div class="basic">
                                    <img src="images/v2.png"  > <span> Read threads & discussions.</span> <br>
                                    <img src="images/v2.png"  > <span> Make comments & ask questions. </span><br>
                                   <img src="images/x2.png"  > <span> Custom badge. Access to private chatroom.</span> <br>
                                   <img src="images/x2.png"  > <span> Exclusive indicators.</span>
                                </div>
                                <div class="basic-absolute">
                                    <h3>Basic</h3>
                                    <p>(Free)</p>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-12 mb-60">
                            <div class="main-content-vip">
                                <div class="vip">
                                    <img src="images/v2.png"  >  <span> Read threads & discussions.</span><br>
                                    <img src="images/v2.png"  >  <span> Make comments & ask questions.</span> <br>
                                   <img src="images/v2.png"  > <span> Custom badge. Access to private chatroom. </span><br>
                                   <img src="images/v2.png"  > <span> Exclusive indicators.</span>
                                </div>
                                <div class="vip-absolute">
                                    <h3>Vip</h3>
                                    <p>($149 /year)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 ">
                            <div class="main-content-footer">
                                <h3>VIP Membership</h3>
                                <p> All sales are final. There is no refunds or returns</p>
                                <form id="input-discord" >
                                    Please fill your discord id
                                    <input class="form-control" type="text" required name="discord_id" id="discord_id">
                                    <button  type="submit" class="btn btn-primary" >JOIN WITH US</button> 
                                </form>
                                <img class="images-gif" src="images/loading.gif" style="width:35px;display:none;margin: 10px auto;">
                                
                                <a  href="#"><img class="continue" src="images/continue_buttton.gif"  style="width:19%;margin: 10px auto; display:none  "></a>
                                <div style="width:200px;margin: 15px auto; display:none"  id="paypal-button-container"></div>
                                <div class="thankyou">
                                     <img src="images/icon-check-2.png" alt="">
                                     <h1>Thank you </h1>
                                     <p>Your submission is received and we will contact you soon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </section>
     <section id="main-slider">
          <h1>WHAT MEMBERS SAY</h1>
          <img src="images/2quotes.png">
           <div class="slider lazy">
              <div class="items">
                "Hey there! Just want to say that I was able to make $1900 today, your VIP membership has already paid for itself over the next 13 years." <br>
                <p>@tjsbeerreviews</p>
              </div>
              <div class="items">
                "I put $297 into robinhood friday so i could play around and test strategies with it without risking my main money. I gotta hand it to the BTD indicator, hands down one of the best...up a total of 55% in 3 days."<br>
                <p>@FateOwnzYou</p>
              </div>
              <div class="items">
                "This is the best indicator I've ever used! It makes it so easy to find the dip and ride the rips back up. GREAT WORK! I can't wait to make more MONEY with this indicator. Thank you!"<br>
                <p>@ianjosephjones
                </p>
              </div>
              <div class="items">
                "Your customer service is the best, you are really dedicate to your work...I learned so much from being here in the vip forum. Ben gave us a tools that makes our trading better and safer."<br>
                <p>@Daniel
                </p>
              </div>
           </div>
            <div class="icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </div>
            
     </section>
   
@endsection
@section('script')
<script>
    $(document).on("ready", function () {
    $("#input-discord").submit(function (e) {
        e.preventDefault();
        let discord_id = $("#discord_id").val();
        localStorage.setItem(
            "discord_id",
            document.getElementById("discord_id").value
        );
        $("#input-discord").css({ display: "none" });
        $(".images-gif").css({ display: "block" });
        $("#paypal-button-container").css({ display: "block" });
        $(".continue").css({ display: "block" });
        setTimeout(function () {
            $(".images-gif").css({ display: "none" });
        }, 1000);
    });
    paypal
        .Buttons({
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [
                        {
                            amount: {
                                value: "9",
                            },
                        },
                    ],
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    let email_address = details.payer.email_address;
                    let amount = details.purchase_units[0].amount.value;
                    let create_time = details.create_time;
                    let update_time = details.update_time;
                    let name =
                        details.purchase_units[0].shipping.name.full_name;
                    let address_line_1 =
                        details.purchase_units[0].shipping.address
                            .address_line_1;
                    let admin_area_1 =
                        details.purchase_units[0].shipping.address.admin_area_1;
                    let admin_area_2 =
                        details.purchase_units[0].shipping.address.admin_area_2;
                    let country_code =
                        details.purchase_units[0].shipping.address.country_code;
                    let address =
                        address_line_1 +
                        " " +
                        admin_area_1 +
                        " " +
                        admin_area_2 +
                        " " +
                        country_code;
                    let discord_id = localStorage.getItem("discord_id");

                    $.ajax({
                        url: "/discord",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            discord_id: discord_id,
                            name: name,
                            email_address: email_address,
                            amount: amount,
                            address: address,
                        },
                        success: function (data) {
                            console.log(data);
                        },
                    });
                    $(".thankyou").css({ display: "block" });
                    $("#paypal-button-container").css({ display: "none" });
                    $(".continue").css({ display: "none" });
                    localStorage.removeItem("discord_id");
                });
            },
        })
        .render("#paypal-button-container");
      });
  </script>
@endsection