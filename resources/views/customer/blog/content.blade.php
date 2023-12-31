<div id="primary" class="content-area">
    <div id="title" class="page-title">
        <div class="section-container">
            <div class="content-title-heading">
                <h1 class="text-title-heading">
                    Home Decor
                </h1>
            </div>
            <div class="breadcrumbs">
                <a href="{{route('homepage')}}">Home</a><span class="delimiter"></span>Home Decor
            </div>
        </div>
    </div>

    <div id="content" class="site-content" role="main">
        <div class="section-padding">
            <div class="section-container p-l-r">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-12 sidebar left-sidebar md-b-50">
                        <!-- Block Post Search -->
                        <div class="block block-post-search">
                            <div class="block-title"><h2>Search</h2></div>
                            <div class="block-content">
                                <form method="get" class="search-from" action="#">
                                    <input type="text" value="" name="s" class="s" placeholder="Search...">
                                    <button class="btn" type="submit">
                                        <i class="icon-search"></i>
                                    </button>
                                  </form>
                            </div>
                        </div>

                        <!-- Block Post Categories -->
                        <div class="block block-post-cats">
                            <div class="block-title"><h2>Categories</h2></div>
                            <div class="block-content">
                                <div class="post-cats-list">
                                    <ul>
                                        <li class="current">
                                            <a href="{{route('blog')}}">Dining & Kitchen <span class="count">9</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Furniture <span class="count">4</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Home Décor <span class="count">3</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Life Style <span class="count">6</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Office <span class="count">2</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block Posts -->
                        <div class="block block-posts">
                            <div class="block-title"><h2>Recent Posts</h2></div>
                            <div class="block-content">
                                <ul class="posts-list">
                                    <li class="post-item">
                                        <a href="{{route('blog-details')}}" class="post-image">
                                            <img src="/media/blog/1.jpg">
                                        </a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">
                                                    Easy Fixes for Home Decor
                                                </a>
                                            </h2>
                                            <div class="post-time">
                                                <span class="post-date">May 30, 2022</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post-item">
                                        <a href="{{route('blog-details')}}" class="post-image">
                                            <img src="/media/blog/2.jpg">
                                        </a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">
                                                    How to Make your Home a Showplace
                                                </a>
                                            </h2>
                                            <div class="post-time">
                                                <span class="post-date">Aug 24, 2022</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="post-item">
                                        <a href="{{route('blog-details')}}" class="post-image">
                                            <img src="/media/blog/3.jpg">
                                        </a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">
                                                    Stunning Furniture with Aesthetic Appeal
                                                </a>
                                            </h2>
                                            <div class="post-time">
                                                <span class="post-date">Dec 06, 2022</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Block Post Archives -->
                        <div class="block block-post-archives">
                            <div class="block-title"><h2>Archives</h2></div>
                            <div class="block-content">
                                <div class="post-archives-list">
                                    <ul>
                                        <li>
                                            <a href="{{route('blog')}}">May 2021</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">April 2021</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">August 2020</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Block Post Tags -->
                        <div class="block block-post-tags">
                            <div class="block-title"><h2>Tags</h2></div>
                            <div class="block-content">
                                <div class="post-tags-list">
                                    <ul>
                                        <li>
                                            <a href="{{route('blog')}}">Baber</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Baby Needs</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Beauty</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Cosmetic</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Electric</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Fashion</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Mimimal</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Simple</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}">Sport</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                        <div class="posts-list grid">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Furniture</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">Easy Fixes for Home Decor</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">July 24, 2021</span>
                                                <span class="post-comment">1 Comment</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Home Decor</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">How to Make your Home a Showplace</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">August 16, 2021</span>
                                                <span class="post-comment">4 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Life Style</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">Stunning Furniture with Aesthetic Appeal</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">October 04, 2021</span>
                                                <span class="post-comment">3 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Dining & Kitchen</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">How To Choose The Right Sectional Sofa</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">October 20, 2021</span>
                                                <span class="post-comment">1 Comment</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Office</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">How to Make your Home a Showplace</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">December 11, 2021</span>
                                                <span class="post-comment">5 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Life Style</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">Easy Fixes for Home Decor</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">February 07, 2022</span>
                                                <span class="post-comment">2 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Dining & Kitchen</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">Easy Fixes for Home Decor</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">July 24, 2021</span>
                                                <span class="post-comment">3 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Furniture</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">Easy Fixes for Home Decor</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">July 24, 2021</span>
                                                <span class="post-comment">1 Comment</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-entry clearfix post-wapper">
                                        <div class="post-image">
                                            <a href="{{route('blog-details')}}">
                                                <img src="/media/blog/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-categories">
                                                <a href="{{route('blog')}}">Life Style</a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{route('blog-details')}}">How To Choose The Right Sectional Sofa</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-time">July 24, 2021</span>
                                                <span class="post-comment">5 Comments</span>															
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <nav class="pagination">
                            <ul class="page-numbers">
                                <li><a class="prev page-numbers" href="#">Previous</a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->