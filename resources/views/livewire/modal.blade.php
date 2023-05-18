<div class="col-lg-6 col-md-8 no-pd">
    <div class="main-ws-sec">
        {{-- start adding tabs --}}
        <div class="user-tab-sec">
            <div class="tab-feed">
                <ul>
                    <li data-tab="all" class="active">
                        <a href="#" title="">
                            {{-- <img src="images/ic1.png" alt=""> --}}
                            <span>All</span>
                        </a>
                    </li>
                    <li data-tab="come" class="">
                        <a href="#" title="">
                            {{-- <img src="images/ic1.png" alt=""> --}}
                            <span>Come</span>
                        </a>
                    </li>
                    <li data-tab="connect" class="">
                        <a href="#" title="">
                            {{-- <img src="images/ic1.png" alt=""> --}}
                            <span>Connect</span>
                        </a>
                    </li>
                    <li data-tab="care">
                        <a href="#" title="">
                            {{-- <img src="images/ic2.png" alt=""> --}}
                            <span>Care</span>
                        </a>
                    </li>
                    <li data-tab="calling">
                        <a href="#" title="">
                            {{-- <img src="images/ic3.png" alt=""> --}}
                            <span>Calling</span>
                        </a>
                    </li>
                    <li data-tab="celebrate">
                        <a href="#" title="">
                            {{-- <img src="images/ic3.png" alt=""> --}}
                            <span>Celebrate</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- stop adding tabs --}}
        <div class="post-topbar">
            <div class="user-picy">
                <img src="{{ asset('user/images/resources/user-pic.png') }}" alt>
            </div>
            <div class="post-st">
                <ul>
                    <li>

                    </li>
                    <li><a class="post-jb active" href="#" title>New Post</a></li>
                </ul>
            </div>
        </div>
        <div class="posts-section">
            @foreach ($records as $record)
            <div id="all" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @if ($record->category == 'come')
            <div id="come" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @endif
            @if ($record->category == 'connect')
            <div id="connect" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @endif 
            @if ($record->category == 'care')
            <div id="care" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @endif 
            @if ($record->category == 'calling')
            <div id="calling" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @endif
            @if ($record->category == 'celebrate')
            <div id="celebrate" wire:click='displayDetails({{$record->id}})' class="post-bar product-feed-tab current" >
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

                {{-- <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="{{ asset('user/images/icon8.png') }}" alt><span>{{$record->getUserRelation->name}}</span></li>
                        <li><img src="{{ asset('user/images/icon9.png') }}" alt><span>India</span></li>
                    </ul>
                    <ul class="bk-links">
                        <li><a href="#" title><i class="la la-bookmark"></i></a>
                        </li>
                        <li><a href="#" title><i class="la la-envelope"></i></a>
                        </li>
                    </ul>
                </div> --}}

                <div class="job_descp">
                    <h3>{{ $record->title }}</h3>
                    {{-- <ul class="job-dt">
                        <li><a href="#" title>Full Time</a></li>
                        <li><span>$30 / hr</span></li>
                    </ul> --}}
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>


    {{-- modal start --}}

    <div class="post-popup job_post" wire:ignore.self>
        <div class="post-project">
            <h3>Post a job</h3>

            <div class="post-project-fields">
                {{ $err }}
                <form wire:submit.prevent>
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <input type="text" name="title" placeholder="Title"> --}}
                            <input wire:model="title" type="text" name="title" placeholder="Title">

                        </div>
                        <div class="col-lg-12" style="margin-bottom: 15px">
                            <div class="inp-field">
                                <select wire:model="member" class="js-example-basic-single form-control">
                                    <option value="">Search Member ...</option>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}">{{ $member->other_names }}
                                            {{ $member->surname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-bottom: 15px">
                            <div class="inp-field">
                                <select wire:model="category" class="js-example-basic-single form-control">
                                    <option value="">Category</option>

                                    <option>connect</option>
                                    <option>connect</option>
                                    <option>care</option>
                                    <option>calling</option>
                                    <option>celebration</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <textarea wire:model="description" name="description" placeholder="Description"></textarea>

                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" wire:click='store'>Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>


    {{-- modal end --}}
    <script>
        Livewire.on('hideModal', () => {
        $(".post-popup.job_post").removeClass("active");
        $(".wrapper").removeClass("overlay");
        return false;
        });

        
    </script>
</div>
