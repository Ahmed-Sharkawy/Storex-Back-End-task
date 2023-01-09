@extends('layout.layout')

@section('main')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">

                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <a href="{{ route('users.create') }}" style="border-radius: 5px" class="btn btn-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add User
                                </a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->


                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_table_users">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">Name</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">Email</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">Birthdate</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">created_at</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">updated_at</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">Update</th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 224.953px;">Delete</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">
                                        @foreach ($users as $user)
                                            <tr class="odd">
                                                <td valign="top" class="dataTables_empty">{{ $user->name }}</td>
                                                <td valign="top" class="dataTables_empty">{{ $user->email }}</td>
                                                <td valign="top" class="dataTables_empty">{{ $user->birth_date }}</td>
                                                <td valign="top" class="dataTables_empty">{{ $user->created_at }}</td>
                                                <td valign="top" class="dataTables_empty">{{ $user->updated_at }}</td>
                                                <td valign="top" class="dataTables_empty">{{ $user->updated_at }}</td>
                                                <td valign="top" class="dataTables_empty">
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        style="border-radius: 5px" class="btn btn-success">
                                                        Update
                                                    </a>
                                                </td>
                                                <td valign="top" class="dataTables_empty">
                                                    <a href="{{ route('users.destroy', $user->id) }}"
                                                        style="border-radius: 5px" class="btn btn-danger">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
