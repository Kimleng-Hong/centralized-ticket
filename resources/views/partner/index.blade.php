@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("extra.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content mb-5">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Home</h4>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box table-container mb-4">
                            <div class="title d-flex justify-content-between align-items-center pt-2">    
                                <h4 class="m-0">Company Income</h4>
                                <a class="btn btn-success" href="{{ url('/create-user') }}"> Register Employee </a>
                            </div>
                            <div class="table-responsive pt-3 mb-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Ticket</th>
                                            <th scope="col">Ref Number</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Purchase Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>Ticket Customer6</td>
                                            <td>12300212</td>
                                            <td>Customer 3</td>
                                            <td><i class="fa-solid fa-dollar-sign text-success"></i> 2</td>
                                            <td>03/06/2022</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>Ticket Customer6</td>
                                            <td>12300212</td>
                                            <td>Customer 2</td>
                                            <td><i class="fa-solid fa-dollar-sign text-success"></i> 2</td>
                                            <td>03/06/2022</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>Ticket Customer6</td>
                                            <td>12300212</td>
                                            <td>Customer 2</td>
                                            <td><i class="fa-solid fa-dollar-sign text-success"></i> 2</td>
                                            <td>03/06/2022</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>Ticket Customer6</td>
                                            <td>12300212</td>
                                            <td>Customer 2</td>
                                            <td><i class="fa-solid fa-dollar-sign text-success"></i> 2</td>
                                            <td>03/06/2022</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center fw-bold">Total Amount: </td>
                                            <td colspan="2" class="text-start fw-bold"><i class="fa-solid fa-dollar-sign text-success"></i> 10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

