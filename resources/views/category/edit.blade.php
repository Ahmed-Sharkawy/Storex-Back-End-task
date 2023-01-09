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
            <form action="{{ route('categorys.update', $category->id) }}" method="POST" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">
                @csrf
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body border-top p-9">

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Category Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="title"
                                class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror"
                                placeholder="Category Name" value="{{ $category->title }}">
                            @error('title')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route('users.index') }}" class="btn btn-light btn-active-light-primary me-2">Back</a>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Create Category</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection
