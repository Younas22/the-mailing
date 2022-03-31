<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Basic QC Report</title>
    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Invoice styling -->
    <style>
      body {
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        /*text-align: center;*/
        color: #777;
      }
      body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
      }
      body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
      }
      body a {
        color: #06f;
      }
      .invoice-box {
        max-width: 800px;
        margin: auto;
        /*padding: 30px;*/
        border: 1px solid #eee;
        /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);*/
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }
      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-collapse: collapse;
      }
      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }
      .invoice-box table tr td:nth-child(2) {
        /*text-align: right;*/
      }
      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }
      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }
      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }
      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }
      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }
      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }
      .invoice-box table tr.item.last td {
        border-bottom: none;
      }
      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }
      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          /*text-align: center;*/
        }
        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          /*text-align: center;*/
        }
      }



      @media print {
  #printPageButton {
    display: none;
  }
  .waves-light {
    display: none;
  }
}
@page { size: auto;  margin: 0mm; }

/*

#important_thing { 
  width:100%; 
  height:100%;
  page-break-after:always;
  display: block;
}*/

    </style>
  </head>
  <body>
    <div class="invoice-box" id="important_thing" style="background-color: blue; margin-bottom:40px; margin-top: 40px;">
      
      <div style="background-color: #278DBD; display: flex; display: flex;align-items: center;">
        <div style="width: 50%; margin-left: 20px;">
          <img src="<?=base_url('assets/img/w-logo.png')?>" alt="Company logo" style="max-width: 350px; max-height: 150px; margin-top: 5px;"/>
        </div>

        <div style="width: 50%; text-align: right; margin-right: 20px;">
          <img src="<?=base_url('assets/img/v_logo.png')?>" alt="Company logo" style="max-width: 250px; max-height: 100px; margin-top: 20px;"/>
        </div>
      </div>

      <style>
      .table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      .td, .th {
      border: 1px solid #dddddd;
      /*text-align: left !important;*/
      padding: 8px;
      }
      .tr:nth-child(even) {
      background-color: #dddddd;
      }

      @import url(https://fonts.cdnfonts.com/css/arial);
      @import url(https://fonts.googleapis.com/css?family=Roboto);

      .title_and_footer{
        font-family: 'Arial';
      }


      .msg_body{
        font-family: 'Roboto';
      }
      </style>

      <div style="background: #F0F0F0">
        <div style="background: #F8F8F8; border-left: 20px solid #278DBD; border-right:20px solid #278DBD; padding: 40px;"><b class="title_and_footer" style="color: #0D5D91; font-size: 22px">WegaTech Technologies</b>
          <div style="border-bottom: 1px dotted #D3D3D3; margin: 39px -40px 0;"></div>
        </div>

        

        <!-- <div style="background: #F8F8F8; border-left: 20px solid #278DBD; border-right:20px solid #278DBD; padding: 40px;  border-bottom: 4px dotted #0D5D82;"><b style="color: #0D5D91">WegaTech Technologies</b></div> -->
        <div style="text-align: justify; background: #F8F8F8; padding-right: 20px; padding-left: 20px; margin-left:20px; margin-right: 20px;  border-bottom: 5px solid #0D5D82; padding-top: 10px; margin-top: -40px">
          <!-- <b style="margin:20px;">WegaTech Technologies</b><hr> -->
          <p style="margin:5px; color: #3B3B3B; font-size: 13px" class="msg_body">The content of this email is confidential and intended for the recipient specified in the message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. Unauthorized use, disclosure or copying of this message or any part thereof is strictly prohibited and may be unlawful. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.The content of this email is confidential and intended for the recipient specified in the message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. Unauthorized use, disclosure or copying of this message or any part thereof is strictly prohibited and may be unlawful. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.The content of this email is confidential and intended for the recipient specified in the message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. Unauthorized use, disclosure or copying of this message or any part thereof is strictly prohibited and may be unlawful. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</p>
        </div>



        <div style="background-color: #F0F0F0; padding: 20px; margin-left:20px; margin-right: 20px;">
          <p class="title_and_footer" style="margin:5px; color: #8888A3; text-align: justify-all; font-size: 11px">The content of this email is confidential and intended for the recipient specified in the message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. Unauthorized use, disclosure or copying of this message or any part thereof is strictly prohibited and may be unlawful. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.<br><a href="www.naukri.com">www.naukri.com</a></p>
        </div>
      </div>

    </div>
  </body>
</html>