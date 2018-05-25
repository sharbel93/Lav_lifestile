@extends('layouts.app')
@section('content')
   <!-- =========================== PAGE HEADER BEGIN =========================== -->
   <section class="margin-bottom50 darkarea">
      <div class="pagecover" style="background-image:url({{ asset('template/assets/img/defaultbg.jpg') }})">
         <div class="container">
            <div class="entrycover short">
               <h1 class="maintitle">Services</h1>
               <nav class="breadcrumbs"><span><a href="#">Home</a></span> <span class="sep">/</span> <span>Services</span></nav><!-- .breadcrumbs -->		</div>
         </div>
      </div>
   </section>
   <!-- =========================== PAGE HEADER END =========================== -->


   <!-- =========================== Services Accordion Begin  =========================== -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div id="content" role="main">
                  <div class="col-md-4 no-pad">
                     <ul class="nav nav-tabs tabstyle1" role="tablist">
                        <li role="presentation" class="">
                           <a href="#tab_two0" aria-controls="tab_two0" role="tab" data-toggle="tab">TRANSPORT &amp; HIRE
                              OF PLANT &amp; MACHINERY</a>
                        </li>
                        <li role="presentation" class="active">
                           <a href="#tab_two1" aria-controls="tab_two1" role="tab" data-toggle="tab">BUILDING MATERIALS</a>
                        </li>
                        <li role="presentation" class="">
                           <a href="#tab_two2" aria-controls="tab_two2" role="tab" data-toggle="tab">ROAD CONSTRUCTION</a>
                        </li>
                        <li role="presentation" class="">
                           <a href="#tab_two3" aria-controls="tab_two3" role="tab" data-toggle="tab">REAL ESTATE</a>
                        </li>
                        <li role="presentation" class="">
                           <a href="#tab_two4" aria-controls="tab_two4" role="tab" data-toggle="tab">GENERAL CIVIC ENGINEERING WORKS</a>
                        </li>
                        <li role="presentation" class="">
                           <a href="#tab_two5" aria-controls="tab_two5" role="tab" data-toggle="tab">GENERAL BUILDING CONSTRUCTION &amp; RENOVATION</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-8 no-pad">
                     <div class="tab-content tabstyle1">
                        <div role="tabpanel" class="tab-pane " id="tab_two0">
                           <h4>FINANCING &amp; EQUITY INVESTMENT</h4>
                           <p>P
                              Leading-edge e-services feeds, dot-com integrateAJAX-enabled value solutions world-class authentic ubiquitous redefine intuitive mashups technologies rss-capable ROI open-source. Rich-clientAPIs functionalities e-business world-class. B2B, generate. Blogging user-centric ubiquitous communities end-to-end beta-test world-class wireless orchestrate monetize seamless ubiquitous.
                           </p>
                           <p>
                              Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                           </p>
                           <p>
                              Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                           </p>
                           <ul class="unstyle checklist">
                              <li>Podcasting operational change management inside</li>
                              <li>Workflows to establish a framework</li>
                              <li>Taking seamless key performance indicators </li>
                              <li>Keeping your eye on the ball while performing</li>
                              <li>Start-up mentality to derive convergence</li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane active in" id="tab_two1">
                           <h4 class="text-center">OUR BUILDING MATERIALS</h4>
                           <div class="row">
                              <div class="col-md-4 _services">
                                 <ul >
                                    <li><a class="btn" href="{{ url('/service/shallow_drain') }}">Shallow drains <br> (Small and Big)</a></li>
                                    <li><a class="btn" href="{{ url('/service/culverts') }}" >Culverts</a></li>
                                    <li><a class="btn " href="{{ url('/service/louver_vents') }}">Louver Vents <br>
                                       6 inch &amp; 8 inch</a></li>
                                    <li><a class="btn" href="{{ url('/service/concrete_floor_tiles') }}">Concrete Floor <br>Tiles</a></li>
                                    <li><a class="btn" href="{{ url('/service/star_concrete_tiles') }}">Star Concrete <br>floor tiles</a></li>
                                    <li><a class="btn" href="{{ url('/service/hatari_slabs') }}">Hatari Slabs</a></li>
                                    <li><a class="btn" href="{{ url('/service/window_cills') }}">Window Cills</a></li>
                                    <li><a class="btn" href="{{ url('/service/paving_slabs') }}">Paving slabs</a></li>

                                 </ul>
                              </div>
                              <div class="col-md-4 _services">
                                 <ul>
                                    <li><a class="btn" href="{{ url('/service/side_slabs') }}">Side slabs</a></li>
                                    <li><a class="btn" href="{{ url('/service/ibd_drainages') }}">IBD drainages</a></li>
                                    <li><a class="btn" href="{{ url('/service/ventilations') }}">Ventilations</a></li>
                                    <li><a class="btn" href="{{ url('/service/hollow_blocks') }}">Hollow Block <br>6 inch &amp; 8 inch</a></li>
                                    <li><a class="btn" href="{{ url('/service/solid_blocks') }}">Solid Blocks</a></li>
                                    <li><a class="btn" href="{{ url('/service/road_curbs') }}">Road Curbs</a></li>
                                    <li><a class="btn" href="{{ url('/service/roofing_ridges') }}">Roofing ridges</a></li>
                                    <li><a class="btn" href="{{ url('/service/flower_vents') }}">Flower vents</a></li>

                                 </ul>
                              </div>
                              <div class="col-md-4 _services">
                                 <ul >
                                    <li><a class="btn" href="{{ url('/service/column_coupings') }}">Column coupings</a></li>
                                    <li><a class="btn" href="{{ url('/service/kerra_boundary_posts') }}">KERRA Boundary <br>posts</a></li>
                                    <li><a class="btn" href="{{ url('/service/ceramic_floor_tiles') }}">Ceramic floor <br> tiles</a></li>
                                    <li><a class="btn" href="{{ url('/service/terrazo_bench') }}">Terrazo Bench</a></li>
                                    <li><a class="btn" href="{{ url('/service/cabro_blocks') }}">Cabros Blocks</a></li>
                                    <li><a class="btn" href="{{ url('/service/paving_blocks') }}">paving blocks</a></li>
                                    <li><a class="btn" href="{{ url('/service/road_channels') }}">Road Channels</a></li>

                                 </ul>
                              </div>
                           </div>

                        </div>
                        <div role="tabpanel" class="tab-pane " id="tab_two2">
                           <h4>ROAD CONSTRUCTION</h4>
                           <ul class="unstyle checklist">
                              <li>Grading (light and Heavy)</li>
                              <li>Earth Works</li>
                              <li>Site Clearance</li>
                              <li>Culvert And Drainage Works</li>
                              <li>Pipes Laying </li>
                               <li>Boreholes Drilling</li>
                               <li>Gravelling</li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="tab_two3">
                           <h4>REAL ESTATE</h4>
                           <ul class="unstyle checklist">
                              <li>Plots</li>
                               <li>Leasing of Houses, Offices, Go Downs</li>
                               <li>Letting of apartments</li>
                               <li>Green House</li>
                               <li>Agri Business</li>
                               <li>Morgages</li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="tab_two4">
                           <h4>GENERAL CIVIC ENGINEERING WORKS</h4>
                           <ul class="unstyle checklist">
                                <li>Construction Consulting</li>
                               <li>Project Management</li>
                               <li>Design and Build</li>
                               <li>Waste Water Recycling</li>
                               <li>Irrigation Infrastructure</li>
                               <li>Site Clearance</li>
                               <li>Earth Works</li>
                               <li>Culvert and Drainage Work</li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="tab_two5">
                           <h4>GENERAL BUILDING CONSTRUCTION &amp; RENOVATION</h4>
                           <ul class="unstyle checklist">
                               <li>Construction Consulting</li>
                               <li>Project Management</li>
                               <li>Design and Build</li>
                               <li>Interior Decoration</li>
                               <li>Roofing</li>
                               <li>Solar Water Systems</li>
                               <li>Cabro Paving</li>
                               <li>Site Clearance</li>
                               <li>Environment Impact Assessment Reports</li>
                               <li>Electrical Fence Installation </li>
                               <li>CCTV Installation</li>
                               <li>Painting</li>
                               <li>Fire Alarms</li>
                               <li>Plumbing</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- =========================== Services Accordion End  =========================== -->

@stop