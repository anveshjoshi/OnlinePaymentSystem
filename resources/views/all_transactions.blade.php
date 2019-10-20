@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Transaction History</h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Payer Name</th>
                        <th>Payer Email</th>
                        <th>Payer Phone</th>
                        <th>Payment Detail</th>
                        <th>Due Amount</th>
                        <th>Order ID</th>
                        <th>TIN Number</th>
                        <th>Specified Merchant</th>
                        <th>Due Date</th>
                    </tr>
                    @foreach($invoice as $row)
                        <tr>
                            <td>{{ $row->payer_name }}</td>
                            <td>{{ $row->payer_email }}</td>
                            <td>{{ $row->payer_phone }}</td>
                            <td>{{ $row->payment_detail }}</td>
                            <td>{{ $row->due_amount }}</td>
                            <td>{{ $row->order_id }}</td>
                            <td>{{ $row->tin }}</td>
                            <td>@foreach($row->specified_merchant as $merchant)
                                    {{ $merchant }} |
                                @endforeach</td>
                            <td>{{ $row->due_date }}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
