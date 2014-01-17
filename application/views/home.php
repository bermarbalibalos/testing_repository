

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success"> 
							<i class="icon-home"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-user"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-tasks"></i>
							<span class="menu-text"> Tasks </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									My Tasks
								</a>
							</li>

							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Assigned to others
								</a>
							</li>

							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Assigned by others
								</a>
							</li>

							<li>
								<a href="">
									<i class="icon-warning-sign red bigger-130"></i>
									Late Tasks
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="">
							<i class="icon-calendar"></i>

							<span class="menu-text">
								Calendar
								<span class="badge badge-transparent tooltip-error" title="2&nbsp;Interviews&nbsp;Today">
									<i class="icon-warning-sign red bigger-130"></i>
								</span>
							</span>
						</a>
					</li>
					
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-stackexchange"></i>
							<span class="menu-text"> Tools </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Advanced Search
								</a>
							</li>
							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Notifications
								</a>
							</li>

							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Messages
								</a>
							</li>				

							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Templates
								</a>
							</li>
							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Reports
								</a>
							</li>							
							<li>
								<a href="">
									<i class="icon-double-angle-right"></i>
									Analytics
								</a>
							</li>					
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-double-angle-right"></i>

									Settings
									<b class="arrow icon-angle-down"></b>
								</a>

								<ul class="submenu">
									<li>
										<a href="#">
											<i class="icon-cog"></i>
											Company Settings
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-filter"></i>
											Hiring Funnels
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-user"></i>
											Users
										</a>
									</li>
									
								</ul>
							</li>
						</ul>
					</li>

				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>

						<li>
							<a href="#">Other Pages</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Blank Page</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
