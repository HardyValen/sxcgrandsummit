<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta charset="utf-8"/>
  <title>Invoice</title>
  <style>
  body {
    font-family: 'San Francisco', Arial, Helvetica, san-serif;
    font-size: 14px;
    margin: 0;
  }

  * {
    box-sizing: border-box;
  }

  table {
    border-spacing: 0;
    border-collapse: collapse;
    width: 100%;
    max-width: 600px;
  }

  .invoice-table-wrapper {
    width: 100%;
    height: 100%;
    max-width: 650px;
    border-spacing: 0;
    border-collapse: collapse;
    margin: 0 auto;
    background: #F2F2F2;
  }

  .invoice-table {
    width: 100%;
    height: 100%;
    max-width: 600px;
    border-spacing: 0;
    border-collapse: collapse;
    border: 1px solid #E6E7EB;
    margin: 0 auto;
  }

  .logo {
    margin: 0;
    padding: 20px;
    text-align: left;
  }

  .invoice-header-table {
    border-spacing: 0;
    border-radius: 10px 10px 0 0;
    border-collapse: collapse;
    width: 100%;
    border: none;
    height: 64px;
    background-color: #F9AE3C;
  }

  .customer-name {
    padding: 24px 0px 0px 16px;
  }

  .amount-title {
    font-size: 11px;
    color: #AAA;
    margin: 10px 0;
  }

  .amount-paid {
    font-weight: 600;
    font-size: 32px;
    display: inline-block;
    padding: 0 10px 10px 0;
    margin: 0;
    vertical-align: -webkit-baseline-middle;
  }

  .payment-type {
    display: inline-block;
    border-radius: 4px;
    padding: 5px 10px;
    color: white;
    font-size: 11px;
    letter-spacing: 0.3px;
    background: #39B351;
    margin: 0;
  }

  .payment-type.payment-type-go {
    background: #5CA5DA;
  }

  .payment-tip {
    color: #777;
    padding: 10px 0 25px;
    border-bottom: 1px solid #E6E7EB;
    margin: 0 0 10px;
    font-size: 13px;
  }

  .order-wrapper {
    font-size: 14px;
    font-weight: 600;
    margin: 0;
    padding: 0 20px;

  }

  .promotion_banner {
    width: 100%;
    padding: 0 25px;
  }

  .order-wrapper span {
    color: #AAA;
    font-size: 11px;
    text-transform: uppercase;
    display: block;
    padding-bottom: 7px;
  }

  .pickup-time {
    color: #178FFC;
    text-transform: uppercase;
    font-size: 11px;
    vertical-align: text-top;
    padding-left: 8px;
  }

  .pickup-time strong {
    color: #333;
  }

  .drop-time {
    color: #EF8F03;
    text-transform: uppercase;
    font-size: 11px;
    vertical-align: text-top;
    padding-left: 8px;
  }

  .drop-time strong {
    color: #333;
  }

  .location-details {
    padding: 0 22px;
    margin: 10px 6px;
    font-size: 13px;
    line-height: 1.4;
  }

  .location-title {
    font-weight: bold;
    text-transform: uppercase;
    display: block;
    padding-bottom: 10px;
    font-size: 14px;
    line-height: 1;
  }

  .driver-phone-number {
    color: #777777;
    font-size: 10px;
  }

  .order-rating-text {
    background: #EEE;
    color: #999;
    font-size: 10px;
    display: inline-block;
    border-radius: 5px;
    padding: 5px;
    margin-top: 0px;
  }

  .order-summary-title {
    font-size: 11px;
    font-weight: 600;
    color: #999;
    padding: 26px 0px 5px;
    border-top: 1px solid #E6E7EB;
  }

  .order-summary-details {
    font-size: 13px;
    color: #777777;
    padding-bottom: 18px;
  }

  .order-summary-value {
    font-size: 14px;
    text-align: right;
    font-weight: 500;
    padding-bottom: 18px;
  }

  .total-price {
    font-size: 12px;
    font-weight: bold;
    padding: 15px 0;
  }

  .total-price-value {
    font-size: 16px;
    font-weight: bold;
    text-align: right;
    padding: 15px 0;
  }

  .paid-with-text {
    font-size: 11px;
    color: #777;
    padding: 0 10px 10px 0;
  }

  .help-text {
    font-size: 11px;
    color: #999;
    text-align: -webkit-right;
    padding: 5px 25px;
    font-weight: 300;
  }

  .address {
    font-size: 11px;
    color: #999;
    text-align: -webkit-center;
    padding: 5px 0;
  }

  .service_logo{
    width: 25%;
  }

  .brand_logo{
    margin-top: 25px;
  }

  .social_site_img{
    text-decoration: none
  }

  @media only screen and (max-width: 500px) {
    td.full {
      display: block !important;
      width: 100% !important;
    }

    .driver-details {
      padding: 10px !important;
    }

    .order-wrapper {
      font-size: 12px !important;
      padding: 0 0 0 20px !important;
      vertical-align: -webkit-baseline-middle !important;
    }
  }

  @media only screen and (max-width: 640px) {
    .promotion_banner {
      padding: 0 20px;
    }
  }

  @media screen and (min-width: 500px) {
    .card-table {
      width: 50% !important;
    }

    .user-info {
      padding: 10px 0 0 10px !important;
    }
  }

