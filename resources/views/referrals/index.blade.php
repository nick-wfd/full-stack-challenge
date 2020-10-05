@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Referrals</h1></div>

                <div class="panel-body">
                    <div class="referrals-header">@include('partials.filterReferrals') @include('partials.createReferralButton')</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @include('errors')
                    <table class="display responsive nowrap" id="referrals-table" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Country</th>
                                <th>Reference No</th>
                                <th>Organisation</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Street Address</th>
                                <th>Gps Location</th>
                                <th>Facility Name</th>
                                <th>Facility Type</th>
                                <th>Provider Name</th>
                                <th>Position</th>
                                <th>Phone</th>
                                <th>eMail</th>
                                <th>Website</th>
                                <th>Pills Available</th>
                                <th>Code To Use</th>
                                <th>Type of Service</th>
                                <th>Note</th>
                                <th>Womens Evaluation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($referrals as $referral)
                            <tr>
                                <td>
                                    <a class="btn " data-toggle="tooltip" title="Comments"
                                     data-placement="top" href="/comments/{{ $referral->id }}">
                                        Comments ({{ $referral->comments->count() }})
                                    </a>
                                    <button class="btn btn-primary referral-comment-create" data-toggle="tooltip" title="Add Comment"
                                     data-placement="right" data-id="{{ $referral->id }}">
                                        +
                                    </button>
                                </td>
                                <td>{{ $referral->country }} </td>
                                <td>{{ $referral->reference_no }} </td>
                                <td>{{ $referral->organisation }} </td>
                                <td>{{ $referral->province }} </td>
                                <td>{{ $referral->district }} </td>
                                <td>{{ $referral->city }} </td>
                                <td>{{ $referral->street_address }} </td>
                                <td>{{ $referral->gps_location }} </td>
                                <td>{{ $referral->facility_name }} </td>
                                <td>{{ $referral->facility_type }} </td>
                                <td>{{ $referral->provider_name }} </td>
                                <td>{{ $referral->position }} </td>
                                <td>{{ $referral->phone }} </td>
                                <td>{{ $referral->email }} </td>
                                <td>{{ $referral->website }} </td>
                                <td>{{ $referral->pills_available }} </td>
                                <td>{{ $referral->code_to_use }} </td>
                                <td>{{ $referral->type_of_service }} </td>
                                <td>{{ $referral->note }} </td>
                                <td>{{ $referral->womens_evaluation }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('partials.addCommentModal')
</div>
@endsection

@section('app_style')
    <style type="text/css">
        .referrals-header { margin-bottom: 25px; }
    </style>

    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css' rel='stylesheet' type='text/css'>
@endsection

@section('app_script')
    <!-- Datatable JS -->
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

    <!-- Custom script -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();

            $('.referral-comment-create').click(function() {
                var referralId = $(this).data("id");
                $('#referral_id').val(referralId);

                $("#addCommentModal").modal("show");
            });

            $('#referrals-table').DataTable({
                "responsive": true,
                "order": [[ 2, "asc" ]],
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
            });
        });
    </script>
@endsection
