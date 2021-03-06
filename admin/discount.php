<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
 <title>Tectignis IT Solutions-AMC Emp Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <!-- <img class="logo-abbr" src="./images/logo.png" alt=""> -->
                <img class="logo-compact" src="./images/logo-text.png" alt="">
				<img class="brand-title" src="./images/tectiginis.jpg"  style="width: 255px;  height: 100px;" alt="Tectignis IT Solutions">            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
							DISCOUNT LIST
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<!-- <div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div> -->
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <i class="bi bi-bell zoom"></i>

									<div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <i class="bi bi-chat-left-dots"></i>
									<div class="pulse-css"></div>
                                </a>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
									<!-- <div class="header-info">
										<span class="text-black"><strong>Brian Lee</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.php" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
           <div class="deznav">
            <div class="deznav-scroll">
				<a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Event</a>
				<ul class="metismenu" id="menu">
                    <li><a class=" ai-icon" href="index.php" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       
                    </li>
                    <li><a class="ai-icon" href="employee.php" aria-expanded="false">
													<i class="bi bi-person-fill"></i>
							<span class="nav-text">Employee</span>
						</a>
                      
                    </li>
         <li><a class="ai-icon" href="client.php" aria-expanded="false">
												<i class="bi bi-people-fill"></i>
							<span class="nav-text">Clients</span>
						</a>

                    <li><a class=" ai-icon" href="quotation.php" aria-expanded="false">
							<i class="bi bi-card-text"></i>							
							<span class="nav-text">Quotation</span>
						</a>
                  
                    </li>
                    <li><a class=" ai-icon" href="purchase.php" aria-expanded="false">
												<i class="bi bi-cash-stack"></i>
							<span class="nav-text">Purchase</span>
						</a>
                 
                    </li>
                    <li><a class=" ai-icon" href="amc.php" aria-expanded="false">
							<i class="bi bi-shield-minus"></i>
							<span class="nav-text">AMC</span>
						</a>
                  
                    </li>
                    <li><a href="complaint.php" class="ai-icon" aria-expanded="false">
						<i class="bi bi-envelope-exclamation"></i>
							<span class="nav-text">Complaint</span>
						</a>
					</li>
                    <li><a class=" ai-icon" href="servicelist.php" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Services</span>
						</a>
                     
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Report</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="sales.php">Sales</a></li>
                            <li><a href="complaintlist.php">Complaint List</a></li>
                        </ul>
                    </li>
               
                    <li><a class="ai-icon" href="catogries.php" aria-expanded="false">
							<i class="bi bi-folder"></i>
							<span class="nav-text">Catogries</span>
						</a>
						
                    </li>
               
                    <li><a class=" ai-icon" href="discount.php" aria-expanded="false">
					<i class="bi bi-percent"></i>
							<span class="nav-text">Discount </span>
						</a>
                 
                    </li>
                    <li><a class=" ai-icon" href="emailsetup.php" aria-expanded="false">
						<i class="bi bi-envelope-plus-fill"></i>
							<span class="nav-text">Email Configurations </span>
						</a>
                 
                    </li>
					     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="bi bi-gear-wide-connected"></i>
							<span class="nav-text">Setting</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="companyprofile.php">Company profile</a></li>
                            <li><a href="tax.php">Tax</a></li>
                            <li><a href="historylog.php">History Log</a></li>
                          
                        </ul>
                    </li>

                </ul>
				<div class="copyright">
			
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Event Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Event Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Description</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
		<div class="row">
					<div class="col-md-6">
					<button class="favorite styled"
         			type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    				+ Add Discount
					</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Discount</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  style="
    background: transparent;
    border: none;
"><i class="bi bi-x"></i></button>      </div>
      <div class="modal-body bord">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Discount Type</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discount Value</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valid From</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valid To</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bt" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bt">Save Discount<button>
      </div>
    </div>
  </div>
