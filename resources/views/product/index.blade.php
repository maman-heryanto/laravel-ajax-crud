@extends('templates.header')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD JQUERY</h1>
                <div class="btn btn-primary" onclick="create()">+
                    Tambah Product
                </div>
                <div id="read" class="mt-3">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="page" class="p-2">

                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            read()
        });

        // Read Database
        function read() {
            $.get("{{ url('product/read') }}", {}, function(data, status) {
                $("#read").html(data);
            });
        }

        // Untuk modal halaman create
        function create() {
            $.get("{{ url('product/create') }}", {}, function(data, status) {
                $("#exampleModalLabel").html('Create Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');

            });
        }

        // untuk proses create data
        function store() {
            var name = $("#name").val();
            $.ajax({
                type: "get",
                url: "{{ url('product/store') }}",
                data: "name=" + name,
                success: function(data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        // Untuk modal halaman Edit
        function show(id) {
            $.get("{{ url('product/edit') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');

            });
        }

        // untuk proses update data
        function update(id) {
            var name = $("#name").val();
            $.ajax({
                type: "get",
                url: "{{ url('product/update') }}/" + id,
                data: "name=" + name,
                success: function(data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        // untuk proses delete data atau destroy data
        function destroy(id) {
            var confirmed = confirm("Apakah Anda yakin ingin menghapus data?");

            if (confirmed) {
                var name = $("#name").val();

                $.ajax({
                    type: "get",
                    url: "{{ url('product/destroy') }}/" + id,
                    data: "name=" + name,
                    success: function(data) {
                        $(".btn-close").click();
                        read();
                    }
                });
            }
        }
    </script>
@endsection
