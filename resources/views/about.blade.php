@extends('layouts.app')

@section('title')
  About Me
 @stop

@section('content')


    <div id="fh5co " class="animate-box p">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="info">
                        <li><span class="first-block">Full Name:</span><span class="second-block">Ricky Johannes</span></li>
                        <li><span class="first-block">Phone:</span><span class="second-block">+628-136-2222-160</span></li>
                        <li><span class="first-block">Email:</span><span class="second-block">rickyjop0@gmail.com</span></li>
                        <li><span class="first-block">Website:</span><span class="second-block">www.cybertechnology.my.id</span></li>
                        <li><span class="first-block">Address:</span><span class="second-block">Bekasi, Indonesia</span></li>
                    </ul>
                </div>
                <hr>
                <div class="col-md-9">
                    <h2>Hello There!</h2>
                    <p>
                       I'm Ricky, I'm a creative person and always looking for alternative solutions to the problems I face.
                       I am also always open to receiving various inputs. I am also quick to understand new things.
                    </p>
                   
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" class="fh5co-bg-dark">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Hire Me!</h2>
                    <p>With the confidence and ability and work ethic that I have, I believe I can make a meaningful contribution in carrying out my responsibilities.</p>
                    <p><a href="{{route('contacts')}}" class="btn btn-default btn-lg">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>





@endsection