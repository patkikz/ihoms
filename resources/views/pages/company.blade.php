@extends('layouts.app')

@section('content')

{{-- <section class="section1">
    <div class="container clearfix">
        <div class="row">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <h2>Company Profile</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet erat quis nibh vehicula, condimentum placerat lectus iaculis. Nam ultricies nisi vel ligula pulvinar, quis dapibus velit iaculis. In hac habitasse platea dictumst. In vitae
                    nunc tincidunt, euismod nibh sit amet, convallis arcu. Vestibulum feugiat auctor auctor. Phasellus lacinia auctor metus, in posuere justo egestas eget. Vivamus ornare tincidunt sagittis. Nunc pretium magna eu est condimentum malesuada. Nunc
                    arcu nulla, fringilla in sodales sed, laoreet eget mi. Fusce ac suscipit turpis, sed porttitor mauris. </p>
                <p> Integer convallis justo augue, et condimentum tortor scelerisque ut. Ut mattis ullamcorper lacinia. Donec dignissim eu dui non ultrices. Fusce ullamcorper suscipit ante, eget ultrices ipsum faucibus sagittis. Nunc eu elit orci. Etiam id orci vitae
                    mauris bibendum molestie sit amet sed neque. Cras malesuada vulputate orci sed molestie. Phasellus accumsan nunc sit amet egestas suscipit. Duis non ipsum ac risus consequat dapibus placerat sed dui. Sed vitae risus scelerisque purus euismod
                    ornare. Phasellus ultricies ante vitae molestie adipiscing. </p>
                <div class="clearfix"></div>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                </blockquote>
                <div class="clearfix"></div>
                <p>Sed rutrum ac leo vel aliquet. Fusce vehicula orci vitae dui posuere, ac luctus tortor aliquam. Morbi ac cursus est. Nam arcu risus, tristique fringilla auctor luctus, congue id felis. Donec at semper turpis. Vivamus id tellus quis massa gravida
                    viverra a vitae urna. Integer facilisis aliquet velit a egestas. Pellentesque orci dui, rutrum ac nulla eget, laoreet sollicitudin nunc. Aliquam vel mollis turpis. Cras vitae sodales felis. Aliquam semper tincidunt nunc. Nullam tempor ipsum
                    purus, at commodo orci volutpat ac. Vivamus scelerisque nunc felis, nec euismod arcu gravida sed. Etiam tempus, purus posuere molestie blandit, tortor felis iaculis nisl, ac rhoncus nisi ipsum a enim. </p>
                <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                </blockquote>
                <div class="clearfix"></div>
                <p>Integer convallis facilisis est, non vehicula ligula tincidunt ac. Curabitur dignissim quam mollis purus rhoncus imperdiet. Aliquam erat volutpat. Duis tempor vestibulum erat, in condimentum eros dignissim at. Maecenas elementum tortor nulla,
                    a suscipit mi tincidunt id. Morbi id felis luctus, aliquet neque cursus, aliquam leo. Pellentesque vel justo tincidunt, pulvinar justo id, vulputate tortor. </p>
                <p>Quisque sollicitudin ante vel nulla bibendum varius. Praesent lobortis felis erat, id sagittis quam mollis ac. Aliquam erat volutpat. Integer at tellus bibendum, consequat turpis ultricies, facilisis lectus. Mauris iaculis quam dolor, id commodo
                    lacus viverra eget. Nulla porttitor est placerat lacinia placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
        </div>
    </div>
    </section> --}}

    <section class="section1 mt-5">
    <div class="container clearfix">
        <div class="row mx-atuo">
                
                <div class="content col-lg-12 col-md-12 col-sm-12 col-12 clearfix">
                <h2>LIST OF EXECUTIVE OFFICERS and BOARD OF DIRECTORS</h2><br/>
                <div class="d-flex">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2">EXECUTIVE COMMITEE:</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>
                                    <i>Position</i>
                                </th>
                                <th>
                                    <i>Name</i>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    PRESIDENT
                                </td>
                                <td>
                                    JEANA MACAUMA
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    VICE PRESIDENT
                                </td>
                                <td>
                                    DR. FRANCISCO ABALOS
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SECRETARY
                                </td>
                                <td>
                                    JOAN T. VILLAS
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    TREASURER
                                </td>
                                <td>
                                    JENNIFER M. DELFINO
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AUDITOR
                                </td>
                                <td>
                                    CESAR PABICO
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2">BOARD OF DIRECTORS:</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    GRIVANCE & ADJUDICATION
                                </td>
                                <td>
                                    BENJAMIN PATARAY, JR.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AUDIT & INVENTORY
                                </td>
                                <td>
                                    WILLIE C. JOSUE
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    COMMITEE ON ELECTIONS
                                </td>
                                <td>
                                    RACHEL R. CRUZET
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    DEVELOPMENT & SERVICES
                                </td>
                                <td>
                                    BERNIE LABASO
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MEMBERSHIP & EDUCTION
                                </td>
                                <td>
                                    CHRISTOPHER HETAJOBE
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    FINANCIAL MANAGEMENT
                                </td>
                                <td>
                                    ROWENA KOH
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    LIVELIHOOD COMMITEE
                                </td>
                                <td>
                                    ESTELITA DIAZ
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MAINTENANCE COMMITEE
                                </td>
                                <td>
                                    RYAN AZUR
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PEACE AND ORDER
                                </td>
                                <td>
                                    DANTE MANAIT
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SOCIAL AND CULTURAL
                                </td>
                                <td>
                                    RAYMOND BAYONITO
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </section>


@include('inc.footer')

@endsection