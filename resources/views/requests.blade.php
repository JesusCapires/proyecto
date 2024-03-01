@extends('layouts.layout')

@section('title', 'Selecciones')


@section('content')

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Selecciones</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Catálogos</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Selecciones</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Gestión de Selecciones
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-orange btn-wave waves-light"><i class="ri-add-line fw-semibold align-middle me-1"></i> Selección</button>
                            <!-- <div class="dropdown ms-2">
                                <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">All Invoices</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Paid Invoices</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Pending Invoices</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Overdue Invoices</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-export" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Selección</th>
                                        <th>Cliente</th>
                                        <th>N. Parte</th>
                                        <th>Horas</th>
                                        <th>Rate</th>
                                        <th>Costo</th>
                                        <th>OK</th>
                                        <th>NOK</th>
                                        <th>Total</th>
                                        <th>Ing. Responsable</th>
                                        <th>Fecha</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ID-INSP-QA-001</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2 avatar-rounded bg-primary">
                                                    RB
                                                </div>
                                                <div>
                                                    <div class="lh-1">
                                                        <span>R. Bosch</span>
                                                    </div>
                                                    <div class="lh-1">
                                                        <span
                                                            class="fs-11 text-muted">robosch666@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>6002.KE0.292</td>
                                        <td>3216636235</td>
                                        <td>105051825</td>
                                        <td>2</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>200</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2 avatar-rounded bg-primary">
                                                    JC
                                                </div>
                                                <div>
                                                    <div class="lh-1">
                                                        <span>Jesus Capires</span>
                                                    </div>
                                                    <div class="lh-1">
                                                        <span
                                                            class="fs-11 text-muted">jesuscap14@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>15-02-2024</td>
                                        <td><span class="badge bg-outline-success">Terminada</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="javascript:void(0);"
                                                class="btn btn-icon btn-sm btn-primary-transparent rounded-pill" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Editar</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Ver procesos</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Ver Documentos</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Generar Reporte</a></li>
                                                    {{-- <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Documentos</a></li> --}}
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
<!-- End::app-content -->
@endsection
