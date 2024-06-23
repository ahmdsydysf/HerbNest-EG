@extends('webLayout.app')

@section('page_content')

<!--Page Header Start-->
<section class="page-header"
    style="background-image: url({{ asset('allAssets/web/assets/images/backgrounds/upper-img.webp') }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('main') }}">Home</a></li>
            <li><span>Our Products</span></li>
        </ul>
        <h2>Products</h2>
    </div>
    <div class="overlay"></div>
</section>

<!--Projects One Start-->
<section class="our_projects_one our_projects_page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                    <li data-filter=".inds"><span class="filter-text">type-1</span></li>
                    <li data-filter=".fac"><span class="filter-text">type-2</span></li>
                    <li data-filter=".elec"><span class="filter-text">type-3</span></li>
                    <li data-filter=".cons"><span class="filter-text last-pd-none">type-4</span></li>
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/afif-ramdhasuma.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec cons">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/AmchurPowder.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec fac">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/CorianderPowder.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/CuminPowder.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item fac cons">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/engin-akyurt.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/Fenugreek Powder.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.html"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/katrina-wright.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.htmle-img-7.jpg"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/maja-il.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.htmle-img-8.jpg"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                <!--Projects One Single-->
                <div class="our_projects_one_single">
                    <div class="our_projects_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/project/min-ling.webp') }}" alt="">
                        <div class="our_projects_one_icon">
                            <a href="projects-details.htmle-img-9.jpg"><span class="flaticon-right-arrow"></span></a>
                        </div>
                        <div class="our_projects_one_text">
                            <h4>Bridge <br> Construction</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection