<?php $this->load->view('partials/header'); ?>
    <div class="inner-wrapper">
    <?php $this->load->view('partials/sidebar'); ?>
        <section role="main" class="content-body sec-body">
    <!-- start: page -->
    <section class="panel" id="sectionBody">
        <header class="panel-heading">
            <div class="panel-actions">
                        <button id="clickBankModal" 
                            class="btn-success mb-xs mt-xs mr-xs btn btn-xs pull-right" 
                            data-target="#newBankModal" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Add New Review">
                                <i class="fa fa-plus"></i> Add New</button>
            </div>
            <h2 class="panel-title">Reviews</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th width="5%">S/N</th>
                        <th width="15%">Name</th>
                        <th width="25%">Synopsis</th>
                        <th width="10%">Genre</th>
                        <th width="15%">Coments</th>
                        <th width="15%">Creator</th>
                        <th width="10%">Date</th>
                        <th width="5%"></th>
                    </tr>
                </thead>                
                <tbody>
                    <?php  $count = 0;foreach($reviews as $review) {?>
                    <tr>
                        <td>
                            <?php echo ++$count; ?>
                        </td>

                        <td>                  
                            <?php echo $review['review_name'];  ?>
                        </td>
                        <td>                    
                            <?php echo $review['review_synopsis'];  ?>
                        </td>
                        <td>                    
                            <?php echo $review['categories_name'];  ?>
                        </td>
                        <td>           
                            <?php echo $review['comments']. ' Comments'; ?>
                        </td>
                        <td>                    
                            <?php echo $review['first_name']. ' '.$review['first_name'];  ?>
                        </td>
                        <td>                    
                            <?php echo $review['review_date'];  ?>
                        </td>
                        <td>
                            <button 
                            id="clickUpdateBankModal" 
                            class="mb-xs mt-xs mr-xs btn btn-xs btn-info" 
                            data-target="#updateBankModal" 
                            data-id= "{{$bank->id}}"
                            data-name= "{{$bank->name}}"
                            data-officer= "{{$bank->acc_officer}}"
                            data-number= "{{$bank->acc_officer_number}}"
                            data-email= "{{$bank->acc_officer_email}}"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Add Comments">
                                <i class="fa fa-eye"></i>
                            </button> &nbsp;
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
        </section>
            </div>
            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
            
                        <div class="sidebar-right-wrapper">
            
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
            
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
            
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                                <ul>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="<?php echo base_url(); ?>assets/images/!sample-user.jpg')}}" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
            
                        </div>
                    </div>
                </div>
            </aside>
        </section>
<?php $this->load->view('partials/footer'); ?>

