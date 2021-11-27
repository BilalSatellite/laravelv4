<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">{{ __('Dashboard') }}</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Extra</li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    {{-- <x-jet-welcome /> --}}
    <div>
        <section class="content">
			<div class="row">
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
								<h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
								<h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
								<h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-danger-light rounded w-60 h-60">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
								<h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-success-light rounded w-60 h-60">
								<i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
								<h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
							<div class="icon bg-light rounded w-60 h-60">
								<i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
								<h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Earning Summary
							</h4>
						</div>
						<div class="box-body py-0" style="position: relative;">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div style="position: relative;">
													<div id="chart41" style="min-height: 128.7px;"><div id="apexchartscm4h3qf1" class="apexcharts-canvas apexchartscm4h3qf1 apexcharts-theme-light" style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1346" width="150" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1348" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs1347"><clipPath id="gridRectMaskcm4h3qf1"><rect id="SvgjsRect1350" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcm4h3qf1"><rect id="SvgjsRect1351" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1353" class="apexcharts-pie"><g id="SvgjsG1354" transform="translate(12.599999999999994, 14.799999999999997) scale(0.8)"><circle id="SvgjsCircle1355" r="27.731707317073173" cx="63" cy="63" fill="transparent"></circle><g id="SvgjsG1356" class="apexcharts-slices"><g id="SvgjsG1357" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1358" d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z" fill="rgba(0,188,139,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="160" data:startAngle="0" data:strokeWidth="2" data:value="44" data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z" stroke="#ffffff"></path></g><g id="SvgjsG1359" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath1360" d="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z" fill="rgba(202,255,229,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="200" data:startAngle="160" data:strokeWidth="2" data:value="55" data:pathOrig="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1361" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1362" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1349" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 188, 139);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(202, 255, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
												<div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 130px;"></div></div><div class="contract-trigger"></div></div></div>
												<div>
													<h5>Top Order</h5>
													<h4 class="text-white my-0 font-weight-500">$39k</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div style="position: relative;">
													<div id="chart42" style="min-height: 128.7px;"><div id="apexchartszjfx9d0c" class="apexcharts-canvas apexchartszjfx9d0c apexcharts-theme-light" style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1363" width="150" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1365" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs1364"><clipPath id="gridRectMaskzjfx9d0c"><rect id="SvgjsRect1367" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskzjfx9d0c"><rect id="SvgjsRect1368" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1370" class="apexcharts-pie"><g id="SvgjsG1371" transform="translate(12.599999999999994, 14.799999999999997) scale(0.8)"><circle id="SvgjsCircle1372" r="27.731707317073173" cx="63" cy="63" fill="transparent"></circle><g id="SvgjsG1373" class="apexcharts-slices"><g id="SvgjsG1374" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1375" d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="160" data:startAngle="0" data:strokeWidth="2" data:value="44" data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z" stroke="#ffffff"></path></g><g id="SvgjsG1376" class="apexcharts-series apexcharts-pie-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath1377" d="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z" fill="rgba(225,240,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="200" data:startAngle="160" data:strokeWidth="2" data:value="55" data:pathOrig="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1378" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1379" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1366" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(15, 94, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(225, 240, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
												<div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 130px;"></div></div><div class="contract-trigger"></div></div></div>
												<div>
													<h5>Average Order</h5>
													<h4 class="text-white my-0 font-weight-500">$24k</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="charts_widget_43_chart" style="min-height: 385px;"><div id="apexchartsz0ymu22x" class="apexcharts-canvas apexchartsz0ymu22x apexcharts-theme-light" style="width: 404px; height: 385px;"><svg id="SvgjsSvg1380" width="404" height="385" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1382" class="apexcharts-inner apexcharts-graphical" transform="translate(52.84653854370117, 30)"><defs id="SvgjsDefs1381"><clipPath id="gridRectMaskz0ymu22x"><rect id="SvgjsRect1388" width="350.1534614562988" height="322.7525" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskz0ymu22x"><rect id="SvgjsRect1389" width="365.1534614562988" height="341.7525" x="-12" y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1387" x1="0" y1="0" x2="0" y2="317.7525" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="317.7525" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1415" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1416" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1418" font-family="Helvetica, Arial, sans-serif" x="0" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1419">Jan</tspan><title>Jan</title></text><text id="SvgjsText1421" font-family="Helvetica, Arial, sans-serif" x="37.90594016181099" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1422">Feb</tspan><title>Feb</title></text><text id="SvgjsText1424" font-family="Helvetica, Arial, sans-serif" x="75.81188032362198" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1425">Mar</tspan><title>Mar</title></text><text id="SvgjsText1427" font-family="Helvetica, Arial, sans-serif" x="113.71782048543295" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1428">Apr</tspan><title>Apr</title></text><text id="SvgjsText1430" font-family="Helvetica, Arial, sans-serif" x="151.62376064724393" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1431">May</tspan><title>May</title></text><text id="SvgjsText1433" font-family="Helvetica, Arial, sans-serif" x="189.5297008090549" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1434">Jun</tspan><title>Jun</title></text><text id="SvgjsText1436" font-family="Helvetica, Arial, sans-serif" x="227.43564097086588" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1437">Jul</tspan><title>Jul</title></text><text id="SvgjsText1439" font-family="Helvetica, Arial, sans-serif" x="265.3415811326768" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1440">Aug</tspan><title>Aug</title></text><text id="SvgjsText1442" font-family="Helvetica, Arial, sans-serif" x="303.2475212944878" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1443">Sep</tspan><title>Sep</title></text><text id="SvgjsText1445" font-family="Helvetica, Arial, sans-serif" x="341.15346145629877" y="346.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1446">Oct</tspan><title>Oct</title></text></g><line id="SvgjsLine1447" x1="0" y1="318.7525" x2="341.1534614562988" y2="318.7525" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1460" class="apexcharts-grid"><g id="SvgjsG1461" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1473" x1="0" y1="0" x2="341.1534614562988" y2="0" stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1474" x1="0" y1="79.438125" x2="341.1534614562988" y2="79.438125" stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1475" x1="0" y1="158.87625" x2="341.1534614562988" y2="158.87625" stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1476" x1="0" y1="238.31437499999998" x2="341.1534614562988" y2="238.31437499999998" stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1477" x1="0" y1="317.7525" x2="341.1534614562988" y2="317.7525" stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1462" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1463" x1="0" y1="318.7525" x2="0" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1464" x1="37.90594016181098" y1="318.7525" x2="37.90594016181098" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1465" x1="75.81188032362196" y1="318.7525" x2="75.81188032362196" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1466" x1="113.71782048543295" y1="318.7525" x2="113.71782048543295" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1467" x1="151.62376064724393" y1="318.7525" x2="151.62376064724393" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1468" x1="189.5297008090549" y1="318.7525" x2="189.5297008090549" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1469" x1="227.43564097086588" y1="318.7525" x2="227.43564097086588" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1470" x1="265.3415811326769" y1="318.7525" x2="265.3415811326769" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1471" x1="303.24752129448785" y1="318.7525" x2="303.24752129448785" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1472" x1="341.1534614562988" y1="318.7525" x2="341.1534614562988" y2="324.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><rect id="SvgjsRect1478" width="341.1534614562988" height="79.438125" x="0" y="0" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskz0ymu22x)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1479" width="341.1534614562988" height="79.438125" x="0" y="79.438125" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskz0ymu22x)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1480" width="341.1534614562988" height="79.438125" x="0" y="158.87625" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskz0ymu22x)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1481" width="341.1534614562988" height="79.438125" x="0" y="238.31437499999998" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskz0ymu22x)" class="apexcharts-grid-row"></rect><line id="SvgjsLine1483" x1="0" y1="317.7525" x2="341.1534614562988" y2="317.7525" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1482" x1="0" y1="1" x2="0" y2="317.7525" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1391" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1392" class="apexcharts-series" seriesName="Profit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1414" d="M 0 317.7525C 13.267079056633843 317.7525 24.63886110517714 238.31437499999998 37.90594016181098 238.31437499999998C 51.17301921844482 238.31437499999998 62.54480126698812 99.29765625000002 75.81188032362196 99.29765625000002C 89.07895938025581 99.29765625000002 100.4507414287991 178.73578125 113.71782048543295 178.73578125C 126.98489954206678 178.73578125 138.3566815906101 119.15718749999999 151.62376064724393 119.15718749999999C 164.89083970387776 119.15718749999999 176.26262175242107 198.5953125 189.5297008090549 198.5953125C 202.79677986568876 198.5953125 214.16856191423204 59.57859374999998 227.4356409708659 59.57859374999998C 240.70272002749974 59.57859374999998 252.07450207604305 208.525078125 265.3415811326769 208.525078125C 278.60866018931074 208.525078125 289.980442237854 39.71906250000001 303.24752129448785 39.71906250000001C 316.5146003511217 39.71906250000001 327.88638239966497 69.508359375 341.1534614562988 69.508359375" fill="none" fill-opacity="1" stroke="rgba(15,94,247,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskz0ymu22x)" pathTo="M 0 317.7525C 13.267079056633843 317.7525 24.63886110517714 238.31437499999998 37.90594016181098 238.31437499999998C 51.17301921844482 238.31437499999998 62.54480126698812 99.29765625000002 75.81188032362196 99.29765625000002C 89.07895938025581 99.29765625000002 100.4507414287991 178.73578125 113.71782048543295 178.73578125C 126.98489954206678 178.73578125 138.3566815906101 119.15718749999999 151.62376064724393 119.15718749999999C 164.89083970387776 119.15718749999999 176.26262175242107 198.5953125 189.5297008090549 198.5953125C 202.79677986568876 198.5953125 214.16856191423204 59.57859374999998 227.4356409708659 59.57859374999998C 240.70272002749974 59.57859374999998 252.07450207604305 208.525078125 265.3415811326769 208.525078125C 278.60866018931074 208.525078125 289.980442237854 39.71906250000001 303.24752129448785 39.71906250000001C 316.5146003511217 39.71906250000001 327.88638239966497 69.508359375 341.1534614562988 69.508359375" pathFrom="M -1 317.7525L -1 317.7525L 37.90594016181098 317.7525L 75.81188032362196 317.7525L 113.71782048543295 317.7525L 151.62376064724393 317.7525L 189.5297008090549 317.7525L 227.4356409708659 317.7525L 265.3415811326769 317.7525L 303.24752129448785 317.7525L 341.1534614562988 317.7525"></path><g id="SvgjsG1393" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1395" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1396" r="5" cx="0" cy="317.7525" class="apexcharts-marker no-pointer-events wzfvvw8gy" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="5"></circle><circle id="SvgjsCircle1397" r="5" cx="37.90594016181098" cy="238.31437499999998" class="apexcharts-marker no-pointer-events w0y9kdiyt" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1398" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1399" r="5" cx="75.81188032362196" cy="99.29765625000002" class="apexcharts-marker no-pointer-events wihlq24ek" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1400" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1401" r="5" cx="113.71782048543295" cy="178.73578125" class="apexcharts-marker no-pointer-events w3r9srbom" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1402" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1403" r="5" cx="151.62376064724393" cy="119.15718749999999" class="apexcharts-marker no-pointer-events wg0o2q4t6" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1404" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1405" r="5" cx="189.5297008090549" cy="198.5953125" class="apexcharts-marker no-pointer-events whjly85fn" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1406" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1407" r="5" cx="227.4356409708659" cy="59.57859374999998" class="apexcharts-marker no-pointer-events wiw6lmyr3" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1408" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1409" r="5" cx="265.3415811326769" cy="208.525078125" class="apexcharts-marker no-pointer-events wo2wlik8d" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1410" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1411" r="5" cx="303.24752129448785" cy="39.71906250000001" class="apexcharts-marker no-pointer-events whvsv7az5" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="5"></circle></g><g id="SvgjsG1412" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskz0ymu22x)"><circle id="SvgjsCircle1413" r="5" cx="341.1534614562988" cy="69.508359375" class="apexcharts-marker no-pointer-events wvr0ufn45" stroke="#0f5ef7" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="9" j="9" index="0" default-marker-size="5"></circle></g></g></g><g id="SvgjsG1394" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1484" x1="0" y1="0" x2="341.1534614562988" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1485" x1="0" y1="0" x2="341.1534614562988" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1486" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1487" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1488" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1386" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1448" class="apexcharts-yaxis" rel="0" transform="translate(22.846538543701172, 0)"><g id="SvgjsG1449" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1450" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1451">160K</tspan></text><text id="SvgjsText1452" font-family="Helvetica, Arial, sans-serif" x="20" y="110.838125" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1453">120K</tspan></text><text id="SvgjsText1454" font-family="Helvetica, Arial, sans-serif" x="20" y="190.27625" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1455">80K</tspan></text><text id="SvgjsText1456" font-family="Helvetica, Arial, sans-serif" x="20" y="269.71437499999996" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1457">40K</tspan></text><text id="SvgjsText1458" font-family="Helvetica, Arial, sans-serif" x="20" y="349.1525" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1459">0K</tspan></text></g></g><g id="SvgjsG1383" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(15, 94, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 447px; height: 557px;"></div></div><div class="contract-trigger"></div></div></div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
						<div class="box-body text-center">
							<img src="../images/trophy.png" class="mt-50" alt="">
							<div class="max-w-500 mx-auto">
								<h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
								<p class="text-white-50 mb-10 font-size-20">You've got 50.5% more sales today. You've reached 8th milestone, checkout author section</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div>
										<h2 class="text-white mb-0 font-weight-500">18.8k</h2>
										<p class="text-mute mb-0 font-size-20">Total users</p>
									</div>
								</div>
								<div class="box-body p-0" style="position: relative;">
									<div id="revenue1" style="min-height: 150px;"><div id="apexcharts4txjv4vz" class="apexcharts-canvas apexcharts4txjv4vz apexcharts-theme-light" style="width: 208px; height: 150px;"><svg id="SvgjsSvg1490" width="208" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1492" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 30)"><defs id="SvgjsDefs1491"><clipPath id="gridRectMask4txjv4vz"><rect id="SvgjsRect1497" width="216" height="129" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask4txjv4vz"><rect id="SvgjsRect1498" width="212" height="129" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1504" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1505" stop-opacity="0.65" stop-color="rgba(122,21,247,0.65)" offset="0"></stop><stop id="SvgjsStop1506" stop-opacity="0.5" stop-color="rgba(189,138,251,0.5)" offset="1"></stop><stop id="SvgjsStop1507" stop-opacity="0.5" stop-color="rgba(189,138,251,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1496" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1510" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1511" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1514" class="apexcharts-grid"><g id="SvgjsG1515" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1517" x1="0" y1="0" x2="208" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1518" x1="0" y1="25" x2="208" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1519" x1="0" y1="50" x2="208" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="75" x2="208" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="100" x2="208" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="125" x2="208" y2="125" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1516" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1524" x1="0" y1="125" x2="208" y2="125" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1523" x1="0" y1="1" x2="0" y2="125" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1500" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1501" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1508" d="M 0 125L 0 108.33333333333331H 41.599999999999994V 77.77777777777777H 83.19999999999999V 66.66666666666666H 124.8V 22.2222222222222H 166.39999999999998V 52.77777777777777H 208V 80.55555555555554L 208 125M 208 80.55555555555554z" fill="url(#SvgjsLinearGradient1504)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4txjv4vz)" pathTo="M 0 125L 0 108.33333333333331H 41.599999999999994V 77.77777777777777H 83.19999999999999V 66.66666666666666H 124.8V 22.2222222222222H 166.39999999999998V 52.77777777777777H 208V 80.55555555555554L 208 125M 208 80.55555555555554z" pathFrom="M -1 275L -1 275L 41.599999999999994 275L 83.19999999999999 275L 124.8 275L 166.39999999999998 275L 208 275"></path><path id="SvgjsPath1509" d="M 0 108.33333333333331H 41.599999999999994V 77.77777777777777H 83.19999999999999V 66.66666666666666H 124.8V 22.2222222222222H 166.39999999999998V 52.77777777777777H 208V 80.55555555555554" fill="none" fill-opacity="1" stroke="#7a15f7" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4txjv4vz)" pathTo="M 0 108.33333333333331H 41.599999999999994V 77.77777777777777H 83.19999999999999V 66.66666666666666H 124.8V 22.2222222222222H 166.39999999999998V 52.77777777777777H 208V 80.55555555555554" pathFrom="M -1 275L -1 275L 41.599999999999994 275L 83.19999999999999 275L 124.8 275L 166.39999999999998 275L 208 275"></path><g id="SvgjsG1502" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1530" r="0" cx="0" cy="0" class="apexcharts-marker w0fmd6gech no-pointer-events" stroke="#ffffff" fill="#7a15f7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1503" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1525" x1="0" y1="0" x2="208" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1526" x1="0" y1="0" x2="208" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1527" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1528" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1529" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1495" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1512" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1513" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1493" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(122, 21, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 209px; height: 151px;"></div></div><div class="contract-trigger"></div></div></div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div>
										<h2 class="text-white mb-0 font-weight-500">35.8k</h2>
										<p class="text-mute mb-0 font-size-20">Average reach per post</p>
									</div>
								</div>
								<div class="box-body p-0" style="position: relative;">
									<div id="revenue2" style="min-height: 150px;"><div id="apexchartsmshptaln" class="apexcharts-canvas apexchartsmshptaln apexcharts-theme-light" style="width: 208px; height: 150px;"><svg id="SvgjsSvg1532" width="208" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1534" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 30)"><defs id="SvgjsDefs1533"><clipPath id="gridRectMaskmshptaln"><rect id="SvgjsRect1539" width="216" height="129" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmshptaln"><rect id="SvgjsRect1540" width="212" height="129" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1546" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1547" stop-opacity="0.65" stop-color="rgba(255,184,0,0.65)" offset="0"></stop><stop id="SvgjsStop1548" stop-opacity="0.5" stop-color="rgba(255,220,128,0.5)" offset="1"></stop><stop id="SvgjsStop1549" stop-opacity="0.5" stop-color="rgba(255,220,128,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1538" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1552" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1553" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1556" class="apexcharts-grid"><g id="SvgjsG1557" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1559" x1="0" y1="0" x2="208" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1560" x1="0" y1="25" x2="208" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1561" x1="0" y1="50" x2="208" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1562" x1="0" y1="75" x2="208" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1563" x1="0" y1="100" x2="208" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1564" x1="0" y1="125" x2="208" y2="125" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1558" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1566" x1="0" y1="125" x2="208" y2="125" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1565" x1="0" y1="1" x2="0" y2="125" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1542" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1543" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1550" d="M 0 125L 0 22.2222222222222H 41.599999999999994V 52.77777777777777H 83.19999999999999V 80.55555555555554H 124.8V 108.33333333333331H 166.39999999999998V 77.77777777777777H 208V 66.66666666666666L 208 125M 208 66.66666666666666z" fill="url(#SvgjsLinearGradient1546)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmshptaln)" pathTo="M 0 125L 0 22.2222222222222H 41.599999999999994V 52.77777777777777H 83.19999999999999V 80.55555555555554H 124.8V 108.33333333333331H 166.39999999999998V 77.77777777777777H 208V 66.66666666666666L 208 125M 208 66.66666666666666z" pathFrom="M -1 275L -1 275L 41.599999999999994 275L 83.19999999999999 275L 124.8 275L 166.39999999999998 275L 208 275"></path><path id="SvgjsPath1551" d="M 0 22.2222222222222H 41.599999999999994V 52.77777777777777H 83.19999999999999V 80.55555555555554H 124.8V 108.33333333333331H 166.39999999999998V 77.77777777777777H 208V 66.66666666666666" fill="none" fill-opacity="1" stroke="#ffb800" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmshptaln)" pathTo="M 0 22.2222222222222H 41.599999999999994V 52.77777777777777H 83.19999999999999V 80.55555555555554H 124.8V 108.33333333333331H 166.39999999999998V 77.77777777777777H 208V 66.66666666666666" pathFrom="M -1 275L -1 275L 41.599999999999994 275L 83.19999999999999 275L 124.8 275L 166.39999999999998 275L 208 275"></path><g id="SvgjsG1544" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1572" r="0" cx="0" cy="0" class="apexcharts-marker wy33rvvg4 no-pointer-events" stroke="#ffffff" fill="#ffb800" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1545" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1567" x1="0" y1="0" x2="208" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1568" x1="0" y1="0" x2="208" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1569" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1570" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1571" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1537" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1554" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1555" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1535" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 184, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 209px; height: 151px;"></div></div><div class="contract-trigger"></div></div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-5 col-xl-6 col-12">
					<div class="box overflow-hidden">
						<div class="box-body p-0">
							<div class="row no-gutters">
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 rounded-0">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												Last Posts
											</h4>
										</div>
										<div class="box-body p-0">
											<div class="media-list media-list-hover">
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Meet Craftwork. Thoroghly Handpicked UI Freebies</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Cook Design Right!</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>5 Reasons to Start Own Bussines</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>How to Make Interface</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Show Me Your Design</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>She gave my mother such a turn, that I have always bee...</h5>
											  </div>
											</a>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5" style="background-image: url(../images/gallery/landscape7.jpg)">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												<span class="avatar avatar-lg bg-success">DK</span>
											</h4>
											<ul class="box-controls">
												<li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a></li>
											</ul>
										</div>
										<div class="box-body">
											<div class="text-right mt-100 pt-20">
												<h3 class="text-white"><small class="mr-10"><i class="fa fa-commenting"></i></small> 3</h3>
												<h2 class="text-white"><small class="mr-10"><i class="fa fa-heart"></i></small> 23</h2>
												<h1 class="text-white"><small class="mr-10"><i class="fa fa-eye"></i></small> 189</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-7 col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Recent Stats</h4>
						</div>
						<div class="box-body" style="position: relative;">
							<div id="recent_trend" style="min-height: 290px;"><div id="apexchartsnzwa9zq" class="apexcharts-canvas apexchartsnzwa9zq apexcharts-theme-light" style="width: 404px; height: 290px;"><svg id="SvgjsSvg1573" width="404" height="290" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1575" class="apexcharts-inner apexcharts-graphical" transform="translate(45.48102569580078, 30)"><defs id="SvgjsDefs1574"><linearGradient id="SvgjsLinearGradient1579" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1580" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1581" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1582" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasknzwa9zq"><rect id="SvgjsRect1584" width="354.5189743041992" height="224.7525" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknzwa9zq"><rect id="SvgjsRect1585" width="352.5189743041992" height="226.7525" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1583" width="7.468263735089982" height="222.7525" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1579)" class="apexcharts-xcrosshairs" y2="222.7525" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1606" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1607" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif" x="24.894212450299943" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1610">Feb</tspan><title>Feb</title></text><text id="SvgjsText1612" font-family="Helvetica, Arial, sans-serif" x="74.68263735089982" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1613">Mar</tspan><title>Mar</title></text><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif" x="124.4710622514997" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1616">Apr</tspan><title>Apr</title></text><text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif" x="174.2594871520996" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1619">May</tspan><title>May</title></text><text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif" x="224.0479120526995" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1622">Jun</tspan><title>Jun</title></text><text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif" x="273.83633695329934" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1625">Jul</tspan><title>Jul</title></text><text id="SvgjsText1627" font-family="Helvetica, Arial, sans-serif" x="323.6247618538992" y="251.7525" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1628">Aug</tspan><title>Aug</title></text></g><line id="SvgjsLine1629" x1="0" y1="223.7525" x2="348.5189743041992" y2="223.7525" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1642" class="apexcharts-grid"><g id="SvgjsG1643" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1653" x1="0" y1="0" x2="348.5189743041992" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1654" x1="0" y1="55.688125" x2="348.5189743041992" y2="55.688125" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1655" x1="0" y1="111.37625" x2="348.5189743041992" y2="111.37625" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1656" x1="0" y1="167.06437499999998" x2="348.5189743041992" y2="167.06437499999998" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1657" x1="0" y1="222.7525" x2="348.5189743041992" y2="222.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1644" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1645" x1="0" y1="223.7525" x2="0" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1646" x1="49.788424900599885" y1="223.7525" x2="49.788424900599885" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1647" x1="99.57684980119977" y1="223.7525" x2="99.57684980119977" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1648" x1="149.36527470179965" y1="223.7525" x2="149.36527470179965" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1649" x1="199.15369960239954" y1="223.7525" x2="199.15369960239954" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1650" x1="248.94212450299943" y1="223.7525" x2="248.94212450299943" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1651" x1="298.7305494035993" y1="223.7525" x2="298.7305494035993" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1652" x1="348.51897430419916" y1="223.7525" x2="348.51897430419916" y2="229.7525" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1659" x1="0" y1="222.7525" x2="348.5189743041992" y2="222.7525" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1658" x1="0" y1="1" x2="0" y2="222.7525" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1587" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1588" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1590" d="M 17.425948715209962 222.7525L 17.425948715209962 141.94364926710585Q 20.160080582754954 140.20951739956087 22.894212450299946 141.94364926710585L 22.894212450299946 141.94364926710585L 22.894212450299946 222.7525L 22.894212450299946 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 17.425948715209962 222.7525L 17.425948715209962 141.94364926710585Q 20.160080582754954 140.20951739956087 22.894212450299946 141.94364926710585L 22.894212450299946 141.94364926710585L 22.894212450299946 222.7525L 22.894212450299946 222.7525z" pathFrom="M 17.425948715209962 222.7525L 17.425948715209962 222.7525L 22.894212450299946 222.7525L 22.894212450299946 222.7525L 22.894212450299946 222.7525L 17.425948715209962 222.7525" cy="141.07658333333336" cx="66.21437361580985" j="0" val="44" barHeight="81.67591666666665" barWidth="7.468263735089982"></path><path id="SvgjsPath1591" d="M 67.21437361580985 222.7525L 67.21437361580985 121.52467010043917Q 69.94850548335484 119.79053823289418 72.68263735089982 121.52467010043917L 72.68263735089982 121.52467010043917L 72.68263735089982 222.7525L 72.68263735089982 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 67.21437361580985 222.7525L 67.21437361580985 121.52467010043917Q 69.94850548335484 119.79053823289418 72.68263735089982 121.52467010043917L 72.68263735089982 121.52467010043917L 72.68263735089982 222.7525L 72.68263735089982 222.7525z" pathFrom="M 67.21437361580985 222.7525L 67.21437361580985 222.7525L 72.68263735089982 222.7525L 72.68263735089982 222.7525L 72.68263735089982 222.7525L 67.21437361580985 222.7525" cy="120.65760416666667" cx="116.00279851640974" j="1" val="55" barHeight="102.09489583333333" barWidth="7.468263735089982"></path><path id="SvgjsPath1592" d="M 117.00279851640974 222.7525L 117.00279851640974 117.8121284337725Q 119.73693038395473 116.07799656622751 122.47106225149972 117.8121284337725L 122.47106225149972 117.8121284337725L 122.47106225149972 222.7525L 122.47106225149972 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 117.00279851640974 222.7525L 117.00279851640974 117.8121284337725Q 119.73693038395473 116.07799656622751 122.47106225149972 117.8121284337725L 122.47106225149972 117.8121284337725L 122.47106225149972 222.7525L 122.47106225149972 222.7525z" pathFrom="M 117.00279851640974 222.7525L 117.00279851640974 222.7525L 122.47106225149972 222.7525L 122.47106225149972 222.7525L 122.47106225149972 222.7525L 117.00279851640974 222.7525" cy="116.9450625" cx="165.79122341700963" j="2" val="57" barHeight="105.80743749999999" barWidth="7.468263735089982"></path><path id="SvgjsPath1593" d="M 166.79122341700963 222.7525L 166.79122341700963 119.66839926710584Q 169.52535528455462 117.93426739956085 172.2594871520996 119.66839926710584L 172.2594871520996 119.66839926710584L 172.2594871520996 222.7525L 172.2594871520996 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 166.79122341700963 222.7525L 166.79122341700963 119.66839926710584Q 169.52535528455462 117.93426739956085 172.2594871520996 119.66839926710584L 172.2594871520996 119.66839926710584L 172.2594871520996 222.7525L 172.2594871520996 222.7525z" pathFrom="M 166.79122341700963 222.7525L 166.79122341700963 222.7525L 172.2594871520996 222.7525L 172.2594871520996 222.7525L 172.2594871520996 222.7525L 166.79122341700963 222.7525" cy="118.80133333333335" cx="215.57964831760953" j="3" val="56" barHeight="103.95116666666665" barWidth="7.468263735089982"></path><path id="SvgjsPath1594" d="M 216.57964831760953 222.7525L 216.57964831760953 110.38704510043917Q 219.3137801851545 108.65291323289418 222.0479120526995 110.38704510043917L 222.0479120526995 110.38704510043917L 222.0479120526995 222.7525L 222.0479120526995 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 216.57964831760953 222.7525L 216.57964831760953 110.38704510043917Q 219.3137801851545 108.65291323289418 222.0479120526995 110.38704510043917L 222.0479120526995 110.38704510043917L 222.0479120526995 222.7525L 222.0479120526995 222.7525z" pathFrom="M 216.57964831760953 222.7525L 216.57964831760953 222.7525L 222.0479120526995 222.7525L 222.0479120526995 222.7525L 222.0479120526995 222.7525L 216.57964831760953 222.7525" cy="109.51997916666667" cx="265.3680732182094" j="4" val="61" barHeight="113.23252083333333" barWidth="7.468263735089982"></path><path id="SvgjsPath1595" d="M 266.3680732182094 222.7525L 266.3680732182094 115.95585760043917Q 269.1022050857544 114.22172573289419 271.8363369532994 115.95585760043917L 271.8363369532994 115.95585760043917L 271.8363369532994 222.7525L 271.8363369532994 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 266.3680732182094 222.7525L 266.3680732182094 115.95585760043917Q 269.1022050857544 114.22172573289419 271.8363369532994 115.95585760043917L 271.8363369532994 115.95585760043917L 271.8363369532994 222.7525L 271.8363369532994 222.7525z" pathFrom="M 266.3680732182094 222.7525L 266.3680732182094 222.7525L 271.8363369532994 222.7525L 271.8363369532994 222.7525L 271.8363369532994 222.7525L 266.3680732182094 222.7525" cy="115.08879166666668" cx="315.1564981188093" j="5" val="58" barHeight="107.66370833333332" barWidth="7.468263735089982"></path><path id="SvgjsPath1596" d="M 316.1564981188093 222.7525L 316.1564981188093 106.6745034337725Q 318.89062998635427 104.94037156622751 321.62476185389926 106.6745034337725L 321.62476185389926 106.6745034337725L 321.62476185389926 222.7525L 321.62476185389926 222.7525z" fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 316.1564981188093 222.7525L 316.1564981188093 106.6745034337725Q 318.89062998635427 104.94037156622751 321.62476185389926 106.6745034337725L 321.62476185389926 106.6745034337725L 321.62476185389926 222.7525L 321.62476185389926 222.7525z" pathFrom="M 316.1564981188093 222.7525L 316.1564981188093 222.7525L 321.62476185389926 222.7525L 321.62476185389926 222.7525L 321.62476185389926 222.7525L 316.1564981188093 222.7525" cy="105.8074375" cx="364.94492301940915" j="6" val="63" barHeight="116.94506249999999" barWidth="7.468263735089982"></path></g><g id="SvgjsG1597" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1599" d="M 24.894212450299946 222.7525L 24.894212450299946 82.54298260043916Q 27.628344317844938 80.80885073289417 30.36247618538993 82.54298260043916L 30.36247618538993 82.54298260043916L 30.36247618538993 222.7525L 30.36247618538993 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 24.894212450299946 222.7525L 24.894212450299946 82.54298260043916Q 27.628344317844938 80.80885073289417 30.36247618538993 82.54298260043916L 30.36247618538993 82.54298260043916L 30.36247618538993 222.7525L 30.36247618538993 222.7525z" pathFrom="M 24.894212450299946 222.7525L 24.894212450299946 222.7525L 30.36247618538993 222.7525L 30.36247618538993 222.7525L 30.36247618538993 222.7525L 24.894212450299946 222.7525" cy="81.67591666666667" cx="73.68263735089982" j="0" val="76" barHeight="141.07658333333333" barWidth="7.468263735089982"></path><path id="SvgjsPath1600" d="M 74.68263735089982 222.7525L 74.68263735089982 65.83654510043917Q 77.41676921844481 64.10241323289418 80.1509010859898 65.83654510043917L 80.1509010859898 65.83654510043917L 80.1509010859898 222.7525L 80.1509010859898 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 74.68263735089982 222.7525L 74.68263735089982 65.83654510043917Q 77.41676921844481 64.10241323289418 80.1509010859898 65.83654510043917L 80.1509010859898 65.83654510043917L 80.1509010859898 222.7525L 80.1509010859898 222.7525z" pathFrom="M 74.68263735089982 222.7525L 74.68263735089982 222.7525L 80.1509010859898 222.7525L 80.1509010859898 222.7525L 80.1509010859898 222.7525L 74.68263735089982 222.7525" cy="64.96947916666667" cx="123.47106225149972" j="1" val="85" barHeight="157.78302083333332" barWidth="7.468263735089982"></path><path id="SvgjsPath1601" d="M 124.47106225149972 222.7525L 124.47106225149972 36.136211767105834Q 127.2051941190447 34.402079899560846 129.9393259865897 36.136211767105834L 129.9393259865897 36.136211767105834L 129.9393259865897 222.7525L 129.9393259865897 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 124.47106225149972 222.7525L 124.47106225149972 36.136211767105834Q 127.2051941190447 34.402079899560846 129.9393259865897 36.136211767105834L 129.9393259865897 36.136211767105834L 129.9393259865897 222.7525L 129.9393259865897 222.7525z" pathFrom="M 124.47106225149972 222.7525L 124.47106225149972 222.7525L 129.9393259865897 222.7525L 129.9393259865897 222.7525L 129.9393259865897 222.7525L 124.47106225149972 222.7525" cy="35.26914583333334" cx="173.2594871520996" j="2" val="101" barHeight="187.48335416666666" barWidth="7.468263735089982"></path><path id="SvgjsPath1602" d="M 174.2594871520996 222.7525L 174.2594871520996 41.70502426710584Q 176.9936190196446 39.97089239956085 179.7277508871896 41.70502426710584L 179.7277508871896 41.70502426710584L 179.7277508871896 222.7525L 179.7277508871896 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 174.2594871520996 222.7525L 174.2594871520996 41.70502426710584Q 176.9936190196446 39.97089239956085 179.7277508871896 41.70502426710584L 179.7277508871896 41.70502426710584L 179.7277508871896 222.7525L 179.7277508871896 222.7525z" pathFrom="M 174.2594871520996 222.7525L 174.2594871520996 222.7525L 179.7277508871896 222.7525L 179.7277508871896 222.7525L 179.7277508871896 222.7525L 174.2594871520996 222.7525" cy="40.83795833333335" cx="223.0479120526995" j="3" val="98" barHeight="181.91454166666665" barWidth="7.468263735089982"></path><path id="SvgjsPath1603" d="M 224.0479120526995 222.7525L 224.0479120526995 62.124003433772515Q 226.7820439202445 60.38987156622753 229.51617578778948 62.124003433772515L 229.51617578778948 62.124003433772515L 229.51617578778948 222.7525L 229.51617578778948 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 224.0479120526995 222.7525L 224.0479120526995 62.124003433772515Q 226.7820439202445 60.38987156622753 229.51617578778948 62.124003433772515L 229.51617578778948 62.124003433772515L 229.51617578778948 222.7525L 229.51617578778948 222.7525z" pathFrom="M 224.0479120526995 222.7525L 224.0479120526995 222.7525L 229.51617578778948 222.7525L 229.51617578778948 222.7525L 229.51617578778948 222.7525L 224.0479120526995 222.7525" cy="61.25693750000002" cx="272.8363369532994" j="4" val="87" barHeight="161.49556249999998" barWidth="7.468263735089982"></path><path id="SvgjsPath1604" d="M 273.8363369532994 222.7525L 273.8363369532994 28.7111284337725Q 276.5704688208444 26.97699656622751 279.30460068838937 28.7111284337725L 279.30460068838937 28.7111284337725L 279.30460068838937 222.7525L 279.30460068838937 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 273.8363369532994 222.7525L 273.8363369532994 28.7111284337725Q 276.5704688208444 26.97699656622751 279.30460068838937 28.7111284337725L 279.30460068838937 28.7111284337725L 279.30460068838937 222.7525L 279.30460068838937 222.7525z" pathFrom="M 273.8363369532994 222.7525L 273.8363369532994 222.7525L 279.30460068838937 222.7525L 279.30460068838937 222.7525L 279.30460068838937 222.7525L 273.8363369532994 222.7525" cy="27.844062500000007" cx="322.62476185389926" j="5" val="105" barHeight="194.9084375" barWidth="7.468263735089982"></path><path id="SvgjsPath1605" d="M 323.62476185389926 222.7525L 323.62476185389926 54.69892010043918Q 326.35889372144425 52.96478823289419 329.09302558898924 54.69892010043918L 329.09302558898924 54.69892010043918L 329.09302558898924 222.7525L 329.09302558898924 222.7525z" fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknzwa9zq)" pathTo="M 323.62476185389926 222.7525L 323.62476185389926 54.69892010043918Q 326.35889372144425 52.96478823289419 329.09302558898924 54.69892010043918L 329.09302558898924 54.69892010043918L 329.09302558898924 222.7525L 329.09302558898924 222.7525z" pathFrom="M 323.62476185389926 222.7525L 323.62476185389926 222.7525L 329.09302558898924 222.7525L 329.09302558898924 222.7525L 329.09302558898924 222.7525L 323.62476185389926 222.7525" cy="53.83185416666669" cx="372.4131867544991" j="6" val="91" barHeight="168.9206458333333" barWidth="7.468263735089982"></path><g id="SvgjsG1598" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG1589" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1660" x1="0" y1="0" x2="348.5189743041992" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1661" x1="0" y1="0" x2="348.5189743041992" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1662" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1663" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1664" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1630" class="apexcharts-yaxis" rel="0" transform="translate(15.481025695800781, 0)"><g id="SvgjsG1631" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1633">120</tspan></text><text id="SvgjsText1634" font-family="Helvetica, Arial, sans-serif" x="20" y="87.088125" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1635">90</tspan></text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif" x="20" y="142.77625" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1637">60</tspan></text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif" x="20" y="198.464375" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1639">30</tspan></text><text id="SvgjsText1640" font-family="Helvetica, Arial, sans-serif" x="20" y="254.1525" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1641">0</tspan></text></g></g><g id="SvgjsG1576" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(239, 55, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(15, 94, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 447px; height: 334px;"></div></div><div class="contract-trigger"></div></div></div>
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								New Arrivals
								<small class="subtitle">More than 400+ new members</small>
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-white">products</span></th>
											<th style="min-width: 100px"><span class="text-fade">pruce</span></th>
											<th style="min-width: 100px"><span class="text-fade">deposit</span></th>
											<th style="min-width: 150px"><span class="text-fade">agent</span></th>
											<th style="min-width: 130px"><span class="text-fade">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary-light badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-success-light badge-lg">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-danger-light badge-lg">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
</x-app-layout>
