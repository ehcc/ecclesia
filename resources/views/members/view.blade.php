
@extends('layouts.app')

@section('title', $member->first_name . " " . $member->last_name)


@section('content')
<div class="page-inner">

  <div class="profile-cover">
      <div class="row">
          <div class="col-md-3 profile-image">
              <div class="profile-image-container">
                  <img src="{{asset('assets/images/profile-menu-image.png')}}" alt="Profile picture" style="width:150px; height:150px">
              </div>
          </div>
          {{-- <div class="col-md-12 profile-info">
              <div class=" profile-info-value">
                  <h3>1020</h3>
                  <p>Followers</p>
              </div>
              <div class=" profile-info-value">
                  <h3>1780</h3>
                  <p>Friends</p>
              </div>
              <div class=" profile-info-value">
                  <h3>260</h3>
                  <p>Photos</p>
              </div>
          </div> --}}
      </div>
  </div>

  <div id="main-wrapper">
      <div class="row">
          <div class="col-md-3 user-profile">
              <h3 class="text-center">{{ $member->first_name . " " . $member->last_name}}</h3>
              <p class="text-center">{{ $member->occupation }}</p>
              <hr>
              <ul class="list-unstyled text-center">
                  <li><p><i class="fa fa-map-marker m-r-xs"></i>{{ $member->address }}</p></li>
                  <li><p><i class="fa fa-envelope m-r-xs"></i><a href="mailto:{{ $member->email }}" >{{ $member->email }}</a></p></li>
                  <li><p><i class="fa fa-mobile m-r-xs"></i><a href="tel:{{ $member->mobile_number }}">{{ $member->mobile_number }}</a></p></li>
                  <li><p><i class="fa fa-heart m-r-xs"></i><a href="#">{{ $member->marital_status }}</a></p></li>
                  <li><p><i class="fa fa-calendar m-r-xs"></i><a href="#">{{ $member->birthday }}</a></p></li>
              </ul>
              <hr>
              <a href="{{url('/members/' . $member->id . '/edit')}}" class="btn btn-secondary btn-block"><i class="fa fa-pencil m-r-xs"></i>Edit</a>
              <button class="btn btn-primary btn-block"><i class="fa fa-plus m-r-xs"></i>Follow up</button>
          </div>
          <div class="col-md-6 m-t-lg">
              <div class="panel panel-white">
                  <div class="panel-body">
                      <div class="post">
                          <textarea class="form-control" placeholder="Post" rows="4=6"></textarea>
                          <div class="post-options">
                              <a href="#"><i class="icon-camera"></i></a>
                              <a href="#"><i class="icon-camcorder"></i></a>
                              <a href="#"><i class="icon-music-tone-alt"></i></a>
                              <a href="#"><i class="icon-link"></i></a>
                              <a href="#"><i class="icon-microphone"></i></a>
                              <button class="btn btn-default pull-right">Post</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="profile-timeline">
                  <ul class="list-unstyled">
                      <li class="timeline-item">
                          <div class="panel panel-white">
                              <div class="panel-body">
                                  <div class="timeline-item-header">
                                      <img src="assets/images/avatar3.png" alt="">
                                      <p>Christopher palmer <span>Posted a Status</span></p>
                                      <small>5 hours ago</small>
                                  </div>
                                  <div class="timeline-item-post">
                                      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                      <div class="timeline-options">
                                          <a href="#"><i class="icon-like"></i> Like (7)</a>
                                          <a href="#"><i class="icon-bubble"></i> Comment (2)</a>
                                          <a href="#"><i class="icon-share"></i> Share (3)</a>
                                      </div>
                                      <div class="timeline-comment">
                                          <div class="timeline-comment-header">
                                              <img src="assets/images/avatar5.png" alt="">
                                              <p>Nick Doe <small>1 hour ago</small></p>
                                          </div>
                                          <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                      </div>
                                      <div class="timeline-comment">
                                          <div class="timeline-comment-header">
                                              <img src="assets/images/avatar2.png" alt="">
                                              <p>Sandra Smith <small>3 hours ago</small></p>
                                          </div>
                                          <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                      </div>
                                      <textarea class="form-control" placeholder="Replay"></textarea>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="timeline-item">
                          <div class="panel panel-white">
                              <div class="panel-body">
                                  <div class="timeline-item-header">
                                      <img src="assets/images/avatar2.png" alt="">
                                      <p>Sandra Smith <span>Uploaded Photo</span></p>
                                      <small>2 hours ago</small>
                                  </div>
                                  <div class="timeline-item-post">
                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                      <img src="assets/images/post-image.jpg" alt="">
                                      <div class="timeline-options">
                                          <a href="#"><i class="icon-like"></i> Like (14)</a>
                                          <a href="#"><i class="icon-bubble"></i> Comment (1)</a>
                                          <a href="#"><i class="icon-share"></i> Share (5)</a>
                                      </div>
                                      <div class="timeline-comment">
                                          <div class="timeline-comment-header">
                                              <img src="assets/images/avatar5.png" alt="">
                                              <p>Nick Doe <small>1 hours ago</small></p>
                                          </div>
                                          <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                      </div>
                                      <textarea class="form-control" placeholder="Replay"></textarea>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="timeline-item">
                          <div class="panel panel-white">
                              <div class="panel-body">
                                  <div class="timeline-item-header">
                                      <img src="assets/images/avatar5.png" alt="">
                                      <p>Nick Doe <span>Was in New York</span></p>
                                      <small>6 hours ago</small>
                                  </div>
                                  <div class="timeline-item-post">
                                      <div class="timeline-options">
                                          <a href="#"><i class="icon-like"></i> Like (3)</a>
                                          <a href="#"><i class="icon-bubble"></i> Comment (0)</a>
                                          <a href="#"><i class="icon-share"></i> Share (2)</a>
                                      </div>
                                      <textarea class="form-control" placeholder="Write a comment..."></textarea>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-md-3 m-t-lg">
              <div class="panel panel-white">
                  <div class="panel-heading">
                      <div class="panel-title">Church Information</div>
                  </div>
                  <div class="panel-body">
                      <div class="team">
                          <div class="team-member">
                             <div class="online on"></div>
                              <img src="assets/images/avatar1.png" alt="">
                          </div>
                          <div class="team-member">
                             <div class="online off"></div>
                              <img src="assets/images/avatar2.png" alt="">
                          </div>
                          <div class="team-member">
                             <div class="online on"></div>
                              <img src="assets/images/avatar3.png" alt="">
                          </div>
                          <div class="team-member">
                             <div class="online on"></div>
                              <img src="assets/images/avatar5.png" alt="">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-white">
                  <div class="panel-heading">
                      <div class="panel-title">Greatest Contribution</div>
                  </div>
                  <div class="panel-body">
                      <p>{{ $member->greatest_contribution }}</p>
                  </div>
              </div>
              <div class="panel panel-white">
                  <div class="panel-heading">
                      <div class="panel-title">Skills</div>
                  </div>
                  <div class="panel-body">
                      <p>HTML5</p>
                      <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>
                      </div>
                      <p>PHP</p>
                      <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          </div>
                      </div>
                      <p>Javascript</p>
                      <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- Main Wrapper -->
  <div class="page-footer">
      <p class="no-s">2015 © Made by Enthronement Tech.</p>
  </div>

</div>
@endsection