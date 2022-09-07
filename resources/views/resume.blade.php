@extends('layouts.app')

@section('title')
Resume
@stop
@section('content')
    <div id="fh5co" class="fh5co-bg-color">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>My Resume</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline">
                        <li class="timeline-heading text-center animate-box">
                            <div><h3>School</h3></div>
                        </li>
                        <li class="animate-box timeline-unverted">
                            <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">SMP Negeri 3 Cibarusah</h3>
                                    <hr>
                                    <span class="company">Year 2014-2017</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">SMK Taruna Bhakti</h3>
                                    <hr>
                                    <span class="company">Year 2017-2020</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-unverted animate-box">
                            <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Politeknik Meta Industri</h3>
                                    <hr>
                                    <span class="company">On Going Year 2020 - NOW</span>
                                </div>
                            </div>
                        </li>
  
                        
                    </ul>

                    <ul class="timeline">
                        <li class="timeline-heading text-center animate-box">
                            <div><h3>Experience</h3></div>
                        </li>
                        <li class="animate-box timeline-unverted">
                            <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">IT Support on CV TOHO SUKSES MANDIRI</h3>
                                    <span class="company">Experienced for 1 months</span>
                                    <hr>
                                        <tr>
                                            <td>* Perform network and computer maintenance in several companies that work together.  </td> 
                                            <br/>
                                            <td>* Perform service on client computers and laptops. </td>
                                            <br/>
                                            <td>* Make sales of several items sold at CV TOHO SUKSES MANDIRI. </td>
                                        </tr>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">IT Suppot on PT Sanoh Indonesia</h3>
                                    <span class="company">Experienced for 3 months</span>
                                    <hr>
                                        <tr>
                                            <td>* Create a web-based application project for inventory of items.  </td> 
                                            <br/>
                                            <td>* Assist in repairing computers and laptops. </td>
                                            <br/>
                                            <td>* Helped to installations the new building network. </td>
                                        </tr>
                                </div>
                            </div>
                        </li>
  
  
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection