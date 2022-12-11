@extends('layouts.admin')

@section('title', 'Code by ANS')

@section('content')
<h1 class="h2 mb-4">Welcome back, {{ $user->name }} <i class="ai-emoji-smile fs-[25px]"></i></h1>
<!-- Basic info-->
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i
                class="ai-user text-primary lead pe-1 me-2"></i>
            <h2 class="h4 mb-0">Basic info</h2><a class="btn btn-sm btn-secondary ms-auto"
                href="account-settings.html"><i class="ai-edit ms-n1 me-2"></i>Edit info</a>
        </div>
        <div class="d-md-flex align-items-center">
            <div class="d-sm-flex align-items-center">
                <div class="rounded-circle bg-size-cover bg-position-center flex-shrink-0"
                    style="width: 80px; height: 80px; background-image: url(assets/img/avatar/ans01.jpg);">
                </div>
                <div class="pt-3 pt-sm-0 ps-sm-3">
                    <h3 class="h5 mb-2">{{ $user->name }}<i
                            class="ai-circle-check-filled fs-base text-success ms-2"></i>
                    </h3>
                    <div class="text-muted fw-medium d-flex flex-wrap flex-sm-nowrap align-iteems-center">
                        <div class="d-flex align-items-center me-3"><i class="ai-mail me-1"></i>{{ $user->email }}</div>
                        <div class="d-flex align-items-center text-nowrap"><i class="ai-map-pin me-1"></i>Malaysia</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4 mb-2 mb-sm-3">
            <div class="col-md-6 mb-4 mb-md-0">
                <table class="table mb-0">
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Phone</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">+1 234 567 890</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Language</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">English</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Gender</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">Female</td>
                    </tr>
                    <tr>
                        <td class="border-0 text-muted py-1 px-0">Communication</td>
                        <td class="border-0 text-dark fw-medium py-1 ps-3">Mobile, email</td>
                    </tr>
                </table>
            </div>
        </div>
</section>
@endsection