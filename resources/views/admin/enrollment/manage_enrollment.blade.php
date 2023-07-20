@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>User Name</th>
                            <th>Payment Method</th>
                            <th>Number</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $enrollment->service->service_title ?? null }}</td>
                                <td>{{ $enrollment->user->name ?? null }}</td>
                                <td>{{ $enrollment->payment_type ?? null }}</td>
                                <td>{{ $enrollment->number ?? null }}</td>
                                <td>{{ $enrollment->transaction_id ?? null }}</td>
                                <td>
                                    @if ($enrollment->status == 1)
                                        <button class="btn btn-sm btn-success">Approved</button>
                                    @elseif($enrollment->status == 0)
                                        <button class="btn btn-sm btn-warning">Pending</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('update.enrollment',['id'=>$enrollment->id]) }}" class="btn btn-primary btn-sm editProduct">Approve</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
