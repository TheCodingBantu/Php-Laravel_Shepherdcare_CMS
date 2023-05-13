<div id="post-top" class="col-lg-6 col-md-8 no-pd">
    <a class="btn btn-primary mb-2" href="{{route('feed')}}">back</a>

    <div class="main-ws-sec">

        <div class="posty">
            <div class="post-bar no-margin">
                <div class="post_topbar">
                    <div class="usy-dt">
                        <img src="{{ asset('user/images/resources/us-pic.png') }}" alt>
                        <div class="usy-name">
                            <h3>{{ $record->getUserRelation->name }}</h3>
                            <span><img src="{{ asset('user/images/clock.png') }}"
                                    alt>{{ $record->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="ed-opts">
                        {{-- <a href="#" title class="ed-opts-open"><i
                                        class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                    <li><a href="#" title>Edit Post</a></li>
                                    <li><a href="#" title>Unsaved</a></li>
                                    <li><a href="#" title>Unbid</a></li>
                                    <li><a href="#" title>Close</a></li>
                                    <li><a href="#" title>Hide</a></li>
                                </ul> --}}
                    </div>
                </div>
                <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>Epic
                                Coder</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul>
                    <p>{{ $record->description }}</p>
                    <ul class="skill-tags">
                        <li><a href="#" title>Member</a></li>
                        <li><a href="#" title>{{ $record->category }}</a></li>
                        <li><a href="#" title>New Activity</a></li>
                    </ul>
                </div>
                <div class="job-status-bar">
                    <ul class="like-com">
                        <li>
                            <img src="{{ asset('user/images/liked-img.png') }}" alt>
                            <span>{{count($comments)}}</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> {{ count($comments) }} Comment(s)</a></li>
                    </ul>
                    {{-- <a href="#"><i class="fas fa-eye"></i>Views 50</a> --}}
                </div>
            </div>

            <div class="comment-section">
               
                <div class="comment-sec">
                    <ul>
                       
                        <li>
                            @if (sizeof($comments) != 0)
                            @foreach ($comments as $comment)
                            <div class="comment-list">
                                <div class="bg-img">
                                    
                                </div>
                                <div class="comment">
                                    <h3>{{$comment->getCommentRelation->name}}</h3>
                                    <span><img src="{{ asset('user/images/clock.png')}}" alt=""> {{ $comment->created_at->diffForHumans() }}</span>
                                    <p> {{ $comment->comment }}</p>
                                </div>
                            </div>

                            @endforeach
                            @else
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="post-comment">
                    <div class="cm_img">
                        <img src="images/resources/bg-img4.png" alt="">
                    </div>
                    <div class="comment_box">
                        {{-- {{$err}} --}}
                        <form wire:submit.prevent="postComment">
                            <input wire:model="comment" type="text" placeholder="Post a comment">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
window.scrollTo({ top: 0, behavior: 'smooth' });
</script>
</div>
