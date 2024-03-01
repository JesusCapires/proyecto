
@extends('layouts.layout')

@section('title', 'Clientes')


@section('content')
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Clientes</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Catálogos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
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
                            Gestión de clientes
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-orange btn-wave waves-light" onclick="openModal(3)"><i class="ri-add-line fw-semibold align-middle me-1" ></i>Clientes</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-export" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>R.F.C</th>
                                        <th>C. Postal</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="register-customers">
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td id="nombre{{ $cliente->id }}">{{ $cliente->name }}</td>
                                            <td id="rfc{{ $cliente->id }}">{{ $cliente->rfc }}</td>
                                            <td id="codigoPostal{{ $cliente->id }}">{{ $cliente->cp }}</td>
                                            <td id="correo{{ $cliente->id }}">{{ $cliente->email }}</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"  onclick="openModal(3,{{ $cliente->id }})"><i
                                                            class="ri-edit-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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

<script>


    const validaCliente = (id) => {
        $('#formularioCliente').validate({
            rules:{
                nombre:{
                    required: true
                },
                rfc:{
                    required: true,
                    minlength: 12
                },
                codigoPostal:{
                    required: true,
                    minlength: 5
                },
                correo:{
                    required: true,
                    minlength: 5
                }
            },
            messages:{
                nombre:{
                    required: 'Ingresa el nombre del producto'
                },
                rfc:{
                    required: 'Ingresa el RFC',
                    minlength: 'Al menos 12 caracteres'
                },
                codigoPostal:{
                    required: 'Ingresa el CP',
                    minlength: 'Al menos 5 caracteres'
                },
                correo:{
                    required: 'Ingresa el correo'
                }
            },
            ...estilosValidate,
            submitHandler: function(form){
                let id_cliente = $('#id').val();
                $.ajax({
                    url: "{{ route('crearEditarCliente')}}",
                    type: 'POST',
                    data:  $(form).serialize(),
                    dataType: "json",
                    success: function(response) {
                        let {error,id_last} = response;
                        if(error){
                            console.log("Error true");
                        }
                        else{
                            if (id_cliente) {
                                ['nombre', 'rfc', 'codigoPostal', 'correo'].forEach(function(field){
                                    $(`#${field}${id_cliente}`).text($(`#${field}`).val());
                                })
                            } else {
                                $('#file-export').DataTable().destroy();
                                $('#register-customers').append(`
                                    <tr>
                                        <td id="nombre${id_last}">${$('#nombre').val()}</td>
                                        <td id="rfc${id_last}">${$('#rfc').val()}</td>
                                        <td id="codigoPostal${id_last}">${$('#codigoPostal').val()}</td>
                                        <td id="correo${id_last}">${$('#correo').val()}</td>
                                        <td id="accion${id_last}">
                                            <div class="hstack gap-2 fs-15">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill" onclick="openModal(3,${id_last})"><i
                                                        class="ri-edit-line"></i></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                            `);
                            $('#file-export').DataTable();
                            }
                        }
                    }
                });
            }
        });
    }


    </script>
