@extends('layouts.main')

@section('content')

<?php
$loans = session('loans');
$user = session('user');
?>

<section class="sign-up section">
    <div class="container">

        <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">


            <div class="col-12 col-lg-7 col-xxl-6">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>

                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                Loan Tracking ID:</td>
                            <td>{{ $loans->id }}</td>
                        </tr>
                        <tr>
                            <td>Your Names:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>MPESA Number:</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td>ID Number:</td>
                            <td>{{ $user->nationaId }}</td>
                        </tr>
                        <tr>
                            <td>Loan Type</td>
                            <td>{{ $user->loanType }}</td>
                        </tr>
                        <tr>
                            <td>Qualified Loan</td>
                            <td>{{ $loans->amount }}</td>
                        </tr>
                        <tr>
                            <td>Processing fee</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Unpaid</td>
                        </tr>
                    </tbody>


                </table>
                <br>

                <br>
                <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Get Loan</button>
            </div>
            <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                    <img src="assets/images/sign_up.png" alt="images">
                </div>
            </div>



        </div>
    </div>
</section>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Final step</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="container">
                            <img src="mpesaaa.png" width="200" height="100">
                        </div>
                        <div class="modal-body">
                        <h5>Follow the procedure below to get your loan.</h5><br>
                        <h6>✓ Go to lipa na mpesa</h6><br>
                        <h6>✓ Till number 5681219 ( )</h6><br>
                        <h6>✓ Amount: KSH. 500</h6><br>
                        <h6>✓ Enter M-pesa pin to complete the transaction</h6><br>
                        <h6>✓ Upon payment your processing status changes from "UNPAID" to processing ~ "PAID"</h6><br>
                        <h6>✓ Thereafter you will be contacted by our customer care and thus able to secure our
                            loans to your registered MPESA number within 24hrs.
                        </h6><br>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I have paid</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

@endsection
