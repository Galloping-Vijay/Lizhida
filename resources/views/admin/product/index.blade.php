@extends('admin.public.layout')

@section('content')
 产品页
@stop

@section('scripts')
    <script>
        $(function() {
            $("#posts-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>
@stop