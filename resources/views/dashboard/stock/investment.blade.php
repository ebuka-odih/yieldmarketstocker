@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub"><span>Investment</span></div>
                    <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Invested Stocks</h2>
                            <div class="nk-block-des">
                                <p>At a glance summary of your investment.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools gx-3">
                                <li class="order-md-last"><a href="{{ route('user.stocks') }}" class="btn btn-primary"><span>Invest &amp; Earn</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                <li><a href="{{ route('user.deposit') }}" class="btn btn-light btn-white"><span>Deposit Funds</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row gy-gs">
                        <!-- <div class="col-md-6 col-lg-5 col-xxl-4">
                             <div class="card card-full card-bordered card-wg on-left is-primary">
                                 <div class="card-inner">
                                     <div class="nk-wgacc">
                                         <div class="nk-wgacc-title text-base">
                                             Investment Account
                                             <em class="icon ni ni-info fs-13px text-soft nk-tooltip" title="The available balance in your investment account."></em>
                                         </div>
                                         <div class="nk-wgacc-group flex-lg-nowrap gx-4">
                                             <div class="nk-wgacc-sub">
                                                 <div class="nk-wgacc-amount">
                                                     <div class="number number-md">0.00 <small class="currency">USD</small></div>
                                                 </div>
                                                 <div class="nk-wgacc-subtitle">Available Funds</div>
                                             </div>
                                             <div class="nk-wgacc-sub">
                                                 <span class="nk-wgacc-sign text-soft"><em class="icon ni ni-plus"></em></span>
                                                 <div class="nk-wgacc-amount">
                                                     <div class="number number-sm">0.00</div>
                                                 </div>
                                                 <div class="nk-wgacc-subtitle">Locked</div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-action">
                                         <ul class="nk-block-tools gx-4">
                                             <li><a href="https://www.beckstocker.com/public/investment/payout" class="btn btn-secondary iv-payout"><span>Transfer Funds</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div> -->
                        <div class="col-md-6 col-lg-7 col-xxl-8">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="row gy-gs">
                                            <div class="col-md-12">
                                                <div class="nk-wgacc">
                                                    <div class="nk-wgacc-group flex-md-nowrap gx-4">
                                                        <div class="flex-shrink-0">
                                                            <div class="nk-wgacc-title text-base">
                                                                Amount Invested
                                                                <em class="icon ni ni-info fs-13px text-soft nk-tooltip" title="" data-original-title="The investment currently actived without pending."></em>
                                                            </div>
                                                            <div class="nk-wgacc-group flex-md-nowrap gx-4">
                                                                <div class="nk-wgacc-sub">
                                                                    <div class="nk-wgacc-amount">
                                                                        <div class="number number-md">{{ $invested_stock }} <small class="currency">USD</small></div>
                                                                    </div>
                                                                    <div class="nk-wgacc-subtitle">Currently Invested</div>
                                                                </div>
                                                                <!-- <div class="nk-wgacc-sub">
                                                                     <span class="nk-wgacc-sign text-soft"><em class="icon ni ni-plus"></em></span>
                                                                     <div class="nk-wgacc-amount">
                                                                         <div class="number number-sm">0.00</div>
                                                                     </div>
                                                                     <div class="nk-wgacc-subtitle">Approx Profit</div>
                                                                 </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="nk-wgacc-sub flex-grow-1 ml-lg-1 ml-xxl-5 d-md-none d-lg-block">
                                                            <div class="nk-wgacc-ck lg mb-0"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas class="chart-liner chartjs-render-monitor" id="dailyInvestment" style="display: block; width: 460px; height: 95px;" width="460" height="95"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <ul class="nk-wgacc-nav">
                                            <li><a href="{{ route('user.investment.transactions') }}"><em class="icon ni ni-notes-alt"></em> <span>Transactions</span></a></li>
                                            <!--  <li><a href="https://www.beckstocker.com/public/investment/history"><em class="icon ni ni-file-check"></em> <span>History</span></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection
