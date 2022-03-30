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
        padding: 30px;
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
    <div class="invoice-box" id="important_thing" style="padding: 50px; background-color: white; margin-bottom:40px; margin-top: 40px;">
      
      <div style="background-color: #0066ff; display: flex; padding: 5px; display: flex;align-items: center;">
        <div style="width: 50%; margin-left: 20px;">
          <img src="<?=base_url('assets/img/w-logo.png')?>" alt="Company logo" style="max-width: 250px; max-height: 130px; margin-top: 5px;"/>
        </div>

        <div style="width: 50%; text-align: right; margin-right: 20px;">
          <img src="<?=base_url('assets/img/v_logo.png')?>" alt="Company logo" style="max-width: 250px; max-height: 50px; margin-top: 20px;"/>
        </div>
      </div>
      
<!-- 
     <div style="background-color: #0066ff; display: flex; padding: 10px;">
      <div style="width: 50%; margin-left: 20px;"><h4 style="color: white"><?=$this->session->userdata('logged_in')->company_name?></h4></div>
        <div style="width: 50%; text-align: right; margin-right: 20px;">
          <img src="<?=base_url('assets/img/profile/').$this->session->userdata('logged_in')->company_logo;?>" alt="Company logo" style="max-width: 80px; max-height: 80px; margin-top: 5px;"/>
        </div>
      </div>  -->

      <div style="display: flex; margin-top: 30px; border-bottom: 1px solid;">
      <div style="width: 50%; margin-left: 20px; "><p style="color: black">
        <!-- <?=$this->session->userdata('logged_in')->company_website?> -->
        </p></div>
      <div style="width: 50%; text-align: right; margin-right: 20px;"><p style="color: black">
        <?=$this->session->userdata('logged_in')->company_website?><br>
        <?=$this->session->userdata('logged_in')->company_email?>
          
        </p></div>
      </div>
      

      <table>
        <tr class="top">
          <td colspan="2">
            <table>
<!--               <tr>
                <td class="title" style="display: flex;">
                  <h6 style=""><?=$this->session->userdata('logged_in')->company_name?></h6>
                    <img src="<?=base_url('assets/img/profile/').$this->session->userdata('logged_in')->company_logo;?>" alt="Company logo" style="max-width: 100px; max-height: 100px;"/>
                </td>
              </tr> -->
            </table>
          </td>
        </tr>
      </table>
      <!-- <hr> -->
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
      </style>
      <?php //dd($project_view); ?>
      <div style="text-align: justify;">
        <p>Dear <b><?=get_user_profile($project_view->users_id)->first_name?></b><br>Greetings from <b><?=$this->session->userdata('logged_in')->company_name?>,</b> your job partner.<br><br>We are glad that you have decided to work with us. We hope our Relationship will bring change for the good.</p><br>

<?php  if ($project_view->qc_report_status == 'approve') { ?>

      <p>We are glad to inform you that your project workload for <b><?=$project_view->projects_title?></b> has been successfully completed.</p><br>

      <p>The results of your project are displayed below with this email. As you have successfully completed your project workload as per the standard protocol, your payout for the same will be credited into your given account within 7 business days.</p>

<?php }else{?>
        <p>We regret to inform you that your project workload for  <b><?=$project_view->projects_title?></b> has not been successfully completed.<br><br> The results of your project are displayed below with this email.<br><br> As you are not able to fulfill the requirements for the project and failed to maintain the required accuracy or failed to complete your project within a given time-frame hence this project will be considered as rejected.</p>
<?php } ?>


      </div>
      <br>
      <br>


      <div style="background-color: #ede7e7; display: flex; padding: 5px; margin: 5px;">
      <p>The content of this email is confidential and intended for the recipient specified in the message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. Unauthorized use, disclosure or copying of this message or any part thereof is strictly prohibited and may be unlawful. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</p>
      </div>


      <br>


    </div>
  </body>
</html>