</style>

</head>
<body style="font-family: 'San Francisco', Arial, Helvetica, san-serif,serif;
    font-size:14px;
    margin:0;
    box-sizing: border-box;
    color: black">
<table style="width: 100%; height: 100%; max-width: 650px; border-spacing: 0; border-collapse: collapse; margin: 0 auto; background: #F2F2F2;" align="center">
  <tbody>
    <tr>
      <td style="padding:20px;">

        <table style="width: 100%; height: 100%; max-width: 600px; border-spacing: 0; border-collapse: collapse; border: 1px solid #E6E7EB; margin: 0 auto;" align="center">
          <tbody>
            <tr>
              <td>
                
                <table width="100%" align="center" style="border-spacing: 0; border-collapse: collapse; width:100%;">
                  <thead>
                    <tr  bgcolor=#F9AE3C>
                      <th width="90%">
                        <h2 style="margin:0; padding:20px; text-align: left;">
                          <img alt="GoRide" src="https://ops-service-production.s3.amazonaws.com/assets/idn/1/logo.png" class="service_logo">
                        </h2>
                      </th>
                      <th width="10%">
                        <h2 style="padding:20px; margin:0; box-sizing:border-box;">
                          <img alt="GoRide" src="https://ops-service-production.s3.amazonaws.com/assets/idn/header-logo.png" class="brand_logo">
                        </h2>
                      </th>
                    </tr>
                  </thead>
                </table>

              </td>
            </tr>

            <tr bgcolor="white">
              <td style="padding:20px 20px 10px;">
                
                <table style="border-spacing: 0; border-collapse: collapse; width:100%;">
                  <tbody>
                    <tr>
                      <span style="font-size:17px"> Hi <span style="font-weight:700;">Hardy Valenthio
                        ,</span></span>
                    </tr>
                    <tr>
                      <p style="color: #636363;">
                        Thank you for using GoRide, we hope you enjoyed riding with us.
                      </p>
                    </tr>
                    <tr>
                      <p style="font-size:11px; color: #AAA; margin: 10px 0; display: block; position: relative; top: 8px" class="amount-paid">Amount Paid</p>
                      <p style="font-weight: 600; font-size: 32px; display: inline-block; padding: 0 10px 0px 0; margin: 0; vertical-align: middle;">
                        Rp4.000</p>

                      <p style="display: inline-block; border-radius: 4px; padding: 5px 10px; color: white;
                          font-size: 11px; letter-spacing: 0.3px; vertical-align: middle;
                          background: #5CA5DA;
                          margin: 0; position: relative; top: -2px;">
                        GoPay
                      </p>
                          <p style="color: #777; padding: 10px 0; border-bottom: 1px solid #E6E7EB; margin: 0 0 10px; font-size: 13px;" class="payment-tip">
                          </p>
                    </tr>
                  </tbody>
                </table>

              </td>
            </tr>

            <tr bgcolor="white">
              <td>
                
                <table width="100%" align="center" style="border-spacing: 0; border-collapse: collapse;">
                  <tbody>
                  <tr>
                    <td width="90%">
                      <h2 style="font-size: 14px; font-weight: 600; margin: 0; padding: 0 20px;"
                          class="order-wrapper">
                        <span style="color: #AAA; font-size: 11px; text-transform: uppercase; display: block; padding-bottom: 7px;">order details</span>
                        Thursday, 06 February 2020
                      </h2>
                      <h2 style="margin: 0; padding: 12px 0 0 21px; font-weight: 500;">
                        <span style="color: #AAA; font-size: 10px; text-transform: uppercase; display: block; padding-bottom: 7px;">order id: RB-3286750567</span>
                      </h2>
                    </td>
                    <td width="10%" style="padding:0 20px;">
                      <img src="https://ops-service-production.s3.amazonaws.com/assets/order-details.png"
                          alt="Order Details"
                          style="vertical-align: -webkit-baseline-middle; float:right;"/>
                    </td>
                  </tr>
                  </tbody>
                
                </table>
              </td>
            </tr>

            <tr bgcolor="white">
              <td style="padding: 20px 20px 0 20px;">
                
                <table width="100%" align="center" style="border-spacing: 0; border-collapse: collapse;">
                  <tbody>
                  <tr>
                    <td>
                      <img src="https://ops-service-production.s3.amazonaws.com/assets/pickup.png"
                          alt="pickup"/>
                      <span style="color: #178FFC; text-transform: uppercase; font-size: 11px; vertical-align: text-top; padding-left: 8px;">pick up <strong
                      style="color: #333;"><span class="dot">&bull;</span>&nbsp;17:30</strong></span>
                      <p style="border-left: 1px dotted #ccc; padding: 0 22px; margin: 10px 6px; font-size: 13px; line-height: 1.4;">
                        <span style="font-weight: bold; display: block; padding-bottom: 10px; font-size: 14px; line-height: 1;">Institut Teknologi Bandung</span>
                        Jl. Ganesha No.10, Lb. Siliwangi, Coblong, Kota Bandung
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="border-bottom: 1px solid #E6E7EB;">
                      <img src="https://ops-service-production.s3.amazonaws.com/assets/drop.png"
                          alt="drop"/>
                      <span style="color: #EF8F03; text-transform: uppercase; font-size: 11px; vertical-align: text-top; padding-left: 8px;">destination <strong
                      style="color: #333;"><span class="dot">&bull;</span>&nbsp;17:39</strong></span>
                      <p style="padding: 0 22px; margin: 10px 6px; font-size: 13px; line-height: 1.4;">
                        <span style="font-weight: bold; display: block; padding-bottom: 10px; font-size: 14px; line-height: 1;">Kost Putra Pavilion 2</span>
                        Jalan Ciheulang Baru, Sekeloa, Kota Bandung, Jawa Barat, Indonesia
                      </p>
                    </td>
                  </tr>
                  </tbody>
                </table>

              </td>
            </tr>

            <tr bgcolor="white">
              <td style="padding:10px 20px 10px;">
                
                <table align="left" style="width: 15%;border-spacing: 0; border-collapse: collapse;">
                  <tr>
                    <td>
                      <img src="https://go-referral-service.s3.ap-southeast-1.amazonaws.com/c1a71598d6a7fe42cb5c-IMG_20191120_1648593524548949207522027.jpg" alt="Driver Image" style="border-radius: 100%; height: 75px; width: 75px;"/>
                    </td>
                  </tr>
                </table>

                <table align="left" style="width: 43%;border-spacing: 0; border-collapse: collapse;">
                  <tr>
                    <td>
                      <p style="margin:0;padding:10px;">
                        Your driver <span style="font-weight: bold; font-size: 14px">Reza Hidayatulloh</span>
                      </p>
                    </td>
                  </tr>
                </table>

                <table align="left" style="width: 43%;border-spacing: 0; border-collapse: collapse;">
                  <tr>
                    <td>

                      <table>
                        <tr>
                          <td style="font-size:10px;color:#999;font-weight:bolder;padding: 10px 20px 10px 10px;">DISTANCE
                            <span style="font-size:10px;text-align:center;font-weight:bold;color:black;">
                                1.9 km
                              </span>
                          </td>
                          <td style="font-size:10px;color:#999;text-align:right;font-weight: bolder;">
                            <span style="border-left: 1px solid;padding-left: 9px;">Travel time
                                  <span style="font-size:10px;font-weight:bold;color:black;">
                                    00:08:09
                                  </span>
                            </span>
                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

              </td>
            </tr>

            <tr bgcolor="white">
              <td style="padding:0 20px;">
                <h2 style="font-size: 11px; font-weight: 600; color: #999; padding: 7px 0 5px; border-top: 1px solid #E6E7EB;">
                </h2>
              </td>
            </tr>

            <tr bgcolor="white">
              <td style="padding:0 20px;">

                <table width="100%" align="center" style="border-spacing: 0; border-collapse: collapse;">
                  <tbody>
                    <tr>
                      <td style="font-size: 13px; color: #777777; padding-bottom: 18px;">Price
                        (1.9 km)
                      </td>
                      <td style="font-size: 14px; text-align: right; font-weight: 500; padding-bottom: 18px;">
                        Rp9.000
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size: 13px; color: #777777; padding-bottom: 18px;">Voucher</td>
                      <td style="font-size: 14px; text-align: right; font-weight: 500; padding-bottom: 18px; color:#E43537;">
                        -Rp5.000
                      </td>
                    </tr>
                    <tr style="border-top: 1px solid #E6E7EB;">
                      <td style="font-size: 12px; font-weight: bold; padding: 15px 0;">TOTAL PAYMENT</td>
                      <td style="font-size: 16px; font-weight: bold; text-align: right; padding: 15px 0;">
                        Rp4.000
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <span style="font-size: 11px; color: #777; padding: 0 10px 10px 0;">Paid with</span>
                        <p style="display: inline-block; border-radius: 4px; padding: 5px 10px; color: white; font-size: 11px; letter-spacing: 0.3px; background: #5CA5DA; margin: 0;">
                            GoPay
                        </p>
                      </td>
                    </tr>

                    <tr bgcolor="white">
                      <td style="padding: 12px;"></td>
                    </tr>

                  </tbody>
                </table>
                
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <p style="font-size: 11px; color: #999; text-align: right; padding: 5px 25px; font-weight: 300;">
          Need help? Contact at: <span style="font-weight:500;">customerservice@go-jek.com</span>
        </p>
      </td>
    </tr>

    <tr bgcolor="#E8E8E8">
      <td style="padding:0 20px;">
        <h2 style="text-align:center;margin: 0;padding: 10px 0 3px 0;">
          <img alt="GO JEK" src="https://ops-service-production.s3.amazonaws.com/assets/idn/footer-logo.png" class="brand_logo">
        </h2>
        <p style=" font-size: 11px; color: #999; text-align: center; padding: 5px 0;">Pasaraya Blok M. GD.B, 7th Floor, Kebayoran Baru, DKI Jakarta, Indonesia, 12160</p>
        <h2 style="margin: 0;text-align: center;padding: 8px 0 18px 0;">
          <a target="_blank" style="text-decoration: none;" href= "https://www.facebook.com/gojekindonesia">
            <img alt="Facebook" class="social_site_img" src="https://ops-service-production.s3.amazonaws.com/assets/social-site-facebook.png" />
          </a>
          <a target="_blank" style="text-decoration: none;" href= "https://www.youtube.com/channel/UCmlKSK0OKn_B3oPwElW4n5w">
            <img alt="Youtube" class="social_site_img" src="https://ops-service-production.s3.amazonaws.com/assets/social-site-youtube.png" />
          </a>
          <a target="_blank" style="text-decoration: none;" href= "https://www.linkedin.com/company/pt--go-jek-indonesia">
            <img alt="Linkedin" class="social_site_img" src="https://ops-service-production.s3.amazonaws.com/assets/social-site-linkedin.png" />
          </a>
          <a target="_blank" style="text-decoration: none;" href= "https://www.instagram.com/gojekindonesia/">
            <img alt="Instagram" class="social_site_img" src="https://ops-service-production.s3.amazonaws.com/assets/social-site-instagram.png" />
          </a>
          <a target="_blank" style="text-decoration: none;" href= "https://twitter.com/gojekindonesia?lang=id">
            <img alt="Twitter" class="social_site_img" src="https://ops-service-production.s3.amazonaws.com/assets/social-site-twitter.png" />
          </a>
        </h2>
      </td>
    </tr>

  </tbody>
</table>
</body>
</html>