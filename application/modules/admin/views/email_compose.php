      <!-- start page content -->
      <div class="page-content-wrapper">
        <div class="page-content">
          <div class="page-bar">
            <div class="page-title-breadcrumb">
              <div class=" pull-left">
                <div class="page-title">New Mail</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right d-none">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Email</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Compose</li>
              </ol>
            </div>
          </div>
          <div class="inbox">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-topline-gray">
                  <div class="card-body no-padding height-9">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="inbox-sidebar">
                          <a href="<?=base_url('dashboard/email-compose')?>" data-title="Compose"
                            class="btn red compose-btn btn-block m-0">
                            <i class="fa fa-edit"></i> Compose </a>
                          <ul class="inbox-nav inbox-divider">
                            <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                <span
                                  class="label mail-counter-style label-danger pull-right">2</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Sent Mail</a>
                            </li>
                            <li><a href="#"><i class="fa fa-briefcase"></i> Important</a>
                            </li>
                            <li><a href="#"><i class="fa fa-star"></i> Starred </a>
                            </li>
                            <li><a href="#"><i class=" fa fa-external-link"></i> Drafts
                                <span
                                  class="label mail-counter-style label-info pull-right">30</span></a>
                            </li>
                            <li><a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                            </li>
                          </ul>
                          <ul class="nav nav-pills nav-stacked labels-info inbox-divider d-none">
                            <li>
                              <h4>Labels</h4>
                            </li>
                            <li><a href="#"><i class="fa fa-tags text-info"></i> Work</a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-tags text-warning"></i> Design
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-tags text-danger text-success"></i>
                                Family
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-tags text-purple"></i> Friends
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-tags "></i> Office
                              </a>
                            </li>
                          </ul>
                          <ul class="nav nav-pills nav-stacked labels-info inbox-divider d-none">
                            <li>
                              <h4>Buddy online</h4>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-comments text-success"></i> Jhone Doe
                                <span class="online-status">I do not think</span>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-comments text-danger"></i> Sumon
                                <span class="online-status">Busy with coding</span>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-comments text-purple "></i> Anjelina
                                Joli
                                <span class="online-status">I out of control</span>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-comments text-success "></i> Jonathan
                                Smith
                                <span class="online-status">I am not here</span>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class=" fa fa-comments text-info "></i> Tawseef
                                <span class="online-status">I do not think</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="inbox-body">
                          <div class="inbox-header">
                            <div class="mail-option">
                              Email Campaign
                              <!-- <div class="btn-group margin-top-20 ">
                                <button
                                  class="btn btn-primary btn-sm margin-right-10"><i
                                    class="fa fa-check"></i> Send</button>
                                  <button class="btn btn-sm btn-default margin-right-10"><i class="fa fa-times"></i> Discard</button> 
                              </div>
                              <div class="btn-group margin-top-20 ">
                                <button
                                  class="btn btn-sm btn-default margin-right-10">Draft</button>
                              </div> -->
                            </div>
                          </div>
                          <div class="inbox-body no-pad">
                            <div class="mail-list">
                              <div class="compose-mail">
                                <form method="post" action="<?=base_url('dashboard/mail-campaign')?>">
                                  <div class="form-group">
                                    <input style="padding: 20px" type="text" name="from" class="form-control" placeholder="From" value="<?=$mail_template->from?>">
                                  </div><br><br>

                                  <div class="form-group">
                                    <input style="padding: 20px" type="text" name="cc" class="form-control" placeholder="CC" value="<?=$mail_template->cc?>">
                                  </div><br><br>

                                  <div class="form-group">
                                    <input style="padding: 20px" type="text" name="bcc" class="form-control" placeholder="BCC" value="<?=$mail_template->bcc?>">
                                  </div><br><br>

                                  <div class="form-group">
                                    <select class="form-control" name="template">
                                        <option value="empty">Select a Email Template</option>
                                        <?php  if ($mail_template->template == 1) { ?>
                                          <option value="1" selected="">1</option>
                                          <option value="2">2</option>
                                        <?php }else{?>
                                          <option value="1">1</option>
                                          <option value="2" selected>2</option>
                                        <?php } ?>
                                      </select>
                                  </div><br><br>
                                  <div class="form-group">
                                    <input style="padding: 20px" type="text" name="subject" class="form-control" placeholder="Subject" value="<?=$mail_template->subject?>">
                                  </div><br><br>

                                  <div class="form-group">
                                    <textarea style="padding: 20px" name="message" class="form-control" placeholder="Message"><?=$mail_template->msg?></textarea>
                                  </div>
                                  <br><br>
                                  
<!--                                   <p>Campaign start</p>
                                  <div class="radioicon-group">
                                    <div class="radioicon radioicon-black">
                                        <input type="radio" name="campaign_start" id="radio1" checked />
                                        <label for="radio1"><span class="fa-stack"> 
                                          <i class="fa fa-circle"></i>
                                            </span> Yes
                                        </label>
                                    </div>
                                    <div class="radioicon radioicon-yellow">
                                        <input type="radio" name="campaign_start" id="radio2" />
                                        <label for="radio2"> <span class="fa-stack"> 
                                          <i class="fa fa-circle"></i>
                                            </span> No
                                        </label>
                                    </div>
                                  </div> -->



                                  <div class="btn-group margin-top-20 ">
                                    <button class="btn btn-primary btn-sm margin-right-10" type="submit"><i
                                        class="fa fa-check"></i> Configure </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end page content -->

