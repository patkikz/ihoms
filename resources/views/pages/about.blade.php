@extends('layouts.app')

@section('content')
<div class="py-4 mt-4 clearfix"></div>
<section class="section1 mt-5">
        <div class="container clearfix">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="general-title text-center">
                <h1 class="title">ABOUT OUR COMPANY</h1>
                <h6>Learn more about us</h6>
                <hr>
                </div>
                <div class="divider"></div>
                <div class="row mb-5">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="servicetitle">
                                <h4 class="primary-color">Mission</h4>
                                <hr>
                            </div>
                            <p>To Serve our Community with love Respect and honor to our fellow neighbors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="servicetitle">
                                <h4 class="primary-color">Vision</h4>
                                <hr>
                            </div>
                            <p>We will lead in Delivering Positive Results in Integrated Homeowners Management System.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="servicetitle">
                                <h4 class="primary-color">Core Values</h4>
                                <hr>
                            </div>
                            <p>Innovation, Quality, Collaboration, Performance, Integrity, Commitment</p>
                        </div>
                    </div>
                </div>
            </div>
                {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="he-wrap tpl2">
                <img src="{{ asset('img/office.png') }}" alt="" class="img-responsive">
                <div class="he-view">
                        <div class="bg a0" data-animate="fadeIn">
                        <div class="center-bar">
                        <a href="#" class="twitter a0" data-animate="elasticInDown"></a>
                        <a href="#" class="facebook a1" data-animate="elasticInDown"></a>
                        <a href="#" class="google a2" data-animate="elasticInDown"></a>
                        </div>
                        </div>
                </div>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                </div>
                </div> --}}
                <div class="table-responsive">
                <table class="table table-bordered table-condensed">
                        <thead class="thead-light">
                                <tr class="text-center">
                                        <th>GUIDING PRINCIPLES</th>
                                        <th>WHAT WE VALUE</th>
                                        <th>OBSERVED BEHAVIORS</th>
                                </tr>
                        </thead>
                        <tr>
                                <td class="text-center" rowspan="2" style="padding-top: 60px;">COMMUNITY AND COSTUMERS</td>
                                <td>
                                        <u><b>Innovation</b></u> : By experimenting and delivering results
                                </td>
                                <td>
                                        <ul>
                                                <li>Experiments and encourages other to do so</li>
                                                <li>Delivers new solutions with speed and simplicity</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <u><b>Quality</b></u> : By taking pride in doing ordinary things & extraordinary well
                                </td>
                                <td>
                                        <ul>
                                                <li>Always looking for better ways to do things</li>
                                                <li>No compromise on quality and strives for excellence</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td class="text-center" rowspan="2" style="padding-top: 100px;">TEAM</td>
                                <td>
                                        <u><b>Collaboration</b></u> : Championing high performing teams with diversity and inclusion
                                </td>
                                <td>
                                        <ul>
                                                <li>Champions in working together in high performance teams</li>
                                                <li>Welcomes diversity and inclusions of styles, ideas and perspective</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <u><b>Performance</b></u> : By prioritizing and making things happen with Urgency
                                </td>
                                <td>
                                        <ul>
                                                <li>Is passionate to achive goals, goes extra miles</li>
                                                <li>Prioritizes, decides and make things happen with urgency</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td class="text-center" rowspan="2" style="padding-top: 100px;">SELF</td>
                                <td>
                                        <u><b>Commitment</b></u> : By working together with compassion and a heart
                                </td>
                                <td>
                                        <ul>
                                                <li>Positive attive towards work</li>
                                                <li>Is align with the Mission, Vision and Goals of HOA</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <u><b>Integrity</b></u> : By advocating and applying high standards on a daily basis
                                </td>
                                <td>
                                        <ul>
                                                <li>Is hubmle, caring trust, respect and emphaty to others</li>
                                                <li>Lives by the code of conduct even when facing resistance and difficulties</li>
                                        </ul>
                                </td>
                        </tr>
                </table>
                </div>
        </div>
        </div>
        </section>
        <section class="section1">
        <div class="container">
            
        </div>
    </section>

@include('inc.footer')

@endsection