</div>

						</div>
                        

						<div class="col-md-6 d-flex justify-content-end">
					<li class="nav-item search2">
						<div class="input-group ">
							<input type="text" class="form-control" placeholder="Search here...">
							<div class="input-group-append">
								<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
							</div>
							</div>
						</div>
					</li>

					
				</div>
			<div class="row">
					<div class="col-xl-12">
						<div class="tab-content">
							<div id="All" class="tab-pane active fade show">
								<div class="table-responsive">
                                    <table id="example2" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                             
                                                <th> Name</th>
                                                <th>Discount Type</th>
                                                <th>Discount Value</th>
                                                <th>Valid From</th>
                                                <th>Valid To</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                           
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>1 Jan</td>
												<td>31 Dec</td>
												<td>amc</td>
												<td>3 Months</td>
									<td><a href="javascript:void(0)" class="btn bt" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye" ></i></a></td>
												<td><a href="javascript:void(0)" class="btn bt" style="
    margin-left: -25px;
"><i class="bi bi-trash"></i></a></td>

												<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  style="
    background: transparent;
    border: none;
"><i class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt amet non harum laboriosam molestias, porro adipisci dolorem culpa nostrum, totam excepturi sed mollitia ipsa quidem quo, quia eaque dicta quis!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bt" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bt">Save changes</button>
      </div>
    </div>
  </div>
</div>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
													<td>1 Jan</td>
												<td>31 Dec</td>
												<td>amc</td>
												<td>3 Months</td>
											<td><a href="javascript:void(0)" class="btn bt" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye" ></i></a></td>
												<td><a href="javascript:void(0)" class="btn bt" style="
    margin-left: -25px;
"><i class="bi bi-trash" ></i></a></td>

 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  style="
    background: transparent;
    border: none;
"><i class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt amet non harum laboriosam molestias, porro adipisci dolorem culpa nostrum, totam excepturi sed mollitia ipsa quidem quo, quia eaque dicta quis!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bt" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bt">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
											</tr>
											
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
													<td>1 Jan</td>
												<td>31 Dec</td>
												<td>amc</td>
												<td>3 Months</td>
												<td><a href="javascript:void(0)" class="btn bt" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye" ></i></a></td>
												<td><a href="javascript:void(0)" class="btn bt" style="
    margin-left: -25px;
"><i class="bi bi-trash"></i></a></td>
 
 
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  style="
    background: transparent;
    border: none;
"><i class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt amet non harum laboriosam molestias, porro adipisci dolorem culpa nostrum, totam excepturi sed mollitia ipsa quidem quo, quia eaque dicta quis!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bt" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bt">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="Sold" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example3" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                            
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
										
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
												
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
										
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
						
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="Refunded" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example4" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                             
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                         
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
												
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
							
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
										
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
									>
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="Canceled" class="tab-pane fade">
								<div class="table-responsive">
                                    <table id="example5" class="table card-table display dataTablesCard">
										<thead>
                                            <tr>
                                              
                                                <th>Date</th>
                                                <th>Event Name</th>
                                                <th>Customer </th>
                                                <th>Location</th>
                                         
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
												<td>Elisabeth Queen</td>
												<td>Medan, Indonesia</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
												<td>David Bekam</td>
												<td>Sydney, Australia</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
												
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
									
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
												<td>Andrew Stevano</td>
												<td>Jakarta, Indonesia</td>
								
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
												<td>Cive Slauw</td>
												<td>Penang, Malaysia</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Eddy Cusuma</td>
												<td>Medan, Indonesia</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Frank Azire</td>
												<td>Bangkok, Thailand</td>
										
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Bella Simatupang</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view/a></td>
											</tr>
											<tr>
											
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Elisabeth Queen</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
											<tr>
												
												<td>04/08/2020<br>12:34 AM</td>
												<td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
												<td>Andrew Stevano</td>
												<td>London, US</td>
											
												<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">view</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>


        
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
              <p>Copyright ?? Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">Tectignis IT Solutions</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
	<!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script>
		(function($) {
			var table = $('#example2').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example3').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example4').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
	</script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>