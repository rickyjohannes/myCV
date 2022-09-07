@extends('layouts.app')

@section('title')
  Skill
 @stop

@section('content')
<div id="fh5co-skills" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Skills</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="90"><span><strong>HTML</strong>70%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="80"><span><strong>CSS</strong>60%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="85"><span><strong>PHP</strong>80%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="85"><span><strong>MySQL</strong>70%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="75"><span><strong>Java</strong>80%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="70"><span><strong>Javascript</strong>50%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="80"><span><strong>laravel</strong>80%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="90"><span><strong>C++</strong>90%</span></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="chart" data-percent="95"><span><strong>Arduino</strong>70%</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="progress-wrap">
                    <h3><span class="name-left">HTML/CSS</span><span class="value-right">70%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                    </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                    </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Java</span><span class="value-right">80%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-wrap">
                    <h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                    </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Laravel</span><span class="value-right">80%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <h3><span class="name-left">Intenet Of Things</span><span class="value-right">70%</span></h3>
                    <div class="progress">
                    <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection