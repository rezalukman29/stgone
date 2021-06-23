@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blank
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
	<link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

    <!-- end of page level css-->
@stop
{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">


            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Blank Page</a>
                </li>
            </ol>
            <div class="float-right mt-1">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blank Page
            </div>
        </div>
    </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <!--Content Section Start -->
        <h2> &nbsp;&nbsp; Daily Absensi</h2>
        {{--based on anyone login or not display menu items--}}
                        @if(Sentinel::guest())
                       
                      
                        @else
                        <a>mantap</a>
                        @endif
        <!-- <div style="height:350px;"></div> -->

        
        <!-- //Content Section End -->
   
<section class="content pr-3 pl-3">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box bg-primary text-white mb-4">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Responsive Flip Table
                                </div>
                            </div>
                            <div class="portlet-body bg-white text-dark p-2 flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content example" >
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Code</th>
                                            <th>Company</th>
                                            <th class="numeric">Price</th>
                                            <th class="numeric">Change</th>
                                            <th class="numeric">Change %</th>
                                            <th class="numeric">Open</th>
                                            <th class="numeric">High</th>
                                            <th class="numeric">Low</th>
                                            <th class="numeric">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AAC</td>
                                            <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                            <td class="numeric">$1.38</td>
                                            <td class="numeric">-0.01</td>
                                            <td class="numeric">-0.36%</td>
                                            <td class="numeric">$1.39</td>
                                            <td class="numeric">$1.39</td>
                                            <td class="numeric">$1.38</td>
                                            <td class="numeric">9,395</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>ARDENT LEISURE GROUP</td>
                                            <td class="numeric">$1.15</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">1.32%</td>
                                            <td class="numeric">$1.14</td>
                                            <td class="numeric">$1.15</td>
                                            <td class="numeric">$1.13</td>
                                            <td class="numeric">56,431</td>
                                        </tr>
                                        <tr>
                                            <td>AAX</td>
                                            <td>AUSENCO LIMITED</td>
                                            <td class="numeric">$4.00</td>
                                            <td class="numeric">-0.04</td>
                                            <td class="numeric">-0.99%</td>
                                            <td class="numeric">$4.01</td>
                                            <td class="numeric">$4.05</td>
                                            <td class="numeric">$4.00</td>
                                            <td class="numeric">90,641</td>
                                        </tr>
                                        <tr>
                                            <td>ABC</td>
                                            <td>ADELAIDE BRIGHTON LIMITED</td>
                                            <td class="numeric">$3.00</td>
                                            <td class="numeric">+0.06</td>
                                            <td class="numeric">2.04%</td>
                                            <td class="numeric">$2.98</td>
                                            <td class="numeric">$3.00</td>
                                            <td class="numeric">$2.96</td>
                                            <td class="numeric">862,518</td>
                                        </tr>
                                        <tr>
                                            <td>ABP</td>
                                            <td>ABACUS PROPERTY GROUP</td>
                                            <td class="numeric">$1.91</td>
                                            <td class="numeric">0.00</td>
                                            <td class="numeric">0.00%</td>
                                            <td class="numeric">$1.92</td>
                                            <td class="numeric">$1.93</td>
                                            <td class="numeric">$1.90</td>
                                            <td class="numeric">595,701</td>
                                        </tr>
                                        <tr>
                                            <td>ABY</td>
                                            <td>ADITYA BIRLA MINERALS LIMITED</td>
                                            <td class="numeric">$0.77</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">2.00%</td>
                                            <td class="numeric">$0.76</td>
                                            <td class="numeric">$0.77</td>
                                            <td class="numeric">$0.76</td>
                                            <td class="numeric">54,567</td>
                                        </tr>
                                        <tr>
                                            <td>ACR</td>
                                            <td>ACRUX LIMITED</td>
                                            <td class="numeric">$3.71</td>
                                            <td class="numeric">+0.01</td>
                                            <td class="numeric">0.14%</td>
                                            <td class="numeric">$3.70</td>
                                            <td class="numeric">$3.72</td>
                                            <td class="numeric">$3.68</td>
                                            <td class="numeric">191,373</td>
                                        </tr>
                                        <tr>
                                            <td>ADU</td>
                                            <td>ADAMUS RESOURCES LIMITED</td>
                                            <td class="numeric">$0.72</td>
                                            <td class="numeric">0.00</td>
                                            <td class="numeric">0.00%</td>
                                            <td class="numeric">$0.73</td>
                                            <td class="numeric">$0.74</td>
                                            <td class="numeric">$0.72</td>
                                            <td class="numeric">8,602,291</td>
                                        </tr>
                                        <tr>
                                            <td>AGG</td>
                                            <td>ANGLOGOLD ASHANTI LIMITED</td>
                                            <td class="numeric">$7.81</td>
                                            <td class="numeric">-0.22</td>
                                            <td class="numeric">-2.74%</td>
                                            <td class="numeric">$7.82</td>
                                            <td class="numeric">$7.82</td>
                                            <td class="numeric">$7.81</td>
                                            <td class="numeric">148</td>
                                        </tr>
                                        <tr>
                                            <td>AGK</td>
                                            <td>AGL ENERGY LIMITED</td>
                                            <td class="numeric">$13.82</td>
                                            <td class="numeric">+0.02</td>
                                            <td class="numeric">0.14%</td>
                                            <td class="numeric">$13.83</td>
                                            <td class="numeric">$13.83</td>
                                            <td class="numeric">$13.67</td>
                                            <td class="numeric">846,403</td>
                                        </tr>
                                        <tr>
                                            <td>AGO</td>
                                            <td>ATLAS IRON LIMITED</td>
                                            <td class="numeric">$3.17</td>
                                            <td class="numeric">-0.02</td>
                                            <td class="numeric">-0.47%</td>
                                            <td class="numeric">$3.11</td>
                                            <td class="numeric">$3.22</td>
                                            <td class="numeric">$3.10</td>
                                            <td class="numeric">5,416,303</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                      
                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </section>
            </div> 
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script src="{{ asset('js/pages/table-responsive.js') }}"></script>
@stop
