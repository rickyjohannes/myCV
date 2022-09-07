@extends('layouts.app')

@section('title')
  Contact Us
@stop

@section('content')

<div id="fh5co-consult">
    <div class="video fh5co-video" style="background-image: url(images/cover_bg_2.jpg);">
        <div class="overlay"></div>
    </div>
    <div class="choose animate-box">
        @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
        <h2>Contact</h2>
        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="row form-group">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Send</button>
            </div>

        </form>	
    </div>
</div>

@endsection