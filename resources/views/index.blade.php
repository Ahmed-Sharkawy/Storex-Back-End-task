@extends('layout.layout')

@section('main')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Movies</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Movies</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--begin::Page title-->

                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-4">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_61484e54433fa">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-3">
                                <form action="{{ route('movies.index') }}" method="get">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-form-label fw-bold fs-6">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="text" name="name"
                                                class="form-control form-control-lg form-control-solid" placeholder="Name">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Label-->
                                        <label class="col-form-label fw-bold fs-6">Rate</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <input type="number" name="rate"
                                                class="form-control form-control-lg form-control-solid" placeholder="Rate">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Category:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select name="category"
                                                class="form-select form-select-solid select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_61484e54433fa" data-allow-clear="true"
                                                data-select2-id="select2-data-7-i4ic" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-9-7m9t"></option>
                                                @foreach ($categorys as $category)
                                                    <option value="{{ $category->title }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Post card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20 pb-lg-0">

                        <!--begin::Section-->
                        <div class="mb-17">

                            <!--begin::Content-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Title-->
                                <h3 class="text-black">All Movies</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Content-->

                            <a href="{{ route('movies.create') }}" style="border-radius: 5px" class="btn my-4 btn-primary">
                                Create Movie
                            </a>

                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->

                            <!--begin::Row-->
                            <div class="row g-10">

                                @foreach ($movies as $movie)
                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Feature post-->
                                        <div class="card-xl-stretch me-md-6">
                                            <!--begin::Image-->
                                            <img style="height: 175px;width: 236px; margin-bottom: 10px"
                                                src="{{ asset("image/$movie->image") }}" class="" alt="">
                                            <!--end::Image-->

                                            <!--begin::Body-->
                                            <div class="m-0">
                                                <!--begin::Title-->
                                                <h2>{{ $movie->title }}</h2>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="fw-bold fs-5 text-gray-600 text-dark my-4">
                                                    {{ $movie->description }}
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bolder">
                                                    <!--begin::Date-->
                                                    <span class="text-muted">
                                                        category : {{ $movie->category->title }}
                                                    </span>
                                                    <!--end::Date-->
                                                </div>
                                                <div class="rating">
                                                    @for ($i = 1; $i <= $movie->rate; $i++)
                                                        <div class="rating-label me-2 checked">
                                                            <i class="bi bi-star fs-2"></i>
                                                        </div>
                                                    @endfor
                                                    @for ($j = 1; $j <= 5 - $movie->rate; $j++)
                                                        <div class="rating-label me-2">
                                                            <i class="bi bi-star fs-2"></i>
                                                        </div>
                                                    @endfor
                                                </div>
                                                <!--end::Content-->
                                                <div class="d-flex justify-content-between mt-4 fs-6 fw-bolder">
                                                    <a href="{{ route('movies.edit', $movie->id) }}"
                                                        style="border-radius: 5px" class="btn btn-success">
                                                        Update
                                                    </a>
                                                    <a href="{{ route('movies.destroy', $movie->id) }}"
                                                        style="border-radius: 5px" class="btn btn-danger">
                                                        Delete
                                                    </a>
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Feature post-->
                                    </div>
                                    <!--end::Col-->
                                @endforeach
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Post card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
