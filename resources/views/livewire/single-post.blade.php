<div id="post-top" class="col-lg-6 col-md-8 no-pd">
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
                            <span>25</span>
                        </li>
                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                </div>
            </div>

            <div class="comment-section">
               
                <div class="comment-sec">
                    <ul>
                       
                        <li>
                            <div class="comment-list">
                                <div class="bg-img">
                                    
                                </div>
                                <div class="comment">
                                    <h3>John Doe</h3>
                                    <span><img src="{{ asset('user/images/clock.png')}}" alt=""> 3 min ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit
                                        metus,
                                        ut ullamcorper quam finibus at.</p>
                                </div>
                            </div>

                            <div class="comment-list">
                                
                                <div class="comment">
                                    <h3>John Doe</h3>
                                    <span><img src="{{ asset('user/images/clock.png')}}" alt=""> 3 min ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit
                                        metus,
                                        ut ullamcorper quam finibus at.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="post-comment">
                    <div class="cm_img">
                        <img src="images/resources/bg-img4.png" alt="">
                    </div>
                    <div class="comment_box">
                        <form>
                            <input type="text" placeholder="Post a comment">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <script>
        document.addEventListener('livewire:load', function () {
    
        var section = document.getElementById('post-top');
        if (section) {
            section.scrollIntoView({behavior: 'smooth'});
        }
    
});
    </script> --}}
</div>
