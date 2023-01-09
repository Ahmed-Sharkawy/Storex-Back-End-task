@extends('layout.layout')

@section('main')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Creat User</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form action="{{ route('movies.update',$movie->id) }}" method="POST" enctype="multipart/form-data"
                id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">
                @csrf
                @method('put')
                <!--begin::Card body-->
                <div class="card-body border-top p-9">

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="title"
                                class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror"
                                placeholder="Title" value="{{ $movie->title }}">
                            @error('title')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">

                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <select name="category_id" class="form-select" data-control="select2"
                                data-placeholder="Select an option">
                                <option></option>
                                @foreach ($categorys as $category)
                                    <option {{ $movie->category_id == $category->id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Rate</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="number" name="rate"
                                class="form-control form-control-lg form-control-solid @error('rate') is-invalid @enderror"
                                placeholder="Rate" value="{{ $movie->rate }}">
                            @error('rate')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Image</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="file" name="image"
                                class="form-control form-control-lg form-control-solid @error('image') is-invalid @enderror"
                                placeholder="image">
                            @error('image')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <div class="row mb-6">
                        <!--begin::Label-->
                        <div class="rounded border p-10">
                            <label for="" class="form-label">Description textarea</label>
                            <textarea name="description" class="form-control" data-kt-autosize="true">{{ $movie->description }}</textarea>
                        </div>
                        @error('description')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route('users.index') }}" class="btn btn-light btn-active-light-primary me-2">Back</a>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Update
                        Movie</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection
