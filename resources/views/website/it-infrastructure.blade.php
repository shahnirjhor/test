@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Domain</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="fun-facts1">

        <div class="col-md-12 mx-auto">
            <!--======  Start Section Title One ======-->

            <h2 class="fw-bold" style="text-align: center;">IT <em>INFRASTRUCTURE</em> </h2>
            <p style="color: black; text-align: center; font-size: 16px;">
                Complete 360 Degree Sphere Of It Infrastructure Solutions

            </p>

        </div>
        <!--====== ABOUT TWO PART ENDS ======-->

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <p style="color:black; font-size: 16px;">LeapFrog offers a variety of core IT and technology solutions
                        based on customer’s need and requirements and offer our expertise to size it and frame a technically
                        superior solution which suits customer’s budget.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('/website/assets/images/IT-firm.jpg') }}"
                        style="border-radius: 2%; width:350px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                        alt="Electrical Solutions">
                </div>

            </div>


        </div>

    </div>
    <!--====== PRICING STYLE ONE START ======-->
    <section class="pricing-area pricing-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center">
                        <h4 class="mb-3 fw-bold">Our services include:</h4>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                   <ul class="list-group">
                       <li class="list-group-item"> <span>VOICE & VIDEO COMMUNICATION</span>
                           <p style="color:black; margin-bottm:-10px;"> EPABX/Key Telephone
                               System, IP Telephony Solutions, Contact Center Solutions, Headsets and Dial pads, VOIP
                               Communication, Analog/HYBRID systems, Audio Conferencing Solutions, Video Conferencing
                               Solutions, Board Room Integration Solutions. </p>
                       </li>
                       <li class="list-group-item"> <span>ENTERPRISE SECURITY SOLUTIONS</span>
                           <p style="color:black; margin-bottm:-10px;"> Network Security, Antivirus Security, Network
                               Access Control, UTM/Firewall, Intrusion Detection System Intrusion Prevention System,
                               Data leakage prevention. </p>
                       </li>
                       <li class="list-group-item"> <span>POWER & COOLING SOLUTIONS</span>
                           <p style="color:black; margin-bottm:-10px;"> UPS systems & services, power distribution,
                               Precision cooling systems, Power System Engineering Services, Power and Cooling Services
                               Central battery system. </p>
                       </li>
                       <li class="list-group-item"> <span>DATA CENTER SOLUTIONS </span>
                           <p style="color:black; margin-bottm:-10px;"> Enterprise Servers and Storage, Medium Data
                               Center Assessment Services, Server Communication, Virtualisation. </p>
                       </li>
                       <li class="list-group-item"> <span>NETWORK & CONVERGENCE </span>
                           <p style="color:black; margin-bottm:-10px;"> Capacity Planning, Network Security Design,
                               Network Virtualisation, Performance Assessments, Unified Network Management LAN/WAN
                               Architecture Design & Implementation. </p>
                       </li>
                       <li class="list-group-item"> <span>COMPUTING SOLUTIONS </span>
                           <p style="color:black; margin-bottm:-10px;"> Enterprise Messaging, Directory Services,
                               Desktop Services, Commercial Desktops, Tablets, NoteBooks. </p>
                       </li>
                       <li class="list-group-item"> <span>WAN SOLUTIONS </span>
                           <p style="color:black; margin-bottm:-10px;"> Internet Services, Point-to-point
                               Connectivity, MPLS Networks </p>
                       </li>
                       <li class="list-group-item"> <span>WIRELESS SOLUTIONS </span>
                           <p style="color:black; margin-bottm:-10px;">Indoor Wi-Fi and Wireless Mesh, Outdoor Long
                               Distance & High Bandwidth solutions, Hospitality Wi-Fi–Hotspots & Integrated Guest
                               Billing </p>
                       </li>

                   </ul>
               </div>
        

           </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== PRICING STYLE ONE ENDS ======-->
    </div>
@endsection
