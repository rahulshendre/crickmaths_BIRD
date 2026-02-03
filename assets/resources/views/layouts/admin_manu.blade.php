<style type="text/css">
	.main-sidebar{
		background:#59d3e0;
	}

	.main-sidebar-body .nav-item.active .nav-link {
    color: black;
}
.main-header-menu-icon span::before, .main-header-menu-icon span::after {
 
    background-color: #fff;
    }
    .main-header-menu-icon span {
 
    background-color: #fff;
}
    .logodec {
    color: #fffbfb;
    line-height: 21px;
    font-size: 14px;
    padding-left: 6px;
    margin-bottom: 0rem;
        margin-top: -7px;
}
@media screen and (max-width: 480px) {
    .logo_dark{
            width: 95px;
    }
    .logodec{
        font-size: 9px;
    }
}
</style>
<!-- Sidemenu -->




			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{config('app.baseURL')}}">
						<img class="img-responsive logo_dark"  src="{{config('app.baseURL')}}/assets/img/image002.png" alt="logo">
					</a>
					
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-label">Dashboard</li>
						<li class="nav-item show">
							<a class="nav-link" href="{{config('app.baseURL')}}/dashboard"><i class="fe fe-airplay"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-label">Applications</li>

						<li class="nav-item" id="l1">
							<a class="nav-link" href="{{config('app.baseURL')}}/admin/user/all"><i class="fe fe-user"></i><span class="sidemenu-label">User</span></a>
						</li>

						
						<li class="nav-item" id="l2">
							<a class="nav-link" href="{{config('app.baseURL')}}/admin/teacher/all"><i class="fe fe-user"></i><span class="sidemenu-label">Teacher</span></a>
						</li>

						<li class="nav-item" id="l3">
							<a class="nav-link" href="{{config('app.baseURL')}}/admin/question/all"><i class="fe fe-airplay"></i><span class="sidemenu-label">Question</span></a>
						</li>

							<li class="nav-item" id="l4">
							<a class="nav-link" href="{{config('app.baseURL')}}/admin/contact/all"><i class="fe fe-airplay"></i><span class="sidemenu-label">Contact</span></a>
						</li>

						<li class="nav-item" id="l5">
							<a class="nav-link" href="{{config('app.baseURL')}}/admin/change-password"><i class="fe fe-airplay"></i><span class="sidemenu-label">Change Password</span></a>
						</li>

						
						
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->



			         
